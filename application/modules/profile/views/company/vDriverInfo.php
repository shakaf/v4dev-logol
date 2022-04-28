<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form class="" action="<?= (!empty($collections) ? $collections['action'] : site_url('profile/setCallBackDriverStore')); ?>" autocomplete="off" method="post" id="v4-company-driver-store" name="v4-company-driver-store">
    <?= (!empty($collections) ? '<input type="hidden" name="userId" value="' . $collections['attribute']['userId']. '" wajib="yes" readonly>' : ''); ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="driverName" placeholder="Driver Name" wajib="yes" name="driverName" <?= (!empty($collections) ? 'value="' . $collections['attribute']['userName'] . '"' : ''); ?>>
                <label for="driverName">Driver Name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="driverPhoneNumber" placeholder="Phone Number" wajib="yes" name="driverPhoneNumber"  <?= (!empty($collections) ? 'value="' . $collections['attribute']['userPhone'] . '"' : ''); ?>>
                <label for="driverPhoneNumber">Phone Number</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="driverEmail" placeholder="Email" wajib="yes" name="driverEmail"  <?= (!empty($collections) ? 'value="' . $collections['attribute']['userEmail'] . '"' : ''); ?>>
                <label for="driverEmail">Email</label>
            </div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-company-driver-store', $(this), 'v4-list-driver-active'); return false;"><?= (!empty($collections) ? 'Update' : 'Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $(".company-edit-cancel").on("click", function(){
            if ($(".kbaru-modal").length > 0) {
                $(".kbaru-modal").remove();
            }
            return false;
        });
        $("#manual-address-wrapper").on("click", function(){
            $(".manual-address").show().fadeIn();
            $(".pin-address").hide().fadeOut();
        });
        $("#pin-address-wrapper").on("click", function(){
            $(".manual-address").hide().fadeOut();
            $(".pin-address").show().fadeIn();
        });
    });
</script>