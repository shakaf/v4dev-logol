<style>
    .card-title {
        font-size: 14px;
    }

    .card-subtitle {
        color: #8C8CA1 !important;
        font-weight: 500;
        font-size: 10px;
        line-height: 160%;
    }

    .label-danger {
        width: 65px;
        height: 20px;
        background: #FCD0CD;
        border-radius: 5px;
        color: #F44336;
        font-family: 'Inter';
        font-style: normal;
        align-items: center;
        padding-left: 2px;
        font-weight: 500;
        font-size: 10px;
        line-height: 16px;
        display: flex;
        letter-spacing: 0.02em;
    }

    .label {
        font-weight: 600;
        font-size: 10px;
        color: #4A4A68;
    }

    .l_val {
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        color: #0E0E2C;
    }

    .card-gp {
        border: #ECF1F4 solid 1px;
        border-radius: 8px;
    }

    .card-gp-title {
        color: #002985;
        font-weight: 500;
        font-size: 14px;
    }

    .breadcrumb-item.active {
        color: #497DF5;
    }

    .payment-title {
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
        color: #2B313B;
    }

    .payment-total {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        color: #2B313B;
    }

    .payment-total-amount {
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        color: #044795;
    }

    .payment-grey {
        font-weight: 400;
        font-size: 12px;
        color: #576175;
    }

    .btn.time {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8px 12px;
        gap: 10px;
        width: 100px;
        height: 31px;
        color: #FEE8E7;
        background: #E84343;
        border-radius: 4px;
    }

    .a-btn {
        font-size: 9px;
        padding-left: 40px;
        padding-right: 40px;

        padding-top: 10px;
        padding-bottom: 10px;

        border-radius: 21px;
        margin-bottom: 2em;
        background: #ECF1F4;
        color: #002985;
    }

    a.active {
        background: #002985;
        color: white;
    }

    .btn-cancel {
        color: #8094C2;
        border-color: #8094C2;
        font-weight: 700;
        font-size: 12px;
        line-height: 16px;
        float: right;
        margin-bottom: 5px;
        border-radius: 8px;
    }

    .btn-cancel:hover {
        color: #002985;
    }

    .label {
        width: 100px;
        height: 16px;

        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 10px;
        line-height: 16px;
        /* identical to box height, or 160% */
        display: flex;
        align-items: center;
        letter-spacing: 0.02em;
    }
</style>

<div class="page-content" style="background-color: #F8F8F9; ">

    <div class="container-fluid">
        <div class="navbar">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">My order</li>
                <li class="breadcrumb-item active" aria-current="page">Order Form</li>
            </ol>
        </div>

        <div class="row">
            <div class="d-flex flex-wrap">
                <span style="cursor:pointer" onclick="history.back()">
                    <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <h4 style="font-size: 16px;margin-left:10px">Detail Order</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">General Info</h4>
                        <p class="card-subtitle description">Requirement data that can be used on all services.</p>
                    </div>
                    <hr />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Type of Order</label>
                                <p class="l_val">Export</p>
                            </div>
                            <div class="col-md-8">
                                <label class="label">NPWP</label>
                                <p class="l_val">08.178.554.2-123.321 - PT. TEGUH ABADI JAYA</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">DO Number</label>
                                <p class="l_val">DO_11233RBG_22</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">DO Date</label>
                                <p class="l_val">22/04/2022</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Internal Ref. Number</label>
                                <p class="l_val">MRS123456</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="col-md-10 justify-content-start">
                                Your order will be <b>canceled automatically,</b> if you do not complete the payment by the specified time limit!
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <button class="btn time">00 : 48 : 12</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Service Details</h4>
                        <h6 class="card-subtitle">Specific data that required by each services will shown here.</h6>
                        <div class="col-md-12 mt-3 btnChoose">
                            <a href="#" class="a-btn active">E-Depot</a>
                            <a href="#" class="a-btn">E-Port</a>
                        </div>
                    </div>
                    <hr />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Order ID</label>
                                <p class="l_val">LG/202105/I0159/022</p>
                            </div>
                            <div class="col-md-8">
                                <label class="label">Depo</label>
                                <p class="l_val">Seacon</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Shipping Line</label>
                                <p class="l_val">Maersk Line</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Bussiness Unit</label>
                                <p class="l_val">Maersk Sea Land</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Container Grade</label>
                                <p class="l_val">GRADE B</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Container Details</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            <img src="<?php echo base_url("assets/images/icon/cont-20-dv.png"); ?>" style="width: 32px; height: 25px;" />
                                            <span style="margin-left: 10px;"> 20 Feet - General Purpose (x4) </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <table class="table data-show-multi-sort-button =true">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Container Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">01</th>
                                                                    <td>MRKU9201218</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">02</th>
                                                                    <td>MGIU2735772</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">03</th>
                                                                    <td>GBYR1098827</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne1">
                                            <img src="<?php echo base_url("assets/images/icon/cont-40-dv.png"); ?>" style="width: 32px; height: 25px;" />
                                            <span style="margin-left: 10px;"> 40 Feet - General Purpose (x4) </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <table class="table data-show-multi-sort-button">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Container Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">01</th>
                                                                    <td>MRKU9201218</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">02</th>
                                                                    <td>MGIU2735772</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">03</th>
                                                                    <td>GBYR1098827</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-cancel" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Cancel Order</button>
                    </div>
                </div>

                <div class="card">
                    <div class="accordion-button card-body" id="headingOne3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Activity Log</h4>
                                <p class="description">Keep track and see your order progress</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        Activity
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="accordion-button card-body" id="headingOne4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">Payment</h4>
                                <p class="description">This is your payment summary from your order.</p>
                            </div>
                            <div class="col-md-4 mt-4">
                                <span class="label-danger">No Payment </span>
                            </div>
                        </div>
                    </div>
                    <!-- payment -->
                    <div id="collapseOne4" class="accordion-collapse collapse show card-body" aria-labelledby="headingOne4" data-bs-parent="#accordionExample1">
                        <div class=" row">
                            <div class="col-md-8">
                                <p class="payment-grey">Expire Time Payment</p>
                                <p class="payment-title">12:30-12/12/2021</p>
                            </div>
                            <div class="col-md-4">
                                <label class="payment-title" style="color: #F44336;">00 : 48 : 12</label>
                            </div>
                        </div>
                        <div class="row">
                            <p class="payment-grey">Amount</p>
                            <div class="col-md-8">
                                <p class="payment-title">Rp 1.500.500</p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="payment-grey">Virtual Account Number</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?php echo base_url('/assets/images/icon/bank-bca.png') ?>">
                            </div>
                            <div class="col-sm-7 mt-2">
                                <p class="payment-title">000991091210012</p>
                            </div>
                            <div class="col-md-3">
                                <p class="payment-title">Copy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end payment -->

                <!-- how to pay -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p style="font-style: normal; font-weight: 500; font-size: 12px; color: #0E0E2C; line-height: 16px;">How To Pay</p>
                            </div>
                            <div class="col-md-8">
                                <p style="font-family: Inter;font-style: normal;font-weight: 700;font-size: 12px;text-align: right;color: #333333;line-height: 16px;">BCA Virtual Account</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="accordion-button card-body" id="headingOne7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne7">
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <p style="font-style: normal; font-weight: 500; font-size: 12px; color: #0E0E2C; line-height: 16px;">BCA Internet Banking</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne7" class="accordion-collapse collapse show card-body" aria-labelledby="headingOne7" data-bs-parent="#accordionExample1">
                        <div class="row" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 16px; color: #333333;">
                            <p>1. Log in to the BCA Mobile application.</p>
                            <p>2. Select the m-BCA menu.</p>
                            <p>3. Select m-Transfer > BCA Virtual Account.</p>
                            <p>4. Enter Virtual Account Number 000991091210012.</p>
                            <p>5. Enter m-BCA pin.</p>
                        </div>
                    </div>

                    <div class="accordion-button card-body" id="headingOne8" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne8">
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <p style="font-style: normal; font-weight: 500; font-size: 12px; color: #0E0E2C; line-height: 16px;">BCA Mobile (M-BCA)</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne8" class="accordion-collapse collapse show card-body" aria-labelledby="headingOne8" data-bs-parent="#accordionExample1">
                        <div class="row" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 16px; color: #333333;">
                            <p>1. Log in to the BCA Mobile application.</p>
                            <p>2. Select the m-BCA menu.</p>
                            <p>3. Select m-Transfer > BCA Virtual Account.</p>
                            <p>4. Enter Virtual Account Number 000991091210012.</p>
                            <p>5. Enter m-BCA pin.</p>
                        </div>
                    </div>
                    <div class="accordion-button card-body" id="headingOne9" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne9">
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <p style="font-style: normal; font-weight: 500; font-size: 12px; color: #0E0E2C; line-height: 16px;">ATM BCA</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne9" class="accordion-collapse collapse show card-body" aria-labelledby="headingOne9" data-bs-parent="#accordionExample1">
                        <div class="row" style="font-style: normal; font-weight: 400; font-size: 12px; line-height: 16px; color: #333333;">
                            <p>1. Log in to the BCA Mobile application.</p>
                            <p>2. Select the m-BCA menu.</p>
                            <p>3. Select m-Transfer > BCA Virtual Account.</p>
                            <p>4. Enter Virtual Account Number 000991091210012.</p>
                            <p>5. Enter m-BCA pin.</p>
                        </div>
                    </div>
                </div>
                <!-- end -->

                <!-- detil order -->
                <div class="card">
                    <div class="accordion-button card-body" id="headingOne6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Detil Order</h4>
                                <p class="description">This is your summary from your order.</p>
                            </div>
                            <!-- <div class="col-md-4 mt-4">
                                <span class="label-danger">No Payment</button>
                            </div> -->
                        </div>
                    </div>
                    <div id="collapseOne6" class="accordion-collapse collapse show card-body" aria-labelledby="headingOne6" data-bs-parent="#accordionExample1">
                        <div class=" row">
                            <div class="col-md-8">
                                <p class="payment-title">Depo Reimbursement</p>
                                <p class="payment-grey">Seacon</p>
                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp. 200.000</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-title">Port Reimbursement</p>
                                <p class="payment-grey">NPCT1</p>
                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp. 200.000</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-title">Platform Fee</p>
                                <p class="payment-grey">8x Containers</p>
                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp. 100.000</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-title">Sub-Total</p>

                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp 300.000</label>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-title">PPh 23</p>

                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp 6.000</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-title">PPn 10%</p>

                            </div>
                            <div class="col-md-4">
                                <label class="payment-title">Rp 30.000</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="payment-total">Total Amount</p>

                            </div>
                            <div class="col-md-4">
                                <label class="payment-total-amount">Rp 336.000</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="accordion-button card-body" id="headingOne5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Document Detail</h4>
                                <p class="description">All Documents generated by each service will be shown here.</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne5" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne5" data-bs-parent="#accordionExample1">
                        <div class="card-body">
                            <!-- <div class="row ml-4">
                                <div class="col-md-12 btnChoose">
                                    <a href="#" class="a-btn active">E-Depot</a>
                                    <a href="#" class="a-btn">E-Port</a>
                                </div>
                            </div> -->
                            <div class="row">
                                <input class="form-control" type="search" value="Search" id="example-search-input">
                                <div class="row" style="margin-top:40px;">
                                    <div class="col-md-12 col-sm-12">

                                        <input type="checkbox" class="" style="width: 20px; height: 20px;">
                                        <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Select All</label>
                                        <span class="badge rounded-pill badge-soft-primary" style="margin-left: 1em; cursor:pointer" data-bs-toggle="modal" data-bs-target="#confirmEmail">Send Email</span>
                                        <span class="badge rounded-pill badge-soft-primary" style="cursor:pointer">Download</span>
                                        <span class="badge rounded-pill badge-soft-success" style="cursor:pointer">Print</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row card-gp" style="margin-top:40px;">
                                <div class="col-md-12 col-sm-12">
                                    <input type="checkbox" class="" style="width: 20px; height: 20px;">
                                    <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                    <br />
                                    <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                </div>
                            </div>
                            <div class="row" style="margin-top:40px;">
                                <div class="col-md-12 col-sm-12">
                                    <input type="checkbox" class="" style="width: 20px; height: 20px;">
                                    <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                    <br />
                                    <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                </div>
                            </div>
                            <div class="row" style="margin-top:40px;">
                                <div class="col-md-12 col-sm-12">
                                    <input type="checkbox" class="" style="width: 20px; height: 20px;">
                                    <label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
                                    <br />
                                    <label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal cancel order -->
<form action="" method="post">
    <div class="modal fade bs-example-modal-center" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-delete">
                <div class="modal-body" align="center">
                    <div>
                        <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.763 135.562C39.7316 135.562 38.8693 134.778 38.7719 133.751L36.44 109.16C36.3287 107.986 37.2519 106.971 38.431 106.971L102.024 106.971C103.217 106.971 104.144 108.008 104.011 109.194L101.256 133.785C101.142 134.797 100.286 135.562 99.268 135.562L40.763 135.562Z" fill="#1627A1" />
                            <path d="M78.0603 73.8184C76.7876 73.8184 75.9391 74.6668 75.9391 75.9396L73.8179 121.97C73.8179 123.243 74.6664 124.091 75.9391 124.091C76.9997 124.091 78.0603 123.243 78.0603 121.97L80.1815 75.9396C80.1815 74.879 79.1209 73.8184 78.0603 73.8184Z" fill="#1C3E58" />
                            <path d="M61.9391 73.8184C60.6664 73.8184 59.8179 74.879 59.8179 75.9396L61.9391 121.97C61.9391 123.03 62.9997 124.091 64.0603 124.091C65.333 124.091 66.1815 123.03 66.1815 121.97L64.0603 75.9396C64.0603 74.6668 62.9997 73.8184 61.9391 73.8184Z" fill="#1C3E58" />
                            <path d="M94.1816 73.8179C92.9088 73.6058 91.8482 74.4542 91.8482 75.5148L85.2725 121.545C85.0603 122.606 85.9088 123.878 86.9694 123.878C88.03 124.091 89.3028 123.242 89.3028 122.182L95.8785 76.3633C96.0906 75.0906 95.2422 74.03 94.1816 73.8179Z" fill="#1C3E58" />
                            <path d="M45.8181 73.8176C44.7575 74.0298 43.909 75.0904 44.1211 76.151L50.6969 122.181C50.909 123.242 51.7575 124.09 52.8181 124.09C54.0908 124.09 55.1514 123.03 54.9393 121.757L48.3635 75.7267C48.1514 74.454 47.0908 73.6055 45.8181 73.8176Z" fill="#1C3E58" />
                            <path d="M113.06 37.9696C115.818 35.212 115.818 30.9696 113.06 28.212C110.727 25.8787 91.6362 6.99988 88.8787 4.03018C86.3332 1.48473 81.6665 1.48473 79.1211 4.03018C70.8484 12.3029 47.7271 35.4241 38.6059 44.5453C37.5453 45.6059 36.909 46.6665 36.6968 48.1514H29.6968C25.2423 48.1514 21.6362 51.7575 21.6362 56.212C21.6362 60.6665 25.2423 64.0605 29.4847 64.2726L36.6968 130.242C37.1211 134.485 40.7271 137.879 44.9696 137.879H95.0302C99.2726 137.879 102.879 134.697 103.303 130.454L110.515 64.4847C114.97 64.4847 118.364 60.8787 118.364 56.4241C118.364 51.9696 114.757 48.3635 110.303 48.3635H102.667C103.091 48.1514 113.273 37.7575 113.06 37.9696ZM110.091 34.9999L103.939 41.1514C100.545 36.4847 100.545 29.909 103.939 25.2423L110.091 31.3938C111.151 32.4544 111.151 33.9393 110.091 34.9999ZM85.0605 60.0302H50.909C55.5756 53.6665 55.3635 44.7575 50.4847 38.6059L72.9696 16.1211C79.3332 21.212 88.4544 21.212 94.8181 16.1211L100.757 22.0605C95.6665 28.4241 95.6665 37.5453 100.757 43.909L85.0605 60.0302ZM82.0908 7.212C83.1514 6.1514 84.8484 6.1514 85.909 7.212L92.0605 13.3635C87.3938 16.7575 80.8181 16.7575 76.1514 13.3635L82.0908 7.212ZM41.3635 47.7271L47.515 41.5756C50.909 46.2423 50.909 52.6059 47.515 57.4847L41.3635 51.3332C40.515 50.4847 40.515 48.7878 41.3635 47.7271ZM25.8787 56.212C25.8787 54.0908 27.5756 52.3938 29.6968 52.3938H37.1211C37.5453 53.0302 37.9696 53.6665 38.3938 54.3029L43.909 59.8181H31.1817H29.6968C27.5756 60.0302 25.8787 58.3332 25.8787 56.212ZM99.0605 129.818C98.8484 131.939 97.1514 133.636 95.0302 133.636H44.9696C42.8484 133.636 41.1514 131.939 40.9393 129.818L33.7271 64.2726H106.273L99.0605 129.818ZM110.303 52.6059C112.424 52.6059 114.121 54.3029 114.121 56.4241C114.121 58.5453 112.424 60.2423 110.303 60.2423H108.606H90.9999L98.6362 52.6059H110.303Z" fill="#1C3E58" />
                        </svg>
                    </div>
                    <p>Cancel Order</p>
                    <p style="color: #818181;font-weight: 400;font-size: 14px;padding: 16px 43px;">Do you want to cancel this order? Orders will not be processed</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6"><button style="width:100%;" type="button" class="btn cancelModal waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Cancel Order</button></div>
                        <div class="col-md-6 col-sm-6"><button style="width:100%;" type="button" class="btn keepOrder waves-effect waves-light">Keep Order</button></div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
</form>
<!-- /.modal -->

<!-- modal confirm send email -->
<form action="" method="get">
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" id="confirmEmail">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" align="center">
                    <!-- <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
						<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
					</svg> -->
                    <img src="<?php echo base_url('assets/images/success.gif'); ?>" width="140" height="140" viewBox="0 0 140 140" fill="none" alt="">
                    <p class="description">
                        Your document has been sent to email</p>
                    <p>jaka.morbius@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- end modal -->
<script>
    $('.btnChoose').on('click', 'a', function() {
        $('.btnChoose a.active').removeClass('active');
        $(this).addClass('active');
    });
</script>