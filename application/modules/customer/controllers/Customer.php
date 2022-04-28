<?php

class Customer extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
        $this->load->service('CustomerService');
    }

    public function index()
    {
        if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
		else
		{ 
			$data = array();
            $this->content = (!$this->content) ? $this->load->view('dashboard/vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}

    public function newRegistrant()
    {
        if(!$this->newsession->userdata('loggedIn'))
		{ 
			redirect(site_url('login'));
			exit();
		}
        else
        {
            $arrData = $this->CustomerService->getCustomerNewRegistrant();
            $this->content = $this->load->view('vNewRegistrant', $arrData, true);
            $this->index();
        }
    }

}