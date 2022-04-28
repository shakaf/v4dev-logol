<?php

class Autocomplete extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
		parent::__construct();
        isValidToken();
        $this->load->service(array('LocalizationService'));
    }

    public function getCityByProvince($id="")
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
				$response = $this->LocalizationService->getCitiesByProvinceId($id);
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

    public function getDistrictByCity($id="")
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
				$response = $this->LocalizationService->getDistrictByCityId($id);
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

    public function getAreaIdByDistrict($id="")
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
				$response = $this->LocalizationService->getAreasByDistricId($id);
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

}