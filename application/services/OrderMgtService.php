<?php

class OrderMgtService extends MY_Service
{
    public function __construct(){
        parent::__construct();
    }
    public function getOrderMgt($type="all",$page=1,$size=10){
        try{
            $type="allOrderList";
            switch ($type) {
                case 'all':
                    $type="allOrderList";
                    break;
                case 'draft':
                    $type="draftList";
                    break;
                case 'payment':
                    $type="waitPaymentList";
                    break;
                case 'progress':
                    $type="progressList";
                    break;
                case 'issue':
                    $type="issueOrderList";
                    break;
                default:
                    break;
            }
			$token = $this->session->userdata('accessToken');
            $payloads = array(
                "COMPANY_ID"=>"",
                "FILTER"=>array(
                    "ORDER_TYPE"=>"All",
                    "SERVICE_TYPE"=>"All",
                    "BRANCH_CODE"=>"All"
                ),
                "META_REQUEST"=> array(
                    "searchBy"=>"",
                    "searchByValue"=>"",
                    "page"=>$page,
                    "size"=>$size
                )
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => CHECK_POINT_OM.'orderManagement/'.$type,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS =>json_encode($payloads),/* '{
                "COMPANY_ID":"",
                "FILTER":{
                    "ORDER_TYPE":"All",
                    "SERVICE_TYPE":"All",
                    "BRANCH_CODE":"All"
                },
                "META_REQUEST": {
                    "searchBy": "",
                    "searchByValue": "",
                    "page": "1",
                    "size": "10"
                }
            }', */
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$token,
                'Content-Type: application/json'
            ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            if(!empty($response)){
				return json_decode($response);
			}else{
				return [];
			}
            /* echo $response; */
			/* $curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL 				=> CHECK_POINT_OM.'orderManagement/'.$type,
			  CURLOPT_RETURNTRANSFER 	=> true,
			  CURLOPT_ENCODING 			=> '',
			  CURLOPT_MAXREDIRS 		=> 10,
			  CURLOPT_TIMEOUT 			=> 0,
			  CURLOPT_FOLLOWLOCATION 	=> true,
			  CURLOPT_HTTP_VERSION 		=> CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST 	=> 'GET',
              CURLOPT_SSL_VERIFYPEER    => false,
              CURLOPT_SSL_VERIFYHOST    => false,
			  CURLOPT_HTTPHEADER 		=> array(
				'Authorization: Bearer '.$token
			  ),
              CURLOPT_POST              => true,
              CURLOPT_POSTFIELDS        => json_encode($payloads),
              CURLOPT_POSTDATA          => json_encode($payloads),
              CURLOPT_VERBOSE           => true
			));
			$response = curl_exec($curl);
			curl_close($curl);
			$arrdepot 	= json_decode($response, true); */
            /* $url = CHECK_POINT_OM.'orderManagement/'.$type;
            $payload = json_encode($payloads);
            $ctx = stream_context_create(["http" => [
                "header"=>"Authorization: Bearer ".$token,
                "content"=>$payload
            ]]);
            $arrdepot = file_get_contents($url, false, $ctx);
			if(!empty($arrdepot)){
				return $arrdepot;
			}else{
				return [];
			} */
		}catch(Exception $e){
			return [];
		}
    }
    public function getOrderMgt2($type="all"){
        try
        {
            $Curladapter = $this->curladapter;
            $result = [];
            $type="allOrderList";
            switch ($type) {
                case 'all':
                    $type="allOrderList";
                    break;
                case 'draft':
                    $type="draftList";
                    break;
                case 'payment':
                    $type="waitPaymentList";
                    break;
                case 'progress':
                    $type="progressList";
                    break;
                case 'issue':
                    $type="issueOrderList";
                    break;
                default:
                    break;
            }
            $payloads = array(
                "COMPANY_ID"=>"",
                "FILTER"=>array(
                    "ORDER_TYPE"=>"All",
                    "SERVICE_TYPE"=>"All",
                    "BRANCH_CODE"=>"All"
                ),
                "META_REQUEST"=> array(
                    "searchBy"=>"",
                    "searchByValue"=>"",
                    "page"=>"1",
                    "size"=>"10"
                )
            );
            $dt=array(
                "url"=>CHECK_POINT_OM.'orderManagement/'.$type,
                "payloads"=>$payloads
            );
            /* return $dt; */
            $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_OM . 'orderManagement/'.$type, $payloads, $this->newsession->userdata('accessToken'));
        
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
}