<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Model
{

	function setContent($privileges, $content)
	{
        $appname = 'LOGOL V4';
		if($privileges == "signin")
        {
            $header = $this->load->view('components/header/signin', '', true);
            $navmenu= "";
		}
		else if ($privileges == "register")
        {
            $header = $this->load->view('components/header/register', '', true);
            $navmenu = "";
        }
        
		else if ($privileges == "forgot") 
        {
            $header = $this->load->view('components/header/forgot', '', true);
            $navmenu = "";
        }
        else if ($privileges == "home")
        {
            $this->load->service('DashboardService');
            $header = $this->load->view('components/header/home', '', true);
            $navmenu = $this->DashboardService->getMenuDashboard($this->newsession->userdata('menuAttribute'));
        }
		$data = array(
			'_appname_' 		=> $appname,
			'_header_'  		=> $header,
            '_navmenu_' 		=> $navmenu,
            '_content_' 		=> $content
		);
		return $data;
    }
    
    public function setDropdownFromJson($args, $key, $value, $isEmpty = FALSE, &$disable = '')
    {
        $arrDropdown = [];
        if($isEmpty) $arrDropdown[''] = '';
        if(sizeof($args) > 0)
        {
            $sCodeDisabled = '';
            $arrCodeDisabled = [];
            foreach($args as $row)
            {
                if(is_array($disable))
                {
                    if($sCodeDisabled == $row[$disable[0]])
                    {
                        if(!array_key_exists($row[$key], $arrDropdown))
                            $arrDropdown[$row[$key]] = '&nbsp; &nbsp; &nbsp;' . $row[$value];
                    }
                    else
                    {
                        if (!array_key_exists($row[$disable[0]], $arrDropdown))
                            $arrDropdown[$row[$disable[0]]] = $row[$disable[1]];
                        if (!array_key_exists($row[$key], $arrDropdown))
                            $arrDropdown[$row[$key]] = "&nbsp; &nbsp;&nbsp;&nbsp;" . $row[$value];

                    }
                    $sCodeDisabled = $row[$disable[0]];
                    if(!in_array($sCodeDisabled, $arrCodeDisabled))
                        $arrCodeDisabled[] = $sCodeDisabled;
                }
                else
                {
                    $arrDropdown[$row[$key]] = str_replace("'","\'", $row[$value]);
                }
            }
        }
        return $arrDropdown;
    }
    

}

?>