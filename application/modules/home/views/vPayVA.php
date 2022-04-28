<style>
    .btn-link{
        color: black;

    }

    .btn-link:hover{
        text-decoration: none !important;
        
    }
    .card-header{
        padding-left: 1em !important;
        padding-right: 1em !important;
        padding-bottom: 0em !important;
        vertical-align: center;
        
    }

    ul li p {
        font-weight: 400;
        font-size: 12px;
        color: #8C8CA2;
    }
</style>
                <div class="page-content" style="background-color: #F8F8F9;">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-4">
                        </div>
                            <div class="col-lg-4">

                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom">
                                        <p>Back</p>
                                    </div>
                                    <div class="card-header bg-transparent border-bottom">
                                        <div class="row" style="font-weight: 700; font-size:14px">
                                            <div class="col-md-6 col-sm-6" align="left">
                                                <p>Total Amounts</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6" align="right">
                                                <p>Rp 1.500.500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-transparent border-bottom">
                                        <div class="row">
                                            <div class="col-md-10 cold-sm-10">
                                            <button type="button" class="btn btn-link waves-effect">
                                                <span style="margin-right: 1em;">
                                                    <img src="<?= base_url(); ?>assets/images/icon/bank-<?php echo strtolower($bank) ?>.png" />
                                                </span><?php echo strtoupper($bank) ?> Virtual Account
                                                
                                            </button>
                                            </div>
                                            <div class="col-md-2 cold-sm-2">
                                                <a href="#"><span style="margin-right: 0; line-height:50px; font-weight: 700; font-size: 9px;color: #497DF5;">
                                                    CHANGE
                                                </span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <h7 style="font-weight: 500; font-size: 10px; color: #4A4A68;">Info</h7>
                                        <ul>
                                            <li>
                                                <p>This transaction will automatically calculate the unpaid BCA Virtual Account bill</p>
                                            </li>
                                            <li>
                                                <p>After clicking pay, you will get a payment code (virtual account number)</p>
                                            </li>
                                            <li>
                                                <p>It is not recommended to pay through other banks so that transactions can be processed without problems</p>
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                    <div class="card-header bg-transparent border-top">
                                        <a href="<?= site_url('payment-detail') ?>" class="btn btn-info " style="width:100%; margin-bottom:10px">Pay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                               
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            
                <script>
                   
                </script>