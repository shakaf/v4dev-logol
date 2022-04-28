<?php

class Profile extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
        isValidToken();
        $this->load->service(array('CompanyProfileService', 'DashboardService', 'LocalizationService'));
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
            $this->content = (!$this->content) ? $this->load->view('vDashboard', $data, true) : $this->content;
			$data = $this->main->setContent('home', $this->content);
			$this->parser->parse('components/container/authorizationPage', $data);
		}
	}

    public function getCompanyProfile()
    {
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
                'profile' => $this->CompanyProfileService->getMainProfile()
            ];
            $this->content = $this->load->view('company/vMainProfile', $arrData, true);
            $this->index();
        }
    }

    public function getWelcomeRegistrantProfile()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data['requirement'] = $_POST;
            $data['userAttribute'] = $this->newsession->userdata('userAttribute');
            echo $this->load->view('welcome/vWelcomeRegistrantProfile', $data, true);
        }
    }

    public function getCompanyProfileInfoEdit()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
            echo $this->load->view('company/vCompanyInfoEdit', $data, true);
        }
    }

    public function getUserInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
            echo $this->load->view('company/vUserInfo', $data, true);
        }
    }

    public function getCompanyChangePhoto()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
            echo $this->load->view('company/vCompanyChangePhoto', $data, true);
        }
    }

    public function getCompanyAddressInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('profile/setCallBackAddressInfoEditStore'),
					'attribute' => [
						'addressId' => $this->input->post('identity'),
						'addressDetail' => $attribute[0],
						'provinceId' => $attribute[1],
						'cityId' => $attribute[2],
						'districtId' => $attribute[3],
						'areaId' => $attribute[4],
						'postalCode' => $attribute[5]
					]
				]
			];
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$cityService = $this->LocalizationService->getCitiesByProvinceId($data['collections']['attribute']['provinceId']);
			$data['cityId'] = $this->main->setDropdownFromJson($cityService, "CITY_ID", "CITY_NAME", TRUE);
			$districtService = $this->LocalizationService->getDistrictByCityId($data['collections']['attribute']['cityId']);
			$data['districtId'] = $this->main->setDropdownFromJson($districtService, "DISTRICT_ID", "DISTRICT_NAME", TRUE);
			$areaService = $this->LocalizationService->getAreasByDistricId($data['collections']['attribute']['districtId']);
			$data['areaId'] = $this->main->setDropdownFromJson($areaService, "AREA_ID", "AREA_NAME", TRUE);
            echo $this->load->view('company/vCompanyAddressInfo', $data, true);
        }
    }

    public function getCompanyBillingInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('profile/setCallBackAddressBillingEditStore'),
					'attribute' => [
						'addressId' => $this->input->post('identity'),
						'addressDetail' => $attribute[0],
						'provinceId' => $attribute[1],
						'cityId' => $attribute[2],
						'districtId' => $attribute[3],
						'areaId' => $attribute[4],
						'postalCode' => $attribute[5]
					]
				]
			];
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$cityService = $this->LocalizationService->getCitiesByProvinceId($data['collections']['attribute']['provinceId']);
			$data['cityId'] = $this->main->setDropdownFromJson($cityService, "CITY_ID", "CITY_NAME", TRUE);
			$districtService = $this->LocalizationService->getDistrictByCityId($data['collections']['attribute']['cityId']);
			$data['districtId'] = $this->main->setDropdownFromJson($districtService, "DISTRICT_ID", "DISTRICT_NAME", TRUE);
			$areaService = $this->LocalizationService->getAreasByDistricId($data['collections']['attribute']['districtId']);
			$data['areaId'] = $this->main->setDropdownFromJson($areaService, "AREA_ID", "AREA_NAME", TRUE);
            echo $this->load->view('company/vCompanyBillingInfo', $data, true);
        }
    }

    public function getOnbehalfCustomer()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$data['cityId'] = [];
			$data['districtId'] = [];
			$data['areaId'] = [];
            echo $this->load->view('company/vOnbehalfCustomerInfo', $data, true);
        }
    }

    public function getDriverInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
            echo $this->load->view('company/vDriverInfo', $data, true);
        }
    }

    public function getVehicleInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
			$data['brand'] = [
				'hino' => 'Hino',
				'mitsubishi' => 'Mitsubishi'
			];
			$data['vehicleType'] = [
				'Engkel' => 'Engkel',
				'Cold Diesel' => 'Cold Diesel',
			];

			for($i = (date("Y") - 5) ; $i <= (date("Y")+1); $i++)
			{
				$arrYear[$i] = $i;
			}
			$data['yearOfAssemble'] = $arrYear;
			echo $this->load->view('company/vVehicleInfo', $data, true);
        }
    }

    public function getFactoryInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$data['cityId'] = [];
			$data['districtId'] = [];
			$data['areaId'] = [];
            echo $this->load->view('company/vFactoryInfo', $data, true);
        }
    }

	public function getGarageInfo()
    {
        if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
            $data = array();
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$data['cityId'] = [];
			$data['districtId'] = [];
			$data['areaId'] = [];
            echo $this->load->view('company/vGarageInfo', $data, true);
        }
    }

	public function setCallBackEditOnBehalf()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-onbehalf-store'),
					'attribute' => [
						'userId' => $attribute[0],
						'userName' => $attribute[1],
						'userRole' => $attribute[2],
						'userPhone' => $attribute[3],
						'userEmail' => $attribute[4]
					]
				]
			];
            echo $this->load->view('company/vUserInfo', $data, true);
        }
	}

    public function setCallBackProfileInfoEditPost()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyProfileEditPost();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
    }

    public function setCallBackProfileUserStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyProfileUserStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
    }

    public function setCallBackEditOnBehalfStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackEditOnBehalfStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
    }

	public function requestMaxUsers()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setRequestMaxUsers();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function referHaveTrucker()
	{
		print_r($_POST);
	}

	public function setCallBackDeleteOnBehalf()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteOnBehalf();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackCompanyPhotoProfile()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyPhotoProfile();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackAddressInfoEditStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setAddressOfficeUpdateStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}
	
	public function setCallBackAddressBillingEditStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setAddressBillingUpdateStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDriverStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyDriverStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}	
	}

	public function setCallBackEditDriver()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-driver-store'),
					'attribute' => [
						'userId' => $attribute[0],
						'userName' => $attribute[1],
						'userRole' => $attribute[2],
						'userPhone' => $attribute[3],
						'userEmail' => $attribute[4]
					]
				]
			];
            echo $this->load->view('company/vDriverInfo', $data, true);
        }
	}

	public function setCallBackEditDriverStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyEditDriverStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteDriver()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteDriver();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}	
	}
	
	public function setCallBackVechicleStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCompanyVehicleStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}	
	}

	public function setCallBackEditVehicle()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-vecicle-store'),
					'attribute' => [
						'vehicleId' => $attribute[0],
						'vehicleType' => $attribute[1],
						'vehicleNumber' => $attribute[2],
						'vehicleBrand' => $attribute[3],
						'vehicleNumberSTNK' => $attribute[4],
						'vehicleExpSTNK' => date("d/m/Y", strtotime($attribute[5])),
						'vehicleYear' => $attribute[6]
					]
				]
			];
            $data['brand'] = [
				'hino' => 'Hino',
				'mitsubishi' => 'Mitsubishi'
			];
			$data['vehicleType'] = [
				'Engkel' => 'Engkel',
				'Cold Diesel' => 'Cold Diesel',
			];

			for($i = (date("Y") - 5) ; $i <= (date("Y")+1); $i++)
			{
				$arrYear[$i] = $i;
			}
			$data['yearOfAssemble'] = $arrYear;
			echo $this->load->view('company/vVehicleInfo', $data, true);
        }
	}

	public function setCallBackEditVehicleStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackEditVehicleStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteVehicle()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteVehicle();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}	
	}
	
	public function setCallBackOnBehalfCustomerStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackOnBehalfCustomerStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEditOnBehalfCustomer()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-onbehalf-customer-store'),
					'attribute' => [
						'onBehalfId' => $attribute[0],
						'onBehalfName' => $attribute[1],
						'onBehalfNpwp' => $attribute[2],
						'onBehalfNpwpFile' => $attribute[3],
						'onBehalfProvinceId' => $attribute[4],
						'onBehalfCityId' => $attribute[5],
						'onBehalfDistrictId' => $attribute[6],
						'onBehalfAreaId' => $attribute[7],
						'onBehalfPostalCode' => $attribute[8],
						'onBehalfAddress' => $attribute[9]
					]
				]
			];
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$cityService = $this->LocalizationService->getCitiesByProvinceId($data['collections']['attribute']['onBehalfProvinceId']);
			$data['cityId'] = $this->main->setDropdownFromJson($cityService, "CITY_ID", "CITY_NAME", TRUE);
			$districtService = $this->LocalizationService->getDistrictByCityId($data['collections']['attribute']['onBehalfCityId']);
			$data['districtId'] = $this->main->setDropdownFromJson($districtService, "DISTRICT_ID", "DISTRICT_NAME", TRUE);
			$areaService = $this->LocalizationService->getAreasByDistricId($data['collections']['attribute']['onBehalfDistrictId']);
			$data['areaId'] = $this->main->setDropdownFromJson($areaService, "AREA_ID", "AREA_NAME", TRUE);
            echo $this->load->view('company/vOnbehalfCustomerInfo', $data, true);
        }
	}

	public function setCallBackEditOnBehalfCustomerStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackEditOnBehalfCustomerStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteOnBehalfCustomer()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteOnBehalfCustomer();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackFactoryStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackFactoryStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEditFactory()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-factory-store'),
					'attribute' => [
						'factoryId' => $attribute[0],
						'factoryName' => $attribute[1],
						'factoryPicName' => $attribute[2],
						'factoryOfficePhone' => $attribute[3],
						'factoryProvinceId' => $attribute[4],
						'factoryCityId' => $attribute[5],
						'factoryDistrictId' => $attribute[6],
						'factoryAreaId' => $attribute[7],
						'postalCode' => $attribute[8],
						'factoryAddress' => $attribute[9]
					]
				]
			];
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$cityService = $this->LocalizationService->getCitiesByProvinceId($data['collections']['attribute']['factoryProvinceId']);
			$data['cityId'] = $this->main->setDropdownFromJson($cityService, "CITY_ID", "CITY_NAME", TRUE);
			$districtService = $this->LocalizationService->getDistrictByCityId($data['collections']['attribute']['factoryCityId']);
			$data['districtId'] = $this->main->setDropdownFromJson($districtService, "DISTRICT_ID", "DISTRICT_NAME", TRUE);
			$areaService = $this->LocalizationService->getAreasByDistricId($data['collections']['attribute']['factoryDistrictId']);
			$data['areaId'] = $this->main->setDropdownFromJson($areaService, "AREA_ID", "AREA_NAME", TRUE);
            echo $this->load->view('company/vFactoryInfo', $data, true);
        }
	}

	public function setCallBackEditFactoryStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackEditFactoryStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteFactory()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteFactory();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackGarageStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackGarageStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackEditGarage()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$attribute = explode("|", $this->input->post('attribute'));
            $data = [
				'collections' => [
					'met' => 'update',
					'action' => site_url('my-company-edit-garage-store'),
					'attribute' => [
						'garageId' => $attribute[0],
						'garageName' => $attribute[1],
						'garagePicName' => $attribute[2],
						'garageOfficePhone' => $attribute[3],
						'garageProvinceId' => $attribute[4],
						'garageCityId' => $attribute[5],
						'garageDistrictId' => $attribute[6],
						'garageAreaId' => $attribute[7],
						'postalCode' => $attribute[8],
						'garageAddress' => $attribute[9]
					]
				]
			];
			$provinceService = $this->LocalizationService->getProvinceId();
			$data['provinceId'] = $this->main->setDropdownFromJson($provinceService, "PROVINCE_ID", "PROVINCE_NAME", TRUE);
			$cityService = $this->LocalizationService->getCitiesByProvinceId($data['collections']['attribute']['garageProvinceId']);
			$data['cityId'] = $this->main->setDropdownFromJson($cityService, "CITY_ID", "CITY_NAME", TRUE);
			$districtService = $this->LocalizationService->getDistrictByCityId($data['collections']['attribute']['garageCityId']);
			$data['districtId'] = $this->main->setDropdownFromJson($districtService, "DISTRICT_ID", "DISTRICT_NAME", TRUE);
			$areaService = $this->LocalizationService->getAreasByDistricId($data['collections']['attribute']['garageDistrictId']);
			$data['areaId'] = $this->main->setDropdownFromJson($areaService, "AREA_ID", "AREA_NAME", TRUE);
            echo $this->load->view('company/vGarageInfo', $data, true);
        }
	}

	public function setCallBackEditGarageStore()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackEditGarageStore();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteGarage()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteGarage();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackAdditionalStamp()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setAdditionalStamp();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setCallBackDeleteStamp()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->CompanyProfileService->setCallBackDeleteDigitalStamp();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function setRating()
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
						'message' => 'Request not allowed'
					],
					'data' => []
				];
				echo json_encode($response);
				die();
			}
			else
			{
				$response = $this->DashboardService->setRating();
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
					'message' => 'Request not allowed'
				],
				'data' => []
			];
			echo json_encode($response);
			die();
		}
	}

	public function getInfoMaxUser()
	{
		if(strtolower($_SERVER['REQUEST_METHOD']) == "post")
        {
			$data = [
                'profile' => $this->CompanyProfileService->getMainProfile()
            ];
            echo $this->load->view('company/vRequestUser', $data, true);
        }
	}

}