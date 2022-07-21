<!doctype html>
<html lang="en">

<head>
    <style>
        h4.text {
            /* font-family: 'Nunito Sans'; */
            font-style: normal;
            font-weight: 700;
            font-size: 29.0364px;
            display: flex;
            align-items: center;
            text-align: right;
            color: #000000;
            line-height: 0 !important;
        }

        p.invoiceNumber {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            align-items: center;
            margin-top: -20px;
            text-align: right;
            color: #000000;
            line-height: 0 !important;
        }

        .tableContent,
        tr td {
            padding: 15px !important;
            align-items: center;
        }

        tr td,
        th {
            padding: 0 !important;
            /* margin: 0 !important; */
            align-items: center;
        }

        thead tr th {
            /* font-family: 'Nunito Sans'; */
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 17px;
            letter-spacing: 0.015em;
            color: #444D63;
        }

        tbody tr td,
        th {
            /* font-family: 'Nunito Sans'; */
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 156%;
            align-items: center;
            letter-spacing: 0.02em;
            color: #626262;
        }

        .titles {
            /* font-family: 'Nunito Sans'; */
            font-style: normal;
            font-weight: 700;
            font-size: 12px;
            line-height: 17px;
            color: #002985;
        }

        ul.li::before {
            list-style-type: circle;
            color: #000000;
        }

        ul.remark li {
            margin-left: -30px !important;
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

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <!-- Begin page -->
    <table style="width:100%;">
        <tbody>
            <tr>
                <td>
                    <img src="<?php echo base_url('assets/images/Logo.png'); ?>">
                </td>
                <td>
                    <h4 class="text">INVOICE</h4>
                    <p class="invoiceNumber">INV/EX/2021/03/0352</p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr style="border: 0.513636px solid #CDCDCD" />
    <table style="width:100%;">
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
        </tbody>
    </table>
    <hr style="border: 0.513636px solid #CDCDCD" />
    <table style="width:100%;">
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

    <table style="width:100%; margin-top:20px; border: 0.513636px solid #CDCDCD" class="tableContent">
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
                <td class="text-center" style="width: 20px;">Rp</td>
                <td class="text-end">3.500.000,00</td>
                <td class="text-end" style="width: 45px;">Rp</td>
                <td class="text-end">140.000.000,00</td>
            </tr>
            <tr>
                <td scope="row" class="font-size-13 text-muted mb-0">Management Fee (E-port & E-Depot)</td>
                <td class="text-center">10 %</td>
                <td class="text-center">4</td>
                <td class="text-center">Rp</td>
                <td class="text-end">120.000,00</td>
                <td class="text-end">Rp</td>
                <td class="text-end">480.000,00</td>
            </tr>
            <tr>
                <td scope="row" class="font-size-13 text-muted mb-0">Overnight Charges</td>
                <td class="text-center">10 %</td>
                <td class="text-center">4</td>
                <td class="text-center">Rp</td>
                <td class="text-end">1.750.000,00</td>
                <td class="text-end">Rp</td>
                <td class="text-end">7.000.000,00</td>
            </tr>
            <tr>
                <td scope="row" class="font-size-13 text-muted mb-0">Repo isi</td>
                <td class="text-center">10 %</td>
                <td class="text-center">4</td>
                <td class="text-center">Rp</td>
                <td class="text-end">500.000,00</td>
                <td class="text-end">Rp</td>
                <td class="text-end">2.000.000,00</td>
            </tr>
            <tr>
                <td scope="row" class="font-size-13 text-muted mb-0">Handling Late Coming</td>
                <td class="text-center">10 %</td>
                <td class="text-center">4</td>
                <td class="text-center">Rp</td>
                <td class="text-end">300.000,00</td>
                <td class="text-end">Rp</td>
                <td class="text-end">1.200.000,00</td>
            </tr>
            <tr>
                <td scope="row" class="font-size-13 text-muted mb-0">EDII</td>
                <td class="text-center">10 % </td>
                <td class="text-center">4</td>
                <td class="text-center">Rp</td>
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
            <tr class="table-info" style="height: 25px;">
                <th scope="row" colspan="5" class="text-end" style="color:#002985;"><strong>Grand Total</strong></th>
                <td class="text-end" style="color:#002985;"><strong>Rp</strong></td>
                <th class="text-end" style="color:#002985;"><strong>53.248.000,00</strong></th>
            </tr>
            <tr>
                <td scope="row" colspan="7" class="border-0 text-end text-muted">
                    Fifty Three Million Two Hundred Forty Eight Thousand Rupiahs</td>
            </tr>
        </tbody>
    </table>
    <table style="width:60%; margin-top:20px">
        <tbody>
            <tr>
                <td>
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
                <strong class="titles">
                    03 Apr 2021
                </strong>
            </tr>
        </tbody>
    </table>
    <table style="width:100%; margin-top:20px">
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
    <table style="width:100%; margin-top:20px">
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
    <!-- END layout-wrapper -->
</body>

</html>