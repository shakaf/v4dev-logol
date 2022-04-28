<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(FCPATH.'vendor/autoload.php');

class Curladapter
{
    var $curlAdapter;

    function __construct()
    {
        $this->curlAdapter = new \Ixudra\Curl\CurlService();
    }

    function logolServices($uri, $payloads)
    {
        if(!is_array($payloads))
        {
            return [];
            exit();
        }
        $response = $this->curlAdapter->to($uri)
            ->withOption('SSL_VERIFYHOST', false)
            ->withHeader('Accept: application/json')
            ->withHeader('Content-Type: application/json')
            ->withData(json_encode($payloads, true))
            ->WithTimeout(300)
            ->post();
        return json_decode($response, true);
    }

    function logolServicesPost($uri, $payloads, $token)
    {
        if(!is_array($payloads))
        {
            return [];
            exit();
        }
        $response = $this->curlAdapter->to($uri)
            ->withOption('SSL_VERIFYHOST', false)
            ->withHeaders([
                'Accept' => 'application/json', 
                'Content-Type' => 'application/json'
            ])
            ->withBearer($token)
            ->withData(json_encode($payloads, true))
            ->WithTimeout(300)
            ->enableDebug('/var/www/html/v4dev/logFile.txt')
            ->post();
        return json_decode($response, true);
    }

    function logolServicesGet($uri, $payloads, $token)
    {
        if(!is_array($payloads))
        {
            return [];
            exit();
        }
        $response = $this->curlAdapter->to($uri)
            ->withOption('SSL_VERIFYHOST', false)
            ->withHeaders([
                'Accept' => 'application/json', 
                'Content-Type' => 'application/json'
            ])
            ->withBearer($token)
            ->withData(json_encode($payloads, true))
            ->WithTimeout(300)
            ->enableDebug('/var/www/html/v4dev/logFile.txt')
            ->get();
        return json_decode($response, true);
    }

    function nleServices($uri, $payloads){
        if(!is_array($payloads))
        {
            return [];
            exit();
        }
        $response = $this->curlAdapter->to($uri)
            ->withOption('SSL_VERIFYHOST', false)
            ->withHeader('Accept: application/json')
            ->withHeader('Content-Type: application/json')
            ->withData(json_encode($payloads, true))
            ->WithTimeout(300)
            ->get();
        return json_decode($response, true);
    }

}