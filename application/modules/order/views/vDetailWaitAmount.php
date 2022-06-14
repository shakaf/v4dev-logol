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

    #loader {
        background: #FFFFFF;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease-in;
    }

    .hide {
        opacity: 0;
        visibility: hidden;
    }

    .btnPayment {
        background: #C2D4FC;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0px 32px;
        gap: 10px;

        width: 100%;
        height: 50px;
    }
</style>

<div class="page-content" style="background-color: #F8F8F9; ">

    <div class="container-fluid">
        <!-- <div class="navbar">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">My order</li>
                <li class="breadcrumb-item active" aria-current="page">Order Form</li>
            </ol>
        </div> -->

        <div class="row">
            <div class="d-flex flex-wrap">
                <span><i class="fa fa-arrow-left"></i></span>
                <h4 style="font-size: 16px;margin-left:10px">Back to Order Managemet</h4>
            </div>
        </div>
        <div class="row">
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

                <div class="">
                    <h4 class="card-title">Your Order Listing</h4>
                    <p class="description">Please select which order you will process into the next step (payment).</p>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">E-Depot</h4>
                        <p class="description">Depot Order Details</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">Depot</label>
                                <p class="l_val">BSA</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Shipping Line</label>
                                <p class="l_val">Maersk Line</p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Container Grade</label>
                                <p class="l_val">GRADE B</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
                                                <td style="width:100%;">
                                                    <label style="margin-left:8%;font-weight:bold;">20 Feet</label>
                                                    <p class="description" style="margin-left:8%;">General Purpose</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="margin-left:8%;font-weight:bold;">x4</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-40-dv.png'); ?>" /></td>
                                                <td style="width:100%;">
                                                    <label style="margin-left:8%;font-weight:bold;">40 Feet</label>
                                                    <p class="description" style="margin-left:8%;">General Purpose</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="margin-left:8%;font-weight:bold;">x4</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <table>
                                            <tr>
                                                <td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-40-hc.png'); ?>" /></td>
                                                <td style="width:100%;">
                                                    <label style="margin-left:8%;font-weight:bold;">40 Feet</label>
                                                    <p class="description" style="margin-left:8%;">General Purpose</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="margin-left:8%;font-weight:bold;">x4</label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-12">
                            <h4 class="card-title">Payment Summary</h4>
                            <p class="description">This is your payment summary from your order.</p>
                        </div>
                    </div>

                    <div class="card-body" id="loader">
                        <div class="row" style="align-content:center; display: block; justify-content: center;">
                            <svg width="57" height="96" viewBox="0 0 57 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M50.8811 73.5625C50.042 79.6426 40.3956 84.4373 28.6096 84.4373C16.8341 84.4373 7.19127 79.6491 6.34167 73.5756C5.53053 74.7628 5.08301 76.0351 5.08301 77.3597C5.08301 83.8421 15.6209 89.0947 28.6166 89.0947C41.6124 89.0947 52.1502 83.8421 52.1502 77.3597C52.1467 76.0318 51.6992 74.753 50.8811 73.5625Z" fill="#EBF0F6" />
                                <path d="M21.4903 46.4648H20.9658V55.2596H21.4903V46.4648Z" fill="#002985" />
                                <path d="M22.3647 31.1726C22.2214 31.1726 22.1025 31.0614 22.1025 30.9273C22.0815 30.8553 22.099 30.7703 22.1479 30.7114C22.1969 30.6525 22.2738 30.6133 22.3542 30.6133C22.4976 30.6133 22.6269 30.7245 22.6269 30.8586V30.9273C22.6269 31.0614 22.5116 31.1726 22.3647 31.1726Z" fill="#1C3E58" />
                                <path d="M28.6169 84.7998C22.8165 84.7998 17.0161 83.6061 12.6003 81.2218C8.24392 78.8702 5.84195 75.7141 5.83496 72.3388V67.8711H6.70904V72.3355C6.71603 75.4066 8.96067 78.3077 13.0374 80.5088C21.6278 85.1498 35.606 85.1498 44.1964 80.5088C48.2731 78.3077 50.5177 75.4033 50.5212 72.3355V67.8711H51.3952V72.3355C51.3952 75.7108 48.9933 78.8637 44.6334 81.2185C40.2176 83.6093 34.4172 84.7998 28.6169 84.7998Z" fill="#1C3E58" />
                                <path d="M28.6163 80.6746C22.8159 80.6746 17.0156 79.4841 12.5997 77.1031C8.23986 74.7515 5.83789 71.6019 5.83789 68.2332C5.83789 64.8644 8.23986 61.7148 12.5997 59.3633C21.4314 54.6012 35.8012 54.6045 44.6329 59.3633C48.9928 61.7148 51.3947 64.8644 51.3947 68.2332C51.3947 71.6019 48.9928 74.7515 44.6329 77.1031C40.217 79.4841 34.4167 80.6746 28.6163 80.6746ZM28.6128 56.5963C22.9698 56.5963 17.3267 57.7541 13.0333 60.0697C8.9531 62.2676 6.70847 65.1686 6.70847 68.2332C6.70847 71.2977 8.9566 74.1955 13.0333 76.3966C21.6237 81.0278 35.6019 81.0278 44.1958 76.3966C48.276 74.1988 50.5206 71.2977 50.5206 68.2332C50.5206 65.1686 48.276 62.2708 44.1958 60.0697C39.8989 57.7541 34.2558 56.5963 28.6128 56.5963Z" fill="#1C3E58" />
                                <path d="M28.1545 74.4358C23.8401 74.4358 19.5257 73.6116 16.2391 71.96C12.3792 70.0205 10.5891 67.2078 11.4492 64.4375C11.4562 64.4179 11.4632 64.3983 11.4772 64.3787C11.5471 64.1661 11.7149 63.682 11.8932 63.3975C12.6834 61.9486 14.1868 60.6142 16.2356 59.548C16.5153 59.4008 16.8125 59.2733 17.0992 59.149C17.3265 59.0508 17.5538 58.9527 17.781 58.8448C19.7075 57.9094 25.5743 55.0672 25.9064 53.409C26.27 51.6037 26.2316 46.1025 26.2316 46.0501L26.756 46.0469C26.756 46.2758 26.7945 51.6494 26.4239 53.5006C26.1617 54.8089 23.5709 56.5914 18.0223 59.2798C17.7915 59.391 17.5538 59.4924 17.3195 59.5938C17.0293 59.7181 16.7531 59.8391 16.4909 59.9732C14.533 60.9903 13.103 62.2561 12.3548 63.6297C12.1834 63.9012 12.0051 64.431 11.9492 64.6109C11.9422 64.6305 11.9352 64.6501 11.9247 64.6665C11.1975 67.2012 12.8512 69.6967 16.4874 71.5217C22.9206 74.7531 33.3885 74.7531 39.8252 71.5217C43.4788 69.6869 45.1745 67.09 44.3599 64.5717L44.8634 64.4277C45.7549 67.1849 43.9648 69.9976 40.0735 71.9502C36.7869 73.6116 32.469 74.4358 28.1545 74.4358Z" fill="#1627A1" />
                                <path d="M44.6077 64.5108C44.6077 64.5108 40.9191 60.9687 28.1576 60.8804C15.2283 60.7921 11.6935 64.5534 11.6935 64.5534L11.697 64.5108C10.8963 67.0783 12.4417 69.7798 16.3576 71.7487C22.8712 75.0193 33.43 75.0193 39.9436 71.7487C43.8734 69.7765 45.4363 67.0619 44.6077 64.5108Z" fill="#1627A1" />
                                <path d="M28.1545 74.4381C23.8401 74.4381 19.5222 73.6139 16.2391 71.9622C12.3792 70.0227 10.5891 67.2133 11.4492 64.4398C11.4737 64.3613 11.5401 64.2992 11.617 64.2763C12.3303 63.6352 16.2706 60.6328 27.7 60.6328C27.8539 60.6328 28.0042 60.6328 28.1615 60.6328C40.8846 60.7211 44.6431 64.188 44.7969 64.3384C44.8249 64.3678 44.8494 64.4005 44.8599 64.4398C45.7514 67.1969 43.9613 70.0096 40.07 71.9622C36.7869 73.6139 32.4725 74.4381 28.1545 74.4381ZM11.9212 64.6916C11.201 67.2231 12.8582 69.712 16.4874 71.5338C22.9206 74.7651 33.392 74.7651 39.8252 71.5338C43.4509 69.712 45.1466 67.1446 44.3809 64.6458C43.9264 64.2664 39.9091 61.2084 28.1615 61.1267C16.0748 61.0482 12.2708 64.358 11.9212 64.6916Z" fill="#1627A1" />
                                <path d="M44.3574 64.5975C44.298 64.4143 44.1616 63.9826 43.9693 63.6588C43.34 62.501 42.1653 61.4184 40.2703 60.241C39.12 59.528 37.8648 58.8085 36.6481 58.1086C32.984 56.0088 29.8233 54.1936 29.5086 52.7186C29.1171 50.8805 29.3268 46.1839 29.3338 45.9844L29.8583 46.004C29.8548 46.0531 29.6415 50.838 30.0226 52.6204C30.2918 53.8862 33.6623 55.8191 36.9243 57.6899C38.1445 58.3898 39.4067 59.1126 40.5604 59.8289C42.5359 61.0521 43.7631 62.1936 44.4309 63.4233C44.6197 63.7438 44.7525 64.1232 44.8574 64.4536L44.3574 64.5975Z" fill="#1627A1" />
                                <path d="M28.3508 75.9265C23.5679 75.9265 18.785 74.942 15.1453 72.9764C11.5721 71.0467 9.60018 68.4629 9.59668 65.7058C9.59668 65.7058 9.60718 61.8301 9.60718 60.741C9.60718 53.9348 13.8727 47.688 20.4772 44.8229L20.6974 45.2677C14.2782 48.051 10.1316 54.1278 10.1316 60.741C10.1316 61.8334 10.1211 65.709 10.1211 65.709C10.1246 68.283 12.0021 70.7131 15.4075 72.5545C22.5435 76.4105 34.1582 76.4105 41.2977 72.5545C44.6926 70.7196 46.5701 68.2961 46.5806 65.7287C46.5806 65.6306 46.5841 63.956 46.5841 60.7443C46.5841 53.683 42.0459 47.4525 35.0218 44.872L35.2141 44.4141C42.4374 47.0698 47.1085 53.4802 47.1085 60.7443V63.7009C47.1085 64.983 47.1085 65.5063 47.084 65.7319H47.1085C47.0945 68.4825 45.1261 71.0565 41.5634 72.9796C37.9167 74.942 33.1338 75.9265 28.3508 75.9265Z" fill="#1C3E58" />
                                <path d="M27.3264 45.0639C19.9807 45.0639 14.3761 40.1351 12.2783 35.5562L12.7608 35.3633C14.7921 39.7982 20.2184 44.5734 27.3264 44.5734C33.6687 44.5734 39.2802 41.1228 41.9759 35.5661L42.4549 35.7688C39.6718 41.5022 33.8749 45.0639 27.3264 45.0639Z" fill="#1627A1" />
                                <path d="M27.4801 42.0749C23.5048 42.0749 19.5295 41.254 16.5017 39.6121C13.0998 37.7642 11.4495 35.2001 11.9705 32.5705L12.4844 32.6588C12.0054 35.0725 13.5648 37.4503 16.7604 39.187C22.6691 42.3922 32.2805 42.3922 38.1892 39.187C41.4023 37.4437 42.9582 35.0529 42.4582 32.6261L42.9722 32.5312C43.5176 35.1739 41.8673 37.7512 38.4515 39.6089C35.4306 41.254 31.4553 42.0749 27.4801 42.0749Z" fill="#1627A1" />
                                <path d="M27.347 46.4794C17.914 46.4794 9.91442 39.8858 8.74316 31.1435L9.26411 31.0813C10.4039 39.5784 18.1762 45.9888 27.347 45.9888C36.6611 45.9888 44.4509 39.4672 45.4648 30.8164L45.9858 30.8687C44.9404 39.7681 36.9303 46.4794 27.347 46.4794Z" fill="#1C3E58" />
                                <path d="M27.4802 36.2227C21.6798 36.2227 15.8794 35.029 11.4636 32.6447C7.10721 30.2899 4.70523 27.137 4.69824 23.7617V19.3398H5.57232V23.7584C5.57931 26.8295 7.82395 29.7306 11.9006 31.9317C20.491 36.5727 34.4693 36.5727 43.0597 31.9317C47.1364 29.7306 49.381 26.8263 49.3845 23.7584V19.3398H50.2585V23.7584C50.2585 27.1337 47.8566 30.2866 43.4967 32.6414C39.0809 35.0322 33.2805 36.2227 27.4802 36.2227Z" fill="#1C3E58" />
                                <path d="M27.4796 31.784C21.6792 31.784 15.8789 30.5935 11.463 28.2125C7.10314 25.8609 4.70117 22.7113 4.70117 19.3426C4.70117 15.9738 7.10314 12.8242 11.463 10.4726C20.2947 5.71061 34.6645 5.71388 43.4961 10.4726C47.856 12.8242 50.258 15.9738 50.258 19.3426C50.258 22.7113 47.856 25.8609 43.4961 28.2125C39.0803 30.5968 33.2799 31.784 27.4796 31.784ZM27.4761 7.70898C21.8331 7.70898 16.19 8.86678 11.8966 11.1824C7.81638 13.3802 5.57175 16.2813 5.57175 19.3458C5.57175 22.4104 7.81638 25.3082 11.8966 27.5093C20.487 32.1405 34.4687 32.1405 43.0591 27.5093C47.1393 25.3115 49.3839 22.4104 49.3839 19.3458C49.3839 16.2813 47.1358 13.3835 43.0591 11.1824C38.7621 8.86678 33.1191 7.70898 27.4761 7.70898Z" fill="#1C3E58" />
                            </svg>
                        </div>
                        <div class="row">
                            <p style="text-align:center;"> Please wait...</p>
                            <p class="description" style="text-align:center;">
                                The system is processing your order, please wait a few minutes
                            </p>
                        </div>
                    </div>
                    <button class="btnPayment">Select payment method</button>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        //After you load data
        document.querySelector('#loader').className += ' ' + 'hide'
    }, 3000)
</script>