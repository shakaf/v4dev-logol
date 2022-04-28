<?php

class OrderService extends MY_Service
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getDepot(){
		try{
			$token = $this->session->userdata('accessToken');
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL 				=> 'http://34.87.19.200:4002/api/v4/depot/list',
			  CURLOPT_RETURNTRANSFER 	=> true,
			  CURLOPT_ENCODING 			=> '',
			  CURLOPT_MAXREDIRS 		=> 10,
			  CURLOPT_TIMEOUT 			=> 0,
			  CURLOPT_FOLLOWLOCATION 	=> true,
			  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST 	=> 'GET',
			  CURLOPT_HTTPHEADER 		=> array(
				'Authorization: Bearer '.$token
			  ),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$arrdepot 	= json_decode($response, true);
			if(!empty($arrdepot)){
				if(!empty($arrdepot['status']) && $arrdepot['status'] == 1){
					$index 	 = 0;
					$arrtemp = [];
					if(array_key_exists(0, $arrdepot['data'])){
						foreach($arrdepot['data'] as $data){
							$arrtemp[$index]['DEPOT_ID'] 		= $data['DEPOT_ID'];
							$arrtemp[$index]['DEPOT_NAME'] 	= $data['DEPOT_NAME'];
							$arrtemp[$index]['DEPOT_ADDRESS'] 	= $data['DEPOT_ADDRESS'];
							$arrtemp[$index]['AREA_ID'] 		= $data['AREA_ID'];
							$arrtemp[$index]['IS_DELETE'] 		= $data['IS_DELETE'];
							$index++;
						}
					}else{
						$arrtemp[$index]['DEPOT_ID'] 		= $arrdepot['data']['DEPOT_ID'];
						$arrtemp[$index]['DEPOT_NAME'] 		= $arrdepot['data']['DEPOT_NAME'];
						$arrtemp[$index]['DEPOT_ADDRESS'] 	= $arrdepot['data']['DEPOT_ADDRESS'];
						$arrtemp[$index]['AREA_ID'] 		= $arrdepot['data']['AREA_ID'];
						$arrtemp[$index]['IS_DELETE'] 		= $arrdepot['data']['IS_DELETE'];
					}
					return $arrtemp;
				}else{
					return [];
				}
			}else{
				return [];
			}
		}catch(Exception $e){
			return [];
		}
	}
	
    public function setRegister(){
		try{
			$this->load->library('recaptcha');
			$this->load->library('form_validation');
			$csrfRefreshTokens = $this->security->get_csrf_hash();
			$Curladapter = $this->curladapter;
			$recaptcha	 = $this->input->post('g-recaptcha-response');
			$response 	 = $this->recaptcha->verifyResponse($recaptcha);
			
			$this->form_validation->set_rules('COMPANY_NAME', 'Company Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|xss_clean');
			if (empty($_FILES['NPWP_FILE']['name'])){
				$this->form_validation->set_rules('NPWP_FILE', 'Document NPWP', 'trim|required|xss_clean');
			}
			$this->form_validation->set_rules('PIC_NAME', 'Pic Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('PIC_PHONE', 'Pic Phone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('OFFICE_PHONE', 'Office Phone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('REQ_NUMBER_USER', 'Request Number of User', 'trim|required|xss_clean');
			$this->form_validation->set_rules('EMAIL', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('PWD', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('RE_PWD', 'Retype Password', 'trim|required|matches[PWD]|xss_clean');
			if($this->form_validation->run() == FALSE){
				$response = [
					'header' => [
						'__version' => [
							'number' => __VESION_APP,
							'process_time' => '',
							'generated' => date("Y-m-d H:i:s")
						],
						'error' => TRUE,
						'message' => validation_errors(),
						'csrf_v4kalibaru' => $csrfRefreshTokens
					],
					'data' => [
						'status' => [
							'code' => 403
						],
						'collection' => []
					]
				];
				return $response;
				exit();
			}
			
			
			if(!isset($response['success']) || $response['success'] <> true){
				$response = [
					'header' => [
						'__version' => [
							'number' => __VESION_APP,
							'process_time' => '',
							'generated' => date("Y-m-d H:i:s")
						],
						'error' => TRUE,
						'message' => 'Recaptcha authentication failed, access denied. Please reload your browser',
						'csrf_v4kalibaru' => $csrfRefreshTokens
					],
					'data' => [
						'status' => [
							'code' => 403
						],
						'collection' => []
					]
				];
				return $response;
			}else{
				$payloads = [];
				$payloads['PRODUCT_TYPE_ID'] = $this->input->post('PRODUCT_TYPE');
				if(!empty($this->input->post('SERVICE'))){
					$index = 0;
					foreach($this->input->post('SERVICE') as $data){
						$arrexplode = explode("~", $data);
						if($arrexplode[0] == "9"){
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_ID'] 			= $arrexplode[0];
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_DESCRIPTION'] = $this->input->post('SERVICE_OTHERS_NAME');
						}else{
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_ID'] 			= $arrexplode[0];
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_DESCRIPTION'] = $arrexplode[1];
						}
						$index++;
					}
				}
				$b64Doc = chunk_split(base64_encode(file_get_contents($_FILES['NPWP_FILE']['tmp_name'])));
				$payloads['MEMBER_TYPE_ID'] 	= "0FE98820953A11EC9DA742010A940002";
				$payloads['IS_NLE'] 			= 0;
				$payloads['COMPANY_NAME'] 		= $this->input->post('PRODUCT_TYPE');
				$payloads['COMPANY_NPWP'] 		= $this->input->post('NPWP');
				$payloads['COMPANY_NPWP_FILE'] 	= $b64Doc;
				$payloads['PIC_NAME'] 			= $this->input->post('PIC_NAME');
				$payloads['PIC_MOBILE_PHONE'] 	= $this->input->post('PIC_PHONE');
				$payloads['IS_MAIN_USER'] 		= 1;
				$payloads['OFFICE_PHONE'] 		= $this->input->post('OFFICE_PHONE');
				$payloads['QTY_USER_REQUEST'] 	= $this->input->post('REQ_NUMBER_USER');
				$payloads['USER_EMAIL'] 		= $this->input->post('EMAIL');
				$payloads['USER_PASSWORDS'] 	= $this->input->post('PWD');
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/register_new',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 0,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'POST',
				  CURLOPT_POSTFIELDS 		=> json_encode($payloads,true),
				  CURLOPT_HTTPHEADER 		=> array(
					'Content-Type: application/json'
				  )
				));
				$responseRegister 	= curl_exec($curl);
				curl_close($curl);
				$arrRegister 	= json_decode($responseRegister, true);
				if(!empty($arrRegister)){
					if(!empty($arrRegister['status']) && $arrRegister['status'] == 1){
						#$this->sendMail($this->input->post('EMAIL'));
						$response = [
							'header' => [
								'__version' => [
									'number' => __VESION_APP,
									'process_time' => '',
									'generated' => date("Y-m-d H:i:s")
								],
								'error' => FALSE,
								'message' => 'Registration succesfully',
								'csrf_v4kalibaru' => $csrfRefreshTokens
							],
							'data' => [
								'status' => [
									'code' => 200
								],
								'redirect' => [
									'action' => TRUE,
									'callBack' => site_url('register/result')
								],
								'collection' => []
							]
						];
						return $response;
					}else{
						$response = [
							'header' => [
								'__version' => [
									'number' => __VESION_APP,
									'process_time' => '',
									'generated' => date("Y-m-d H:i:s")
								],
								'error' 			=> TRUE,
								'message' 			=> !empty($arrRegister['data']) ? $arrRegister['data'] : "Registration failed",
								'csrf_v4kalibaru' 	=> $csrfRefreshTokens
							],
							'data' => [
								'status' => [
									'code' => 403
								],
								'collection' => []
							]
						];
						return $response;
					}
				}
			}
		}catch(Exception $e){
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => TRUE,
					'message' => "Unexpected request",
					'csrf_v4kalibaru' => $csrfRefreshTokens
				],
				'data' => [
					'status' => [
						'code' => 403
					],
					'collection' => []
				]
			];
			return $response;
			exit();
		}
    }
}