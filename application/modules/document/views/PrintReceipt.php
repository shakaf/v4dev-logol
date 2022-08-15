<?php

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 048', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage('L', 'A5');
$pdf->SetFont('courier', '', 7);
// $this->SetFont('courier', '', 7);

// -----------------------------------------------------------------------------

// NON-BREAKING TABLE (nobr="true")

$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2">
 <tr>
  <td colspan="2" align="left">Shipping Line: <br />MAERSKLINE</td>
 </tr>
 <tr>
  <td colspan="2" align="left">Received From: <br />PT. LOGOL JAKARTA MITRAINDO</td>
 </tr>
 <tr>
  <td align="left">Shipper: <br />PT. TORA BIKA EKA SEMESTA</td>
  <td align="left">D/O Number: <br /> 216476724</td>
 </tr>
 <tr>
  <td align="left">Vessel: <br />D5SI4 CONTI DARWIN</td>
  <td align="left">Voyage: <br />207N</td>
 </tr>
 <tr>
  <td align="left">Description Of Payment: <br />3x40HU <br />
  MRSU4554012, MRSU4729830, MRSU5629435 <br />
  LIFTON <br />
  ADMIN</td>
  <td align="left">BILLING ESVC-AUTOPAID</td>
 </tr>
<tr border="0">
 <td align="right" >Amount</td>
 <td><label align="left">Rp</label> <label align="right">2,900,000</label></td>
</tr>
<tr>
 <td align="right" >PPN 10%</td>
 <td align="right" >290,000</td>
</tr>
<tr>
 <td align="right" >Amount to be paid</td>
 <td align="right" >3,190,000</td>
</tr>
</table>
EOD;
$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');
