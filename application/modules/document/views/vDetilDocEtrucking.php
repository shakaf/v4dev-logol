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
            /* padding-right: 0 !important; */
            border: 0.5px solid #CDCDCD;

        }

        @page {
            size: A4;
            margin: 0 auto;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* .page {
                margin: 0 !important;
                border: none;
                border-radius: 1 ;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            } */
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
                        <h4 style="font-size: 14px;margin-left:10px; margin-top:3px">eTicket-SEGU5558165.pdf</h4>
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
        <table style="width:100%;">
            <thead>
                <tr style="font-size:12px; border: 1px solid">
                    <td>
                        <img src="<?php echo base_url('assets/images/Logo.png'); ?>">
                    </td>
                    <td>
                        <strong>
                            PT NEW PRIOK CONTAINER TERMINAL ONE </br>
                            Alamat: Jl. TERMINAL KALIBARU RAYA KAV B No. 1 </br>
                            KEL. KALIBARU KEC. CILINCING </br>
                            JAKARTA UTARA DKI JAKARTA 14110 </br>
                            NPWP: 70.536.691.2-043.000 </br>
                            Tanggal Pengukuhan PKP : 01 Oktober 2014
                        </strong>
                    </td>
                    <td class="text-start" style="border: 1px solid">
                        <p>No Faktur Pajak : 010-22.00048525</p>
                        <p>Proforma : NPCT/20220218/00201</p>
                        <P>Jatuh Tempo : 19 Februari 2022</P>
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
    </div>
</body>

<script>

</script>

</html>