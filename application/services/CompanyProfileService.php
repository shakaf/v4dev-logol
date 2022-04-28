<?php

class CompanyProfileService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMainProfile()
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT . 'profile', array(), $this->newsession->userdata('accessToken'));
        try
        {
            if($logolRpc['status'] == 1)
            {
                return $logolRpc['data'];
            }
            else
            {
                return [];
            }
        }
        catch(Exception $e)
        {
            return [];
        }
    }

    public function setCompanyPhotoProfile()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        if($_FILES['picProfileCompany']['size'] == 0)
        {
            $response = [
                'header' => [
                    '__version' => [
                        'number' => __VESION_APP,
                        'process_time' => '',
                        'generated' => date("Y-m-d H:i:s")
                    ],
                    'error' => TRUE,
                    'message' => 'No file selected',
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
        else
        {
            $payloads = [
                'PIC_PROFILE_PICTURE' => $_FILES['picProfileCompany']['name'],
                'PIC_PROFILE_PICTURE_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['profile_picture']['tmp_name']))),
            ];
            
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/picture/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => $logolRpc['message'],
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update photo profile failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCompanyProfileEditPost()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('companyIdInfoEdit', 'Company Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('officePhoneNumberInfoEdit', 'Office Phone Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('npwpInfoEdit', 'NPWP', 'trim|required|xss_clean');
        if(empty($_FILES['npwpFileInfoEdit']['name']))
        {
            $this->form_validation->set_rules('npwpFileInfoEdit', 'NPWP File', 'trim|required|xss_clean');
        }
        $this->form_validation->set_rules('siupInfoEdit', 'SIUP/NIB Number', 'trim|required|xss_clean');
        if(empty($_FILES['siupFileInfoEdit']['name']))
        {
            $this->form_validation->set_rules('npwpFileInfoEdit', 'SIUP/NIB File', 'trim|required|xss_clean');
        }

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
        else
        {
            $payloads = [
                'COMPANY_NAME' => $this->input->post('companyIdInfoEdit'), 
                'OFFICE_PHONE' => $this->input->post('officePhoneNumberInfoEdit'), 
                'COMPANY_NPWP' => $this->input->post('npwpInfoEdit'),
                'COMPANY_NPWP_FILE_NAME' => $_FILES['npwpFileInfoEdit']['name'],
                'COMPANY_NPWP_FILE_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['npwpFileInfoEdit']['tmp_name']))),
                'COMPANY_SIUP' => $this->input->post('siupInfoEdit'),
                'COMPANY_SIUP_FILE_NAME' => $_FILES['siupFileInfoEdit']['name'],
                'COMPANY_SIUP_FILE_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['siupFileInfoEdit']['tmp_name']))),
                'HAVE_REFER_TRUCKER' => $companyAttribute['have_refer_trucker']
            ];
            
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/companyInfo/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => $logolRpc['message'],
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update data company failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCompanyProfileUserStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('userName', 'User Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userRole', 'User Role', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userPhone', 'User Phone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userEmail', 'User Email', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'PIC_NAME' => $this->input->post('userName'), 
                'PIC_MOBILE_PHONE' => $this->input->post('userPhone'), 
                'USER_EMAIL' => $this->input->post('userEmail'),
                'ROLE_ID' => $this->input->post('userRole'),
                'IS_MAIN_USER' => 0
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/user/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">' . $payloads['PIC_NAME'] . '</td><td class="col-p0">' . $payloads['PIC_MOBILE_PHONE'] . '</td><td class="col-p0">' . $payloads['USER_EMAIL'] . '</td><td class="col-p0">Customer Finance</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-edit-onbehalf') .'" data-title="Edit Onbehalf of Customer" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8  class="col-p0""><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-delete-onbehalf') .'" data-title="Edit Onbehalf of Customer" data-width="683px;"><img src="'. base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Adding user failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackEditOnBehalfStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('userName', 'User Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userRole', 'User Role', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userPhone', 'User Phone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userEmail', 'User Email', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'USER_ID' => $this->input->post('userId'),
                'PIC_NAME' => $this->input->post('userName'), 
                'PIC_MOBILE_PHONE' => $this->input->post('userPhone'), 
                'USER_EMAIL' => $this->input->post('userEmail'),
                'ROLE_ID' => $this->input->post('userRole'),
                'IS_MAIN_USER' => 0
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/user/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">' . $payloads['PIC_NAME'] . '</td><td class="col-p0">' . $payloads['PIC_MOBILE_PHONE'] . '</td><td class="col-p0">' . $payloads['USER_EMAIL'] . '</td><td class="col-p0">Customer Finance</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-edit-onbehalf') .'" data-title="Edit Onbehalf of Customer" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8  class="col-p0""><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-delete-onbehalf') .'" data-title="Edit Onbehalf of Customer" data-width="683px;"><img src="'. base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('userId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Adding user failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setRequestMaxUsers()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'Maximum user', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'NUMBER_OF_USER' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/numberOfUser/request', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Request add maximum users success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Request maximum user failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackDeleteOnBehalf()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'On Behalf', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'USER_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/user/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove user onbehalf failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setAddressOfficeUpdateStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('addressDetailManual')) && empty($this->input->post('addressDetailPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailManual', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('addressDetailManual')) && !empty($this->input->post('addressDetailPin')))
        {
            $this->form_validation->set_rules('addressDetailPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailPin', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('addressDetailManual', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $payloads = [
                "ADDRESS_ID" => $this->input->post('addressId'),
                "ADDRESS_TYPE" => "office",
                "COUNTRY_ID" => "1",
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "ADDRESS_DETAIL" => (!empty($this->input->post('addressDetailManual')) ? $this->input->post('addressDetailManual') : $this->input->post('addressDetailPin'))
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/addressOffice/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [
                                'action' => true,
                                'callBack' => site_url('my-company-profile')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update office address failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setAddressBillingUpdateStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('addressDetailManual')) && empty($this->input->post('addressDetailPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailManual', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('addressDetailManual')) && !empty($this->input->post('addressDetailPin')))
        {
            $this->form_validation->set_rules('addressDetailPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailPin', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('addressDetailManual', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('addressDetailPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $payloads = [
                "ADDRESS_ID" => $this->input->post('addressId'),
                "ADDRESS_TYPE" => "billing",
                "COUNTRY_ID" => "1",
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "ADDRESS_DETAIL" => (!empty($this->input->post('addressDetailManual')) ? $this->input->post('addressDetailManual') : $this->input->post('addressDetailPin'))
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/addressBilling/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [
                                'action' => true,
                                'callBack' => site_url('my-company-profile')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update office address failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCompanyDriverStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('driverName', 'Driver Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('driverPhoneNumber', 'Driver Phone Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('driverEmail', 'Driver Email', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                "PIC_NAME" => $this->input->post('driverName'),
                "PIC_MOBILE_PHONE" => $this->input->post('driverPhoneNumber'),
                "USER_EMAIL" => $this->input->post('driverEmail'),
                "ROLE_ID" => "ROL0025"
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/driver/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">' . $payloads['PIC_NAME'] . '</td><td class="col-p0">' . $payloads['PIC_MOBILE_PHONE'] . '</td><td class="col-p0">' . $payloads['USER_EMAIL'] . '</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-edit-driver') .'" data-title="Edit Driver" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8  class="col-p0""><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-delete-driver') .'" data-title="Delete Driver" data-width="683px;"><img src="'. base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Adding driver failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCompanyEditDriverStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('driverName', 'Driver Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('driverPhoneNumber', 'Driver Phone Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('driverEmail', 'Driver Email', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                "USER_ID" => $this->input->post('userId'),
                "PIC_NAME" => $this->input->post('driverName'),
                "PIC_MOBILE_PHONE" => $this->input->post('driverPhoneNumber'),
                "USER_EMAIL" => $this->input->post('driverEmail'),
                "ROLE_ID" => "ROL0025"
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/driver/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">' . $payloads['PIC_NAME'] . '</td><td class="col-p0">' . $payloads['PIC_MOBILE_PHONE'] . '</td><td class="col-p0">' . $payloads['USER_EMAIL'] . '</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-edit-driver') .'" data-title="Edit Driver" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8  class="col-p0""><a href="javascript:void(0);" class="v4-href-dialog" data-url="' . site_url('my-company-delete-driver') .'" data-title="Delete Driver" data-width="683px;"><img src="'. base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('userId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update driver failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackDeleteDriver()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'On Behalf', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'USER_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/driver/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove driver failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCompanyVehicleStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('vehicleNumber', 'Vehicle Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleBrand', 'Vehicle Brand', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleType', 'Vehicle Type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleNumberSTNK', 'Vehicle Number STNK', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleNoTid', 'Vehicle TID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleExpSTNK', 'Vehicle Exp STNK', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleYear', 'Vehicle Year', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                "FLEET_TYPE_ID" => "302B34CE990D11EC86DB42010A940002",
                "FLEET_TYPE_NAME" => $this->input->post('vehicleType'),
                "VEHICLE_NUMBER" => $this->input->post('vehicleNumber'),
                "VEHICLE_BRAND" => $this->input->post('vehicleBrand'),
                "STNK_NUMBER" => $this->input->post('vehicleNumberSTNK'),
                "STNK_EXP_DATE" => $this->input->post('vehicleExpSTNK'),
                "TID_NUMBER" => $this->input->post('vehicleNoTid'),
                "YEAR_OF_ASSEMBLE" => $this->input->post('vehicleYear'),
                "IS_TRACK" => 0
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/vehicle/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['VEHICLE_NUMBER'].'</td><td class="col-p0">' . $payloads['VEHICLE_BRAND']. '</td><td class="col-p0">' . $payloads['FLEET_TYPE_NAME'] . '</td><td class="col-p0">' . $payloads['STNK_NUMBER'] . '</td><td class="col-p0">' . $payloads['STNK_EXP_DATE'] . '</td><td class="col-p0">' . $payloads['TID_NUMBER']. '</td><td class="col-p0">' . $payloads['YEAR_OF_ASSEMBLE']. '</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-vehicle'). '" data-title="Edit Vehicle" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-vehicle') . '" data-floating-header="Remove Vehicle?" data-floating-message="Are you sure to delete this vehicle?" id="<?= rand(); ?>"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Adding vehicle failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }   
    }

    public function setCallBackEditVehicleStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('vehicleNumber', 'Vehicle Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleBrand', 'Vehicle Brand', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleType', 'Vehicle Type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleNumberSTNK', 'Vehicle Number STNK', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleNoTid', 'Vehicle TID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleExpSTNK', 'Vehicle Exp STNK', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicleYear', 'Vehicle Year', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                "VEHICLE_ID" => $this->input->post('vehicleId'),
                "FLEET_TYPE_ID" => "302B34CE990D11EC86DB42010A940002",
                "FLEET_TYPE_NAME" => $this->input->post('vehicleType'),
                "VEHICLE_NUMBER" => $this->input->post('vehicleNumber'),
                "VEHICLE_BRAND" => $this->input->post('vehicleBrand'),
                "STNK_NUMBER" => $this->input->post('vehicleNumberSTNK'),
                "STNK_EXP_DATE" => $this->input->post('vehicleExpSTNK'),
                "TID_NUMBER" => $this->input->post('vehicleNoTid'),
                "YEAR_OF_ASSEMBLE" => $this->input->post('vehicleYear'),
                "IS_TRACK" => 0
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/vehicle/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['VEHICLE_NUMBER'].'</td><td class="col-p0">' . $payloads['VEHICLE_BRAND']. '</td><td class="col-p0">' . $payloads['FLEET_TYPE_NAME'] . '</td><td class="col-p0">' . $payloads['STNK_NUMBER'] . '</td><td class="col-p0">' . $payloads['STNK_EXP_DATE'] . '</td><td class="col-p0">' . $payloads['TID_NUMBER']. '</td><td class="col-p0">' . $payloads['YEAR_OF_ASSEMBLE']. '</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-vehicle'). '" data-title="Edit Vehicle" data-width="683px;"><img src="' . base_url() . 'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-vehicle') . '" data-floating-header="Remove Vehicle?" data-floating-message="Are you sure to delete this vehicle?" id="<?= rand(); ?>"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('vehicleId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Adding vehicle failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }  
    }

    public function setCallBackDeleteVehicle()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'On Behalf', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'VEHICLE_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/vehicle/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove vehicle failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackOnBehalfCustomerStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('onBehalfCustomerName', 'On Behalf Customer Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('npwpOnBehalfCustomer', 'NPWP On Behalf', 'trim|required|xss_clean');
        $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
        $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
        $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
        $this->form_validation->set_rules('addressOnBehalf', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        if(empty($_FILES['npwpFileOnBehalf']['name']))
        {
            $this->form_validation->set_rules('npwpFileOnBehalf', 'NPWP File', 'trim|required|xss_clean');
        }

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
        else
        {
            $payloads = [
                "ONBEHLAF_NAME" => $this->input->post('onBehalfCustomerName'),
                "ONBEHALF_NPWP" => $this->input->post('npwpOnBehalfCustomer'),
                'ONBEHALF_NPWP_FILE_NAME' => $_FILES['npwpFileOnBehalf']['name'],
                'ONBEHALF_NPWP_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['npwpFileOnBehalf']['tmp_name']))),
                "COUNTRY_ID" => 1,
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "ONBEHALF_ADDRESS" => $this->input->post('addressOnBehalf')
            ];
            
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['ONBEHALF_NPWP'] . '</td><td class="col-p0">'. $payloads['ONBEHLAF_NAME'] .'</td><td class="col-p0">'. $payloads['ONBEHALF_ADDRESS'] .'</td><td class="col-p0"><a href="#" target="_blank">NPWP File</a></td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-onbehalf-customer') . '" data-title="Edit On Behalf Customer" data-width="683px;"><img src="'. base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-onbehalf-customer') . '" data-floating-header="Remove On Behalf Customer?" data-floating-message="Are you sure to delete this on behalf customer?" id="<?= rand(); ?>"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => $logolRpc['message'],
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Add on behlaf of custmer failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }  
    }

    public function setCallBackEditOnBehalfCustomerStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('onBehalfCustomerName', 'On Behalf Customer Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('npwpOnBehalfCustomer', 'NPWP On Behalf', 'trim|required|xss_clean');
        $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
        $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
        $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
        $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
        $this->form_validation->set_rules('addressOnBehalf', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        if(empty($_FILES['npwpFileOnBehalf']['name']))
        {
            $this->form_validation->set_rules('npwpFileOnBehalf', 'NPWP File', 'trim|required|xss_clean');
        }

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
        else
        {
            $payloads = [
                "ONBEHLAF_ID" => $this->input->post('onBehalfId'),
                "ONBEHLAF_NAME" => $this->input->post('onBehalfCustomerName'),
                "ONBEHALF_NPWP" => $this->input->post('npwpOnBehalfCustomer'),
                'ONBEHALF_NPWP_FILE_NAME' => $_FILES['npwpFileOnBehalf']['name'],
                'ONBEHALF_NPWP_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['npwpFileOnBehalf']['tmp_name']))),
                "COUNTRY_ID" => 1,
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "ONBEHALF_ADDRESS" => $this->input->post('addressOnBehalf')
            ];
            
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr id="' . $payloads['ONBEHLAF_ID']. '" v-attribute="'. $payloads['ONBEHLAF_ID'] .'|'. $payloads['ONBEHALF_NPWP'] .'|'. $payloads['ONBEHALF_NPWP'].'|'.$payloads['ONBEHALF_NPWP_FILE_NAME'] . '|' . $payloads['PROVINCE_ID'] . '|' . $payloads['CITY_ID'] . '|' . $payloads['DISTRICT_ID']. '|' . $payloads['AREA_ID']. '|' . $payloads['POSTAL_CODE']. '|' . $payloads['ONBEHALF_ADDRESS'] . '"><td class="col-p0">'. $payloads['ONBEHALF_NPWP'] . '</td><td class="col-p0">'. $payloads['ONBEHLAF_NAME'] .'</td><td class="col-p0">'. $payloads['ONBEHALF_ADDRESS'] .'</td><td class="col-p0"><a href="#" target="_blank">NPWP File</a></td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-onbehalf-customer') . '" data-title="Edit On Behalf Customer" data-width="683px;"><img src="'. base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-onbehalf-customer') . '" data-floating-header="Remove On Behalf Customer?" data-floating-message="Are you sure to delete this on behalf customer?" id="<?= rand(); ?>"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('onBehalfId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Add on behlaf of custmer failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        } 
    }

    public function setCallBackDeleteOnBehalfCustomer()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'On Behalf', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'ONBEHLAF_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove on behalf failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackFactoryStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('factoryAddress')) && empty($this->input->post('factoryAddressPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddress', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('factoryAddress')) && !empty($this->input->post('factoryAddressPin')))
        {
            $this->form_validation->set_rules('factoryAddressPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddressLatLong', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('factoryAddress', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddressPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $arrLatLong = [];
            if(!empty($this->input->post('factoryAddressLatLong')))
            {
                $arrLatLong = explode(",", $this->input->post('factoryAddressLatLong'));
            }
            $payloads = [
                "FACTORY_NAME" => $this->input->post('factoryName'),
                "FACTORY_PIC_NAME" => $this->input->post('factoryPicName'),
                "FACTORY_MOBILE_PHONE" => $this->input->post('factoryMobilePhone'),
                "FACTORY_OFFICE_PHONE" => $this->input->post('factoryOfficePhone'),
                "COUNTRY_ID" => "1",
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "FACTORY_ADDRESS" => (!empty($this->input->post('factoryAddress')) ? $this->input->post('factoryAddress') : $this->input->post('factoryAddressPin')),
                "GEO_LONGITUDE" => $arrLatLong[0],
                "GEO_LATITUDE" => $arrLatLong[1]
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/factory/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['FACTORY_NAME'] .'</td><td class="col-p0">'. $payloads['FACTORY_PIC_NAME'] .'</td><td class="col-p0">'. $payloads['FACTORY_OFFICE_PHONE'] .'</td><td class="col-p0">'. $payloads['FACTORY_MOBILE_PHONE'] .'</td><td class="col-p0">'. $payloads['FACTORY_ADDRESS'] .'</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-factory') .'" data-title="Edit Factory" data-width="683px;"><img src="' . base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-factory') . '" data-floating-header="Remove Factory?" data-floating-message="Are you sure to delete this factory?" id="'. rand() .'"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Add factory failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackEditFactoryStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('factoryAddress')) && empty($this->input->post('factoryAddressPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddress', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('factoryAddress')) && !empty($this->input->post('factoryAddressPin')))
        {
            $this->form_validation->set_rules('factoryAddressPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddressLatLong', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('factoryAddress', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('factoryAddressPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $arrLatLong = [];
            if(!empty($this->input->post('factoryAddressLatLong')))
            {
                $arrLatLong = explode(",", $this->input->post('factoryAddressLatLong'));
            }
            $payloads = [
                "FACTORY_ID" => $this->input->post('factoryId'),
                "GEOFENCE_ID" => "93D8D28E34EA4BB1A82CA3B03259FC99",
                "FACTORY_NAME" => $this->input->post('factoryName'),
                "FACTORY_PIC_NAME" => $this->input->post('factoryPicName'),
                "FACTORY_MOBILE_PHONE" => $this->input->post('factoryMobilePhone'),
                "FACTORY_OFFICE_PHONE" => $this->input->post('factoryOfficePhone'),
                "COUNTRY_ID" => "1",
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "FACTORY_ADDRESS" => (!empty($this->input->post('factoryAddress')) ? $this->input->post('factoryAddress') : $this->input->post('factoryAddressPin')),
                "GEO_LONGITUDE" => $arrLatLong[0],
                "GEO_LATITUDE" => $arrLatLong[1]
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/factory/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['FACTORY_NAME'] .'</td><td class="col-p0">'. $payloads['FACTORY_PIC_NAME'] .'</td><td class="col-p0">'. $payloads['FACTORY_OFFICE_PHONE'] .'</td><td class="col-p0">'. $payloads['FACTORY_MOBILE_PHONE'] .'</td><td class="col-p0">'. $payloads['FACTORY_ADDRESS'] .'</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-factory') .'" data-title="Edit Factory" data-width="683px;"><img src="' . base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-factory') . '" data-floating-header="Remove Factory?" data-floating-message="Are you sure to delete this factory?" id="'. rand() .'"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('factoryId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Edit factory failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackDeleteFactory()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'Factory ID', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'FACTORY_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/factory/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove factory failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackGarageStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('garageAddress')) && empty($this->input->post('garageAddressPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddress', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('garageAddress')) && !empty($this->input->post('garageAddressPin')))
        {
            $this->form_validation->set_rules('garageAddressPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddressLatLong', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('garageAddress', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddressPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $arrLatLong = [];
            if(!empty($this->input->post('garageAddressLatLong')))
            {
                $arrLatLong = explode(",", $this->input->post('garageAddressLatLong'));
            }
            $payloads = [
                "GARAGE_NAME" => $this->input->post('garageName'),
                "GARAGE_PIC_NAME" =>  $this->input->post('garagePicName'),
                "GARAGE_MOBILE_PHONE" =>  $this->input->post('garageMobilePhone'),
                "GARAGE_OFFICE_PHONE" =>  $this->input->post('garageOfficePhone'),
                "COUNTRY_ID" => 1,
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "GARAGE_ADDRESS" => (!empty($this->input->post('garageAddress')) ? $this->input->post('garageAddress') : $this->input->post('garageAddressPin')),
                "GEO_LONGITUDE" =>  $arrLatLong[0],
                "GEO_LATITUDE" => $arrLatLong[1]
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/garage/insert', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['GARAGE_NAME'] .'</td><td class="col-p0">'. $payloads['GARAGE_PIC_NAME'] .'</td><td class="col-p0">'. $payloads['GARAGE_OFFICE_PHONE'] .'</td><td class="col-p0">'. $payloads['GARAGE_MOBILE_PHONE'] .'</td><td class="col-p0">'. $payloads['GARAGE_ADDRESS'] .'</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-garage') .'" data-title="Garage Factory" data-width="683px;"><img src="' . base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-garage') . '" data-floating-header="Remove Garage?" data-floating-message="Are you sure to delete this garage?" id="'. rand() .'"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Add factory failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackEditGarageStore()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];

        if(!empty($this->input->post('garageAddress')) && empty($this->input->post('garageAddressPin')))
        {
            $this->form_validation->set_rules('provinceId', 'Province', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cityId', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('districtId', 'District', 'trim|required|xss_clean');
            $this->form_validation->set_rules('areaId', 'Area', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddress', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postalCode', 'Postal Code', 'trim|required|xss_clean');
        }
        else if(empty($this->input->post('garageAddress')) && !empty($this->input->post('garageAddressPin')))
        {
            $this->form_validation->set_rules('garageAddressPin', 'Address', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddressLatLong', 'Address latitude longitude', 'trim|required|xss_clean');
        }
        else
        {
            $this->form_validation->set_rules('garageAddress', 'Address manual', 'trim|required|xss_clean');
            $this->form_validation->set_rules('garageAddressPin', 'Address with pin point', 'trim|required|xss_clean');
        }
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
        else
        {
            $arrLatLong = [];
            if(!empty($this->input->post('garageAddressLatLong')))
            {
                $arrLatLong = explode(",", $this->input->post('garageAddressLatLong'));
            }
            $payloads = [
                "GARAGE_ID" => $this->input->post('garageId'),
                "GEOFENCE_ID" => "93D8D28E34EA4BB1A82CA3B03259FC99",
                "GARAGE_NAME" => $this->input->post('garageName'),
                "GARAGE_PIC_NAME" => $this->input->post('garagePicName'),
                "GARAGE_MOBILE_PHONE" => $this->input->post('garageMobilePhone'),
                "GARAGE_OFFICE_PHONE" => $this->input->post('garageOfficePhone'),
                "COUNTRY_ID" => "1",
                "PROVINCE_ID" => $this->input->post('provinceId'),
                "CITY_ID" => $this->input->post('cityId'),
                "DISTRICT_ID" => $this->input->post('districtId'),
                "AREA_ID" => $this->input->post('areaId'),
                "POSTAL_CODE" => $this->input->post('postalCode'),
                "GARAGE_ADDRESS" => (!empty($this->input->post('garageAddress')) ? $this->input->post('garageAddress') : $this->input->post('garageAddressPin')),
                "GEO_LONGITUDE" => $arrLatLong[0],
                "GEO_LATITUDE" => $arrLatLong[1]
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/garage/update', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    $bodyContent = '<tr><td class="col-p0">'. $payloads['GARAGE_NAME'] .'</td><td class="col-p0">'. $payloads['GARAGE_PIC_NAME'] .'</td><td class="col-p0">'. $payloads['GARAGE_OFFICE_PHONE'] .'</td><td class="col-p0">'. $payloads['GARAGE_MOBILE_PHONE'] .'</td><td class="col-p0">'. $payloads['GARAGE_ADDRESS'] .'</td><td class="col-p0"><span class="v4-hr-btn v4-btn-grey"><a href="javascript:void(0);" class="v4-edit-attribute" data-url="' . site_url('my-company-edit-garage') .'" data-title="Edit Garage" data-width="683px;"><img src="' . base_url() .'assets/images/v4-edit-icon.png"></a></span><span class="v4-hr-btn v4-btn-delete-low v4-btn-ml-8"><a href="javascript:void(0);" class="v4-confirm-floating" data-floating-type="confirm" data-floating-url="' . site_url('my-company-delete-garage') . '" data-floating-header="Remove Garage?" data-floating-message="Are you sure to delete this garage?" id="'. rand() .'"><img src="' . base_url() . 'assets/images/v4-delete-icon.png"></a></span></td></tr>';
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Success',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $bodyContent,
                                'action' => 'update',
                                'wrapper' => $this->input->post('garageId')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Edit garage failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackDeleteGarage()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'Garage ID', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'GARAGE_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/garage/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [],
                            'collection' => [
                                'htmlFormat' => $this->input->post('q'),
                                'action' => 'remove'
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove garage failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setAdditionalStamp()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        if($_FILES['digitalStamp']['size'] == 0)
        {
            $response = [
                'header' => [
                    '__version' => [
                        'number' => __VESION_APP,
                        'process_time' => '',
                        'generated' => date("Y-m-d H:i:s")
                    ],
                    'error' => TRUE,
                    'message' => 'No file selected',
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
        else
        {
            $action = ($this->input->post('action') == 'insert' ? 'insert' : 'update');
            if($action == 'insert')
            {
                $payloads = [
                    'ADD_INFO_TYPE' => 'DigiStamp',
                    'ADD_INFO_TYPE_NAME' => $_FILES['digitalStamp']['name'],
                    'ADD_INFO_TYPE_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['digitalStamp']['tmp_name']))),
                ];
            }
            else 
            {
                $payloads = [
                    'ADD_INFO_ID' => $this->input->post('digiStampId'),
                    'ADD_INFO_TYPE' => 'DigiStamp',
                    'ADD_INFO_TYPE_NAME' => $_FILES['digitalStamp']['name'],
                    'ADD_INFO_TYPE_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['digitalStamp']['tmp_name']))),
                ];

            }
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/addInfo/digiStamp/' . $action, $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => $logolRpc['message'],
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [
                                'action' => true,
                                'callBack' => site_url('my-company-profile')
                            ],
                            'collection' => []
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Update digital stamp failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }

    public function setCallBackDeleteDigitalStamp()
    {
        $this->load->library('form_validation');
        $csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $companyAttribute = $this->newsession->userdata('companyAttribute');
        $result = [];
        $this->form_validation->set_rules('q', 'Digital Stamp', 'trim|required|xss_clean');
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
        else
        {
            $payloads = [
                'ADD_INFO_ID' => $this->input->post('q')
            ];
            $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/addInfo/digiStamp/delete', $payloads, $this->newsession->userdata('accessToken'));
            try
            {
                if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => FALSE,
                            'message' => 'Your data has been successfully submited',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 200
                            ],
                            'redirect' => [
                                'action' => true,
                                'callBack' => site_url('my-company-profile')
                            ]
                        ]
                    ];
                }
                else 
                {
                    return [
                        'header' => [
                            '__version' => [
                                'number' => __VESION_APP,
                                'process_time' => '',
                                'generated' => date("Y-m-d H:i:s")
                            ],
                            'error' => TRUE,
                            'message' => 'Remove digital stamp failed',
                            'csrf_v4kalibaru' => $csrfRefreshTokens
                        ],
                        'data' => [
                            'status' => [
                                'code' => 201
                            ],
                            'redirect' => [],
                            'collection' => []
                        ]
                    ];
                }   
            }
            catch(Exception $e)
            {
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Something when wrong',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 400
                        ],
                        'redirect' => [],
                        'collection' => []
                    ]
                ];
            }
        }
    }


}