<?php

defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('isValidToken')) 
{
    function isValidToken()
    {
        $CI = & get_instance();
        $Curladapter = $CI->curladapter;
        $expiryToken = date('Y-m-d H:i:s', $CI->newsession->userdata('tokenValidity')); 
        $currentTime = date('Y-m-d H:i:s', time());
        if($expiryToken < $currentTime)
        {
            $payloads = [
                'grant_type' => 'refresh_token',
                'refreshToken' => $CI->newsession->userdata('refreshToken')
            ];
            $refreshToken = $Curladapter->logolServices(REFRESH_TOKEN, $payloads);
            if(array_key_exists('access_token', $refreshToken))
            {
                $tokenParts = explode(".", $refreshToken['access_token']);  
                $tokenHeader = base64_decode($tokenParts[0]);
                $tokenPayload = base64_decode($tokenParts[1]);
                $jwtHeader = json_decode($tokenHeader);
                $jwtPayload = json_decode($tokenPayload, true);
                $session['loggedIn'] = TRUE;
                $session['accessToken'] = $refreshToken['access_token'];
                $session['refreshToken'] = $refreshToken['refresh_token'];
                $session['tokenValidity'] = $jwtPayload['exp'];
                $session['companyAttribute'] = $jwtPayload['company_info'];
                $session['userAttribute'] = $jwtPayload['user_info'];
                $session['qtyUserRequest'] = $jwtPayload['company_info']['qty_user_request'];
                $session['dataIsComplete'] = $jwtPayload['company_info']['data_is_complete'];
                $session['isMainUser'] = $jwtPayload['user_info']['is_main_user'];
                $session['menuAttribute'] = $CI->newsession->userdata('menuAttribute');
                $session['loginTime'] = $jwtPayload['login_time'];
                $session['uid'] = $jwtPayload['uid'];
                $session['email'] = $jwtPayload['email'];
                $session['roleId'] = $jwtPayload['role_id'];
                $session['statusId'] = $jwtPayload['status_id'];
                $session['isNle'] = $jwtPayload['is_nle'];
                $session['picName'] = $jwtPayload['pic_name'];
                $session['picProfilePicture'] = $jwtPayload['pic_profile_picture'];
                $session['picMobilePhone'] = $jwtPayload['pic_mobile_phone'];
                $session['companyId'] = $jwtPayload['company_id'];
                $session['companyName'] = $jwtPayload['company_name'];
                $session['companyNpwp'] = $jwtPayload['company_npwp'];
                $session['userStatus'] = $jwtPayload['user_status'];
                $CI->newsession->sess_destroy();
                $CI->newsession->set_userdata($session);
                return 1;
            }
        }
    }
}
