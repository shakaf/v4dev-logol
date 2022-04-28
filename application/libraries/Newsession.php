<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Newsession {
	function __construct($params = array())
	{
		@session_start();
		$params = session_get_cookie_params();
		setcookie("PHPSESSID", @session_id(), 0, $params["path"], $params["domain"],
			true,
			true
		);

	}
	
	function set_userdata($newdata = array(), $newval = '')
	{
		if (is_string($newdata))
		{
			$_SESSION[$newdata] = $newval;
			return;
		}
		
		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				$_SESSION[$key] = $val;
			}
			return;
		}
	}
	
	function userdata($item)
	{
		return (!isset($_SESSION[$item])) ? FALSE : $_SESSION[$item];
	}
	
	function sess_destroy()
	{
		@session_unset();
		@session_destroy();
	}
}
?>