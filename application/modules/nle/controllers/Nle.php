<?php

class Nle extends CI_Controller{
    var $content = "";
    public function __construct()
    {
		parent::__construct();
        isValidToken();
        $this->load->service(array('CompanyProfileService', 'DashboardService'));
    }

    public function index(){
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
			CURLOPT_RETURNTRANSFER 		=> true,
			CURLOPT_POSTFIELDS 			=> json_encode($payload),
			CURLOPT_ENCODING 			=> '',
			CURLOPT_MAXREDIRS 			=> 10,
			CURLOPT_TIMEOUT 			=> 30,
			CURLOPT_FOLLOWLOCATION 		=> true,
			CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST 		=> 'POST',
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
	
	public function register(){
		try{
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
			
			$data = [
				'productType'		=> $arrHtmlProductType,
				'service'			=> $arrHtmlService
			];
			$this->content = (!$this->content) ? $this->load->view('vRegister', $data, true) : $this->content;
			$this->index();
			
		}catch(Exception $e){
			echo "Unexcepted request";
		}
	}
}