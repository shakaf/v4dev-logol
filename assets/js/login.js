$(document).ready(function(){
    $(".default_option").click(function(){
        $(this).parent().toggleClass("active");
    });
    $(".select_ul li").click(function(){
        var currentele = $(this).html();
        var id = $(this).attr("id"); console.log(id);
        $(".default_option li").html(currentele);
        $(this).parents(".select_wrap").removeClass("active");
        return false;
    });
});
var v4DoLogin = function(wrapper, child) {
    let $this = $(wrapper),
        $container = $(child),
        $verifyPointer = 0,
        $formSerialize = $this.serializeArray();
    $formSerialize.push({ name: "csrf_v4kalibaru", value: $('meta[name="csrf_v4kalibaru"]').attr('content')});
    $(':input[wajib=yes]:not(:image, submit, button)', $this).each(function() {
        if ($(this).val() == "" || $(this).val() == null || $(this).val() == null) {
            $verifyPointer++;
            $(this).removeClass('input-v4-mb-24');
            $(this).addClass('input-v4-mb-none');
            if($(this).next().next().hasClass('v4-span-validation-remarks')) {
                $(this).next().next().html('This value is required');
            } else {
                $('<span class="v4-span-validation-remarks">This value is required</span>').insertAfter($(this).next());
            }
        }
    });
    
    $verifyPointer = 0;//bypass recaptcha validation
    if ($verifyPointer > 0) {
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: $this.attr('action'),
            data: $formSerialize,
            dataType: "json",
            beforeSend: function() {
                $container.attr('disabled', 'disabled');
                $container.removeClass('blue-button');
                $container.addClass('v4-login-continue');
            },
            complete: function() {
                $container.html('Continue');
            },
            success: function(data) {
                var header = data.header,
                    dataInfo = data.data;
                if(header.error) {
                    $.v4Toast({type: 'error', message: header.message});
                    $container.removeAttr('disabled');
                    $container.html('Continue');
                    $container.addClass('blue-button');
                    $container.removeClass('v4-login-continue');
                    return false;
                } else {
                    if(dataInfo.status.code == 200) {
                        if(dataInfo.redirect.action) {
                            setTimeout(function() {
                                location.href = dataInfo.redirect.callBack;
                            }, 2000);
                            return false;
                        }
                    } else {
                        $.v4Toast({type: 'error', message: header.message});
                        $container.removeAttr('disabled');
                        $container.html('Continue');
                        $container.addClass('blue-button');
                        $container.removeClass('v4-login-continue');
                        return false;
                    }
                }
            },
            error: function(data, status, e) {
                console.log(data);
                $container.removeAttr('disabled');
                $container.html('Continue');
                $container.addClass('blue-button');
                $container.removeClass('v4-login-continue');
            }
        });
        return false;
    }
}

var v4DoLoginNLE = function(url) {
    $.ajax({
        type: "POST",
        url,
        data: {
            "csrf_v4kalibaru": $('meta[name="csrf_v4kalibaru"]').attr('content'),
        },
        beforeSend: function() {

        },
        complete: function() {

        },
        success: function(data) {
            if(data) {
                $(".logol___dialog").LogolModal({
                    size: '600px',
                    message: '<iframe src="' + data + '" width="100%" height="680px" style="background-color: #FFFFFF;">',
                    title: 'Login With NLE',
                    buttonClose: true,
                    logo: true,
                });
            }
        },
        error: function(data, status, e) {
            console.log(data);
            alert(console.log(e));
        }
    });
    return false;
}

window.addEventListener('message',function(event) {
    if(event.origin !== 'https://devnle.beacukai.go.id/') return;
    console.log(event.data)
 },false);