<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form class="" action="<?= (!empty($collections) ? $collections['action'] : site_url('my-company-profile-user-store')); ?>" autocomplete="off" method="post" id="v4-company-user-store" name="v4-company-user-store">
    <?= (!empty($collections) ? '<input type="hidden" name="userId" value="' . $collections['attribute']['userId']. '" wajib="yes" readonly>' : ''); ?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="userName" placeholder="Name" wajib="yes" name="userName" <?= (!empty($collections) ? 'value="' . $collections['attribute']['userName'] . '"' : ''); ?>>
                <label for="userName">Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <div class="form-floating">
                    <select class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="userRole" placeholder="Role" wajib="yes" name="userRole">
                        <option value=""></option>
                        <option value="ROL0020">Customer Finance</option>
                    </select>
                    <label for="userRole">Role</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="userPhone" placeholder="No. Telephone" wajib="yes" name="userPhone" <?= (!empty($collections) ? 'value="' . $collections['attribute']['userPhone'] . '"' : ''); ?>>
                <label for="userPhone">No. Telephone</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="userEmail" placeholder="Email" wajib="yes" name="userEmail" <?= (!empty($collections) ? 'value="' . $collections['attribute']['userEmail'] . '"' : ''); ?>>
                <label for="userEmail">Email</label>
            </div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-company-user-store', $(this), 'v4-list-user-active'); return false;"><?= (!empty($collections) ? 'Update' : 'Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        $(".company-edit-cancel").on("click", function(){
            if ($(".kbaru-modal").length > 0) {
                $(".kbaru-modal").remove();
            }
            return false;
        });
    });
</script>