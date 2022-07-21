<?php

use \Dompdf\Dompdf;

class Document extends CI_Controller
{
    var $content = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->service(array('CompanyProfileService', 'DashboardService'));
    }

    public function index()
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $data = array();
            $this->content = (!$this->content) ? $this->load->view('vDocumentMaster', $data, true) : $this->content;
            $data = $this->main->setContent('home', $this->content);
            $this->parser->parse('components/container/authorizationPage', $data);
        }
    }

    public function documentmaster()
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('document/vDocumentMaster', $arrData, true);

            $this->index();
        }
    }

    public function allDocument()
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('document/vAllDocument', $arrData, true);

            $this->index();
        }
    }

    public function contentDocument($act = "")
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrayReturn = [];
            if (strtolower($_SERVER['REQUEST_METHOD']) != "post") {
                $arrayResponse = [
                    'status'    => 400,
                    'message'    => 'Unexcepted proccess. Please try again'
                ];
            } else {
                $view = "No content, Please kindly refresh";
                $post = $this->input->post('post');
                if ($post == "all") {
                    $view = $this->load->view('document/content-document/allDocument', '', true);
                } else if ($post == "invoice") {
                    $view = $this->load->view('document/content-document/invoiceDocument', '', true);
                } else if ($post == "etrucking") {
                    $view = $this->load->view('document/content-document/truckingDocument', '', true);
                } else if ($post == "eport") {
                    $view = $this->load->view('document/content-document/portDocument', '', true);
                } else if ($post == "edepot") {
                    $view = $this->load->view('document/content-document/depotDocument', '', true);
                } else if ($post == "suport") {
                    $view = $this->load->view('document/content-document/suportDocument', '', true);
                }
                $arrayResponse = [
                    'status'        => 100,
                    'message'        => 'Successfully',
                    'html'            => $view
                ];
            }
            $arrayReturn['return'] = $arrayResponse;
            echo json_encode($arrayReturn);
        }
    }

    public function detilDocinvoice()
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('document/vDetilDocinvoice', $arrData, true);

            $this->index();
        }
    }

    public function detilDocEtrucking()
    {
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $this->content = $this->load->view('document/vDetilDocEtrucking', $arrData, true);

            $this->index();
        }
    }


    public function printInvoice()
    {
        $dompdf = new Dompdf();
        if (!$this->newsession->userdata('loggedIn')) {
            redirect(site_url('login'));
            exit();
        } else {
            $arrData = [
                'profileAttribute' => $_SESSION,
                'isRequirement' => $this->DashboardService->isCompleteProfile()
            ];
            $html = $this->load->view('document/vDetilDocInvoice', $arrData, true);
            // $html = $this->load->view('document/invoicepdf', $arrData, true);
            $options = $dompdf->getOptions();
            $options->set('isRemoteEnabled', true);
            $options->setDefaultFont('Nunito Sans');
            $dompdf->loadhtml($html);
            // $dompdf->setPaper('A4', 'portrait');
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream('Invoice.pdf', array(
                "Attachment" => false
            ));
            // $this->index();

        }
    }
}
