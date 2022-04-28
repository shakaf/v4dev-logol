<?php

class Forgot extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('isLogin'))
		{
			redirect(site_url('dashboard'));
			exit();
		}
		else
		{
            $data = [
                'action' => site_url('login-attempt')
			];
            $this->content = (!$this->content) ? $this->load->view('vForgot', $data, true) : $this->content;
			$data = $this->main->setContent('forgot', $this->content);
			$this->parser->parse('components/container/unAuthorization', $data);
		}
	}
	
	public function sendMail($emailUser="", $token=""){
		$config = Array(
			'protocol' 		=> 'smtp',
			'smtp_host' 	=> 'ssl://smtp.googlemail.com',
			'smtp_port' 	=> 465,
			'smtp_user' 	=> 'logol.v4@gmail.com',
			'smtp_pass' 	=> 'logol.v42022',
			'mailtype'  	=> 'html', 
			'charset'   	=> 'iso-8859-1',
			'wrapchars'     => 100,
            'crlf'          => "\r\n",
            'newline'       => "\r\n",
            'start_tls'     => FALSE,
            'wordwrap'      => TRUE
		);
        $this->load->library('email', $config);
        $this->email->clear(TRUE);
        $this->email->from('logol.v4@gmail.com','Logol Notification');
        $body = '<!DOCTYPE html><html><body style="background-color:#fff;padding:20px;font-family:font-size: 14px;line-height:1.43;font-family:\'Helvetica Neue\',\'Segoe UI\',Helvetica,Arial,sans-serif"><div style="max-width:800px;margin:0 auto;background-color:#fff;box-shadow:0 20px 50px rgba(0,0,0,.05)"><div style="padding:60px 70px;border-top:1px solid rgba(0,0,0,.05)"><p style="margin-top:0">Dear Customer,</p><div style="color:#636363;font-size:14px"></div><p style="margin-bottom:10px">A password reset for your account was requested. Please click the button below to change your password. Note that this link is valid for 2 hours. After the time limit has expired, you will have to resubmit the request for password reset.<br><br><a href="'.site_url('forgot-new-password/'.$token).'" style="color:#fff!important;border-color:#414598;border-radius:4px;text-shadow:0 1px 1px rgba(0,0,0,.2);background:#002985;padding:5px">Change Your Password</a><p>Sincerely,<br><b style="color:#002985">Logol Team</b></p></div></div></body></html>';
        $this->email->to($emailUser);
        #$this->email->cc(str_replace(';', ',', trim($collections['USER_EMAIL_CC'])));
		$this->email->bcc('erik.development91@gmail.com');
        $this->email->subject("Forgot Password");
        $this->email->message($body);
		;
		/*
		if(!$this->email->send()){
			 ob_start();
			 $errors[] = $this->email->print_debugger(array('headers'));
			 ob_end_clean();
			print_r($errors); die();
			return false;
		}else{
			echo "Sent"; die();
			return true;
		}
		*/
		return $this->email->send();
	}
	
	public function doForgotPassword(){
		try{
			$csrfRefreshTokens = $this->security->get_csrf_hash();
			$this->load->library('form_validation');
			$this->form_validation->set_rules('emailAddress', 'Email', 'trim|required|valid_email|xss_clean');
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
			}else{
				$payloads = [];
				$payloads['email'] = $this->input->post('emailAddress');
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/forgotPassword/request',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 30,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'GET',
				  CURLOPT_POSTFIELDS 		=> json_encode($payloads, true),
				  CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json'
				  ),
				));
				$response = curl_exec($curl);
				curl_close($curl);
				$arrForgot 	= json_decode($response, true);
				if(!empty($arrForgot)){
					if($arrForgot['status'] == 1){
						$token	  = str_replace("https://logisticoneline/","",$arrForgot['URL']);
						$objToken = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
						$this->sendMail($objToken->data->USER_EMAIL, $token);
						$response = [
							'header' => [
								'__version' => [
									'number' => __VESION_APP,
									'process_time' => '',
									'generated' => date("Y-m-d H:i:s")
								],
								'error' => FALSE,
								'message' => $arrForgot['message'],
								'csrf_v4kalibaru' => $csrfRefreshTokens
							],
							'data' => [
								'status' => [
									'code' => 200
								],
								'redirect' => [
									'action' => TRUE,
									'callBack' => site_url('forgot/result')
								],
								'collection' => []
							]
						];
					}
				}else{
					$response = [
						'header' => [
							'__version' => [
								'number' => __VESION_APP,
								'process_time' => '',
								'generated' => date("Y-m-d H:i:s")
							],
							'error' 			=> TRUE,
							'message' 			=> "Failed change the password, please try again",
							'csrf_v4kalibaru' 	=> $csrfRefreshTokens
						],
						'data' => [
							'status' => [
								'code' => 403
							],
							'collection' => []
						]
					];
				}
			}
			echo json_encode($response);
		}catch(Exception $e){
			echo "Unexcepted request";
		}
	}
	
	public function newPassword($token=""){
		try{
			$objToken = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
			$data['token'] = $token;
			if(date("YmdHis", $objToken->data->EXPIRED_DATE) > date('YmdHis')){
				$this->content = (!$this->content) ? $this->load->view('vForgotNewPassword', $data, true) : $this->content;
				$data = $this->main->setContent('forgot', $this->content);
				$this->parser->parse('components/container/unAuthorization', $data);
			}else{
				redirect(site_url('forgot/expiry'),'refresh');
			}
		}catch(Exception $e){
			echo "Unexcepted request";
		}
		
	}
	
	public function doNewPassword($token=""){
		try{
			$csrfRefreshTokens = $this->security->get_csrf_hash();
			$this->load->library('form_validation');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('re-password', 'Re-type Password', 'trim|required|matches[password]|xss_clean');
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
			}else{
				$objToken = json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1]))));
				$payloads = [];
				$payloads['USER_ID'] 				= $objToken->data->USER_ID;
				$payloads['NEW_PASSWORD'] 			= $this->input->post('password');
				$payloads['CONFIRM_NEW_PASSWORD'] 	= $this->input->post('re-password');
				
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/forgotPassword/resetPass',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 0,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'POST',
				  CURLOPT_POSTFIELDS 		=> json_encode($payloads),
				  CURLOPT_HTTPHEADER 		=> array(
					'Content-Type: application/json'
				  ),
				));
				$response = curl_exec($curl);
				curl_close($curl);
				$arrNewPassword = json_decode($response, true);
				if(!empty($arrNewPassword)){
					if($arrNewPassword['status'] == 1){
						$response = [
							'header' => [
								'__version' => [
									'number' => __VESION_APP,
									'process_time' => '',
									'generated' => date("Y-m-d H:i:s")
								],
								'error' => FALSE,
								'message' => $arrNewPassword['message'],
								'csrf_v4kalibaru' => $csrfRefreshTokens
							],
							'data' => [
								'status' => [
									'code' => 200
								],
								'redirect' => [
									'action' => TRUE,
									'callBack' => site_url()
								],
								'collection' => []
							]
						];
					}
				}else{
					$response = [
						'header' => [
							'__version' => [
								'number' => __VESION_APP,
								'process_time' => '',
								'generated' => date("Y-m-d H:i:s")
							],
							'error' 			=> TRUE,
							'message' 			=> "Failed change the password, please try again",
							'csrf_v4kalibaru' 	=> $csrfRefreshTokens
						],
						'data' => [
							'status' => [
								'code' => 403
							],
							'collection' => []
						]
					];
				}
			}
			echo json_encode($response);
		}catch(Exception $e){
			echo "Unexcepted request";
		}
	}

	public function result(){
		$this->content = (!$this->content) ? $this->load->view('vForgotResult', '', true) : $this->content;
		$data = $this->main->setContent('forgot', $this->content);
		$this->parser->parse('components/container/unAuthorization', $data);
	}
	
	public function expiry(){
		$this->content = (!$this->content) ? $this->load->view('vForgotExpiry', '', true) : $this->content;
		$data = $this->main->setContent('forgot', $this->content);
		$this->parser->parse('components/container/unAuthorization', $data);
	}

}