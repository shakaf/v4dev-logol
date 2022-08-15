<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }

    function qrcode()
    {
        #QR Code
        $url = current_url();
        $arr = explode('/', $url);
        $md5 = end($arr);
        if (md5(str_replace('/' . $md5, '', $url) . 'L0CK') != $md5) {
            $string = current_url() . '/' . md5(current_url() . 'L0CK');
        } else {
            $string = current_url();
        }

        // set style for qrcode
        $style = array(
            'border' => 0,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        #End of QR Code

        // QRCODE,L : QR-CODE Low error correction
        $this->write2DBarcode($string, 'QRCODE,L', 172, 290, 20, 20, $style);
    }

    // Page footer
    function Footer()
    {
        $this->qrcode();
    }
}
