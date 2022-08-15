<?php

class Home extends CI_Controller
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
		$this->load->service(array('CompanyProfileService', 'DashboardService','BillingService'));

    }

    public function index()
    {
        if($this->session->userdata('isLogin'))
		{
			redirect(site_url('home'));
			exit();
		}
		else
		{
            $data = [
                'action' => site_url('login-attempt')
			];
            $this->content = (!$this->content) ? $this->load->view('vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/uHome', $data);
		}
	}

	public function index2(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
		else
		{ 
			$data = array();
			#print_r($this->content);
			#die();
            #$this->content = (!$this->content) ? $this->load->view('vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}

	public function getEGatepass(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('home/vEGatepass', $arrData, true);
			
            $this->index2();
        }
	}

	public function getEDepo(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
			$admin = ($this->uri->segment(1) == 'e-depo-admin') ? true : false;
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile(),
				'isAdmin' => $admin
            ];
            $this->content = $this->load->view('home/vEDepo', $arrData, true);
			
            $this->index2();
        }
	}

	public function getCart(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('home/vCart', $arrData, true);
			
            $this->index2();
        }
	}

	public function getPay(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
			$rid = "LGMUSS".substr(hexdec(uniqid()),-4);
			$paydata = $this->BillingService->createBillingPayment($rid);
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile(),
				'payData'=>$paydata,
				"rId"=>$rid
            ];
            $this->content = $this->load->view('home/vPay', $arrData, true);
			
            $this->index2();
        }
	}
	public function getPaymentVA($bank){
		if(!$this->newsession->userdata('loggedIn')) 
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile(),
				'bank' => $bank
            ];
            $this->content = $this->load->view('home/vPayVA', $arrData, true);
			
            $this->index2();
        }
	}

	public function getPayFinance(){
		if(!$this->newsession->userdata('loggedIn')) 
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile(),
				
            ];
            $this->content = $this->load->view('home/vPayFinance', $arrData, true);
			
            $this->index2();
        }
	}
	public function getPayConf(){
		if(!$this->newsession->userdata('loggedIn')) 
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile(),
				
            ];
            $this->content = $this->load->view('home/vPayConf', $arrData, true);
			
            $this->index2();
        }
	}
	
	public function getPayDetail(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('home/vPayDetail', $arrData, true);
			
            $this->index2();
        }
	}

	public function emailVerify(){
		$this->load->view("vEmailVerified");
	}

	public function emailReject(){
		$this->load->view("vEmailRejected");
	}

	public function maps(){
		$this->load->view("vMaps");
	}

	public function vesselSchedule(){
		if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('home/vVesselSchedule', $arrData, true);
			
            $this->index2();
        }
	}

	public function actVerify($action){
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

	public function verification()
    {
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


        if($this->session->userdata('isLogin'))
		{
			redirect(site_url('home'));
			exit();
		}
		else
		{
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
            $this->content = (!$this->content) ? $this->load->view('vVerification', $data, true) : $this->content;
			//$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/uHomeVerification', $data);
			#$this->parser->parse('components/container/uHome', $data);
		}
	}

	public function downloadPDF(){
		$b64Encrypt = "JVBERi0xLjcNCiW1tbW1DQoxIDAgb2JqDQo8PC9UeXBlL0NhdGFsb2cvUGFnZXMgMiAwIFIvTGFu\r\nZyhlbi1VUykgL1N0cnVjdFRyZWVSb290IDEwIDAgUi9NYXJrSW5mbzw8L01hcmtlZCB0cnVlPj4v\r\nTWV0YWRhdGEgMjMgMCBSL1ZpZXdlclByZWZlcmVuY2VzIDI0IDAgUj4+DQplbmRvYmoNCjIgMCBv\r\nYmoNCjw8L1R5cGUvUGFnZXMvQ291bnQgMS9LaWRzWyAzIDAgUl0gPj4NCmVuZG9iag0KMyAwIG9i\r\nag0KPDwvVHlwZS9QYWdlL1BhcmVudCAyIDAgUi9SZXNvdXJjZXM8PC9Gb250PDwvRjEgNSAwIFI+\r\nPi9FeHRHU3RhdGU8PC9HUzcgNyAwIFIvR1M4IDggMCBSPj4vUHJvY1NldFsvUERGL1RleHQvSW1h\r\nZ2VCL0ltYWdlQy9JbWFnZUldID4+L01lZGlhQm94WyAwIDAgNjEyIDc5Ml0gL0NvbnRlbnRzIDQg\r\nMCBSL0dyb3VwPDwvVHlwZS9Hcm91cC9TL1RyYW5zcGFyZW5jeS9DUy9EZXZpY2VSR0I+Pi9UYWJz\r\nL1MvU3RydWN0UGFyZW50cyAwPj4NCmVuZG9iag0KNCAwIG9iag0KPDwvRmlsdGVyL0ZsYXRlRGVj\r\nb2RlL0xlbmd0aCAyMDc+Pg0Kc3RyZWFtDQp4nK2PywrCMBBF94H8w122gmmSNo+CCNpWUXxUGnEh\r\nLtWVgvr/YCwuFBV8zWLgMsOcM4hKtFrROBvk4O02unmGAyWc8UulQoJD+25SieOakkUDe0q6jpKo\r\nJxBruA0lwi9x+Mg14wbaKqb9ZOeX+pXB9uQPYlsne019SpYBwhXckJLCn5tRgmKcATdC4l9CMWdS\r\n1kK1x5t4+Se8Mgkz9mN8/CteKMWEhRIpi8UD3hWVQ9iUwbwcTTs5JmESlIvyXuprdqI0s/IV+9nr\r\nZymWfEkNCmVuZHN0cmVhbQ0KZW5kb2JqDQo1IDAgb2JqDQo8PC9UeXBlL0ZvbnQvU3VidHlwZS9U\r\ncnVlVHlwZS9OYW1lL0YxL0Jhc2VGb250L0JDREVFRStDYWxpYnJpL0VuY29kaW5nL1dpbkFuc2lF\r\nbmNvZGluZy9Gb250RGVzY3JpcHRvciA2IDAgUi9GaXJzdENoYXIgMzIvTGFzdENoYXIgODcvV2lk\r\ndGhzIDIxIDAgUj4+DQplbmRvYmoNCjYgMCBvYmoNCjw8L1R5cGUvRm9udERlc2NyaXB0b3IvRm9u\r\ndE5hbWUvQkNERUVFK0NhbGlicmkvRmxhZ3MgMzIvSXRhbGljQW5nbGUgMC9Bc2NlbnQgNzUwL0Rl\r\nc2NlbnQgLTI1MC9DYXBIZWlnaHQgNzUwL0F2Z1dpZHRoIDUyMS9NYXhXaWR0aCAxNzQzL0ZvbnRX\r\nZWlnaHQgNDAwL1hIZWlnaHQgMjUwL1N0ZW1WIDUyL0ZvbnRCQm94WyAtNTAzIC0yNTAgMTI0MCA3\r\nNTBdIC9Gb250RmlsZTIgMjIgMCBSPj4NCmVuZG9iag0KNyAwIG9iag0KPDwvVHlwZS9FeHRHU3Rh\r\ndGUvQk0vTm9ybWFsL2NhIDE+Pg0KZW5kb2JqDQo4IDAgb2JqDQo8PC9UeXBlL0V4dEdTdGF0ZS9C\r\nTS9Ob3JtYWwvQ0EgMT4+DQplbmRvYmoNCjkgMCBvYmoNCjw8L0F1dGhvcihFcmlrIFRyaWFudG8p\r\nIC9DcmVhdG9yKP7/AE0AaQBjAHIAbwBzAG8AZgB0AK4AIABXAG8AcgBkACAAZgBvAHIAIABNAGkA\r\nYwByAG8AcwBvAGYAdAAgADMANgA1KSAvQ3JlYXRpb25EYXRlKEQ6MjAyMjAyMjEwOTU5MTgrMDcn\r\nMDAnKSAvTW9kRGF0ZShEOjIwMjIwMjIxMDk1OTE4KzA3JzAwJykgL1Byb2R1Y2VyKP7/AE0AaQBj\r\nAHIAbwBzAG8AZgB0AK4AIABXAG8AcgBkACAAZgBvAHIAIABNAGkAYwByAG8AcwBvAGYAdAAgADMA\r\nNgA1KSA+Pg0KZW5kb2JqDQoxNyAwIG9iag0KPDwvVHlwZS9PYmpTdG0vTiAxMC9GaXJzdCA2Ny9G\r\naWx0ZXIvRmxhdGVEZWNvZGUvTGVuZ3RoIDMzMT4+DQpzdHJlYW0NCniclVJRa8IwEH4X/A/3D9Kk\r\ntU4QYUxlQyylFfYgPsR6q8U2kZiC/vvl2g47EDZfkvu+u++7y7V8BB7wFxhx4BPgngDh8MgHHrgo\r\ncAyIsUtw8McuISD0QuA+hMKRIYRBANMpi6ncg4SlLGab2xlZak2d2UWJFVttwdsBi3PwqWY2Gw7+\r\nIeHPS8TzEv+hxOskc53VFSr7cD5aXEKra65Jc4lGuYPOqifbGMREa8sSXeJanmmj1CSWxjWgLC2X\r\nGPIOWpteNsKrXeENeGe9dF5KW2QRHQt1uIONK93rK0sxs+wd5QFNG5PmJ/5QZaEwPUqakIhX5Ryk\r\nLbTqsLHFl3RBgz61Oe21Pt1XQszliGhpSMvWMjO6h9+O7uzheSFLnfeItCwO2Ktt+7iy3MiKLYu8\r\nNti9Naqry5Z+0/DXdiNZ4WXbwj++x3DwDbfL1qINCmVuZHN0cmVhbQ0KZW5kb2JqDQoyMSAwIG9i\r\nag0KWyAyMjYgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAg\r\nMCAwIDAgMCAwIDAgMCAwIDU3OSAwIDAgNjE1IDQ4OCAwIDAgMCAwIDAgMCA0MjAgMCA2NDYgNjYy\r\nIDUxNyAwIDAgNDU5IDQ4NyA2NDIgMCA4OTBdIA0KZW5kb2JqDQoyMiAwIG9iag0KPDwvRmlsdGVy\r\nL0ZsYXRlRGVjb2RlL0xlbmd0aCAyNTM0Ny9MZW5ndGgxIDkxMzAwPj4NCnN0cmVhbQ0KeJzsfQdc\r\nlEf+/sy7hWULuwu7sLDCLqyAugoKFqysUizYEFZBRUFA0WDDnqghTXMkpml6M80UTbKsGtE003uv\r\nl1zaXS7nXWLKpVzORPk98353EP2ZfP65u8/ll/9nv/C8zzPf+c68M/POzDurKIwzxmy4aFltyZji\r\nyj/fwl5mPNCDMf2kkjETi+6ccN4hxkd8zJimYEpFbt71j9TtZYyfj1K19YvrllX1r7qRsdO2If+6\r\n+tUrvfuXvT2IsZvGMaZ7YP6yBYs3vq8ZwtjS/oxZ/Aua180fd01bI2O3axnL+aapsa7h+0nrQqjP\r\njPoGN8FhubvHYaSLke7ZtHjl2ncKkhHLDzG2cFfz0vq61YULn2Psje8RPn1x3dplOabMd5HfhHjv\r\n4saVddecvX0146XNSJ+7pG5x4w1Hvp2L6qcy1n/FsqUrVna62Sb053ERv6ylcVnCgoxkxtbPxu0+\r\nZWIs9MM+uvyVCT/OtY74liUbmLD7P13/vOC3xq+Z8sORo62xnxkGIxnLFEaGcnp2jPHHjdt/OHJk\r\ne+xnak3dLHmX8Lj7sFZmY6NQTgHnss2MxQ9W78uZRuvnlzAdM+iu1uWjyjRizctsk8IMTLHqFEXR\r\nahTtxyyn8yDreYbaAtikCq+XBRjLfJ7aEHODkuVlvFPkafbp4kRPmUMbd7w1/CU87puYj/0HTfsZ\r\n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\r\nCVQDVcAMYDoQBCqBCmAaUA5MBaYAk4FJwESgDJgAjAfGAWOBUqAEKAaKgDHAaCAAFAKjgJHACGA4\r\nMAwYChQAQ4DBwCBgIJAP5AEDgP5ALpAD9AP6An6gD9Ab6AVkA1lAJtAT8AEZQDrgBTxAGpAK9ADc\r\nQAqQDLiAJCARcAIOIAGIB+yADbACcYAFMAMmwAjEAgYgBtADOkA7uhNXDaAAHGCsgcPHjwFHgR+B\r\nH4AjwD+B74F/AN8B3wLfAF8Dfwe+Ar4EvgA+Bw4DnwGfAn8D/gocAv4CfAL8GfgY+BPwR+Aj4EPg\r\nA+B94D3gD8C7wDvA74G3gbeAN4E3gNeB14BXgVeAl4GXgBeBF4DngeeAZ4FngKeBp4AngSeAx4HH\r\ngEeBR4CDwMPAQ8CDwAPA/cABYD/QAewD7gP2AnuA3UAYaAdCwL3APcDdwC5gJ3AXcCdwB3A7sAO4\r\nDbgVuAW4GbgJ2A7cCNwAXA9cB1wLXANcDVwFXAlcAVwObAO2ApcBlwKXABcDFwFbgAuBC4A24HfA\r\n+cBmYBNwHmsY3cqx/jnWP8f651j/HOufY/1zrH+O9c+x/jnWP8f651j/HOufY/1zrH+O9c+x/jnW\r\nP28BsAdw7AEcewDHHsCxB3DsARx7AMcewLEHcOwBHHsAxx7AsQdw7AEcewDHHsCxB3DsARx7AMce\r\nwLEHcOwBHHsAxx7AsQdw7AEcewDHHsCxB3DsARx7AMcewLH+OdY/x/rnWPsca59j7XOsfY61z7H2\r\nOdY+x9rnWPsca//X3od/41b9azfgN25sxYpuBzNhrrlzGGMxNzB2bOsJ/4pkKlvEVrBWfG1iW9hW\r\n9jB7l81j50BdzbazHexOFmKPsGfYW7/wX9P8rB1bp1vMzJp9TM8SGOs80nn42A6gQxfXzbMVqQSt\r\n97in09b5+Um+z49t7bQd69DHM6Na1qK8Cu/X/GjnEbxyke4cLNLKZmirWuKrmBuO3Xvs9pPGoJzN\r\nZLPYbFbDalkd+i/+FdVCjMxprJktZkvU1BLkLcB1PlJzEYXtRdXHo5ayZUALW8lWsdX4Wga9IpIS\r\necvV9Cq2Bl9r2Tp2OjuDrWcbItc1qmc9ck5X02uBjexMPJmz2Nmqkkyec9i57Dw8tc3sfPa7n039\r\nrku1sQvYhXjOF7GLf1JvOSF1Cb4uZZdhPmxjl7Mr2FWYF9ey607yXqn6r2E3sBsxZ0Te5fDcqCqR\r\n+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\r\n8jCb/1uNLd0hL1cDZumLNQvmDfcfEbe0L+B5B6uRMsjU5ut99wVN6zJlE3mYLvJwTiDWucjdQZSG\r\nx6PtartHfu87l0GNML3alcHn4yvEb+Ouux/eHruaw+Dd0rM/6/3HMO1bwy2Rj749OHcTXYijsRo3\r\nvll3i8fGqXghbjJjMLW+Ch0zhc1XU/DxPdPlpPFo8tyTgZKaiecDmENYu35NyV5C3VMxlbgpTQZS\r\nLK3FyPaF8t3GV5PDoLOVzWLzoaXJOOUXqdqQ/wBlfBEQDQplbmRzdHJlYW0NCmVuZG9iag0KMjMg\r\nMCBvYmoNCjw8L1R5cGUvTWV0YWRhdGEvU3VidHlwZS9YTUwvTGVuZ3RoIDMwODg+Pg0Kc3RyZWFt\r\nDQo8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pjx4\r\nOnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IjMuMS03MDEiPgo8cmRm\r\nOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1u\r\ncyMiPgo8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiAgeG1sbnM6cGRmPSJodHRwOi8vbnMu\r\nYWRvYmUuY29tL3BkZi8xLjMvIj4KPHBkZjpQcm9kdWNlcj5NaWNyb3NvZnTCriBXb3JkIGZvciBN\r\naWNyb3NvZnQgMzY1PC9wZGY6UHJvZHVjZXI+PC9yZGY6RGVzY3JpcHRpb24+CjxyZGY6RGVzY3Jp\r\ncHRpb24gcmRmOmFib3V0PSIiICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRz\r\nLzEuMS8iPgo8ZGM6Y3JlYXRvcj48cmRmOlNlcT48cmRmOmxpPkVyaWsgVHJpYW50bzwvcmRmOmxp\r\nPjwvcmRmOlNlcT48L2RjOmNyZWF0b3I+PC9yZGY6RGVzY3JpcHRpb24+CjxyZGY6RGVzY3JpcHRp\r\nb24gcmRmOmFib3V0PSIiICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8i\r\nPgo8eG1wOkNyZWF0b3JUb29sPk1pY3Jvc29mdMKuIFdvcmQgZm9yIE1pY3Jvc29mdCAzNjU8L3ht\r\ncDpDcmVhdG9yVG9vbD48eG1wOkNyZWF0ZURhdGU+MjAyMi0wMi0yMVQwOTo1OToxOCswNzowMDwv\r\neG1wOkNyZWF0ZURhdGU+PHhtcDpNb2RpZnlEYXRlPjIwMjItMDItMjFUMDk6NTk6MTgrMDc6MDA8\r\nL3htcDpNb2RpZnlEYXRlPjwvcmRmOkRlc2NyaXB0aW9uPgo8cmRmOkRlc2NyaXB0aW9uIHJkZjph\r\nYm91dD0iIiAgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iPgo8\r\neG1wTU06RG9jdW1lbnRJRD51dWlkOjFENkQxMjM4LTRFRjctNDE4OC1BNzBFLTZGOEU4NzdCRUNG\r\nNTwveG1wTU06RG9jdW1lbnRJRD48eG1wTU06SW5zdGFuY2VJRD51dWlkOjFENkQxMjM4LTRFRjct\r\nNDE4OC1BNzBFLTZGOEU4NzdCRUNGNTwveG1wTU06SW5zdGFuY2VJRD48L3JkZjpEZXNjcmlwdGlv\r\nbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAK\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg\r\nICAgICAgICAgICAgICAgICAgICAgICAgICAgCjwvcmRmOlJERj48L3g6eG1wbWV0YT48P3hwYWNr\r\nZXQgZW5kPSJ3Ij8+DQplbmRzdHJlYW0NCmVuZG9iag0KMjQgMCBvYmoNCjw8L0Rpc3BsYXlEb2NU\r\naXRsZSB0cnVlPj4NCmVuZG9iag0KMjUgMCBvYmoNCjw8L1R5cGUvWFJlZi9TaXplIDI1L1dbIDEg\r\nNCAyXSAvUm9vdCAxIDAgUi9JbmZvIDkgMCBSL0lEWzwzODEyNkQxREY3NEU4ODQxQTcwRTZGOEU4\r\nNzdCRUNGNT48MzgxMjZEMURGNzRFODg0MUE3MEU2RjhFODc3QkVDRjU+XSAvRmlsdGVyL0ZsYXRl\r\nRGVjb2RlL0xlbmd0aCA5ND4+DQpzdHJlYW0NCnicY2AAgv//GYGkIAMDiFoGoe6BKcZnYIrpP5hi\r\nhsixTIVQpyAUUI4JrJ0VQrFBKHYIxQGhWCAUVCUnUB+bCIzHCKGYIBQzUI79CNhojmQwlX0QTFWo\r\nMDAAAClhDKANCmVuZHN0cmVhbQ0KZW5kb2JqDQp4cmVmDQowIDI2DQowMDAwMDAwMDEwIDY1NTM1\r\nIGYNCjAwMDAwMDAwMTcgMDAwMDAgbg0KMDAwMDAwMDE2NiAwMDAwMCBuDQowMDAwMDAwMjIyIDAw\r\nMDAwIG4NCjAwMDAwMDA0ODYgMDAwMDAgbg0KMDAwMDAwMDc2NyAwMDAwMCBuDQowMDAwMDAwOTM0\r\nIDAwMDAwIG4NCjAwMDAwMDExNzMgMDAwMDAgbg0KMDAwMDAwMTIyNiAwMDAwMCBuDQowMDAwMDAx\r\nMjc5IDAwMDAwIG4NCjAwMDAwMDAwMTEgNjU1MzUgZg0KMDAwMDAwMDAxMiA2NTUzNSBmDQowMDAw\r\nMDAwMDEzIDY1NTM1IGYNCjAwMDAwMDAwMTQgNjU1MzUgZg0KMDAwMDAwMDAxNSA2NTUzNSBmDQow\r\nMDAwMDAwMDE2IDY1NTM1IGYNCjAwMDAwMDAwMTcgNjU1MzUgZg0KMDAwMDAwMDAxOCA2NTUzNSBm\r\nDQowMDAwMDAwMDE5IDY1NTM1IGYNCjAwMDAwMDAwMjAgNjU1MzUgZg0KMDAwMDAwMDAwMCA2NTUz\r\nNSBmDQowMDAwMDAxOTg4IDAwMDAwIG4NCjAwMDAwMDIxNDcgMDAwMDAgbg0KMDAwMDAyNzU4NSAw\r\nMDAwMCBuDQowMDAwMDMwNzU2IDAwMDAwIG4NCjAwMDAwMzA4MDEgMDAwMDAgbg0KdHJhaWxlcg0K\r\nPDwvU2l6ZSAyNi9Sb290IDEgMCBSL0luZm8gOSAwIFIvSURbPDM4MTI2RDFERjc0RTg4NDFBNzBF\r\nNkY4RTg3N0JFQ0Y1PjwzODEyNkQxREY3NEU4ODQxQTcwRTZGOEU4NzdCRUNGNT5dID4+DQpzdGFy\r\ndHhyZWYNCjMxMDk0DQolJUVPRg0KeHJlZg0KMCAwDQp0cmFpbGVyDQo8PC9TaXplIDI2L1Jvb3Qg\r\nMSAwIFIvSW5mbyA5IDAgUi9JRFs8MzgxMjZEMURGNzRFODg0MUE3MEU2RjhFODc3QkVDRjU+PDM4\r\nMTI2RDFERjc0RTg4NDFBNzBFNkY4RTg3N0JFQ0Y1Pl0gL1ByZXYgMzEwOTQvWFJlZlN0bSAzMDgw\r\nMT4+DQpzdGFydHhyZWYNCjMxNzcwDQolJUVPRg==\r\n";
		$data = base64_decode($b64Encrypt);
		header('Content-Type: application/pdf');
		echo $data;
	}


}