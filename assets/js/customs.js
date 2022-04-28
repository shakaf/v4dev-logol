$(document).ready(function(){
    $("body").append('<div class="v4-loading"><div class="v4-loading-content"><div class="content-preloader"></div></div></div>');
    $("body").append('<div class="logol___dialog"></div>');
    $("body").append('<div class="logol___confirm"></div>');
    $(".sidebar-button").on("mouseover", function(e) {
        $(".nav-wrapper").toggleClass("close");
        if($(this).hasClass("sidebar-toggle")) {
            $(this).removeClass("sidebar-toggle");
            $(this).addClass("open-slide");
            $(".logo-name").hide();
            $(".logo-long").css({
                'display': 'flex',
                'flex-direction': 'column',
                'align-items': 'center',
                'transition': 'all 0.5s ease'
            });
            $(".bes-main-content").css({
                'left': '0px',
                'width': '100%'
            });
        } else if($(this).hasClass("open-slide")) {
            $(this).removeClass("open-slide");
            $(this).addClass("sidebar-toggle");
            $(".logo-name").show();
            $(".logo-long").hide();
            $(".bes-main-content").css({
                'width': '100%',
                'padding-left': '94px'
            });
        }
        return false;
    });
    $('nav.nav-wrapper ul.nav-links').find('li').has('ul').children('a').on('click', function (e) {
        e.preventDefault();
        if($(this).parent('li').children('ul').hasClass('sub-menus')) {
            $(this).parent('li').children('ul').removeClass('sub-menus');
            $(this).parent('li').children('ul').toggleClass('sub-menus-active');
            $(this).next().css({
                'transform': 'rotate(180deg)'
            });
        } else if($(this).parent('li').children('ul').hasClass('sub-menus-active')) {
            $(this).parent('li').children('ul').removeClass('sub-menus-active');
            $(this).parent('li').children('ul').toggleClass('sub-menus');
            $(this).next().css({
                'transform': 'none'
            });
        }
        return false;
    });
    $(".v4-href-dialog").on("click", function(){
        var $data = {
            csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
        };
        var vTitle = $(this).attr('data-title'),
            vWidth = $(this).attr('data-width'),
            vHasValidation = $(this).attr('data-validation');
        if(vHasValidation) {
            var vConfirmType = $(this).attr('data-confirm-type'),
                vConfirmIcons = ($(this).attr('data-confirm-icons') ? $(this).attr('data-confirm-icons') : false),
                vConfirmTitle = $(this).attr('data-confirm-title'),
                vConfirmMessages = $(this).attr('data-confirm-messages'),
                vConfirmButtons = $(this).attr('data-confirm-buttons'),
                vConfirmSubmit = ($(this).attr('data-confirm-submit') ? $(this).attr('data-confirm-submit') : false),
                vConfirmAttribute = ($(this).attr('data-confirm-attribute') ? $(this).attr('data-confirm-attribute') : false);
                $.v4ConfirmMedium({
                    type: vConfirmType,
                    icons: vConfirmIcons,
                    title: vConfirmTitle,
                    messages: vConfirmMessages,
                    buttons: {
                        cancel : {
                            label: vConfirmButtons
                        },
                        submit: {
                            label: vConfirmSubmit,
                            attribute: vConfirmAttribute
                        }
                    }
                });
                return false;
        } else {
            $.ajax({
                type: 'POST',
                url: $(this).attr('data-url'),
                data: $data,
                dataType: 'html',
                beforeSend: function() {
                },
                complete: function() {
                },
                success: function(data) {
                    if (data) {
                        $(".logol___dialog").LogolModal({
                            size: vWidth,
                            message: data,
                            title: vTitle,
                            buttonClose: true,
                            logo: false,
                        });
                    }
                }
            });
        }
    });
    $(".v4-edit-attribute").on("click", function(){
        var vTitle = $(this).attr('data-title'),
            vWidth = $(this).attr('data-width'),
            $data = {
                csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content'),
                attribute: $(this).closest('tr').attr('v-attribute')
            };
            $.ajax({
                type: 'POST',
                url: $(this).attr('data-url'),
                data: $data,
                dataType: 'html',
                beforeSend: function() {
                },
                complete: function() {
                },
                success: function(data) {
                    if (data) {
                        $(".logol___dialog").LogolModal({
                            size: vWidth,
                            message: data,
                            title: vTitle,
                            buttonClose: true,
                            logo: false,
                        });
                    }
                }
            });
        return false;
    });
    $(".v4-element-attribute-to-div").on("click", function(){
        var vTitle = $(this).attr('data-title'),
            vWidth = $(this).attr('data-width'),
            $data = {
                csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content'),
                identity: $(this).attr('id'),
                attribute: $(this).attr('v-attribute')
            };
            $.ajax({
                type: 'POST',
                url: $(this).attr('data-url'),
                data: $data,
                dataType: 'html',
                beforeSend: function() {
                },
                complete: function() {
                },
                success: function(data) {
                    if (data) {
                        $(".logol___dialog").LogolModal({
                            size: vWidth,
                            message: data,
                            title: vTitle,
                            buttonClose: true,
                            logo: false,
                        });
                    }
                }
            });
        return false;
    });
    $(".v4-user-max").on("click", function(){
        var $this = $(this),
            $per = parseInt($this.attr("per"));
        $('.v4-user-max').not($this).removeClass('v4-max-active');
        $($this).toggleClass('v4-max-active');
        if($per > 10) {
            $(".v4-req-user-wrapper").fadeIn(500);
        } else {
            $(".v4-req-user-wrapper").fadeOut(500);
        }
        $(".v4-send-request-user").attr('data-serial', $per);
        return false;
    });
    $(".v4-req-user-inc").on("click", function(){
        var $this = $(this),
            $prev = $this.prev(),
            $val = parseInt($prev.html()),
            $maxVal = 99;
        if($val < $maxVal) {
            $val++;
        }
        $(".v4-send-request-user").attr('data-serial', $val);
        $prev.html($val);
        return false;
    });
    $(".v4-toggle-check-custom").on("change", function(){
        let objectCheck = $(this);
        if (objectCheck.is(":checked")) {
            var vConfirmType = $(objectCheck).attr('data-confirm-type'),
                vConfirmIcons = ($(objectCheck).attr('data-confirm-icons') ? $(objectCheck).attr('data-confirm-icons') : false),
                vConfirmTitle = $(objectCheck).attr('data-confirm-title'),
                vConfirmMessages = $(objectCheck).attr('data-confirm-messages'),
                vConfirmButtons = $(objectCheck).attr('data-confirm-buttons'),
                vConfirmSubmit = ($(objectCheck).attr('data-confirm-submit') ? $(objectCheck).attr('data-confirm-submit') : false),
                vConfirmAttribute = ($(objectCheck).attr('data-confirm-attribute') ? $(objectCheck).attr('data-confirm-attribute') : false);
                $.v4ConfirmMedium({
                    type: vConfirmType,
                    icons: vConfirmIcons,
                    title: vConfirmTitle,
                    messages: vConfirmMessages,
                    buttons: {
                        cancel : {
                            label: vConfirmButtons
                        },
                        submit: {
                            label: vConfirmSubmit,
                            attribute: vConfirmAttribute
                        }
                    },
                    callback: function(e){
                        if(e) {

                        } else {
                            objectCheck.prop('checked', false);
                        }
                    }
                });
                return false;
        }
        return false;
    });
    $(".v4-confirm-floating").on("click", function(){
        let objectTrHtml = $(this).closest('tr').attr("id");
            vFloatingReactionsType = $(this).attr('data-floating-type'),
            vFloatingReactionsHeader = $(this).attr('data-floating-header'),
            vFloatingReactionsMessage = $(this).attr('data-floating-message'),
            floatingUrl = $(this).attr('data-floating-url'),
            objectPayload = {
                q: objectTrHtml,
                csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
            };
            $.v4ConfirmSmall({
                type: vFloatingReactionsType,
                header: vFloatingReactionsHeader,
                messages: vFloatingReactionsMessage,
                attribute: objectTrHtml,
                callback: function(e) {
                    if(e) {
                        $.ajax({
                            type: 'POST',
                            url: floatingUrl,
                            data: objectPayload,
                            dataType: 'json',
                            beforeSend: function() {
                                console.log('Beforesend function');
                            },
                            complete: function() {
                                console.log('Complete function');
                            },
                            success: function(data) {
                                var header = data.header,
                                    dataInfo = data.data,
                                    collections = dataInfo.collection;
                                if(header.error) {
                                    $.v4Toast({type: 'error', message: header.message});
                                    return false;
                                } else {
                                    if(dataInfo.status.code == 200) {
                                        $.v4ConfirmSmall({
                                            type: 'success',
                                            header: 'Success',
                                            messages: header.message,
                                            attribute: objectTrHtml,
                                        });
                                        if(dataInfo.hasOwnProperty('collection')) {
                                            if(collections.hasOwnProperty('action')) {
                                                if(collections.action == 'remove') {
                                                    $("#" + collections.htmlFormat).remove().fadeOut();
                                                }
                                            }
                                        }
                                    } else {
                                        $.v4Toast({type: 'error', message: header.message});
                                        $container.removeAttr('disabled');
                                        return false;
                                    }
                                }
                            }
                        });
                    }
                }
            });
    });
    $(".v4-confirm-floating-single").on("click", function(){
        let objectTrHtml = $(this).attr("id");
            vFloatingReactionsType = $(this).attr('data-floating-type'),
            vFloatingReactionsHeader = $(this).attr('data-floating-header'),
            vFloatingReactionsMessage = $(this).attr('data-floating-message'),
            floatingUrl = $(this).attr('data-floating-url'),
            objectPayload = {
                q: objectTrHtml,
                csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
            };
            $.v4ConfirmSmall({
                type: vFloatingReactionsType,
                header: vFloatingReactionsHeader,
                messages: vFloatingReactionsMessage,
                attribute: objectTrHtml,
                callback: function(e) {
                    if(e) {
                        $.ajax({
                            type: 'POST',
                            url: floatingUrl,
                            data: objectPayload,
                            dataType: 'json',
                            beforeSend: function() {
                                console.log('Beforesend function');
                            },
                            complete: function() {
                                console.log('Complete function');
                            },
                            success: function(data) {
                                var header = data.header,
                                    dataInfo = data.data,
                                    collections = dataInfo.collection;
                                if(header.error) {
                                    $.v4Toast({type: 'error', message: header.message});
                                    return false;
                                } else {
                                    if(dataInfo.status.code == 200) {
                                        $.v4ConfirmSmall({
                                            type: 'success',
                                            header: 'Success',
                                            messages: header.message,
                                            attribute: objectTrHtml,
                                        });
                                        if(dataInfo.hasOwnProperty('collection')) {
                                            if(collections.hasOwnProperty('action')) {
                                                if(collections.action == 'remove') {
                                                    $("#" + collections.htmlFormat).remove().fadeOut();
                                                }
                                            }
                                        }
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
                            }
                        });
                    }
                }
            });
    });
});
var v4DoPostWForm = function(objectHtml) {
    let objecHtml = $(objectHtml),
        objectUrl = objecHtml.attr('data-url'),
        objectConfirm = objectHtml.attr('data-confirm-type'),
        objectPayload = {
            q: objectHtml.attr('data-serial'),
            csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
        };
    if(objectPayload.q == 'undefined' || objectPayload.q == null) {
        console.log('Undefined');
        return false;
    } else {
        if(objectConfirm) {
            var vConfirmType = $(objectHtml).attr('data-confirm-type'),
                    vConfirmIcons = ($(objectHtml).attr('data-confirm-icons') ? $(objectHtml).attr('data-confirm-icons') : false),
                    vConfirmTitle = $(objectHtml).attr('data-confirm-title'),
                    vConfirmMessages = $(objectHtml).attr('data-confirm-messages'),
                    vConfirmButtons = $(objectHtml).attr('data-confirm-buttons'),
                    vConfirmSubmit = ($(objectHtml).attr('data-confirm-submit') ? $(objectHtml).attr('data-confirm-submit') : false),
                    vConfirmAttribute = ($(objectHtml).attr('data-confirm-attribute') ? $(objectHtml).attr('data-confirm-attribute') : false);
                    $.v4ConfirmMedium({
                        type: vConfirmType,
                        icons: vConfirmIcons,
                        title: vConfirmTitle,
                        messages: vConfirmMessages,
                        buttons: {
                            cancel : {
                                label: vConfirmButtons
                            },
                            submit: {
                                label: vConfirmSubmit,
                                attribute: vConfirmAttribute
                            }
                        },
                        callback: function(e){
                            if(e) {
                                $.ajax({
                                    type: 'POST',
                                    url: objectUrl,
                                    data: objectPayload,
                                    dataType: 'json',
                                    beforeSend: function() {
                                        console.log('Beforesend function');
                                    },
                                    complete: function() {
                                        console.log('Complete function');
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
                                    }
                                });
                            }
                        }
                    });
                    return false;
        } else {
            console.log('Submit with confirm')
        }
    }
    return false;
}
var v4DoPost = function(argsForm, argsContainer, argsDiv) {
    argsDiv = typeof argsDiv !== 'undefined' ? argsDiv : false;
    let _formDataSerialize = new FormData(document.getElementById(argsForm)),
        _idFormAttribute = '#' + argsForm,
        _container = $(argsContainer),
        _isNotNull = 0,
        _containerIsConfirm = $(argsContainer).attr('data-confirm');
        _formDataSerialize.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
        $(':input[wajib=yes]:not(:image, submit, button)', $(_idFormAttribute)).each(function() {
            if ($(this).attr('wajib') == "yes" && ($(this).val() == "" || $(this).val() == null)) {
                _isNotNull++;
                $(this).removeClass('input-v4-mb-24');
                $(this).addClass('input-v4-mb-none');
                if($(this).next().next().hasClass('v4-span-validation-remarks')) {
                    $(this).next().next().html('This value is required');
                } else {
                    $('<span class="v4-span-validation-remarks">This value is required</span>').insertAfter($(this).next());
                }
            }
        });

        if(_isNotNull > 0) {
            return false;
        } else {
            if(_containerIsConfirm) {
                var vConfirmType = $(argsContainer).attr('data-confirm-type'),
                    vConfirmIcons = ($(argsContainer).attr('data-confirm-icons') ? $(argsContainer).attr('data-confirm-icons') : false),
                    vConfirmTitle = $(argsContainer).attr('data-confirm-title'),
                    vConfirmMessages = $(argsContainer).attr('data-confirm-messages'),
                    vConfirmButtons = $(argsContainer).attr('data-confirm-buttons'),
                    vConfirmSubmit = ($(argsContainer).attr('data-confirm-submit') ? $(argsContainer).attr('data-confirm-submit') : false),
                    vConfirmAttribute = ($(argsContainer).attr('data-confirm-attribute') ? $(argsContainer).attr('data-confirm-attribute') : false);
                    $.v4ConfirmMedium({
                        type: vConfirmType,
                        icons: vConfirmIcons,
                        title: vConfirmTitle,
                        messages: vConfirmMessages,
                        buttons: {
                            cancel : {
                                label: vConfirmButtons
                            },
                            submit: {
                                label: vConfirmSubmit,
                                attribute: vConfirmAttribute
                            }
                        },
                        callback: function(e){
                            if(e) {
                                $.ajax({
                                    type: 'POST',
                                    url: $(_idFormAttribute).attr('action'),
                                    data: _formDataSerialize,
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
                                                if(dataInfo.hasOwnProperty('redirect')) {
                                                    if(dataInfo.redirect.action) {
                                                        setTimeout(function() {
                                                            location.href = dataInfo.redirect.callBack;
                                                        }, 2000);
                                                        return false;
                                                    }
                                                }
                                                if(dataInfo.hasOwnProperty('collection')) {
                                                    var htmlFormat = dataInfo.collection.htmlFormat;
                                                        if(argsDiv) {
                                                           $(htmlFormat).prependTo('#' + argsDiv); 
                                                        }
                                                }
                                            } else {
                                                $.v4Toast({type: 'error', message: header.message});
                                                $container.removeAttr('disabled');
                                                return false;
                                            }
                                        }
                                        _container.removeAttr('disabled');
                                    }
                                });
                            }
                        }
                    });
                    return false;
            } else {
                $.ajax({
                    type: 'POST',
                    url: $(_idFormAttribute).attr('action'),
                    data: _formDataSerialize,
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
                            dataInfo = data.data,
                            collections = dataInfo.collection;
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
                                if(dataInfo.hasOwnProperty('redirect')) {
                                    if(dataInfo.redirect.action) {
                                        setTimeout(function() {
                                            location.href = dataInfo.redirect.callBack;
                                        }, 2000);
                                        return false;
                                    }
                                }
                                if(dataInfo.hasOwnProperty('collection')) {
                                    var htmlFormat = dataInfo.collection.htmlFormat;
                                        if(collections.hasOwnProperty('action')) {
                                            if(collections.action == 'update') {
                                                $("#" + collections.wrapper).remove().fadeOut();
                                            }
                                        }
                                        if(argsDiv) {
                                            $(htmlFormat).prependTo('#' + argsDiv); 
                                        }
                                }
                            } else {
                                $.v4Toast({type: 'error', message: header.message});
                                $container.removeAttr('disabled');
                                return false;
                            }
                        }
                        _container.removeAttr('disabled');
                    }
                });
            }
            return false;
        }
}
var handleInput = function(evt) {
    const value = evt.target.value
    const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
    if (emailRegex.test(value.trim())) {
        evt.target.classList.add('v4-input-valid');
        $(".v4-span-validation-remarks").html('');
        $(".input-v4-required").addClass('input-v4-mb-24');
        $(".input-v4-required").removeClass('input-v4-mb-none');
    } else {
        $(".v4-span-validation-remarks").html('Email address not valid');
        evt.target.classList.remove('v4-input-valid');
        $(".input-v4-required").removeClass('input-v4-mb-24');
        $(".input-v4-required").addClass('input-v4-mb-none');
    }
    if (!value) {
        evt.target.classList.remove('invalid')
        $(".v4-span-validation-remarks").html('');
        $(".input-v4-required").addClass('input-v4-mb-24');
        $(".input-v4-required").removeClass('input-v4-mb-none');
    }
}