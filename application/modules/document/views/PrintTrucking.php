<?php

class MYPDF extends TCPDF
{
	public $last_page_flag = false;
	public $arrheader;
	public $arrdetail;
	public $db;
	public function Close()
	{
		$this->last_page_flag = true;
		parent::Close();
	}

	public function Header()
	{
		$arrheader = $this->arrheader;
		$this->Rect(10, 15, 190, 266);
		$startHeader = 17;
		$this->SetFont('courier', 'B', 8);
		$rowline = 140;

		$this->SetAlpha(0.5);
		$img_watermax = 'assets/images/npct1.png';
		// Render the image
		$this->Image($img_watermax, 20, 90, 400, 300, 'PNG', '', '', false, 300, '', false, false, 0.5);
		$this->SetAlpha(1);

		// Set the starting point for the page content
		$this->setPageMark();

		$this->Image('assets/images/Logo.png', 11, 18, 40, 26.5, 'PNG', '', '', false, 150, '', false, false, 0, false, false, false);
		$this->setXY(55, $startHeader);
		$this->MultiCell(80, 4, 'PT NEW PRIOK CONTAINER TERMINAL ONE', '', 'L', 0, 0, '', '', true);
		$this->setXY(55, $startHeader + 5);
		$this->MultiCell(80, 4, 'Alamat: JL. TERMINAL KALIBARU RAYA KAV B No. 1', 0, 'L', 0, 0, '', '', true);
		$this->setXY(55, $startHeader + 10);
		$this->MultiCell(80, 4, 'KEL. KALIBARU KEC. CILINCING', '', 'L', 0, 0, '', '', true);
		$this->setXY(55, $startHeader + 15);
		$this->MultiCell(80, 4, 'JAKARTA UTARA DKI JAKARTA 14110', '', 'L', 0, 0, '', '', true);
		$this->setXY(55, $startHeader + 20);
		$this->MultiCell(80, 4, 'NPWP : 70.536.691.2-043.000', '', 'L', 0, 0, '', '', true);
		$this->setXY(55, $startHeader + 25);
		$this->MultiCell(80, 4, 'Tanggal Pengukuhan PKP : 01 Oktober 2014', '', 'L', 0, 0, '', '', true);
		$this->SetFont('courier', '', 7);
		$this->setXY(12, $startHeader + 40);
		$this->MultiCell(127, 4, 'Nama Pelanggan     : ' . $arrheader['CUSTOMER_NAME'], '', 'L', 0, 0, '', '', true);
		$this->setXY(12, $startHeader + 44);
		$this->MultiCell(127, 4, 'ID Pelanggan       : ' . $arrheader['CUSTOMER_ID'], '', 'L', 0, 0, '', '', true);
		$this->setXY(12, $startHeader + 48);
		$this->MultiCell(127, 12, 'Alamat             : ', '', 'L', 0, 0, '', '', true);
		$this->setXY(43, $startHeader + 48);
		$this->MultiCell(81, 12, $arrheader['CUSTOMER_ADDRESS'], '', 'L', 0, 0, '', '', true);
		$this->setXY(12, $startHeader + 59);
		$this->MultiCell(127, 4, 'NPWP               : ' . $arrheader['TAX_ID'], '', 'L', 0, 0, '', '', true);
		$this->Line($rowline, 15.1, $rowline, 50);
		$this->setXY($rowline + 1, 17);
		$this->MultiCell(60, 4, 'No. Faktur Pajak : 010-22.00048525 ' . $arrheader['INVOICE_NO'], '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 1, 27);
		$this->MultiCell(60, 4, 'Proforma No : NPCT/2022/0218/00201 ' . $arrheader['PROFORMA_NO'], '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 1, 37);
		// $this->MultiCell(60, 4, 'Jatuh Tempo : ' . name_date($arrheader['INVOICE_DUE_DATE']), '', 'L', 0, 0, '', '', true);
		$this->MultiCell(60, 4, 'Jatuh Tempo : 01 Juni 2022 ' . $arrheader['INVOICE_DUE_DATE'], '', 'L', 0, 0, '', '', true);
		$this->setXY(10, 50);
		$this->SetFont('courier', '', 7);
		$this->Line(10, 50, 200, 50);
		$this->MultiCell(190, 4, 'NOTA DAN PERHITUNGAN PELAYANAN JASA', 0, 'C', 0, 0, '', '', false);
		$this->Line(10, 54, 200, 54);
		$this->SetFont('courier', '', 7);
		$this->Line($rowline, 84, $rowline, 54);
		$this->setXY($rowline + 1, 57);
		$this->MultiCell(60, 8, 'Nama Kapal : ', '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 19, 57);
		$this->MultiCell(43, 12, $arrheader['VESSEL_NAME'] . "\n" . $arrheader['VOYAGE_IN'] . ' / ' . $arrheader['VOYAGE_OUT'], '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 1, 65);
		// $this->MultiCell(60, 4, 'Tanggal Kedatangan : ' .name_date($arrheader['ATA']), '', 'L', 0, 0, '', '', true);
		$this->MultiCell(60, 4, 'Tanggal Kedatangan : ' . ($arrheader['ATA']), '', 'L', 0, 0, '', '', true);

		$this->setXY($rowline + 1, 69);
		$this->MultiCell(60, 4, 'NO DO : ', '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 1, 73);
		$this->MultiCell(60, 4, 'NO BL : ', '', 'L', 0, 0, '', '', true);
		$this->setXY($rowline + 1, 77);
		$this->MultiCell(60, 4, 'NO SPPB : ', '', 'L', 0, 0, '', '', true);
		$this->setXY(10, PDF_MARGIN_TOP + 57);
		$this->MultiCell(8, 4, 'NO.', 0, 'C', 0, 1, '', '', false);
		$this->setXY(20, PDF_MARGIN_TOP + 57);
		$this->MultiCell(75, 4, 'DESKRIPSI', 0, 'C', 0, 1, '', '', false);
		$this->setXY(95, PDF_MARGIN_TOP + 57);
		$this->MultiCell(12, 4, 'JUMLAH', 0, 'C', 0, 1, '', '', false);
		$this->setXY(107, PDF_MARGIN_TOP + 57);
		$this->MultiCell(8, 4, 'UOM', 0, 'C', 0, 1, '', '', false);
		$this->setXY(115, PDF_MARGIN_TOP + 57);
		$this->MultiCell(25, 4, 'TARIF', 0, 'C', 0, 1, '', '', false);
		$this->setXY(140, PDF_MARGIN_TOP + 57);
		$this->MultiCell(60, 4, 'TOTAL', 0, 'C', 0, 1, '', '', false);
		$this->Line(10, PDF_MARGIN_TOP + 57, 200, PDF_MARGIN_TOP + 57);
		$this->Line(10, PDF_MARGIN_TOP + 61, 200, PDF_MARGIN_TOP + 61);
	}
	// Page footer

	public function Footer()
	{
		$arrheader 	= $this->arrheader;
		$arrdetail 	= $this->arrdetail;
		$rowline 	= 140;
		$five 		= 5;
		if ($this->last_page_flag) {
			$htm  = '<table cellpadding="2" border="0">';
			$htm .= '<tr>';
			$htm .= '	<td style="width:35.3px">&nbsp;</td>';
			$htm .= '	<td style="text-align:center;width:266px">Diskon</td>';
			$htm .= '	<td style="width:42.6px">&nbsp;</td>';
			$htm .= '	<td style="width:28.1px">&nbsp;</td>';
			$htm .= '	<td style="width:88.8px">&nbsp;</td>';
			$htm .= '	<td style="width:28.1px">&nbsp;' . $arrheader['CURRENCY'] . '</td>';
			$htm .= '	<td style="text-align:right;width:184px">0</td>';
			$htm .= '</tr>';
			$htm .= '<tr>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td style="text-align:center">Biaya Administrasi</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;' . $arrheader['CURRENCY'] . '</td>';
			$htm .= '	<td style="text-align:right">' . number_format($arrdetail['ADM'][0]['TARIF_TOTAL'], 0, ',', '.') . '</td>';
			$htm .= '</tr>';
			$htm .= '<tr>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td style="text-align:center">Dasar Pengenaan Pajak (DPP)</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;' . $arrheader['CURRENCY'] . '</td>';
			$htm .= '	<td style="text-align:right">' . number_format($arrheader['DPP'], 0, ',', '.') . '</td>';
			$htm .= '</tr>';
			$htm .= '<tr>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td style="text-align:center">Jumlah PPN</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;' . $arrheader['CURRENCY'] . '</td>';
			$htm .= '	<td style="text-align:right">' . number_format($arrheader['PPN'], 0, ',', '.') . '</td>';
			$htm .= '</tr>';
			$htm .= '<tr>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td style="text-align:center">BEA MATERAI LUNAS</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;</td>';
			$htm .= '	<td>&nbsp;' . $arrheader['CURRENCY'] . '</td>';
			$htm .= '	<td style="text-align:right">' . number_format($arrdetail['STM'][0]['TARIF_TOTAL'], 0, ',', '.') . '</td>';
			$htm .= '</tr>';
			$htm .= '</table>';

			$this->SetFont('courier', '', 7);
			$this->setXY(10, 198 - $five);
			$this->writeHTML($htm, true, true, true, true, '');
			$this->setXY(12, 221 - $five);
			$this->MultiCell(25, 4, 'Halaman ' . $this->pageNo(), 0, 'L', 0, 1, '', '', false);
			#$this->setXY(47, 191);
			#$this->MultiCell(40, 4, 'Total Halaman : '.$this->getNumPages(), 0, 'R', 0, 1, '', '', true);
			$this->setXY(95, 221 - $five);
			$this->MultiCell(45, 4, 'Jumlah Pembayaran', 0, 'C', 0, 1, '', '', true);
			$this->setXY(140, 221 - $five);
			$this->MultiCell(9, 4, $arrheader['CURRENCY'], 0, 'C', 0, 1, '', '', true);
			$this->setXY(146, 221 - $five);
			$this->MultiCell(52.5, 4,  number_format($arrheader['TOTAL'], 0, ',', '.'), 0, 'R', 0, 1, '', '', true);
			// $this->setXY(14, 230);
			// $this->MultiCell(33, 5, 'BEA MATERAI LUNAS', 0, 'C', 0, 1, '', '', false);
			// $this->setXY(14, 235);
			// $this->MultiCell(33, 5, number_format($arrdetail['STM'][0]['TARIF_TOTAL'],0,',','.'), 0, 'C', 0, 1, '', '', false);
			// $this->Line(15, 230, 15, 240);
			// $this->Line(15, 230, 46, 230);
			// $this->Line(15, 235, 46, 235);
			// $this->Line(15, 240, 46, 240);
			// $this->Line(46, 230, 46, 240);
			$this->setXY(50, 230);
			// $this->MultiCell(33, 10, '', 1, 'C', 0, 1, '', '', true);
			$this->setXY(95, 225);
			$this->MultiCell(90, 3, 'Terbilang : ', 0, 'L', 0, 1, '', '', true);
			$this->setXY(95, 230);
			// $this->MultiCell(90, 5, strtoupper(format_terbilang(number_format($arrheader['TOTAL'], 0, '', '')) . " Rupiah"), 0, 'L', 0, 1, '', '', true);
			$this->setFontSize(6);
			$this->setXY(12, 252);
			$this->MultiCell(110, 3, 'Nota dan Perhitungan Pelayanan Jasa ini berlaku sebagai Faktur Pajak berdasarkan :', 0, 'L', 0, 1, '', '', true);
			$this->setXY(12, 255);
			$this->MultiCell(110, 3, 'Peraturan Direktur Jendral Pajak No. PER-16/PJ/2021 tanggal 27 Juli 2021', 0, 'L', 0, 1, '', '', true);
			$this->setXY(12, 258);
			$this->MultiCell(110, 3, '', 0, 'L', 0, 1, '', '', true);
			$this->setXY(12, 261);
			// $this->MultiCell(110, 3, 'Ketentuan :', 0, 'L', 0, 1, '', '', true);
			// $this->setXY(12, 264);
			// $this->MultiCell(123, 3, '1. Pajak penghasilan pasal 23 sebesar 2% harus dipotong dari jumlah Dasar Pengenaan Pajak (DPP)', 0, 'L', 0, 1, '', '', true);
			// $this->setXY(12, 267);
			// $this->MultiCell(110, 3, '2. Pengajuan keberatan hanya dapat dilakukan dalam waktu 14 hari setelah tanggal nota', 0, 'L', 0, 1, '', '', true);
			// $this->setXY(12, 270);
			// $this->MultiCell(110, 3, '3. Terhadap nota yang diajukan keberatan harus dilunasi terlebih dahulu', 0, 'L', 0, 1, '', '', true);
			// $this->setXY(140, 252);
			// ====$this->MultiCell(58, 3, 'Jakarta, ' . name_date($arrheader['TIME_TTD']), 0, 'C', 0, 1, '', '', true);
			$this->setXY(140, 255);
			$this->MultiCell(58, 5, 'New Priok Container Terminal One', 0, 'C', 0, 1, '', '', true);
			$this->Image('assets/images/sign.jpg', 128, 260, 50, 11, 'JPG', 'http://econ.npct1.co.id', '', true, 150, '', false, false, 0, false, false, false);

			if (date('Ymd') >= "20211001") {
				$this->setXY(12, 275);
				$this->MultiCell(58, 3, 'Member of PT Pelabuhan Indonesia (Persero)', 0, 'L', 0, 1, '', '', true);
			}

			$this->setXY(140, 275);
			$this->MultiCell(58, 5, 'Billing NPCT1', 0, 'C', 0, 1, '', '', true);
			$this->Line(18, 84, 18, 220 - $five);
			$this->Line($rowline - 45, 84, $rowline - 45, 225 - $five);
			$this->Line($rowline - 33, 84, $rowline - 33, 220 - $five);
			$this->Line($rowline - 25, 84, $rowline - 25, 220 - $five);
			$this->Line($rowline, 84, $rowline, 225 - $five);
			$this->Line(10, 220 - $five, 200, 220 - $five);
			$this->Line(10, 225 - $five, 200, 225 - $five);
			$this->SetFont('courier', '', 6);
			$this->setXY(10, 282);
			// $this->MultiCell(190, 5, 'Cetak pada : ' . name_date($arrheader['TIME_PRINT']) . "     User id : " . $arrheader['USER_PRINT'], 0, 'L', 0, 1, '', '', true);
			$this->MultiCell(190, 5, 'Cetak pada : ' . ($arrheader['TIME_PRINT']) . "     User id : " . $arrheader['USER_PRINT'], 0, 'L', 0, 1, '', '', true);
		} else {
			$this->SetFont('courier', '', 7);
			$this->setXY(12, 200 - $five);
			$this->setXY(12, 221 - $five);
			$this->MultiCell(25, 4, 'Halaman ' . $this->pageNo(), 0, 'L', 0, 1, '', '', true);
			$this->Line(18, 84, 18, 220 - $five);
			$this->Line($rowline - 45, 84, $rowline - 45, 225 - $five);
			$this->Line($rowline - 33, 84, $rowline - 33, 220 - $five);
			$this->Line($rowline - 25, 84, $rowline - 25, 220 - $five);
			$this->Line($rowline, 84, $rowline, 225 - $five);
			$this->Line(10, 220 - $five, 200, 220 - $five);
			$this->Line(10, 225 - $five, 200, 225 - $five);
			$this->SetFont('courier', '', 6);
			// $this->setXY(14, 230);
			// $this->MultiCell(33, 5, '', 1, 'C', 0, 1, '', '', false);
			// $this->setXY(14, 235);
			// $this->MultiCell(33, 5, '', 1, 'C', 0, 1, '', '', false);
			// $this->setXY(50, 230);
			// $this->MultiCell(33, 10, '', 1, 'C', 0, 1, '', '', true);
			$this->setXY(10, 282);
			// ====$this->MultiCell(190, 5, 'Cetak pada : ' . name_date($arrheader['TIME_PRINT']) . "     User id : " . $arrheader['USER_PRINT'], 0, 'L', 0, 1, '', '', true);
		}

		if ($this->pageNo() == 1) {
			$this->SetFont('courier', '', 7);
			$this->setXY(14, 230);
			$this->MultiCell(33, 5, 'BEA MATERAI LUNAS', 0, 'C', 0, 1, '', '', false);
			$this->setXY(14, 235);
			$this->MultiCell(33, 5, number_format($arrdetail['STM'][0]['TARIF_TOTAL'], 0, ',', '.'), 0, 'C', 0, 1, '', '', false);
			$this->Line(15, 230, 15, 240);
			$this->Line(15, 230, 46, 230);
			$this->Line(15, 235, 46, 235);
			$this->Line(15, 240, 46, 240);
			$this->Line(46, 230, 46, 240);
		}
	}

	function content()
	{

		$this->SetFont('courier', '', 7);
		$arrdetail = $this->arrdetail;
		$index = 1;
		if (!empty($arrdetail)) {
			$html = '<table cellpadding="2" border="0">';
			foreach ($arrdetail as $a => $b) {
				if (!in_array($a, array('ADM', 'STM'))) {
					if (array_key_exists(0, $b)) {
						$html .= '<tr nobr="true">';
						$html .= '	<td style="width:28.3px; text-align:center">' . str_pad($index, 4, 0, STR_PAD_LEFT) . '</td>';
						$html .= '	<td style="width:273px">&nbsp;' . $b[0]['DESCRIPTION_IN'] . ' // ' . $b[0]['DESCRIPTION_EN'] . '</td>';
						$html .= '	<td style="width:42.6px">&nbsp;</td>';
						$html .= '	<td style="width:28.1px">&nbsp;</td>';
						$html .= '	<td style="width:88.8px">&nbsp;</td>';
						$html .= '	<td style="width:28.1px">&nbsp;</td>';
						$html .= '	<td style="width:184px">&nbsp;</td>';
						$html .= '</tr>';
						foreach ($b as $c => $d) {
							$html .= '<tr nobr="true">';
							$html .= '	<td>&nbsp;</td>';
							$html .= '	<td>&nbsp;' . $d['LINE_ITEM_IN'] . '</td>';
							$html .= '	<td style="text-align:center">' . str_replace('.000', '', $d['JUMLAH']) . '</td>';
							$html .= '	<td style="text-align:center">' . $d['UOM'] . '</td>';
							$html .= '	<td style="text-align:right">' . number_format(intval($d['TARIF']), 0, ',', '.') . '</td>';
							$html .= '	<td style="text-align:center">' . $d['CURRENCY'] . '</td>';
							$html .= '	<td style="text-align:right">' . number_format(intval($d['TARIF_TOTAL']), 0, ',', '.') . '</td>';
							$html .= '</tr>';
							$html .= '<tr nobr="true">';
							$html .= '	<td>&nbsp;</td>';
							$html .= '	<td>&nbsp;' . $d['LINE_ITEM_EN'] . '</td>';
							$html .= '	<td style="text-align:center">&nbsp;</td>';
							$html .= '	<td>&nbsp;</td>';
							$html .= '	<td style="text-align:right">&nbsp;</td>';
							$html .= '	<td>&nbsp;</td>';
							$html .= '	<td style="text-align:right"></td>';
							$html .= '</tr>';
						}
					} else {
						$html .= '<tr nobr="true">';
						$html .= '	<td></td>';
						$html .= '	<td>' . $b['DESCRIPTION_IN'] . '</td>';
						$html .= '	<td><center>' . $b['JUMLAH'] . '</center></td>';
						$html .= '	<td><center>' . $b['UOM'] . '</center></td>';
						$html .= '	<td>' . number_format(intval($b['TARIF']), 0, ',', '.') . '</td>';
						// $html .= '	<td style="text-align:center">' . $d['CURRENCY'] . '</td>'; ==========
						$html .= '	<td style="text-align:right">' . number_format(intval($b['TARIF_TOTAL']), 0, ',', '.') . '</td>';
						$html .= '</tr>';
					}
					$index++;
				}
			}
			$html .= '</table>';
			$this->writeHTML($html, true, true, false, true, '');
			$yCont = ceil($this->getY());
			if ($yCont > 194) {
				$htmladd  = '<table cellpadding="2" border="0">';
				for ($a = 1; $a <= 5; $a++) {
					$htmladd .= '<tr>';
					$htmladd .= '	<td style="width:35.3px">&nbsp;</td>';
					$htmladd .= '	<td style="text-align:center;width:266px">&nbsp;</td>';
					$htmladd .= '	<td style="width:42.6px">&nbsp;</td>';
					$htmladd .= '	<td style="width:28.1px">&nbsp;</td>';
					$htmladd .= '	<td style="width:88.8px">&nbsp;</td>';
					$htmladd .= '	<td style="width:28.1px">&nbsp;</td>';
					$htmladd .= '	<td style="text-align:right;width:184px">&nbsp;</td>';
					$htmladd .= '</tr>';
				}
				$htmladd .= '</table>';
				$this->SetFont('courier', '', 7);
				$this->writeHTML($htmladd, true, true, true, true, '');
			}
		}
	}

	function _content()
	{
		$this->SetFont('courier', '', 7);
		$arrdetail = $this->arrdetail;
		$index = 1;
		if (!empty($arrdetail)) {
			$html = '<table cellpadding="5" border="0">';
			foreach ($arrdetail as $a => $b) {
				if (!in_array($a, array('ADM', 'STM'))) {
					if (array_key_exists(0, $b)) {
						$html .= '<tr nobr="true">';
						$html .= '	<td style="width:35.3px"><center>' . str_pad($index, 4, 0, STR_PAD_LEFT) . '</center></td>';
						$html .= '	<td style="width:248.2px">' . $b[0]['DESCRIPTION_IN'] . ' // ' . $b[0]['DESCRIPTION_EN'] . '</td>';
						$html .= '	<td style="width:42.6px">&nbsp;</td>';
						$html .= '	<td style="width:28.1px">&nbsp;</td>';
						$html .= '	<td style="width:88.8px">&nbsp;</td>';
						$html .= '	<td style="width:40px">&nbsp;</td>';
						$html .= '	<td style="width:190px">&nbsp;</td>';
						$html .= '</tr>';
						foreach ($b as $c => $d) {
							$html .= '<tr nobr="true">';
							$html .= '	<td>&nbsp;</td>';
							$html .= '	<td>' . $d['LINE_ITEM_IN'] . '<br>' . $d['LINE_ITEM_EN'] . '</td>';
							$html .= '	<td style="text-align:center">' . str_replace('.000', '', $d['JUMLAH']) . '</td>';
							$html .= '	<td>' . $d['UOM'] . '</td>';
							$html .= '	<td style="text-align:right">' . number_format($d['TARIF'], 0, ',', '.') . '</td>';
							$html .= '	<td>' . $d['CURRENCY'] . '</td>';
							$html .= '	<td style="text-align:right">' . number_format($d['TARIF_TOTAL'], 0, ',', '.') . '</td>';
							$html .= '</tr>';
						}
					} else {
						$html .= '<tr nobr="true">';
						$html .= '	<td></td>';
						$html .= '	<td>' . $b['DESCRIPTION_IN'] . '</td>';
						$html .= '	<td><center>' . $b['JUMLAH'] . '</center></td>';
						$html .= '	<td><center>' . $b['UOM'] . '</center></td>';
						$html .= '	<td>' . number_format($b['TARIF'], 0, ',', '.') . '</td>';
						// $html .= '	<td>' . $d['CURRENCY'] . '</td>';====
						$html .= '	<td style="text-align:right">' . number_format($b['TARIF_TOTAL'], 0, ',', '.') . '</td>';
						$html .= '</tr>';
					}
					$index++;
				}
			}
			$html .= '</table>';
			$this->writeHTML($html, true, true, true, true, '');
		}
	}
}

// create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->arrheader = $arrheader;
$pdf->arrdetail = $arrdetail;
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('NPCT1');
$pdf->SetTitle('Proforma Stevedoring');
$pdf->SetSubject('Proforma Stevedoring');
$pdf->SetKeywords('Proforma Stevedoring');


$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$pdf->SetFont('courier', '', 7);
$pdf->SetMargins(9, 88, 0);
$pdf->SetAutoPageBreak(TRUE, 79);

$pdf->AddPage();
// $pdf->content();
$pdf->Output("Proforma.pdf", 'I');

$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$pdf->Output('example_051.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
