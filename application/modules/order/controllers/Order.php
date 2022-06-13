<?php

class Order extends CI_Controller
{
	var $content = "";

	public function __construct()
	{
		parent::__construct();
		$this->load->service(array('CompanyProfileService', 'DashboardService'));
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
				$post = $this->input->post('post');
				$this->load->service(array('OrderService'));
				if ($post == "export-depot") {
					$data['arrdepot'] = $this->OrderService->getDepot();
					$view = $this->load->view('order/vRequestExportDepot', $data, true);
				} else if ($post == "export-port") {
					$view = $this->load->view('order/vRequestExportPort', '', true);
				} else if ($post == "import-depot") {
					$data['arrdepot'] = $this->OrderService->getDepot();
					$view = $this->load->view('order/vRequestImportDepot', $data, true);
				} else if ($post == "import-port") {
					$view = $this->load->view('order/vRequestImportPort', '', true);
				}
				$arrayResponse = [
					'status'		=> 100,
					'message'		=> 'Successfully',
					'html'			=> $view
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
				'isRequirement' => $this->DashboardService->isCompleteProfile()
			];
			$this->content = $this->load->view('home/vPay', $arrData, true);

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
				if ($post == "all") {
					$view = $this->load->view('order/content-order/allOrder', '', true);
				} else if ($post == "draft") {
					$view = $this->load->view('order/content-order/draftOrder', '', true);
				} else if ($post == "payment") {
					$view = $this->load->view('order/content-order/paymentOrder', '', true);
				} else if ($post == "progress") {
					$view = $this->load->view('order/content-order/progressOrder', '', true);
				} else if ($post == "issue") {
					$view = $this->load->view('order/content-order/issueOrder', '', true);
				}
				$arrayResponse = [
					'status'		=> 100,
					'message'		=> 'Successfully',
					'html'			=> $view
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
}
