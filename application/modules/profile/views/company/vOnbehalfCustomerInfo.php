<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
select.bes-select {
  display: none !important;
}
</style>
<form class="" action="<?= (!empty($collections) ? $collections['action'] : site_url('profile/setCallBackOnBehalfCustomerStore')); ?>" autocomplete="off" method="post" id="v4-onbehalf-customer-info" name="v4-onbehalf-customer-info" enctype="multipart/form-data">
    <?= (!empty($collections) ? '<input type="hidden" name="onBehalfId" value="' . $collections['attribute']['onBehalfId']. '" wajib="yes" readonly>' : ''); ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="onBehalfCustomerName" placeholder="Onbehalf of Customer Name" wajib="yes" name="onBehalfCustomerName" <?= (!empty($collections) ? 'value="' . $collections['attribute']['onBehalfName'] . '"' : ''); ?>>
                <label for="onBehalfCustomerName">Onbehalf of Customer Name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100 input-v4-required" id="npwpOnBehalfCustomer" placeholder="NPWP" wajib="yes" name="npwpOnBehalfCustomer" <?= (!empty($collections) ? 'value="' . $collections['attribute']['onBehalfNpwp'] . '"' : ''); ?>>
                <label for="npwpOnBehalfCustomer">NPWP</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <div class="v4-file-upload-wrapper" data-text="Upload NPWP">
                    <input id="npwpFileOnBehalf" name="npwpFileOnBehalf" type="file" class="file-upload-field">
                </div>
                <small>must in pdf file format</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form">
                <label for="">Province</label>
                <?= form_dropdown('provinceId', $provinceId, (!empty($collections) ? $collections['attribute']['onBehalfProvinceId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="provinceId" data-url="' . site_url('autocomplete/getCityByProvince'). '" data-target="cityId"'); ?>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form">
                <label for="">City</label>
                <?= form_dropdown('cityId', $cityId, (!empty($collections) ? $collections['attribute']['onBehalfCityId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="cityId" data-url="' . site_url('autocomplete/getDistrictByCity'). '" data-target="districtId"'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form">
                <label for="">District</label>
                <?= form_dropdown('districtId', $districtId, (!empty($collections) ? $collections['attribute']['onBehalfDistrictId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="districtId" data-url="' . site_url('autocomplete/getAreaIdByDistrict'). '" data-target="areaId"'); ?>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form">
                <label for="">Area</label>
                <?= form_dropdown('areaId', $areaId, (!empty($collections) ? $collections['attribute']['onBehalfAreaId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="areaId"'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <textarea class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="addressOnBehalf" placeholder="Address" wajib="yes" name="addressOnBehalf" style="height: 80px; resize: none;"><?= (!empty($collections) ? $collections['attribute']['onBehalfAddress']: ''); ?></textarea>
                <label for="addressOnBehalf">Address</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="postalCode" placeholder="Postal Code" wajib="yes" name="postalCode" <?= (!empty($collections) ? 'value="' . $collections['attribute']['onBehalfPostalCode'] . '"' : ''); ?>>
                <label for="postalCode">Postal Code</label>
            </div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-onbehalf-customer-info', $(this), 'v4-list-onbehalf-customer-active'); return false;"><?= (!empty($collections) ? 'Update' : 'Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<script>
    function besSelect() {
        $('select.bes-select').each(function (i, select) {
            if (!$(this).next().hasClass('dropdown-select')) {
                $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                var dropdown = $(this).next();
                var options = $(select).find('option');
                var selected = $(this).find('option:selected');
                dropdown.find('.current').html(selected.data('display-text') || selected.text());
                options.each(function (j, o) {
                    var display = $(o).data('display-text') || '';
                    dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                });
            }
        });
        $('.dropdown-select ul').before('<div class="dd-search"><input class="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
    }
    $(document).on('click', '.dropdown-select', function (event) {
        if($(event.target).hasClass('dd-searchbox')){
            return;
        }
        $('.dropdown-select').not($(this)).removeClass('open');
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $(this).find('.option').attr('tabindex', 0);
            $(this).find('.selected').focus();
        } else {
            $(this).find('.option').removeAttr('tabindex');
            $(this).focus();
        }
    });
    $(document).on('click', function (event) {
        if ($(event.target).closest('.dropdown-select').length === 0) {
            $('.dropdown-select').removeClass('open');
            $('.dropdown-select .option').removeAttr('tabindex');
        }
        event.stopPropagation();
    });

    function filter(){
        var valThis = $('.txtSearchValue').val();
        $('.dropdown-select ul > li').each(function(){
        var text = $(this).text();
            (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();         
        });
    };
    $(document).on('click', '.dropdown-select .option', function (event) {
        $(this).closest('.list').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).data('display-text') || $(this).text();
        $(this).closest('.dropdown-select').find('.current').text(text);
        $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        var params = {
            q: $(this).data('value'),
            csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
        };
        var kalibaru = $(this).parent().parent().prev().parent().prev(),
            id = kalibaru.attr('id'),
            url = kalibaru.attr('data-url'),
            chain = kalibaru.attr('data-target'),
            input = '';
            $('#' + id).val([]);
            $('#' + id + ' option[value="' + $(this).data('value') + '"]').attr("selected","selected");
            if($('.bes-select-input-' + id).length > 0) $('.bes-select-input-' + id).remove();
            input = '<input type="hidden" class="bes-select-input-' + id + '" name="' + id + '" value="' + $(this).data('value') + '">';
            $(input).insertBefore('#' + id);
        if(chain){
            $.ajax({
                type: 'POST',
                url: url,
                data: params,
                dataType: 'json',
                beforeSend: function() {
                },
                complete: function() {
                },
                success: function(data) {
                    var collections = data.length;
                    if(collections > 0) {
                        $("#" + chain).children('option:not(:first)').remove();
                        for(var a = 0; a < collections; a++){
                            var options = $('<option/>');
                                options.attr('value', data[a].value);
                                options.text(data[a].option);
                                $("#" + chain).append(options);
                        }
                        var dropdownChain = $("#" + chain).next(),
                            optionsChain = $("#" + chain).find('option'),
                            selectedChain = $("#" + chain).find('option:selected');
                            dropdownChain.children('.current').html('');
                            dropdownChain.children().next().children().next().empty();
                            optionsChain.each(function (j, o) {
                                var displayChain = $(o).data('display-text') || '';
                                dropdownChain.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + displayChain + '">' + $(o).text() + '</li>');
                            });
                    }
                }
            });
        }    
    });
    $(document).on('keydown', '.dropdown-select', function (event) {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        if (event.keyCode == 13) {
            if ($(this).hasClass('open')) {
                focused_option.trigger('click');
            } else {
                $(this).trigger('click');
            }
            return false;
        } else if (event.keyCode == 40) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                focused_option.next().focus();
            }
            return false;
        } else if (event.keyCode == 38) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                focused_option.prev().focus();
            }
            return false;
        } else if (event.keyCode == 27) {
            if ($(this).hasClass('open')) {
                $(this).trigger('click');
            }
            return false;
        }
    });
    $(document).ready(function () {
        besSelect();
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