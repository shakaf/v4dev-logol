<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div style="display: flex; flex-direction: column; center; background: #FFFFFF; border-radius: 8px;">
            <div class="alert alert-warning" role="alert" style="height: 56px; display: flex; flex-direction: column;"><span><img src="<?= base_url(); ?>assets/images/v4-icon-info-alert-circle.png"></span><span style="display: flex; text-align: justify; margin-left: 32px; margin-bottom: 12px; margin-right: 24px; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #4A4A68; position: absolute;">Basic Info data changes will be verified by our team a maximum of 1-2 working days and temporarily if the order you make will use current data</span></div>
        </div>
    </div>
</div>
<form class="" action="<?= site_url('my-company-profile-edit-post'); ?>" autocomplete="off" method="post" id="v4-company-info-edit" name="v4-company-info-edit" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required " id="companyIdInfoEdit" placeholder="Company Name" wajib="yes" name="companyIdInfoEdit" value="<?= $this->newsession->userdata('companyName'); ?>">
                <label for="companyIdInfoEdit">Company Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="officePhoneNumberInfoEdit" placeholder="Office Phone Number" wajib="yes" name="officePhoneNumberInfoEdit">
                <label for="officePhoneNumberInfoEdit">Office Phone Number</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required " id="npwpInfoEdit" placeholder="NPWP" wajib="yes" name="npwpInfoEdit" value="<?= $this->newsession->userdata('companyNpwp'); ?>">
                <label for="npwpInfoEdit">NPWP</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <div class="v4-file-upload-wrapper" data-text="Upload NPWP">
                    <input id="npwpFileInfoEdit" name="npwpFileInfoEdit" type="file" class="file-upload-field">
                </div>
                <small>must in pdf file format</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required " id="siupInfoEdit" placeholder="SIUP/NIB Number" wajib="yes" name="siupInfoEdit">
                <label for="siupInfoEdit">SIUP/NIB Number</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <div class="v4-file-upload-wrapper" data-text="Upload SIUP/NIB">
                    <input id="siupFileInfoEdit" name="siupFileInfoEdit" type="file" class="file-upload-field">
                </div>
                <small>must in pdf file format</small>
            </div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" data-confirm="true" data-confirm-type="confirm" data-confirm-title="Confirmation Change Data" data-confirm-messages="Company info will be changed, next after click button <b>Yes</b> will be verified by our team a maximum of 1-2 working days" data-confirm-buttons="Cancel" data-confirm-submit="Yes, I'm Understand" data-confirm-attribute="<?= $this->newsession->userdata('companyNpwp'); ?>" id="<?= rand(); ?>" onclick="v4DoPost('v4-company-info-edit', $(this)); return false;">Update</button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        $(".file-upload-field").on("change", function(){ 
            $(this).parent().attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
        });
        $(".company-edit-cancel").on("click", function(){
            if ($(".kbaru-modal").length > 0) {
                $(".kbaru-modal").remove();
            }
            return false;
        });
    });
</script>