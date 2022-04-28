<?php

class Verification extends CI_Controller
{
    var $content = "";
	var $url = 'http://34.87.19.200:4000/api/v4/';
	var $urlList = [
		"login" => "do_login",
		"registrant" =>"newRegistrant/list",
		"history" =>"newRegistrant/history",
		"verify" =>"newRegistrant/verification",

	];
	
    public function __construct()
    {
		parent::__construct();
        isValidToken();
        $this->load->service(array('CompanyProfileService', 'DashboardService'));
    }

    public function index()
    {
        if(!$this->newsession->userdata('loggedIn')){ 
			redirect(site_url('login'));
			exit();
		}else{ 
			$data = array();
            $this->content = (!$this->content) ? $this->load->view('vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}
	
	public function getJWT(){
		$payload = [
			"email" => "reza.azmawan@logol.co.id",
			"password" => "Logol12345"
		];
		$curlInit = curl_init();
		curl_setopt_array($curlInit, array(
			CURLOPT_URL 				=> $this->url.$this->urlList['login'],
			CURLOPT_RETURNTRANSFER 	=> true,
			CURLOPT_POSTFIELDS => json_encode($payload),
			CURLOPT_ENCODING 			=> '',
			CURLOPT_MAXREDIRS 		=> 10,
			CURLOPT_TIMEOUT 			=> 30,
			CURLOPT_FOLLOWLOCATION 	=> true,
			CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST 	=> 'POST',
			CURLOPT_HTTPHEADER => [
				'Accept: */*',
				'Content-Type:application/json'
			]
		));
		$response = curl_exec($curlInit);
		$response = json_decode($response);
		$resHttpCode = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);
		curl_close($curlInit);
		if($resHttpCode == "200"){
			return $response->data->accessToken;
		}else{
			return "400 - JWT Token Failed";
		}
	}
	
	public function listData(){
		$url = parse_url($_SERVER['REQUEST_URI']);
		$COMPANY_TYPE_ID = "";
		$PRODUCT_TYPE_ID = "";
		if(isset($url['query'])){
			parse_str($url['query'], $params);
			if($params['cp'] != "All"){
				$COMPANY_TYPE_ID = $params['cp'];
			}
			if($params['pt'] != "All"){
				$PRODUCT_TYPE_ID = $params['pt'];
			}
		}


        if($this->session->userdata('isLogin')){
			redirect(site_url('home'));
			exit();
		}else{
			$token = $this->getJWT();
			$payload = [
						"COMPANY_TYPE" => array([
							"COMPANY_TYPE_NAME" => "trucker",
						], [
							"COMPANY_TYPE_NAME" => "truckerFF",
						]),
						"FILTER" => [
							"COMPANY_TYPE_ID" => $COMPANY_TYPE_ID,
							"PRODUCT_TYPE_ID" => $PRODUCT_TYPE_ID
						]
					];

			$curlInit = curl_init();
			curl_setopt_array($curlInit, array(
				CURLOPT_URL 				=> $this->url.$this->urlList['registrant'],
				CURLOPT_RETURNTRANSFER 	=> true,
				CURLOPT_POSTFIELDS => json_encode($payload),
				CURLOPT_ENCODING 			=> '',
				CURLOPT_MAXREDIRS 		=> 10,
				CURLOPT_TIMEOUT 			=> 30,
				CURLOPT_FOLLOWLOCATION 	=> true,
				CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST 	=> 'GET',
				CURLOPT_HTTPHEADER => [
					'Authorization: Bearer '.$token,
					'Accept: */*',
					'Content-Type:application/json'
				]
			));
			$responseProductType = curl_exec($curlInit);
			$resHttpProductType = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);
			curl_close($curlInit);
			$arr = array();

			if($resHttpProductType== 200){
				$data = json_decode($responseProductType, true);
				$arr = $data['data'];
			}else{
				$arr = [
					"No Data Found"
				];
			}



			$curlInit = curl_init();
			curl_setopt_array($curlInit, array(
				CURLOPT_URL 				=> $this->url.$this->urlList['history'],
				CURLOPT_RETURNTRANSFER 	=> true,
				CURLOPT_POSTFIELDS => json_encode($payload),
				CURLOPT_ENCODING 			=> '',
				CURLOPT_MAXREDIRS 		=> 10,
				CURLOPT_TIMEOUT 			=> 30,
				CURLOPT_FOLLOWLOCATION 	=> true,
				CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST 	=> 'GET',
				CURLOPT_HTTPHEADER => [
					'Authorization: Bearer '.$token,
					'Accept: */*',
					'Content-Type:application/json'
				]
			));
			$responseProductType = curl_exec($curlInit);
			$resHttpProductType = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);
			curl_close($curlInit);
			$arrHistory = array();

			if($resHttpProductType== 200){
				$data = json_decode($responseProductType, true);
				$arrHistory = $data['data'];
				#echo "<pre/>";
				#print_r($arrHistory);
				#die();
			}else{
				$arrHistory = [
					"No Data Found"
				];
			}

			$curlProductType = curl_init();
				curl_setopt_array($curlProductType, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/productTypeList',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 30,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'GET',
				));
				$responseProductType = curl_exec($curlProductType);
				$resHttpProductType = curl_getinfo($curlProductType, CURLINFO_HTTP_CODE);
				curl_close($curlProductType);
				$arrHtmlProductType = [];
				if($resHttpProductType == 200){
					$arrProductType = json_decode($responseProductType, true);
					if(!empty($arrProductType)){
						if($arrProductType['status'] == 1){
							if(array_key_exists(0, $arrProductType['data'])){
								foreach($arrProductType['data'] as $data){
									$arrHtmlProductType[] = $data;
								}
							}else{
								$arrHtmlProductType[] = $arrProductType['data'];
							}
						}
					}
				}
				
				$curlService = curl_init();
				curl_setopt_array($curlService, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/serviceOfInterestList',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 30,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'GET',
				));
				$responseService = curl_exec($curlService);
				$resHttpService = curl_getinfo($curlService, CURLINFO_HTTP_CODE);
				curl_close($curlService);
				$arrHtmlService = [];
				if($resHttpService == 200){
					$arrService = json_decode($responseService, true);
					if(!empty($arrService)){
						if($arrService['status'] == 1){
							if(array_key_exists(0, $arrService['data'])){
								foreach($arrService['data'] as $data){
									$arrHtmlService[] = $data;
								}
							}else{
								$arrHtmlService[] = $arrService['data'];
							}
						}
					}
				}

				//SERVICE_CONTENT_ID
				//SERVICE_CONTENT_NAME

				//PRODUCT_TYPE_ID
				//PRODUCT_TYPE_NAME


            $data = [
                'raw' => $arr,
				'rawHis' => $arrHistory,
				'productType'		=> $arrHtmlProductType,
				'service'			=> $arrHtmlService,
				'cp' => $COMPANY_TYPE_ID,
				'pt' => $PRODUCT_TYPE_ID
			];
            $this->content = (!$this->content) ? $this->load->view('vListData', $data, true) : $this->content;
            $this->index();
		}
	}
	
	public function doVerify($action){
		$token = $this->getJWT();
		$payload = [
				"COMPANY_ID"=> $this->input->post("cid"),
				"USER_ID"=> $this->input->post("uid"),
				"COMPANY_STATUS_ID"=> ($action == "verify" ? "2" : "3"),
				"USER_STATUS_ID"=> ($action == "verify" ? "6" : "7"),
				"REMARKS_VERIFICATION"=> $this->input->post("reason")
		];

		$curlInit = curl_init();
		curl_setopt_array($curlInit, array(
			CURLOPT_URL 				=> $this->url.$this->urlList['verify'],
			CURLOPT_RETURNTRANSFER 	=> true,
			CURLOPT_POSTFIELDS => json_encode($payload),
			CURLOPT_ENCODING 			=> '',
			CURLOPT_MAXREDIRS 		=> 10,
			CURLOPT_TIMEOUT 			=> 30,
			CURLOPT_FOLLOWLOCATION 	=> true,
			CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST 	=> 'POST',
			CURLOPT_HTTPHEADER => [
				'Accept: */*',
				'Content-Type:application/json',
				'Authorization: Bearer '.$token,
			]
		));
		$response = curl_exec($curlInit);
		$response = json_decode($response);
		$resHttpCode = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);

		if($resHttpCode == "200"){
			if($response->data[0]->Response == "verified" || $response->data[0]->Response == "rejected"){
				echo "OK";

			}else{
				echo "NOK";
			}

		}else{
			echo "400 - JWT Token Failed";
		}
	}
}