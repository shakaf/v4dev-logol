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

    .t-desc {
        text-align: left !important;
    }

    .text-end {
        text-align: right !important;
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
        text-align: center;
    }

    .btn-outline-primary:hover {
        background-color: #fff;
        color: #ECF1F4;
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
                <span style="cursor:pointer" onclick="history.back()">
                    <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
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
                                <p class="l_val"><?= $this->session->userdata("type"); ?></p>
                            </div>
                            <div class="col-md-8">
                                <label class="label">NPWP</label>
                                <p class="l_val"><?= $this->session->userdata("npwp"); ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label">DO Number</label>
                                <p class="l_val"><?= $this->session->userdata("DO_NO"); ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">DO Date</label>
                                <p class="l_val"><?= $this->session->userdata("DO_DATE"); ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Internal Ref. Number</label>
                                <p class="l_val"><?= $this->session->userdata("INT_REF_NO"); ?></p>
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
                                <p class="l_val"><?= $this->session->userdata("depot"); ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Shipping Line</label>
                                <p class="l_val"><?= $this->session->userdata("SHIPPING_NAME"); ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="label">Container Grade</label>
                                <p class="l_val"><?= $this->session->userdata("CONTAINER_GRADE"); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $list = json_decode($this->session->userdata("CONTAINER_LIST"));
                            //print_r($list);
                            foreach ($list as $key => $value) {
                                $img = "";
                                if ($value->CONTAINER_SIZE == '20 Feet') {
                                    $img = base_url().'assets/images/icon/cont-20-dv.png';
                                } else if ($value->CONTAINER_SIZE == '40 Feet') {
                                    $img = base_url().'assets/images/icon/cont-40-dv.png';
                                } else {
                                    $img = base_url().'assets/images/icon/cont-40-hc.png';
                                }
                                ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <table>
                                                <tr>
                                                    <td rowspan="2"><img src="<?php echo $img; ?>" /></td>
                                                    <td style="width:100%;">
                                                        <label style="margin-left:8%;font-weight:bold;"><?= $value->CONTAINER_SIZE ?></label>
                                                        <p class="description" style="margin-left:8%;"><?= $value->CONTAINER_TYPE?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label style="margin-left:8%;font-weight:bold;"><?= $this->session->userdata("type")=="Export"? "x".$value->QTY:$value->CONTAINER_NUMBER ?></label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <body onload="myFunction()" style="margin:0;">
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
                            <div class="mt-2">
                                <button type="button" class="btn btn-lg btn-primary" disabled style="font-size: 12px; border-radius:10px; width: 100%">Select Payment Method</button>
                            </div>
                        </div>
                        <input type="hidden" id="om_header_id" value="<?= $this->session->userdata("OM_HEADER_ID"); ?>" />
                        <div style="display:none;" id="myDiv" class="animate-bottom">
                            <div id="p_details2" class="">
                                <div class="accordion" id="accordionExamplePay">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                E-Depo
                                            </button>

                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExamplePay">
                                            <div class="accordion-body">
                                                <form>
                                                    <div id="dtpayment">

                                                        <!-- <div class="row">
                                                            <div class="col-md-8">
                                                                <p class="t-desc">Depo Reimbursement</p>
                                                                <p class="t-desc description" style="line-height:2px;">BSA</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="t-desc">Rp 200.000</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <p class="t-desc">Platform Fee</p>
                                                                <p class="t-desc description" style="line-height:2px;">8x Containers</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p class="t-desc">Rp 100.000</p>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-8 col-sm-8">
                                                                <p class="t-desc">Sub-Total</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <p class="t-desc">Rp 300.000</p>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row mt-2">
                                                            <div class="col-md-8 col-sm-8">
                                                                <p class="t-desc">PPh23</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <p class="t-desc">Rp 6.000</p>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-8 col-sm-8">
                                                                <p class="t-desc">PPN 10%</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <p class="t-desc">Rp 30.000</p>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-md-8 col-sm-8">
                                                                <p class="t-desc" style="font-size: 14px; font-weight:700">Total Amount</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4">
                                                                <p class="t-desc" style="font-size: 14px; color: #044795; font-weight:700">Rp 336.000</p>
                                                            </div>
                                                        </div> -->

                                                    </div>
                                                </form>
                                                <div class="mt-3">
                                                    <a href="<?= site_url('payment') ?>" type=" button" class="btn btn-lg btn-primary" style="font-size: 12px; border-radius:10px; width: 100%;">Select Payment Method</a>
                                                </div>
                                                <div class="mt-2">
                                                    <a href="<?= site_url('payment') ?>" type="button" class="btn btn-lg btn-outline-primary mt2" style="font-size: 12px; width: 100%; border-radius:10px;" data-bs-toggle="modal" data-bs-target=".modal-share-finance">Share to Finance</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end accordion -->
                            </div>
                        </div>
                    </div>
                </body>
            </div>
        </div>
    </div>
</div>

<!-- =====modal share to finance ====== -->
<form action="" method="post">
    <div class="modal fade modal-share-finance" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-content">
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
                        <p style="color: #818181;font-weight: 400;font-size: 14px;padding: 16px 43px;">
                            Do you want to share this order to your finance team?</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn cancelOrderodal waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn saveOrderModal waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#confirm">Share</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </div>
    </div>
</form>
<!-- /.modal -->

<!-- =======confirm======= -->

<form action="" method="get">
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" id="confirm">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" align="center">
                    <!-- <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
						<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
					</svg> -->
                    <img src="<?php echo base_url('assets/images/success.gif'); ?>" width="140" height="140" viewBox="0 0 140 140" fill="none" alt="">
                    <p class="description">
                        Payment has been succeeded share to your finance team</p>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- <script>
    var myVar;

    function myFunction() {
        var dataf = new FormData();
        dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
        dataf.append("om_header_id", $("#om_header_id").val());
        $.ajax({
            type: "POST",
            url: base_url + "load-billing",
            data: dataf,
            cache: false,
            processData: false,
            contentType: false,
            dataType: "json",
            beforeSend: function () {

            },
            complete: function () {


            },
            success: function (data) {
                if (data.data) {
                    var code = data.data.status.code;
                    if (code == 200 || code == 201) {
                        /* console.log("data");
                        console.log(dtpay); */
                        var dtpay = data.data.collection;
                        $("#dtpayment").html("");
                        var detail = dtpay.DETAIL;
                        if(dtpay.DETAIL){
                            var subto = [];
                            for (let ind = 0; ind < detail.length; ind++) {
                                var qty = "";
                                if(detail[ind].QUANTITY!=""){
                                    qty=detail[ind].QUANTITY+"x ";
                                }
                                var isip = '<div class="row">'+
                                    '<div class="col-md-8">'+
                                        '<p class="t-desc">'+detail[ind].DESCRIPTION+'</p>'+
                                        '<p class="t-desc description" style="line-height:2px;">'+qty+detail[ind].DESTINATION_NAME+'</p>'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<p class="t-desc text-end">Rp '+thousandSep(detail[ind].TOTAL)+'</p>'+
                                    '</div>'+
                                '</div>';
                                subto.push(parseInt(detail[ind].TOTAL));
                                $("#dtpayment").append(isip);
                            }
                            if(detail.length>0){
                                var subsubt = subto.reduce(function(acc, val) { return acc + val; }, 0);
                                var subt = '<div class="row mt-3">'+
                                    '<div class="col-md-8 col-sm-8">'+
                                        '<p class="t-desc">Sub-Total</p>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-4">'+
                                        '<p class="t-desc text-end">Rp '+thousandSep(subsubt)+'</p>'+
                                    '</div>'+
                                '</div><hr/>';
                                $("#dtpayment").append(subt);
                                var pph23 = '<div class="row mt-2">'+
                                    '<div class="col-md-8 col-sm-8">'+
                                        '<p class="t-desc">PPh23</p>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-4">'+
                                        '<p class="t-desc text-end">Rp '+thousandSep(dtpay.TAX_VALUE)+'</p>'+
                                    '</div>'+
                                '</div>';
                                $("#dtpayment").append(pph23);
                                var ppn = '<div class="row mt-2">'+
                                    '<div class="col-md-8 col-sm-8">'+
                                        '<p class="t-desc">PPN '+dtpay.TAX+'</p>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-4">'+
                                        '<p class="t-desc text-end">Rp '+thousandSep(dtpay.BASIC_TAX)+'</p>'+
                                    '</div>'+
                                '</div>';
                                $("#dtpayment").append(ppn);
                                var total = subsubt+dtpay.TAX_VALUE+dtpay.BASIC_TAX;
                                var totaltxt = '<div class="row mt-3">'+
                                    '<div class="col-md-8 col-sm-8">'+
                                        '<p class="t-desc" style="font-size: 14px; font-weight:700">Total Amount</p>'+
                                    '</div>'+
                                    '<div class="col-md-4 col-sm-4">'+
                                        '<p class="t-desc text-end" style="font-size: 14px; color: #044795; font-weight:700">Rp '+thousandSep(total)+'</p>'+
                                    '</div>'+
                                '</div>';
                                $("#dtpayment").append(totaltxt);
                            }
                            myVar = setTimeout(showPage, 3000);
                        }
                    } else {
                        alert(code);
                    }
                } else {
                    alert(data);
                }

            },
            error: function (data, status, e) {


            }
        });
        
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }

    function thousandSep(x){
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
    }
</script> -->