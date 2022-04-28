<?php

class Dashboard extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
        isValidToken();
        $this->load->service('DashboardService');
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
			if($this->newsession->userdata('dataIsComplete') == 0) 
			{
				$completeProfileAttribute = $this->DashboardService->isCompleteProfile();
				if($completeProfileAttribute['error']) 
				{
					// Token Invalid or status 0
				}
				else 
				{
					if((int)$completeProfileAttribute['percentage'] < 100) 
					{
						redirect(site_url('my-company-profile'));
						exit();
					}
				}
			}
            $this->content = (!$this->content) ? $this->load->view('vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}

}