<?php

class DashboardService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMenuDashboard($data, $parent=0) 
    {
        static $i = 1;
        $tab = str_repeat("\t\t", $i);
        if (isset($data[$parent]))
        {
            if($data[$parent]['0']['menu_id'] == 1 || $data[$parent]['0']['menu_id'] == 2 || $data[$parent]['0']['menu_id'] == 3)
            {
                $html = "\n$tab<ul class=\"nav-links\">";
            }
            else
            {
                if((int)$parent > 1) $html = '<i class="dropdown-carets bx bxs-chevron-down arrow"></i>';
                $html .= "\n$tab<ul" . ((int)$parent > 1 ? ' class="sub-menus" ' : '') . ">";
            }
            $i++;
            foreach ($data[$parent] as $v) 
            {
                $child = $this->getMenuDashboard($data, $v['menu_id']);
                $html .= "\n\t$tab<li>";
                if($v['menu_parent_id'] == 0)
                {
					$html .= '<a href="' . $v['menu_url'] . '">';
                    $html .= '<i class="' . $v['menu_icon'] . '"></i>';
                    $html .= '<span class="link-name">' . $v['menu_alias_name'] . '</span>';
					$html .= '</a>';
                }
                else
                {
                    $html .= '<a href="' . $v['menu_url'] . '">';
                    $html .= $v['menu_alias_name']. '</span>';
                    $html .= '</a>';
                }

                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "\n\t$tab";
                }
                $html .= '</li>';

            }
            $html .= "\n$tab</ul>";
            return $html;
        }
        else
        {
            return false;
        }
    }

    public function isCompleteProfile()
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT . 'completeTheData/checking', array(), $this->newsession->userdata('accessToken'));
        try
        {
            if($logolRpc['status'] == 1) 
            {
                $requirement = [];
				$showRating = false;
				$logolRating = $Curladapter->logolServicesGet(CHECK_POINT . 'profile/rating/checking', array(), $this->newsession->userdata('accessToken'));
				if($logolRating['status'] == 1) {
					if($logolRating['data'][0]['RATING_INFO'] == 0){
						$showRating = true;
					}
				}
				if(!empty($logolRpc['data']['REQUIREMENT_INFO'])){
					$countRequirement = count($logolRpc['data']['REQUIREMENT_INFO']);
					if($countRequirement > 0)
					{
						foreach($logolRpc['data']['REQUIREMENT_INFO'] as $key => $val) 
						{
							if($key == 'BASIC_INFO') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('my-company-info-edit'),
									'title' => 'Company Info',
									'width' => '677px'
								];
							}
							else if($key == 'ACCOUNT_INFO') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('profile/getUserInfo'),
									'title' => 'Add User',
									'width' => '677px'
								];
							}
							else if($key == 'SIUP_NIB') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('my-company-info-edit'),
									'title' => 'Company Info',
									'width' => '677px'
								];
							}
							else if($key == 'OFFICE_ADDRESS') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('my-company-address-info'),
									'title' => 'Address Info',
									'width' => '683px'
								];
							}
							else if($key == 'BILLING_ADDRESS') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('my-company-billing-info'),
									'title' => 'Billing Address',
									'width' => '683px'
								];
							}
							else if($key == 'FACTORY_ADDRESS') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('profile/getFactoryInfo'),
									'title' => 'Add Factory',
									'width' => '683px'
								];
							}
							else if($key == 'GARAGE_ADDRESS') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('profile/getGarageInfo'),
									'title' => 'Add Garage',
									'width' => '683px'
								];
							}
							else if($key == 'DRIVER_INFO') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('profile/getDriverInfo'),
									'title' => 'Add Driver',
									'width' => '683px'
								];
							}
							else if($key == 'VEHICLE_INFO') 
							{
								$requirement[$key] = [
									'complete' => $val,
									'url' => site_url('profile/getVehicleInfo'),
									'title' => 'Add Vehicle',
									'width' => '683px'
								];
							}
						}
					}
				}
                $result = [
                    'error' => FALSE,
                    'message' => $logolRpc['message'],
                    'percentage' => (!empty($logolRpc['data']['PERCENT_OF_COMPLETE']) ? $logolRpc['data']['PERCENT_OF_COMPLETE'] : ""),
                    'requirement' => $requirement,
					'showRating' => $showRating
                ];
            }
            else
            {
                $result = [
                    'error' => TRUE,
                    'message' => $logolRpc['message']
                ];
            }
            return $result;
        }
        catch(Exception $e)
        {
            return [];
        }
    }
	
	public function setRating(){
		$this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
		$this->form_validation->set_rules('ratingValue', 'Rating Star', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ratingRemark', 'Rating Comment', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE)
        {
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
        }else{
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'http://34.87.19.200:4000/api/v4/profile/rating/insert',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS =>'{
				  "RATING_LOC":"PROFILE",
				  "RATING_VALUE":"'.$this->input->post('ratingValue').'",
				  "RATING_REMARKS":"'.$this->input->post('ratingRemark').'"
				}
			',
			  CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer '.$this->newsession->userdata('accessToken'),
				'Content-Type: application/json'
			  ),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$arrRating 	= json_decode($response, true);
			if(!empty($arrRating)){
				if($arrRating['status'] == 1){
					$response = [
						'header' => [
							'__version' => [
								'number' => __VESION_APP,
								'process_time' => '',
								'generated' => date("Y-m-d H:i:s")
							],
							'error' => FALSE,
							'message' => 'Give Rating succesfully',
							'csrf_v4kalibaru' => $csrfRefreshTokens
						],
						'data' => [
							'status' => [
								'code' => 200
							],
							'redirect' => [
								'action' => TRUE,
								'callBack' => site_url('my-company-profile')
							],
							'collection' => []
						]
					];
					return $response;
				}else{
					$response = [
						'header' => [
							'__version' => [
								'number' => __VESION_APP,
								'process_time' => '',
								'generated' => date("Y-m-d H:i:s")
							],
							'error' 			=> TRUE,
							'message' 			=> "Give Rating Failed",
							'csrf_v4kalibaru' 	=> $csrfRefreshTokens
						],
						'data' => [
							'status' => [
								'code' => 403
							],
							'collection' => []
						]
					];
					return $response;
				}
			}
		}
	}

}