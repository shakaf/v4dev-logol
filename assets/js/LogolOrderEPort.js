function nextSteps() {
    $("#done").show();
}

function ChangeText(oFileInput, sTargetID) {
    document.getElementById(sTargetID).value = oFileInput.value;
}

//select all
function chkall(ele) {
    var checkboxes = document.getElementsByTagName('input');
    if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = true;
            }
        }
    } else {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
}

function selectTerminal(id) {
    if (id != "") {
        $('#accordionExample1').fadeIn(300);
        $('#accordionExample').fadeIn(300);
        //$('#basic-pills-wizard').fadeIn(300);
    } else {
        $('#accordionExample1').fadeOut(300);
        $('#accordionExample').fadeOut(300);
        //$('#basic-pills-wizard').fadeOut(300);
    }
}

function changeCont(obj) {
    if (obj.value == "default") {
        $(obj).parent().find("label").text("")
        $(obj).parent().find("select").css('width', '100%')
    } else {
        let split = obj.value.split("-");
        $(obj).parent().find("label").text(split[1].trim())
        $(obj).parent().find("select").css('width', '95px')
    }
}

function counting(act, obj) {
    let vals = parseInt($(obj).parent().find("label").text())

    if (act == "min") {
        if (vals == 0) {
            $(obj).parent().find("label").text("0")
        } else {
            $(obj).parent().find("label").text((vals - 1));
        }
    } else {

        $(obj).parent().find("label").text((vals + 1));
    }
}
function backtoZeroEP() {
    $('#exportportwizard').bootstrapWizard('show', 0);
}
var initEPort = function () {
    containercount = 0;
    dtarray = {};
    var $validator = $("#formEP").validate();
    $('#exportportwizard').bootstrapWizard({
        onNext: function (tab, navigation, index) {
            switch (index) {
                case 0:

                    break;
                case 1:
                    var $valid = $("#formEP").valid();
                    /* console.log("onNext");
                    console.log($valid);
                    console.log(containercount);
                    console.log(boxcount); */
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                    if (containercount == 0 /* || containercount != boxcount */) {
                        return false;
                    }
                    $(".gi-npwp").html($("#selnpwp option:selected").text());
                    $(".gi-donumber").html($(".donumber").val());
                    let yourDate = new Date();
                    var tglnow = yourDate.toISOString().split('T')[0];
                    $(".gi-dodate").html(tglnow);
                    $(".gi-intrefnumber").html($(".dointrefnumber").val());

                    $(".gi-cdt").html($("#cdt option:selected").text());
                    $(".gi-rqdn").html($(".rqdn").val());
                    $(".gi-rqdate").html($(".rqdate").val());
                    $(".gi-rsdn").html($(".rsdn").val());
                    $(".gi-rsdate").html($(".rsdate").val());

                    $("#orderlist").html("");
                    /* console.log("dtarray"); */
                    $.each(dtarray, function (key, value) {
                        /* console.log(key + ": " + value);
                        $.each(value, function (k, v) {
                            console.log(k + ": " + v);
                        }); */

                        var isi = '<div class="col-md-6" id="xdtc' + value['id'] + '">\
                            <div class="card">\
                                <div class="card-body">\
                                    <div class="row">\
                                        <div class="d-flex flex wrap">\
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">\
                                                <g clip-path="url(#clip0_2621_103660)">\
                                                    <path d="M2.5 6H22.5V18H2.5V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />\
                                                    <path d="M6.5 10L6.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />\
                                                    <path d="M10.5 10L10.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />\
                                                    <path d="M14.5 10L14.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />\
                                                    <path d="M18.5 10L18.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />\
                                                </g>\
                                                <defs>\
                                                    <clipPath id="clip0_2621_103660">\
                                                        <rect width="24" height="24" fill="white" transform="translate(0.5)" />\
                                                    </clipPath>\
                                                </defs>\
                                            </svg>\
                                            <h4 class="card-title card-gp-title" style="color:#002985; margin-left:10px">\
                                                <span id="xsize'+ value['id'] + '">' + value['sizec'] + '</span>’ <span id="xtype' + value['id'] + '">' + value['typec'] + '</span> - <span id="xidc' + value['id'] + '">' + value['idc'] + '</span>\
                                            </h4>\
                                        </div>\
                                    </div>\
                                    <div class="row">\
                                        <div class="col-md-6">\
                                            <label class="label" style="font-weight: 700; font-size: 10px;color:#0E0E2C;">Yard Opening Time</label>\
                                            <p class="l_val" id="xopen' + value['id'] + '" style="font-weight: 400; font-size: 12px;">' + value['openc'] + '</p>\
                                        </div>\
                                        <div class="col-md-6">\
                                            <label class="label" style="font-weight: 700; font-size: 10px;color:#0E0E2C;">Yard Closing Time</label>\
                                            <p class="l_val" id="close' + value['id'] + '" style="font-weight: 400; font-size: 12px;">' + value['closec'] + '</p>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>';
                        $("#orderlist").append(isi);
                    });


                    break;

                default:
                    break;
            }
        }
    });

    /* select all */
    $("#checkall").change(function () {
        $(".checkitem").prop("checked", $(this).prop("checked"));
        if ($(this).prop("checked") == false) {
            //itemcheck = 0;
            containercount = 0;
            $('.checkitem').each(function () {
                var idx = this.value;
                delete dtarray[idx];
            });
        } else {
            var numItems = $('.checkitem').length;

            containercount = numItems;
            $('.checkitem').each(function () {
                var idx = this.value;
                var sizec = $("#size" + idx).html();
                var typec = $("#type" + idx).html();
                var idc = $("#idc" + idx).html();
                var openc = $("#open" + idx).html();
                var closec = $("#close" + idx).html();
                dtarray[idx] = { id: idx, sizec: sizec, typec: typec, idc: idc, openc: openc, closec: closec };
            });
            //itemcheck = numItems;
        }
    });
    $(".checkitem").change(function () {
        var idx = this.value;
        console.log("idx");
        console.log(idx);
        if ($(this).prop("checked") == false) {
            $("#checkall").prop("checked", false);
            //itemcheck--;
            containercount--;
            delete dtarray[idx];
            /* delete dtarray[idc]; */
        } else {
            containercount++;
            var sizec = $("#size" + idx).html();
            var typec = $("#type" + idx).html();
            var idc = $("#idc" + idx).html();
            var openc = $("#open" + idx).html();
            var closec = $("#close" + idx).html();
            dtarray[idx] = { id: idx, sizec: sizec, typec: typec, idc: idc, openc: openc, closec: closec };
            /* dtarray[id] = { id: selboxv, height: split[0].trim(), type: split[1].trim(), count: cx }; */
            //itemcheck++;
        }
        if ($(".checkitem:checked").length == $(".checkitem").length) {
            $("#checkall").prop("checked", true)
        }
    });
}




/* $("#checkall").change(function() {
    $(".checkitem").prop("checked", $(this).prop("checked"))
})
$(".checkitem").change(function() {
    if ($(this).prop("checked") == false) {
        $("#checkall").prop("checked", false)
    }
    if ($(".checkitem:checked").length == $(".checkitem").length) {
        $("#checkall").prop("checked", true)
    }
})

$("#checkallList").change(function() {
    $(".checkitemlist").prop("checked", $(this).prop("checked"))
})
$(".checkitemlist").change(function() {
    if ($(this).prop("checked") == false) {
        $("#checkallList").prop("checked", false)
    }
    if ($(".checkitemlist:checked").length == $(".checkitemlist").length) {
        $("#checkallList").prop("checked", true)
    }
})

$("#checkall2").change(function() {
    $(".checkitemlist2").prop("checked", $(this).prop("checked"))
})
$(".checkitemlist2").change(function() {
    if ($(this).prop("checked") == false) {
        $("#checkall2").prop("checked", false)
    }
    if ($(".checkitemlist2:checked").length == $(".checkitemlist2").length) {
        $("#checkall2").prop("checked", true)
    }
}); */
function toggleEP(event) {
    var valid = $("#formEP").valid();
    if (valid == true) {
        $("#done").show();
        var myCollapse = document.getElementsByClassName('collapse')[0];
        var bsCollapse = new bootstrap.Collapse(myCollapse, {
            toggle: true
        });
    }
}
