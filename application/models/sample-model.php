
<?php

namespace App\Models;

use CodeIgniter\Model;

$this->load->library('Pdf');
$data['arrheader'] = $arrheader;
$data['arrdetail'] = $arrdetail;
echo $this->load->view('document/proforma_print', $data, true);
