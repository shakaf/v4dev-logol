<?php

class LocalizationService extends MY_Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProvinceId()
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/provinces', array(), $this->newsession->userdata('accessToken')); 
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

    public function getCitiesByProvinceId($id="")
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $param = ($this->input->post('q') ? $this->input->post('q') : $id);
        if(empty($param)) {
            return [];
        }
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/citiesByProvinceId/' . $param, array(), $this->newsession->userdata('accessToken')); 
        try
        {
            if($logolRpc['status'] == 1)
            {
                if($this->input->post('q')) 
                {
                    $arrCities = $logolRpc['data'];
                    $city = [];
                    for($i = 0; $i < count($arrCities); $i++)
                    {
                        $city[] = [
                            'value' => $arrCities[$i]['CITY_ID'],
                            'option' => $arrCities[$i]['CITY_NAME']
                        ];
                    }
                    return $city;
                } 
                else 
                {
                    return $logolRpc['data'];
                }
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

    public function getDistrictByCityId($id="")
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $param = ($this->input->post('q') ? $this->input->post('q') : $id);
        if(empty($param)) {
            return [];
        }
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/districtsByCityId/' . $param, array(), $this->newsession->userdata('accessToken')); 
        try
        {
            if($logolRpc['status'] == 1)
            {
                if($this->input->post('q'))
                {
                    $arrDistrict = $logolRpc['data'];
                    $district = [];
                    for($i = 0; $i < count($arrDistrict); $i++)
                    {
                        $district[] = [
                            'value' => $arrDistrict[$i]['DISTRICT_ID'],
                            'option' => $arrDistrict[$i]['DISTRICT_NAME']
                        ];
                    }
                    return $district;
                }
                else
                {
                    return $logolRpc['data'];
                }
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

    public function getAreasByDistricId($id="")
    {
        $Curladapter = $this->curladapter;
        $result = [];
        $param = ($this->input->post('q') ? $this->input->post('q') : $id);
        if(empty($param)) {
            return [];
        }
        $logolRpc = $Curladapter->logolServicesGet(CHECK_POINT_MASTER . 'location/areasByDistrictId/' . $param, array(), $this->newsession->userdata('accessToken')); 
        try
        {
            if($logolRpc['status'] == 1)
            {
                if($this->input->post('q'))
                {
                    $arrArea = $logolRpc['data'];
                    $area = [];
                    for($i = 0; $i < count($arrArea); $i++)
                    {
                        $area[] = [
                            'value' => $arrArea[$i]['AREA_ID'],
                            'option' => $arrArea[$i]['AREA_NAME']
                        ];
                    }
                    return $area;
                }
                else
                {
                    return $logolRpc['data'];
                }
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