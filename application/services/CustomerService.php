<?php

class CustomerService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCustomerNewRegistrant()
    {
        $Curladapter = $this->curladapter;
        $arrData = [];
        $payloads = [
            'COMPANY_TYPE' => [
                ['COMPANY_TYPE_NAME' => 'trucker'],
                ['COMPANY_TYPE_NAME' => 'truckerFF']  
            ],
            'FILTER' => [
                'COMPANY_TYPE_ID' => '',
                'PRODUCT_TYPE_ID' => ''
            ]
        ]; 
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT . 'newRegistrant/list', $payloads, $this->newsession->userdata('accessToken'));
        print_r($logolRpc);
    }
}