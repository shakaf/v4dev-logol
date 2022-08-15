<?php

class BillingService extends MY_Service
{
    public function __construct(){
        parent::__construct();
    }

	public function createBillingPayment($rid){
		$Curladapter = $this->curladapter;
        $result = [];
		$list=array();
        /* $rid = "LGMUSS".hexdec(uniqid()); */
		$payloads = array(
			"REFERENCE_ID"=>$rid,
            "AMOUNT"=>intval($this->session->userdata("total")),
            "PAYER_EMAIL"=>$this->session->userdata("email"),
            "DESCRIPTION"=>"Pembayaran untuk Transaksi - ".$rid,
            "CALLBACK_URL"=>"http://34.87.19.200:4001/api/v4",
		);
		$dt=array(
            "url"=>CHECK_POINT_BILLING . 'createPayment',
            "post"=>$_POST,
            "payloads"=>$payloads
        );
		/* return $dt; */

        $logolRpc = $Curladapter->logolServicesPost(CHECK_POINT_BILLING . 'createPayment', $payloads, $this->newsession->userdata('accessToken'));
        try
        {
            if(!empty($logolRpc['status']) && $logolRpc['status'] == 1)
            {
				/* $session = array();
				$dtpay = $logolRpc['data'];
				$subsubt=0;
				for ($i=0; $i < count($dtpay['DETAIL']); $i++) {
					$subsubt=$subsubt+$dtpay['DETAIL'][$i]['TOTAL'];
				}
				$total = $subsubt + $dtpay['TAX_VALUE'] + $dtpay['BASIC_TAX'];
				$session['total']=$total;
				$this->session->set_userdata($session); */
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
				/* $session = array();
				$dtpay = $logolRpc['data'];
				$subsubt=0;
				for ($i=0; $i < count($dtpay['DETAIL']); $i++) {
					$subsubt=$subsubt+$dtpay['DETAIL'][$i]['TOTAL'];
				}
				$total = $subsubt + $dtpay['TAX_VALUE'] + $dtpay['BASIC_TAX'];
				$session['total']=$total;
				$this->session->set_userdata($session); */
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

}