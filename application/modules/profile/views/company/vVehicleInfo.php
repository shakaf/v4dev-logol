<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
.select {
  display: none !important;
}

.dropdown-select {
  background-image: linear-gradient(
    to bottom,
    rgba(255, 255, 255, 0.25) 0%,
    rgba(255, 255, 255, 0) 100%
  );
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
  background-color: #fff;
  border-radius: 6px;
  border: solid 1px #eee;
  box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  float: left;
  font-size: 14px;
  font-weight: normal;
  height: 42px;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 30px;
  position: relative;
  text-align: left !important;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  white-space: nowrap;
  width: auto;
}

.dropdown-select:focus {
  background-color: #fff;
}

.dropdown-select:hover {
  background-color: #fff;
}

.dropdown-select:active,
.dropdown-select.open {
  background-color: #fff !important;
  border-color: #bbb;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown-select:after {
  height: 0;
  width: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #777;
  -webkit-transform: origin(50% 20%);
  transform: origin(50% 20%);
  transition: all 0.125s ease-in-out;
  content: "";
  display: block;
  margin-top: -2px;
  pointer-events: none;
  position: absolute;
  right: 10px;
  top: 50%;
}

.dropdown-select.open:after {
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.dropdown-select.open .list {
  -webkit-transform: scale(1);
  transform: scale(1);
  opacity: 1;
  pointer-events: auto;
}

.dropdown-select.open .option {
  cursor: pointer;
}

.dropdown-select.wide {
  width: 100%;
}

.dropdown-select.wide .list {
  left: 0 !important;
  right: 0 !important;
}

.dropdown-select .list {
  box-sizing: border-box;
  transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
  -webkit-transform: scale(0.75);
  transform: scale(0.75);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
  background-color: #fff;
  border-radius: 6px;
  margin-top: 4px;
  padding: 3px 0;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 999;
  max-height: 250px;
  overflow: auto;
  border: 1px solid #ddd;
}

.dropdown-select .list:hover .option:not(:hover) {
  background-color: transparent !important;
}
.dropdown-select .dd-search {
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0.5rem;
}

.dropdown-select .dd-searchbox {
  width: 90%;
  padding: 0.5rem;
  border: 1px solid #999;
  border-color: #999;
  border-radius: 4px;
  outline: none;
}
.dropdown-select .dd-searchbox:focus {
  border-color: #12cbc4;
}

.dropdown-select .list ul {
  padding: 0;
}

.dropdown-select .option {
  cursor: default;
  font-weight: 400;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 29px;
  text-align: left;
  transition: all 0.2s;
  list-style: none;
}

.dropdown-select .option:hover,
.dropdown-select .option:focus {
  background-color: #f6f6f6 !important;
}

.dropdown-select .option.selected {
  font-weight: 600;
  color: #12cbc4;
}

.dropdown-select .option.selected:focus {
  background: #f6f6f6;
}

.dropdown-select a {
  color: #aaa;
  text-decoration: none;
  transition: all 0.2s ease-in-out;
}

.dropdown-select a:hover {
  color: #666;
}
</style>
<form class="" action="<?= (!empty($collections) ? $collections['action'] : site_url('profile/setCallBackVechicleStore')); ?>" autocomplete="off" method="post" id="v4-vehicle-info" name="v4-vehicle-info">
    <?= (!empty($collections) ? '<input type="hidden" name="vehicleId" value="' . $collections['attribute']['vehicleId']. '" wajib="yes" readonly>' : ''); ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleNumber" placeholder="Vehicle Number" wajib="yes" name="vehicleNumber" <?= (!empty($collections) ? 'value="' . $collections['attribute']['vehicleNumber'] . '"' : ''); ?>>
                <label for="vehicleNumber">Vehicle Number</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <?= form_dropdown('vehicleBrand', $brand, (!empty($collections) ? $collections['attribute']['vehicleBrand'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleBrand"'); ?>
                <label for="">Brand</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <?= form_dropdown('vehicleType', $vehicleType, (!empty($collections) ? $collections['attribute']['vehicleType'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleType"'); ?>
                <label for="">Vehicle Type</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleNumberSTNK" placeholder="No. STNK" wajib="yes" name="vehicleNumberSTNK" <?= (!empty($collections) ? 'value="' . $collections['attribute']['vehicleNumberSTNK'] . '"' : ''); ?>>
                <label for="vehicleNumberSTNK">No. STNK</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleExpSTNK" placeholder="Exp Date STNK" wajib="yes" name="vehicleExpSTNK" <?= (!empty($collections) ? 'value="' . $collections['attribute']['vehicleExpSTNK'] . '"' : ''); ?>>
                <label for="vehicleExpSTNK">Exp Date STNK</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleNoTid" placeholder="No. TID" wajib="yes" name="vehicleNoTid">
                <label for="vehicleNoTid">No. TID</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <?= form_dropdown('vehicleYear', $yearOfAssemble, (!empty($collections) ? $collections['attribute']['vehicleYear'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="vehicleYear"'); ?>
                <label for="">Year Of Assambly</label>
            </div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-vehicle-info', $(this), 'v4-list-vehicle-active'); return false;"><?= (!empty($collections) ? 'Update' : 'Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        // create_custom_dropdowns();
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