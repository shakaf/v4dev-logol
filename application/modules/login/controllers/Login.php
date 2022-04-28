<?php

class Login extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
		$this->load->library('recaptcha');
        $this->load->service('LoginService');
    }

    public function index()
    {
        if($this->session->userdata('loggedIn'))
		{
			redirect(site_url('dashboard'));
			exit();
		}
		else
		{
            $data = [
                'action' => site_url('login-attempt'),
				'captcha' => $this->recaptcha->getWidget(),
				'scriptTag' => $this->recaptcha->getScriptTag()
			];
            $this->content = (!$this->content) ? $this->load->view('vLogin', $data, true) : $this->content;
			$data = $this->main->setContent('signin', $this->content);
			$this->parser->parse('components/container/unAuthorization', $data);
		}
	}

	public function setCallBackDoLogin()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) != "post")
        {
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
        }
        else
        {
            $response = $this->LoginService->doLogin();
			echo json_encode($response);
        }
        
	}

	public function doLogout()
	{
        $this->newsession->sess_destroy();
        redirect(base_url());
        exit();
	}

	public function nle()
	{
		$token = 'eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIxIiwiZXhwIjoxOTM1NTYzMTA2LCJpYXQiOjE2MjAyMDMxMDYsIm5iZiI6MTYyMDIwMzEwNiwiY2xpZW50SUQiOjEsImNsaWVudE5hbWUiOiJMb2dvbCIsImp0aSI6IjM1NzliNjg0LWQwMWMtNDFkOC04OWYwLWNjOGU5NjcwMzM0NSJ9.7q0fQKlHxy0h5vh8GcB4tKcjjcdoz0Q9CKrZQDnpifgcur5Rd6uOuNf4_urRmk636uMj61m7jOLjfUUByH4irA';
		$curlInit = curl_init();
		curl_setopt_array($curlInit, array(
			CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/redirect_nle_url',
			CURLOPT_RETURNTRANSFER 	=> true,
			CURLOPT_ENCODING 			=> '',
			CURLOPT_MAXREDIRS 		=> 10,
			CURLOPT_TIMEOUT 			=> 30,
			CURLOPT_FOLLOWLOCATION 	=> true,
			CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST 	=> 'GET',
			CURLOPT_HTTPHEADER => [
				'Authorization: Bearer '.$token,
				'Accept: */*'
			]
		));
		$responseProductType = curl_exec($curlInit);
		$resHttpProductType = curl_getinfo($curlInit, CURLINFO_HTTP_CODE);
		curl_close($curlInit);

		if($resHttpProductType== 200){
			$data = json_decode($responseProductType, true);
			$arr = array();
			foreach($data as $row){
				$arr = $row;
			}
			echo $arr[1]['base_url'];
		}
		die();
	}

}