<!doctype html>
<html lang="en">

<head>
    <style type="text/css">
        .texts {
            font-style: normal;
            font-weight: 700;
            font-size: 29px;
            text-align: right;
            color: #000000;
            padding: 0px !important;

        }

        p.invoiceNumber {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            text-align: right;
            color: #000000;
        }

        thead tr th {
            font-family: 'Nunito Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 0.015em;
            color: #444D63;
        }

        tbody tr td,
        th {
            font-family: 'Nunito Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 156%;
            align-items: center;
            letter-spacing: 0.02em;
            color: #626262;
        }

        .tableContent tr,
        td {
            padding-left: 10px;
            padding-right: 10px;
        }

        .titles {
            font-family: 'Nunito Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            color: #002985;
        }

        ul.li::before {
            list-style-type: circle;
            color: #000000;
        }

        ul.remark li {
            margin-left: -20px !important;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            letter-spacing: 0.02em;
            color: #626262;
        }

        .text-start {
            text-align: left !important;
        }

        .text-end {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        /* body {
            width: 100%;
            height: 100%;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #FAFAFA;
        } */

        .page {
            width: 210mm;
            min-height: 297mm;
            margin: 10mm auto;
            margin-top: 20px !important;
            background: white;
            padding: 0.5cm;
            padding-right: 0 !important;
        }

        @page {
            size: A4;
            margin: 0 !important;
        }

        /* table,
        th,
        td {
            border: 1px solid black;
        } */
    </style>
</head>

<body>
    <?php
    $pdf = false;
    if (strpos(current_url(), "print")) {
        $pdf = true;
    }
    if ($pdf == false) {
    ?>
        <div class="card-header" style="width:210mm; margin-left:220px; margin-top:50px">
            <div class=" row">
                <div class="col-md-4 mt-2">
                    <div class="d-flex flex-wrap">
                        <span style="cursor:pointer" onclick="history.back()">
                            <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <h4 style="font-size: 14px;margin-left:10px; margin-top:3px">Inv_23456223232.pdf</h4>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="d-flex flex-wrap gap-3" style="float: right;">
                        <button type="button" class="btn btn-soft-primary waves-effect waves-light">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#002985" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#002985" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 11V17" stroke="#002985" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 14L12 17L15 14" stroke="#002985" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Download</button>
                        <button type="button" class="btn btn-soft-success waves-effect waves-light" onclick="window.open('<?php echo base_url('/print-invoice') ?>', 'blank')">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="#47894A" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="#47894A" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 13H9C7.89543 13 7 13.8954 7 15V19C7 20.1046 7.89543 21 9 21H15C16.1046 21 17 20.1046 17 19V15C17 13.8954 16.1046 13 15 13Z" stroke="#47894A" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Print
                        </button>
                        <button type="button" class="btn btn-outline-info waves-effect waves-light">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 18H5C4.46957 18 3.96086 17.7893 3.58579 17.4142C3.21071 17.0391 3 16.5304 3 16V6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4H19C19.5304 4 20.0391 4.21071 20.4142 4.58579C20.7893 4.96086 21 5.46957 21 6V13.5" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 6L12 12L21 6" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 18H21" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18 15L21 18L18 21" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Share via Email
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="page">
        <table style="width:95%;">
            <thead>
                <tr>
                    <td>
                        <img src="<?php echo base_url('assets/images/Logo.png'); ?>">
                    <td class="text-end">
                        <strong class="texts">INVOICE</strong>
                        <p class="invoiceNumber">INV/EX/2021/03/0352</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="border: 0.513636px solid #CDCDCD" />
                    </td>
                </tr>
            </thead>
        </table>

        <table style="width:95%;">
            <tbody>
                <tr>
                    <td>
                        <strong style="font-size:14px;">
                            Bill To:
                        </strong>
                    </td>
                    <td></td>
                    <td class="text-start">
                        Order ID
                    </td>
                    <td class="text-end">
                        LG/202104/E0015
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong style="font-size:14px;">
                            PT Pusaka Lintas Samudra
                        </strong>
                    </td>
                    <td></td>
                    <td class="text-start">
                        Due Date
                    </td>
                    <td class="text-end">
                        10/10/20
                    </td>
                </tr>
                <tr>
                    <td>
                        Graha Pusaka Jl. Kebon Bawang VI No.24, RT.12/RW.6 Kb. Bawang,
                        </br> Tj. Priok, Kota Jakarta Utara, DKI Jakarta, 14320 </td>
                    <td></td>
                    <td class="text-start">
                        Payment Method
                    </td>
                    <td class="text-end">
                        <strong style="font-size:14px;">
                            PayLater
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <hr style="border: 0.513636px solid #CDCDCD" />
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- <hr style="border: 0.513636px solid #CDCDCD" /> -->
        <table style="width:95%;">
            <tr>
                <td style="width:25%;">Document No.</td>
                <td style="width:25%;">Kode Ref</td>
                <td style="width:25%;">Container Quantity</td>
                <td style="width:25%;">Destination</td>
            </tr>
            <tr>
                <td style="width:25%;" class="titles">78892819910</td>
                <td style="width:25%;" class="titles">VEJK0920112288</td>
                <td style="width:25%;" class="titles">06 Apr 2021</td>
                <td style="width:25%;" class="titles">Seacon - Cikarang - Tj. Priok (NPCT1)</td>
            </tr>
        </table>

        <table style="width:95%; margin-top:20px; border: 0.513636px solid #CDCDCD;" class="tableContent">
            <thead>
                <tr class="text-center">
                    <th style="width:200px">Description</th>
                    <th style="width:85px;">VAT</th>
                    <th style="width:85px">Quantity</th>
                    <th colspan="2" style="width:150px">Unit Price</th>
                    <th colspan="2" style="width:150px">Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- service -->
                <tr>
                    <td class="col-12" colspan="7" style="color:#000000;">
                        Service
                    </td>
                </tr>
                <tr>
                    <td class="font-size-13 text-muted mb-0">Service Trucking Charges - (Export) - Logol</td>
                    <td class="text-center">1 %</td>
                    <td class="text-center">4</td>
                    <td class="text-end" style="width: 45px;">Rp</td>
                    <td class="text-end">3.500.000,00</td>
                    <td class="text-end" style="width: 45px;">Rp</td>
                    <td class="text-end">140.000.000,00</td>
                </tr>
                <tr>
                    <td scope="row" class="font-size-13 text-muted mb-0">Management Fee (E-port & E-Depot)</td>
                    <td class="text-center">10 %</td>
                    <td class="text-center">4</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">120.000,00</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">480.000,00</td>
                </tr>
                <tr>
                    <td scope="row" class="font-size-13 text-muted mb-0">Overnight Charges</td>
                    <td class="text-center">10 %</td>
                    <td class="text-center">4</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">1.750.000,00</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">7.000.000,00</td>
                </tr>
                <tr>
                    <td scope="row" class="font-size-13 text-muted mb-0">Repo isi</td>
                    <td class="text-center">10 %</td>
                    <td class="text-center">4</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">500.000,00</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">2.000.000,00</td>
                </tr>
                <tr>
                    <td scope="row" class="font-size-13 text-muted mb-0">Handling Late Coming</td>
                    <td class="text-center">10 %</td>
                    <td class="text-center">4</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">300.000,00</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">1.200.000,00</td>
                </tr>
                <tr>
                    <td scope="row" class="font-size-13 text-muted mb-0">EDII</td>
                    <td class="text-center">10 % </td>
                    <td class="text-center">4</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">150.000,00</td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">600.000,00 </td>
                </tr>
                <!-- Reimbursment -->
                <tr>
                    <td class="col-12" colspan="7" scope="row" style="color:#000000;">
                        Reimbursment
                    </td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Storage Charge
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">8.000.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Lift ON
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">7.000.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Lift OFF
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">7.000.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Titip Container
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">800.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Seal Charges
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">1.350.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        Late Coming
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">2.350.000,00</td>
                </tr>
                <tr>
                    <td class="col-12 font-size-13 text-muted mb-0" colspan="5" scope="row">
                        COO Fee
                    </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">200.000,00</td>
                </tr>
                <!-- total -->
                <tr>
                    <td scope="row" colspan="7">
                        <hr style="border: 0.513636px solid #CDCDCD" />
                    </td>
                </tr>
                <tr>
                    <td scope="row" colspan="5" class="text-end">Total Reimbursment </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">26.700.000,00 </td>
                </tr>
                <tr>
                    <td scope="row" colspan="5" class="text-end">Total Services </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">25.280.000,00</td>
                </tr>
                <tr>
                    <td scope="row" colspan="5" class="text-end">Vat 1% </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">140.000,00</td>
                </tr>
                <tr>
                    <td scope="row" colspan="5" class="text-end">Vat 10% </td>
                    <td class="text-end">Rp</td>
                    <td class="text-end">128.000,00</td>
                </tr>
                <!-- grand total -->
                <tr style="height: 25px;">
                    <td scope="row" colspan="5" class="text-end" style="color:#002985;"><strong>Grand Total</strong></td>
                    <td class="text-end" style="color:#002985;"><strong>Rp</strong></td>
                    <td class="text-end" style="color:#002985;"><strong>53.248.000,00</strong></td>
                </tr>
                <tr>
                    <td scope="row" colspan="7" class="border-0 text-end text-muted">
                        Fifty Three Million Two Hundred Forty Eight Thousand Rupiahs</td>
                </tr>
            </tbody>
        </table>
        <!-- <div style="page-break-after: always;"></div> -->
        <table style="width:60%; margin-top:10px; padding:0px">
            <tbody>
                <tr>
                    <td colspan="2">
                        Container Number
                    </td>
                </tr>
                <tr>
                    <td style="width:25%;">
                        <strong class="titles">
                            FFAU3608110
                        </strong>
                    </td>
                    <td style="width:25%;">
                        <strong class="titles">
                            CSNU7913763
                        </strong>
                    </td>
                    <td style="width:25%;">
                        <strong class="titles">
                            TCKU7192293
                        </strong>
                    </td>
                    <td style="width:25%;">
                        <strong class="titles">
                            TGBU4107477
                        </strong>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        Stuffing/Unstuffing Date
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="titles">
                            03 Apr 2021
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <table style="width:95%; margin-top:40px">
            <tbody>
                <tr>
                    <td style="width:400px;">
                        Account Info
                    </td>
                    <td style="width:200px">
                        Notes
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="titles">
                            PT. LOGOL JAKARTA MITRAINDO
                        </strong>
                    </td>
                    <td>
                        <strong class="titles">
                            Please make payment before due date
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong class="titles">
                            BNI Cabang Artha Gading 309 000 9889
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width:95%; margin-top:20px">
            <tbody>
                <tr>
                    <td>
                        <strong>
                            Remarks
                        </strong>
                        <ul class="remark">
                            <li>Official Receipt shall be issued upon settlement of this Debit Note.</li>
                            <li>All cheques should be crossed and made payable to PT. LOGOL JAKARTA MITRAINDO. All bank charges are under the account of the payer-remitter.</li>
                            <li>Interest at rate of 3% per month from above amount being applied for any late payment.</li>
                            <li>We only accept payment through our bank account or can use virtual account no., no cash payment allowed.</li>
                            <li>Any discrepancy with this Debit Note kindly contact our Account Dept within 7 days from date of invoice, otherwise all charges are deemed to be correct.</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td colspan="8">
                        <table style="width:100%; margin-top:40px">
                            <tr>
                                <td style="width:500px;">
                                    <strong class="titles" style="font-weight: 700;font-size: 12.3273px;color:#000000">
                                        PT LOGOL JAKARTA MITRAINDO
                                    </strong>
                                </td>
                                <td class="text-center">
                                    Jakarta, 02 Jun 2021
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Graha Boulevard, Blok C No. 21 Jl. <br />
                                    Boulevard Raya, Kelapa Gading, <br />14240 (021 453 4049)
                                </td>
                                <td class="titles text-center">
                                    <img src="<?php echo base_url('/assets/images/paraf.png') ?>" alt=""><br />
                                    <strong>
                                        Andreas Dwi Joko
                                    </strong>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<script>

</script>

</html>