<?php

class LoginService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function doLogin()
    {
        $this->load->library('recaptcha');
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $recaptcha  = $this->input->post('g-recaptcha-response');
        //$response = $this->recaptcha->verifyResponse($recaptcha);
        $response = array("success" => true); //bypass recaptcha validation
        
        
        $this->form_validation->set_rules('emailAddress', 'Email', 'trim|required|valid_email|xss_clean');
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
            exit();
        }

        if (!isset($response['success']) || $response['success'] <> true)
        {
            $response = [
                'header' => [
                    '__version' => [
                        'number' => __VESION_APP,
                        'process_time' => '',
                        'generated' => date("Y-m-d H:i:s")
                    ],
                    'error' => TRUE,
                    'message' => 'Recaptcha authentication failed, access denied. Please reload your browser',
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
            exit();
        }
        
        $payloads = [
            'email' => $this->input->post('emailAddress'),
            'password' => $this->input->post('password')
        ]; 
        try
        {
            $logolRpc = $Curladapter->logolServices(CHECK_POINT . 'do_login', $payloads);
            if($logolRpc['status'] == 1)
            {
                $tokenParts = explode(".", $logolRpc['data']['accessToken']);  
                $tokenHeader = base64_decode($tokenParts[0]);
                $tokenPayload = base64_decode($tokenParts[1]);
                $jwtHeader = json_decode($tokenHeader);
                $jwtPayload = json_decode($tokenPayload, true);
                $session['loggedIn'] = TRUE;
                $session['accessToken'] = $logolRpc['data']['accessToken'];
                $session['refreshToken'] = $logolRpc['data']['refreshToken'];
                $session['tokenValidity'] = $jwtPayload['exp'];
                $session['companyAttribute'] = $jwtPayload['claims']['company_info'];
                $session['userAttribute'] = $jwtPayload['claims']['user_info'];
                $session['qtyUserRequest'] = $jwtPayload['claims']['company_info']['qty_user_request'];
                $session['dataIsComplete'] = $jwtPayload['claims']['company_info']['data_is_complete'];
                $session['isMainUser'] = $jwtPayload['claims']['user_info']['is_main_user'];
                $menuAttribute = $logolRpc['data']['menu'];
                for($i = 0; $i < count($menuAttribute); $i++)
                {
                    $menuTransform = ($menuAttribute[$i]['menu_parent_id'] == -1 ? 0 : $menuAttribute[$i]['menu_parent_id']);
                    if($menuAttribute[$i]['menu_name_alias'] == 'New Registrant')
                    {
                        $menuUrl = site_url('home/verification');
                    }
                    else if($menuAttribute[$i]['menu_name_alias'] == 'Profile')
                    {
                        $menuUrl = site_url('my-company-profile');
                    }
                    else
                    {
                        $menuUrl = site_url(strtolower(str_replace(' ', '-', $menuAttribute[$i]['menu_name_alias'])));
                    }
                    $session['menuAttribute'][$menuTransform][] = [
                        'menu_mapping_id' => $menuAttribute[$i]['menu_mapping_id'], 
                        'menu_id' => $menuAttribute[$i]['menu_id'],
                        'menu_alias_name' => $menuAttribute[$i]['menu_name_alias'],
                        'menu_parent_id' => $menuTransform,
                        'menu_seq' => $menuAttribute[$i]['menu_seq'],
                        'menu_url' => $menuUrl, //($menuAttribute[$i]['menu_name_alias'] == 'New Registrant' ? site_url('home/verification') : site_url(strtolower(str_replace(' ', '-', $menuAttribute[$i]['menu_name_alias'])))),
                        'menu_icon' => $menuAttribute[$i]['menu_icon']
                    ];
                }
                $session['loginTime'] = $jwtPayload['claims']['login_time'];
                $session['uid'] = $jwtPayload['claims']['uid'];
                $session['email'] = $jwtPayload['claims']['email'];
                $session['roleId'] = $jwtPayload['claims']['role_id'];
                $session['statusId'] = $jwtPayload['claims']['status_id'];
                $session['isNle'] = $jwtPayload['claims']['is_nle'];
                $session['picName'] = $jwtPayload['claims']['pic_name'];
                $session['picProfilePicture'] = $jwtPayload['claims']['pic_profile_picture'];
                $session['picMobilePhone'] = $jwtPayload['claims']['pic_mobile_phone'];
                $session['companyId'] = $jwtPayload['claims']['company_id'];
                $session['companyName'] = $jwtPayload['claims']['company_name'];
                $session['companyNpwp'] = $jwtPayload['claims']['company_npwp'];
                $session['userStatus'] = $jwtPayload['claims']['user_status'];
                $this->newsession->set_userdata($session);
                $response = [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => FALSE,
                        'message' => 'Authentication succesfully',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 200
                        ],
                        'redirect' => [
                            'action' => TRUE,
                            'callBack' => site_url('dashboard')
                        ],
                        'collection' => []
                    ]
                ];
                return $response;
            }
            else
            {
                $response = [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Authentication failed',
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
            }
        }
        catch (Exception $e)
        {
            $response = [
                'header' => [
                    '__version' => [
                        'number' => __VESION_APP,
                        'process_time' => '',
                        'generated' => date("Y-m-d H:i:s")
                    ],
                    'error' => TRUE,
                    'message' => 'Authentication failed',
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
        }
    }
}