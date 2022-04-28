<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/croppie.min.css?v=<?= rand(); ?>" type="text/css" />
<form class="" action="<?= site_url('my-company-photo-profile'); ?>" autocomplete="off" method="post" id="v4-company-photo-profile" name="v4-company-photo-profile" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div style="display: flex; flex-direction: column; center; background: #FFFFFF; border-radius: 8px;">
            <div class="alert" role="alert" style="height: 56px; display: flex; flex-direction: column;"><span><img src="<?= base_url(); ?>assets/images/v4-icon-info-alert-circle.png"></span><span style="display: flex; text-align: justify; margin-left: 32px; margin-bottom: 12px; margin-right: 24px; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #4A4A68; position: absolute; padding-top: 4px;">Set your photo company until fix position</span></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="drop">
            <div class="uploader">
                <input type="file" class="v4-image-upload" id="picProfileCompany" name="picProfileCompany" accept="image/*" wajib="yes">
            </div>
        </div>
        <div id="resizer"></div>
    </div>
</div>
<div style="height: 72px;">&nbsp</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
            <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
            <button class="btn-container-dialog btn-dialog-submit company-photo-profile-edit" id="<?= rand(); ?>">Save</button>
        </div>
    </div>
</div>
</form>
<script src="<?= base_url(); ?>assets/js/croppie.min.js?v=<?= date("Ymdhis"); ?>"></script>
<script src="<?= base_url(); ?>assets/js/jquery.imagereader-1.1.0.js?v=<?= date("Ymdhis"); ?>"></script>
<script>
    var croppie = null;
    var el = document.getElementById('resizer');
    var base64ImageToBlob = function(str) {
        var pos = str.indexOf(';base64,');
        var type = str.substring(5, pos);
        var b64 = str.substr(pos + 8);
        var imageContent = atob(b64);
        var buffer = new ArrayBuffer(imageContent.length);
        var view = new Uint8Array(buffer);
        for (var n = 0; n < imageContent.length; n++) {
          view[n] = imageContent.charCodeAt(n);
        }
        var blob = new Blob([buffer], { type: type });
        return blob;
    };
    var getImage = function(input, croppie) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {  
                croppie.bind({
                    url: e.target.result
                });
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    $(document).ready(function(){
        $(".company-edit-cancel").on("click", function(){
            if ($(".kbaru-modal").length > 0) {
                $(".kbaru-modal").remove();
            }
            return false;
        }); 
        $("#picProfileCompany").on("change", function(event) {
            croppie = new Croppie(el, {
                    viewport: {
                        width: 200,
                        height: 200,
                        type: 'circle'
                    },
                    boundary: {
                        width: 250,
                        height: 250
                    },
                    enableOrientation: true
                });
            getImage(event.target, croppie);
            $(".drop").hide();
        });
        $(".company-photo-profile-edit").on("click", function(){
            var _container = $(this);
            croppie.result('base64').then(function(base64) {
                var _formDataSerializePhoto = new FormData(document.getElementById('v4-company-photo-profile'));
                    _formDataSerializePhoto.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
                    _formDataSerializePhoto.append("profile_picture", base64ImageToBlob(base64));
                    $.ajax({
                        type: 'POST',
                        url: $("#v4-company-photo-profile").attr('action'),
                        data: _formDataSerializePhoto,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        beforeSend: function() {
                            if(_container.parent().hasClass("wrapper-w-loader")) {
                                var wrapperWLoaderId = _container.parent().attr("id");
                                $("#" + wrapperWLoaderId + " :first").append('<span class="btn-beforesend"></span>');
                            }
                            _container.attr('disabled', 'disabled');
                        },
                        complete: function() {
                            if($(".btn-beforesend").length > 0) {
                                $(".btn-beforesend").remove();
                            }
                            _container.removeAttr('disabled');
                        },
                        success: function(data) {
                            var header = data.header,
                                dataInfo = data.data;
                            if(header.error) {
                                $.v4Toast({type: 'error', message: header.message});
                                return false;
                            } else {
                                if(dataInfo.status.code == 200) {
                                    if ($(".kbaru-modal").length > 0) {
                                        $(".kbaru-modal").remove();
                                        setTimeout(function() {
                                            $(".kbaru-modal").remove();
                                        }, 2000);
                                    }
                                    $.v4Toast({type: 'success', message: header.message, autoClose: true});
                                    $("#my-pict-profile").attr("src", base64); 
                                    if(dataInfo.hasOwnProperty('redirect')) {
                                        if(dataInfo.redirect.action) {
                                            setTimeout(function() {
                                                location.href = dataInfo.redirect.callBack;
                                            }, 2000);
                                            return false;
                                        }
                                    }
                                } else {
                                    $.v4Toast({type: 'error', message: header.message});
                                    $container.removeAttr('disabled');
                                    return false;
                                }
                            }
                            _container.removeAttr('disabled');
                        },
                        error: function(error) {
                            _container.removeAttr('disabled');
                            console.log(error);
                        }
                    });
            });
            return false;
        });
    });
</script>