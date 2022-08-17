<?php

class Order extends CI_Controller
{
	var $content = "";

	public function __construct()
	{
		parent::__construct();
		$this->load->service(array('CompanyProfileService', 'DashboardService','OnbehalfService','OrderService','OrderMgtService','BillingService','OrderEPort'));
	}

	public function index()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$data = array();
			$this->content = (!$this->content) ? $this->load->view('vOrder', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}

	public function orderRequest($act = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrayReturn = [];
			if (strtolower($_SERVER['REQUEST_METHOD']) != "post") {
				$arrayResponse = [
					'status'	=> 400,
					'message'	=> 'Unexcepted proccess. Please try again'
				];
			} else {
				$view = "No content, Please kindly refresh";
				$modal = $this->load->view('order/onbehalf/onBehalfModal', $data, true);
				$post = $this->input->post('post');
				$this->load->service(array('OrderService','OnbehalfService'));
				$data['province']=$this->OnbehalfService->getOnbehalfProvince();
				$data['shippingline']=$this->OrderService->getShippingLine();
				$data['profile'] = $this->CompanyProfileService->getMainProfile();
				$modal = $this->load->view('order/onbehalf/onBehalfModal', $data, true);
				if ($post == "export-depot") {
					$data['arrdepot'] = $this->OrderService->getDepot();
					$view = $this->load->view('order/vRequestExportDepot', $data, true);
				} else if ($post == "export-port") {
					$data['arrport'] = $this->OrderService->getTerminalList();
					$view = $this->load->view('order/vRequestExportPort', $data, true);
				} else if ($post == "import-depot") {
					$data['arrdepot'] = $this->OrderService->getDepot();
					$view = $this->load->view('order/vRequestImportDepot', $data, true);
				} else if ($post == "import-port") {
					$data['arrport'] = $this->OrderService->getTerminalList();
					$view = $this->load->view('order/vRequestImportPort', $data, true);
				}
				$arrayResponse = [
					'status'		=> 100,
					'message'		=> 'Successfully',
					'html'			=> $view,
					'modal'			=> $modal
				];
			}
			$arrayReturn['return'] = $arrayResponse;
			echo json_encode($arrayReturn);
		}
	}

	public function depoRequest($type = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'type' => $type,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDepoRequest', $arrData, true);

			$this->index();
		}
	}

	public function depoCart($type = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'type' => $type,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/requestDepotCart', $arrData, true);

			$this->index();
		}
	}

	public function gatepassRequest($type = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'type' => $type,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vGatepassRequest', $arrData, true);

			$this->index();
		}
	}

	public function gatepassCart($type = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'type' => $type,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vCartGatepass', $arrData, true);

			$this->index();
		}
	}

	public function getPay()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile(),
			];
			$this->content = $this->load->view('order/vPay', $arrData, true);

			$this->index();
		}
	}

	public function allOrder()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vAllOrders', $arrData, true);

			$this->index();
		}
	}

	public function contentOrder($act = "")
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrayReturn = [];
			if (strtolower($_SERVER['REQUEST_METHOD']) != "post") {
				$arrayResponse = [
					'status'	=> 400,
					'message'	=> 'Unexcepted proccess. Please try again'
				];
			} else {
				$view = "No content, Please kindly refresh";
				$post = $this->input->post('post');
				$page = $this->input->post('page');
				$size = $this->input->post('size');
				$data=array();
				$data['dtorder']=$this->OrderMgtService->getOrderMgt($post,$page,$size);
				if ($post == "all") {
					$view = $this->load->view('order/content-order/allOrder', $data, true);
				} else if ($post == "draft") {
					$view = $this->load->view('order/content-order/draftOrder', $data, true);
				} else if ($post == "payment") {
					$view = $this->load->view('order/content-order/paymentOrder', $data, true);
				} else if ($post == "progress") {
					$view = $this->load->view('order/content-order/progressOrder', $data, true);
				} else if ($post == "issue") {
					$view = $this->load->view('order/content-order/issueOrder', '', true);
				}
				$arrayResponse = [
					'status'		=> 100,
					'message'		=> 'Successfully',
					'html'			=> $view,
					'data'			=> $data
				];
			}
			$arrayReturn['return'] = $arrayResponse;
			echo json_encode($arrayReturn);
		}
	}

	public function detailOrder()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDetailOrder', $arrData, true);

			$this->index();
		}
	}

	public function detailOrderwaitpay()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDetailOrderWaitPay', $arrData, true);

			$this->index();
		}
	}

	public function detailOrderwaitpayfin()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDetailOrderWaitPayFin', $arrData, true);

			$this->index();
		}
	}

	public function detilPayment()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			//print_r($this->session->userdata());
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDetailPayment', $arrData, true);

			$this->index();
		}
	}

	public function detilOrderIssues()
	{
		if (!$this->newsession->userdata('loggedIn')) {
			redirect(site_url('login'));
			exit();
		} else {
			$arrData = [
				'profileAttribute' => $_SESSION,
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('order/vDetailOrderIssues', $arrData, true);

			$this->index();
		}
	}

	public function getOnbehalf(){
		header('Content-Type: application/json');
		$data=array();
		
		$data = $this->OnbehalfService->getOnbehalf();
		/* $data[]=array(
			"npwp_id"=>"1",
			"npwp_number"=>"90.000.000.0-000.000",
			"npwp_name"=>"Rizki Fatimah",
			"npwp_address"=>"JL. Tambak Sari No. 5 RT.02
			RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)",
			"npwp_attachment"=>"NPWP Rizky.pdf"
		); */
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	public function getCities($idp){
		$dataCities=$this->OnbehalfService->getOnbehalfCity($idp);
		echo json_encode($dataCities);
	}

	public function getDistrict($idc){
		$dataDistrict=$this->OnbehalfService->getOnbehalfDistrict($idc);
		echo json_encode($dataDistrict);
	}

	public function getArea($idd){
		$dataArea=$this->OnbehalfService->getOnbehalfArea($idd);
		echo json_encode($dataArea);
	}

	public function setCallBackAddOnbehalf()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OnbehalfService->addOnbehalf();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEditOnbehalf()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OnbehalfService->editOnbehalf();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDelOnbehalf()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OnbehalfService->delOnbehalf();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
	public function getCallBackloadBillingEDepot(){
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderService->loadBillingEDepot();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
	public function setCallBackorderRequestEDepot()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderService->orderRequestEDepot();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
	public function setCallBackorderRequestIDepot()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderService->orderRequestIDepot();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
	public function setCallBackEPortGR()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderEPort->verifyEPort();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEPortreqContainer()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderEPort->reqContainer();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEPortBookingNow()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->OrderEPort->OrderRequest();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function getCallBackdoPayment()
	{
		try
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
						'message' => 'Request not allowedx'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->BillingService->doPayment();
				echo json_encode($response);
			}
		}
		catch(Exception $e)
		{
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => FALSE,
					'message' => 'Request not allowedy'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
}
