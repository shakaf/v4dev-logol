<?php
class OnbehalfService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getOnbehalf(){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT . 'profile', array(), $this->newsession->userdata('accessToken'));
        try
        {
            if($logolRpc['status'] == 1)
            {
                $data = array();
                $index = 0;
                foreach ($logolRpc['data']['ONBEHALF_INFO'] as $key => $value) {
                    $dt=array();
                    foreach ($value as $k => $v) {
                        $dt[$k]=$v;
                        $dt['ACT']="act";
                        $dt['ACTION']='<button type="button" class="btn btn-info waves-effect waves-light choosenpwp" data-index="'.$index.'" style="font-size: 10px;" data-bs-dismiss="modal" >Choose NPWP</button>
                        <div class="mt-2">
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editModal" class="editOnbehalf" data-index="'.$index.'" data-id="'.$dt['ONBEHALF_ID'].'">
                                <svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
                                    <path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal" class="delOnbehalf" data-id="'.$dt['ONBEHALF_ID'].'">
                                <svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
                                    <path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
                                    <rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
                                </svg>

                            </a>
                        </div>';
                    }
                    $index++;
                    $data[]=$dt;
                }
                return $data;
                //return $logolRpc['data']['ONBEHALF_INFO'];
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

    public function getOnbehalfProvince(){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/provinces?sortBy=PROVINCE_NAME&direction=ASC', array(), $this->newsession->userdata('accessToken'));
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

    public function getOnbehalfCity($idp){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/citiesByProvinceId/'.$idp, array(), $this->newsession->userdata('accessToken'));
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

    public function getOnbehalfDistrict($idc){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/districtsByCityId/'.$idc, array(), $this->newsession->userdata('accessToken'));
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

    public function getOnbehalfArea($idd){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/areasByDistrictId/'.$idd, array(), $this->newsession->userdata('accessToken'));
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

    public function addOnbehalf(){
        //$this->load->library('form_validation');
        //$csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $result = [];
        
        $payloads = [
            'ONBEHLAF_NAME' => $_POST["nameCustomer"],
            'ONBEHALF_NPWP' => $_POST["numberCustomer"],
            'ONBEHALF_NPWP_FILE_NAME' => $_FILES['img']['name'],
            'ONBEHALF_NPWP_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['img']['tmp_name']))),
            'COUNTRY_ID' => "1",
            'PROVINCE_ID' => $_POST["province"],
            'CITY_ID' => $_POST["city"],
            'DISTRICT_ID' => $_POST["district"],
            'AREA_ID' => $_POST["area"],
            'POSTAL_CODE' => $_POST["postalCode"],
            'ONBEHALF_ADDRESS' => $_POST["address"]
        ];
        $dt=array(
            "url"=>CHECK_POINT . 'profile/onbehalf/insert',
            "files"=>$_FILES,
            "post"=>$_POST,
            "payloads"=>$payloads
        );
        /* return $dt; */
        
        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/insert', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
                //return array("200");
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
                //return array("201");
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
            //return array("400");
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

    public function editOnbehalf(){
        //$this->load->library('form_validation');
        //$csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $result = [];
        
        $payloads = [
            "ONBEHLAF_ID"=>$_POST["id"],
            'ONBEHLAF_NAME' => $_POST["namaCustomer"],
            'ONBEHALF_NPWP' => $_POST["numberCustomer"],
            'ONBEHALF_NPWP_FILE_NAME' => $_FILES['img']['name'],
            'ONBEHALF_NPWP_ENCODE' => chunk_split(base64_encode(file_get_contents($_FILES['img']['tmp_name']))),
            'COUNTRY_ID' => "1",
            'PROVINCE_ID' => $_POST["province"],
            'CITY_ID' => $_POST["city"],
            'DISTRICT_ID' => $_POST["district"],
            'AREA_ID' => $_POST["area"],
            'POSTAL_CODE' => $_POST["postalCode"],
            'ONBEHALF_ADDRESS' => $_POST["address"]
        ];
        $dt=array(
            "url"=>CHECK_POINT . 'profile/onbehalf/update',
            "files"=>$_FILES,
            "post"=>$_POST,
            "payloads"=>$payloads
        );
        //return $dt;
        
        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/update', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
                //return array("200");
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
                        'collection' => [],
                        'payloads' => $payloads,

                    ]
                ];
            }
            else 
            {
                //return array("201");
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
            //return array("400");
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
    public function delOnbehalf(){
        //$this->load->library('form_validation');
        //$csrfRefreshTokens = $this->security->get_csrf_hash();
        $Curladapter = $this->curladapter;
        $result = [];
        
        $payloads = [
            'ONBEHLAF_ID' => $_POST["id"],
        ];
        $dt=array(
            "url"=>CHECK_POINT . 'profile/onbehalf/delete',
            "files"=>$_FILES,
            "post"=>$_POST,
            "payloads"=>$payloads
        );
        /* return $dt; */
        
        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT . 'profile/onbehalf/delete', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
                //return array("200");
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
                //return array("201");
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
            //return array("400");
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
?>