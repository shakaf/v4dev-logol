<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

if(is_array($profile))
{
    if(array_key_exists('USER_INFO', $profile)) 
    {
        if($profile['USER_INFO']['IS_MAIN_USER'] == 1) 
        {
            $companyInfoAttribute = $profile['COMPANY_INFO'][0];
        }
    }

    $requestUser = FALSE;
    if($companyInfoAttribute['REQ_NUMBER_USER_STATUS'] == 'requested')
    {
        $requestUser = TRUE;
    }
    
    if($requestUser)
    {
        ?>
            <div class="mt-4 mb-4" style="width: 100%;">
                <div class="v4-alert v4-warning mb-4">
                    <p><span class="v4-waiting-icon v4-waiting-icon-position"></span>You have made request to increase the number of users by <b><?= $companyInfoAttribute['REQ_NUMBER_USER']; ?> USERS</b>. Please wait, your request is being verified by our team</p>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <a href="javascript:void(0);" class="v4-user-max v4-href-disabled <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 2 ? 'v4-max-active-requested' : ''; ?>" id="<?= rand(); ?>">2</a>
                        <a href="javascript:void(0);" class="v4-user-max v4-href-disabled <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 5 ? 'v4-max-active-requested' : ''; ?>" id="<?= rand(); ?>">5</a>
                        <a href="javascript:void(0);" class="v4-user-max v4-href-disabled <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 10 ? 'v4-max-active-requested' : ''; ?>" id="<?= rand(); ?>">10</a>
                        <a href="javascript:void(0);" class="v4-user-max v4-href-disabled <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) > 11 ? 'v4-max-active-requested' : ''; ?>" id="<?= rand(); ?>">&nbsp;&nbsp;>10</a>
                        <span class="v4-req-user-wrapper">Req. user <span class="v4-req-user-label" id="<?= rand(); ?>">11</span><span class="v4-req-user-inc" id="<?= rand();?>">+</span></span>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 text-right">
                        <span class="v4-hr-btn v4-btn-disabled v4-hr-ab-mt-min-4 v4-href-disabled" id="<?= rand(); ?>"><a href="javascript:void(0);""><img src="<?= base_url(); ?>assets/images/v4-send-request.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">Send Request</span></a></span>
                    </div>
                </div>
            </div>
        <?php
    }
    else 
    {
        ?>
            <div class="mt-4 mb-4" style="width: 100%;">
                <div class="row">
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <a href="javascript:void(0);" class="v4-user-max <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 2 ? 'v4-max-active' : ''; ?>" per="2" id="<?= rand(); ?>">2</a>
                        <a href="javascript:void(0);" class="v4-user-max <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 5 ? 'v4-max-active' : ''; ?>" per="5" id="<?= rand(); ?>">5</a>
                        <a href="javascript:void(0);" class="v4-user-max <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) == 10 ? 'v4-max-active' : ''; ?>" per="10" id="<?= rand(); ?>">10</a>
                        <a href="javascript:void(0);" class="v4-user-max <?= ($companyInfoAttribute['CURRENT_NUMBER_USER']) > 11 ? 'v4-max-active' : ''; ?>" per="11" id="<?= rand(); ?>">&nbsp;&nbsp;>10</a>
                        <span class="v4-req-user-wrapper">Req. user <span class="v4-req-user-label" id="<?= rand(); ?>">11</span><span class="v4-req-user-inc" id="<?= rand();?>">+</span></span>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 text-right">
                        <span class="v4-hr-btn v4-btn-grey v4-hr-ab-mt-min-4 v4-send-request-user" data-url="<?= site_url('profile/requestMaxUsers'); ?>" data-serial="<?= (is_array($profile) ? $profile['COMPANY_INFO'][0]['CURRENT_NUMBER_USER'] : ''); ?>" data-confirm-type="confirm" data-confirm-title="Confirmation request add maximum user" data-confirm-messages="After you click send request, your request will be verified by our team. <p><b>Note:</b> during the verification process by our team, temporarily if the order you make will use current data</p>" data-confirm-buttons="Cancel" data-confirm-submit="Send Request" data-confirm-attribute="<?= (is_array($profile) ? $profile['COMPANY_INFO'][0]['CURRENT_NUMBER_USER'] : ''); ?>" id="<?= rand(); ?>" onclick="v4DoPostWForm($(this)); return false;"><a href="javascript:void(0);"><img src="<?= base_url(); ?>assets/images/v4-send-request.png"> <span class="v4-hr-lbl v4-hr-lbl-grey">Send Request</span></a></span>
                    </div>
                </div>
            </div>
            <script src="<?= base_url(); ?>assets/js/customs.js?v=<?= date("Ymdhis"); ?>"></script>
        <?php
    }
}   
?>