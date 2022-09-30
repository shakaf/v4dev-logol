<?php

class OrderService extends MY_Service
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getDepot(){
		try{
			$token = $this->session->userdata('accessToken');
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL 				=> 'http://34.87.19.200:4002/api/v4/depot/list',
			  CURLOPT_RETURNTRANSFER 	=> true,
			  CURLOPT_ENCODING 			=> '',
			  CURLOPT_MAXREDIRS 		=> 10,
			  CURLOPT_TIMEOUT 			=> 0,
			  CURLOPT_FOLLOWLOCATION 	=> true,
			  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST 	=> 'GET',
			  CURLOPT_HTTPHEADER 		=> array(
				'Authorization: Bearer '.$token
			  ),
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$arrdepot 	= json_decode($response, true);
			if(!empty($arrdepot)){
				if(!empty($arrdepot['status']) && $arrdepot['status'] == 1){
					$index 	 = 0;
					$arrtemp = [];
					if(array_key_exists(0, $arrdepot['data'])){
						foreach($arrdepot['data'] as $data){
							$arrtemp[$index]['DEPOT_ID'] 		= $data['DEPOT_ID'];
							$arrtemp[$index]['DEPOT_NAME'] 	= $data['DEPOT_NAME'];
							$arrtemp[$index]['DEPOT_ADDRESS'] 	= $data['DEPOT_ADDRESS'];
							$arrtemp[$index]['AREA_ID'] 		= $data['AREA_ID'];
							$arrtemp[$index]['IS_DELETE'] 		= $data['IS_DELETE'];
							$index++;
						}
					}else{
						$arrtemp[$index]['DEPOT_ID'] 		= $arrdepot['data']['DEPOT_ID'];
						$arrtemp[$index]['DEPOT_NAME'] 		= $arrdepot['data']['DEPOT_NAME'];
						$arrtemp[$index]['DEPOT_ADDRESS'] 	= $arrdepot['data']['DEPOT_ADDRESS'];
						$arrtemp[$index]['AREA_ID'] 		= $arrdepot['data']['AREA_ID'];
						$arrtemp[$index]['IS_DELETE'] 		= $arrdepot['data']['IS_DELETE'];
					}
					return $arrtemp;
				}else{
					return [];
				}
			}else{
				return [];
			}
		}catch(Exception $e){
			return [];
		}
	}
	
	public function getShippingLine(){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'shippingLine/list', array(), $this->newsession->userdata('accessToken'));
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

	public function getTerminalList(){
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'port/list', array(), $this->newsession->userdata('accessToken'));
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

	public function loadBillingEDepot(){
		$Curladapter = $this->curladapter;
        $result = [];
		$list=array();
		$payloads = array(
			"OM_HEADER_ID"=>$_POST['om_header_id'],
		);
		$dt=array(
            "url"=>CHECK_POINT_BILLING . 'loadBilling',
            "post"=>$_POST,
            "payloads"=>$payloads
        );
		/* return $dt; */

        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT_BILLING . 'loadBilling', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
				$session = array();
				$dtpay = $logolRpc['data'];
				$subsubt=0;
				for ($i=0; $i < count($dtpay['DETAIL']); $i++) {
					$subsubt=$subsubt+$dtpay['DETAIL'][$i]['TOTAL'];
				}
				$total = $subsubt + $dtpay['TAX_VALUE'] + $dtpay['BASIC_TAX'];
				$session['total']=$total;
				$this->session->set_userdata($session);
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
                        'collection' => $logolRpc['data']
                    ]
                ];
            }
            else 
            {	
				$session = array();
				$dtpay = $logolRpc['data'];
				$subsubt=0;
				for ($i=0; $i < count($dtpay['DETAIL']); $i++) {
					$subsubt=$subsubt+$dtpay['DETAIL'][$i]['TOTAL'];
				}
				$total = $subsubt + $dtpay['TAX_VALUE'] + $dtpay['BASIC_TAX'];
				$session['total']=$total;
				$this->session->set_userdata($session);
                //return array("201");
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Order request success',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 201
                        ],
                        'redirect' => [],
                        'collection' => $logolRpc['data']
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

	public function orderRequestEDepot(){
		$Curladapter = $this->curladapter;
        $result = [];
		$list=array();
		$container = json_decode($_POST['do_container']);
		foreach ($container as $key => $value) {
			$spl=explode("-",$value->id);
			$dtc=array(
				"CONTAINER_TYPE_ID"=> $spl[1],
				"CONTAINER_TYPE"=> $value->type,
				"CONTAINER_SIZE_ID"=> $spl[0],
				"CONTAINER_SIZE"=> $value->height,
				"QTY"=>intval($value->count)
			);
			$list[]=$dtc;
		}
        $payloads = array(
			"DO_DATE"=>date("Y-m-d H:i:s"),
			"COMPANY_ID"=>$_POST['do_companyid'],
			"CARGO_OWNER_ID"=> $_POST['idnpwp'],
			"DO_NO"=> $_POST["do_no"],
			"DO_EXP_DATE"=>$_POST["do_date"],
			"INT_REF_NO"=> $_POST["do_intrefno"],
			"STATUS_CODE"=> "1",
			"DEPOT_ID"=> $_POST["do_depot"],
			"SHIPPING_ID"=>$_POST["do_shippingid"],
			"SHIPPING_NAME"=>$_POST["do_shippingline"],
			"CONTAINER_GRADE"=> $_POST["do_grade"],
			"CONTAINER_LIST"=> $list,
			"TOTAL_QTY"=> intval($_POST["do_qty"]),
			"DO_FILE_NAME"=> $_FILES['img']['name'],
			"DO_FILE_ENCODE"=> chunk_split(base64_encode(file_get_contents($_FILES['img']['tmp_name']))),
			"CUSTOMS_REQ_DOC_FILE_NAME"=>"",
			"CUSTOMS_REQ_DOC_FILE_ENCODE"=> "",
			"CUSTOMS_RES_DOC_FILE_NAME"=> "",
			"CUSTOMS_RES_DOC_FILE_ENCODE"=> ""
		);
        $dt=array(
            "url"=>CHECK_POINT_DEPOT . 'orderRequest/export/depot',
            "files"=>$_FILES,
            "post"=>$_POST,
            "payloads"=>$payloads
        );
        /* return $dt; */

        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT_DEPOT . 'orderRequest/export/depot', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
				$session = $payloads;
				$session['type']="Export";
				$session['service']="Depot";
				$session['CONTAINER_LIST']=json_encode($list);
				$session['depot']=$_POST['depot'];
				$session['npwp']=$_POST['npwp'];
				$session['DEPOT_ID']=$logolRpc['data']['DEPOT_ID'];
				$session['DP_REQ_ID']=$logolRpc['data']['DP_REQ_ID'];
				$session['OM_HEADER_ID']=$logolRpc['data']['OM_HEADER_ID'];
				$this->session->set_userdata($session);
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
                        'collection' => $logolRpc['data']
                    ]
                ];
            }
            else 
            {	
				$session = $payloads;
				$session['type']="Export";
				$session['service']="Depot";
				$session['CONTAINER_LIST']=json_encode($list);
				$session['depot']=$_POST['depot'];
				$session['npwp']=$_POST['npwp'];
				$session['DEPOT_ID']=$logolRpc['data']['DEPOT_ID'];
				$session['DP_REQ_ID']=$logolRpc['data']['DP_REQ_ID'];
				$session['OM_HEADER_ID']=$logolRpc['data']['OM_HEADER_ID'];
				$this->session->set_userdata($session);
                //return array("201");
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Order request success',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 201
                        ],
                        'redirect' => [],
                        'collection' => $logolRpc['data']
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

	public function orderRequestIDepot(){
		$Curladapter = $this->curladapter;
        $result = [];
		$list=array();
		$container = json_decode($_POST['do_container']);
		foreach ($container as $key => $value) {
			$spl=explode("-",$value->id);
			$dtc=array(
				"CONTAINER_TYPE_ID"=> $spl[1],
				"CONTAINER_TYPE"=> $value->type,
				"CONTAINER_SIZE_ID"=> $spl[0],
				"CONTAINER_SIZE"=> $value->height,
				"CONTAINER_NUMBER"=> $value->count,
				"QTY"=>1
			);
			$list[]=$dtc;
		}
        $payloads = array(
			"DO_DATE"=>date("Y-m-d H:i:s"),
			"COMPANY_ID"=>$_POST['do_companyid'],
			"CARGO_OWNER_ID"=> $_POST['idnpwp'],
			"DO_NO"=> $_POST["do_no"],
			"DO_EXP_DATE"=>$_POST["do_date"],
			"INT_REF_NO"=> $_POST["do_intrefno"],
			"STATUS_CODE"=> "1",
			"DEPOT_ID"=> $_POST["do_depot"],
			"SHIPPING_ID"=>$_POST["do_shippingid"],
			"SHIPPING_NAME"=>$_POST["do_shippingline"],
			"CONTAINER_GRADE"=> "",//$_POST["do_grade"],
			"CONTAINER_LIST"=> $list,
			"TOTAL_QTY"=> intval($_POST["do_qty"]),
			"DO_FILE_NAME"=> $_FILES['img']['name'],
			"DO_FILE_ENCODE"=> chunk_split(base64_encode(file_get_contents($_FILES['img']['tmp_name']))),
			"CUSTOMS_REQ_DOC_FILE_NAME"=>"",
			"CUSTOMS_REQ_DOC_FILE_ENCODE"=> "",
			"CUSTOMS_RES_DOC_FILE_NAME"=> "",
			"CUSTOMS_RES_DOC_FILE_ENCODE"=> ""
		);
        $dt=array(
            "url"=>CHECK_POINT_DEPOT . 'orderRequest/import/depot',
            "files"=>$_FILES,
            "post"=>$_POST,
            "payloads"=>$payloads
        );
        /* return $dt; */

        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT_DEPOT . 'orderRequest/import/depot', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
				$session = $payloads;
				$session['type']="Import";
				$session['service']="Depot";
				$session['CONTAINER_LIST']=json_encode($list);
				$session['depot']=$_POST['depot'];
				$session['npwp']=$_POST['npwp'];
				$session['DEPOT_ID']=$logolRpc['data']['DEPOT_ID'];
				$session['DP_REQ_ID']=$logolRpc['data']['DP_REQ_ID'];
				$session['OM_HEADER_ID']=$logolRpc['data']['OM_HEADER_ID'];
				$this->session->set_userdata($session);
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
                        'collection' => $logolRpc['data']
                    ]
                ];
            }
            else 
            {	
				$session = $payloads;
				$session['type']="Import";
				$session['service']="Depot";
				$session['CONTAINER_LIST']=json_encode($list);
				$session['depot']=$_POST['depot'];
				$session['npwp']=$_POST['npwp'];
				$session['DEPOT_ID']=$logolRpc['data']['DEPOT_ID'];
				$session['DP_REQ_ID']=$logolRpc['data']['DP_REQ_ID'];
				$session['OM_HEADER_ID']=$logolRpc['data']['OM_HEADER_ID'];
				$this->session->set_userdata($session);
                //return array("201");
                return [
                    'header' => [
                        '__version' => [
                            'number' => __VESION_APP,
                            'process_time' => '',
                            'generated' => date("Y-m-d H:i:s")
                        ],
                        'error' => TRUE,
                        'message' => 'Order request success',
                        'csrf_v4kalibaru' => $csrfRefreshTokens
                    ],
                    'data' => [
                        'status' => [
                            'code' => 201
                        ],
                        'redirect' => [],
                        'collection' => $logolRpc['data']
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

    public function setRegister(){
		try{
			$this->load->library('recaptcha');
			$this->load->library('form_validation');
			$csrfRefreshTokens = $this->security->get_csrf_hash();
			$Curladapter = $this->curladapter;
			$recaptcha	 = $this->input->post('g-recaptcha-response');
			$response 	 = $this->recaptcha->verifyResponse($recaptcha);
			
			$this->form_validation->set_rules('COMPANY_NAME', 'Company Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|xss_clean');
			if (empty($_FILES['NPWP_FILE']['name'])){
				$this->form_validation->set_rules('NPWP_FILE', 'Document NPWP', 'trim|required|xss_clean');
			}
			$this->form_validation->set_rules('PIC_NAME', 'Pic Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('PIC_PHONE', 'Pic Phone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('OFFICE_PHONE', 'Office Phone', 'trim|required|xss_clean');
			$this->form_validation->set_rules('REQ_NUMBER_USER', 'Request Number of User', 'trim|required|xss_clean');
			$this->form_validation->set_rules('EMAIL', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('PWD', 'Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('RE_PWD', 'Retype Password', 'trim|required|matches[PWD]|xss_clean');
			if($this->form_validation->run() == FALSE){
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
			
			
			if(!isset($response['success']) || $response['success'] <> true){
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
			}else{
				$payloads = [];
				$payloads['PRODUCT_TYPE_ID'] = $this->input->post('PRODUCT_TYPE');
				if(!empty($this->input->post('SERVICE'))){
					$index = 0;
					foreach($this->input->post('SERVICE') as $data){
						$arrexplode = explode("~", $data);
						if($arrexplode[0] == "9"){
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_ID'] 			= $arrexplode[0];
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_DESCRIPTION'] = $this->input->post('SERVICE_OTHERS_NAME');
						}else{
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_ID'] 			= $arrexplode[0];
							$payloads['SERVICE_OF_INTEREST'][$index]['SERVICE_CONTENT_DESCRIPTION'] = $arrexplode[1];
						}
						$index++;
					}
				}
				$b64Doc = chunk_split(base64_encode(file_get_contents($_FILES['NPWP_FILE']['tmp_name'])));
				$payloads['MEMBER_TYPE_ID'] 	= "0FE98820953A11EC9DA742010A940002";
				$payloads['IS_NLE'] 			= 0;
				$payloads['COMPANY_NAME'] 		= $this->input->post('PRODUCT_TYPE');
				$payloads['COMPANY_NPWP'] 		= $this->input->post('NPWP');
				$payloads['COMPANY_NPWP_FILE'] 	= $b64Doc;
				$payloads['PIC_NAME'] 			= $this->input->post('PIC_NAME');
				$payloads['PIC_MOBILE_PHONE'] 	= $this->input->post('PIC_PHONE');
				$payloads['IS_MAIN_USER'] 		= 1;
				$payloads['OFFICE_PHONE'] 		= $this->input->post('OFFICE_PHONE');
				$payloads['QTY_USER_REQUEST'] 	= $this->input->post('REQ_NUMBER_USER');
				$payloads['USER_EMAIL'] 		= $this->input->post('EMAIL');
				$payloads['USER_PASSWORDS'] 	= $this->input->post('PWD');
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL 				=> 'http://34.87.19.200:4000/api/v4/register_new',
				  CURLOPT_RETURNTRANSFER 	=> true,
				  CURLOPT_ENCODING 			=> '',
				  CURLOPT_MAXREDIRS 		=> 10,
				  CURLOPT_TIMEOUT 			=> 0,
				  CURLOPT_FOLLOWLOCATION 	=> true,
				  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST 	=> 'POST',
				  CURLOPT_POSTFIELDS 		=> json_encode($payloads,true),
				  CURLOPT_HTTPHEADER 		=> array(
					'Content-Type: application/json'
				  )
				));
				$responseRegister 	= curl_exec($curl);
				curl_close($curl);
				$arrRegister 	= json_decode($responseRegister, true);
				if(!empty($arrRegister)){
					if(!empty($arrRegister['status']) && $arrRegister['status'] == 1){
						#$this->sendMail($this->input->post('EMAIL'));
						$response = [
							'header' => [
								'__version' => [
									'number' => __VESION_APP,
									'process_time' => '',
									'generated' => date("Y-m-d H:i:s")
								],
								'error' => FALSE,
								'message' => 'Registration succesfully',
								'csrf_v4kalibaru' => $csrfRefreshTokens
							],
							'data' => [
								'status' => [
									'code' => 200
								],
								'redirect' => [
									'action' => TRUE,
									'callBack' => site_url('register/result')
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
								'message' 			=> !empty($arrRegister['data']) ? $arrRegister['data'] : "Registration failed",
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
		}catch(Exception $e){
			$response = [
				'header' => [
					'__version' => [
						'number' => __VESION_APP,
						'process_time' => '',
						'generated' => date("Y-m-d H:i:s")
					],
					'error' => TRUE,
					'message' => "Unexpected request",
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
    }
	
}