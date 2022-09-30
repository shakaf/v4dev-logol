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

/* function changeCont(obj) {
    if (obj.value == "default") {
        $(obj).parent().find("label").text("")
        $(obj).parent().find("select").css('width', '100%')
    } else {
        let split = obj.value.split("-");
        $(obj).parent().find("label").text(split[1].trim())
        $(obj).parent().find("select").css('width', '95px')
    }
} */

function countingx(act, obj) {
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
    $("#listcontainer").html("");
    $("#sAllCB").hide();
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

    initCheck();
}

var initCheck = function () {

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
            $(".cb" + idx).prop("checked", false);
            //itemcheck--;
            containercount--;
            delete dtarray[idx];
            /* delete dtarray[idc]; */
        } else {
            $(".cb" + idx).prop("checked", true);
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
        getContainerList();
        $("#done").show();
        var myCollapse = document.getElementsByClassName('collapse')[0];
        var bsCollapse = new bootstrap.Collapse(myCollapse, {
            toggle: true
        });
    }
}

var getContainerList = function () {
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("company_id", $("#company_id").val());
    dataf.append("owner_id", $("#selnpwp option:selected").val());
    dataf.append("owner_npwp", $("#npwpcust").val());
    dataf.append("owner_name", $("#namecust").val());

    dataf.append("do_no", $(".donumber").val());
    dataf.append("do_exp_date", $(".doexp").val());
    dataf.append("res_type", $("#cdt option:selected").val());
    dataf.append("req_no", $(".rqdn").val());
    dataf.append("req_date", $(".rqdate").val());
    dataf.append("res_no", $(".rsdn").val());
    dataf.append("res_date", $(".rsdate").val());
    containercount = 0;
    $("#listcontainer").html("");
    $(".gtid").val("");
    $(".ohi").val("");
    $("#sAllCB").hide();
    dtarray = {};
    $(".v4-loading").show();
    $.ajax({
        type: "POST",
        url: base_url + "eport-container",
        data: dataf,
        cache: false,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function () {

        },
        complete: function () {


        },
        success: function (data) {
            $(".v4-loading").hide();
            if (data.data) {
                var sts = data.data.collection.status;
                var code = data.data.status.code;
                if (sts == 1) {
                    console.log(data);
                    var dtorder = data.data.collection.result[0].objects.orders;
                    var datagtom = data.data.collection.data;
                    var listcont = data.data.collection.result[0].objects.containers;
                    if (listcont.length > 0) {
                        console.log("GT_ID");
                        console.log(datagtom.GT_ID);
                        console.log("OM_HEADER_ID");
                        console.log(datagtom.OM_HEADER_ID);
                        $(".gtid").val(datagtom.GT_ID);
                        $(".ohi").val(datagtom.OM_HEADER_ID);
                        console.log(dtorder);
                        console.log(listcont.length);
                        $("#sAllCB").show();
                        var dtcont20 = [];
                        var dtcont40 = [];
                        //$.each(listcont, function (key, value) {
                        for (var k in listcont) {
                            var value = listcont[k];
                            console.log(value);
                            var idx = makeid(5);
                            var isi = '<div class="col-md-6" id="dtc' + idx + '">\
                                <div class="card">\
                                    <div class="card-body">\
                                        <div class="row">\
                                            <div class="col-md-8">\
                                                <div class="d-flex flex wrap">\
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">\
                                                        <g filter="url(#filter0_d_1338_38064)">\
                                                            <path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>\
                                                            <path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>\
                                                            <path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>\
                                                            <path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>\
                                                            <path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>\
                                                        </g>\
                                                        <defs>\
                                                            <filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">\
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>\
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>\
                                                                <feOffset dy="4"></feOffset>\
                                                                <feGaussianBlur stdDeviation="2"></feGaussianBlur>\
                                                                <feComposite in2="hardAlpha" operator="out"></feComposite>\
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>\
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064"></feBlend>\
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape"></feBlend>\
                                                            </filter>\
                                                        </defs>\
                                                    </svg>\
                                                    <h4 class="card-title card-gp-title" style="color:#002985;">\
                                                        <span id="size'+ idx + '">' + value['size'] + '</span>’ <span id="type' + idx + '">' + value['contType'] + '</span> - <span id="idc' + idx + '">' + value['noContainer'] + '</span>\
                                                    </h4>\
                                                </div>\
                                            </div>\
                                            <div class="col-md-4" style="text-align:end;">\
                                                <input type="checkbox" class="chk_custom checkitem cb'+ idx + '" value="' + idx + '">\
                                            </div>\
                                        </div>\
                                        <div class="row">\
                                            <div class="col-md-6">\
                                                <label class="label" style="color:#0E0E2C;">Yard Opening Time</label>\
                                                <p class="l_val" id="open'+ idx + '">' + dtorder['yot'] + '</p>\
                                            </div>\
                                            <div class="col-md-6">\
                                                <label class="label" style="color:#0E0E2C;">Yard Closing Time</label>\
                                                <p class="l_val" id="close'+ idx + '">' + dtorder['yct'] + '</p>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>';
                            $("#listcontainer").append(isi);
                            console.log(value['size'] === "20.00");
                            console.log(value['size'] === "40.00");
                            var check20 = value['size'] === "20.00";
                            var check40 = value['size'] === "40.00";

                            if (check20 == true) {
                                dtcont20.push({ id: idx, sizec: value['size'], typec: value['contType'], idc: value['noContainer'], openc: dtorder['yot'], closec: dtorder['yct'], isi: isi });
                            }
                            if (check40 == true) {
                                dtcont40.push({ id: idx, sizec: value['size'], typec: value['contType'], idc: value['noContainer'], openc: dtorder['yot'], closec: dtorder['yct'], isi: isi });
                            }
                        }
                        $("#Showall").on("click", function () {
                            if (listcont.length > 0) {
                                $("#sAllCB").show();
                                $("#btncont").show();
                            } else {
                                $("#sAllCB").hide();
                                $("#btncont").hide();
                            }
                        });
                        $("#pills20tab").on("click", function () {
                            if (dtcont20.length > 0) {
                                $("#sAllCB").show();
                                $("#btncont").show();
                            } else {
                                $("#sAllCB").hide();
                                $("#btncont").hide();
                            }
                        });
                        $("#pills40tab").on("click", function () {
                            if (dtcont40.length > 0) {
                                $("#sAllCB").show();
                                $("#btncont").show();
                            } else {
                                $("#sAllCB").hide();
                                $("#btncont").hide();
                            }
                        });
                        $("#listcontainer20").html("");
                        $("#listcontainer40").html("");
                        console.log("lc20");
                        console.log(dtcont20.length);
                        if (dtcont20.length > 0) {
                            $.each(dtcont20, function (key, value) {
                                console.log(value);
                                $("#listcontainer20").append(value['isi']);
                            });
                        }
                        console.log("lc40");
                        console.log(dtcont40.length);
                        if (dtcont40.length > 0) {
                            $.each(dtcont40, function (key, value) {
                                console.log(value);
                                $("#listcontainer40").append(value['isi']);
                            });
                        }
                        initCheck();
                    }
                    // window.location = base_url + "detil-payment";
                } else {
                    alert(code);
                }
            } else {
                alert(data);
            }

        },
        error: function (data, status, e) {


        }
    });
}

var saveCont = function () {
    console.log("saveCont");
    var $validator = $("#formEP").validate();
    var $valid = $("#formEP").valid();
    if (!$valid) {
        $validator.focusInvalid();
        return false;
    }
    if (containercount == 0 /* || containercount != boxcount */) {
        return false;
    }

    var gtid = $(".gtid").val();
    var ohi = $(".ohi").val();
    var docontainer = JSON.stringify(dtarray);
    var doqty = Object.keys(dtarray).length;
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("gtid", gtid);
    dataf.append("ohi", ohi);
    dataf.append("do_container", docontainer);
    dataf.append("do_qty", doqty);
    console.log("dataf");
    console.log(...dataf);
    $(".v4-loading").show();
    $.ajax({
        type: "POST",
        url: base_url + "eport-reqcontainer",
        data: dataf,
        cache: false,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function () {

        },
        complete: function () {


        },
        success: function (data) {
            console.log(data);
            $(".v4-loading").hide();
            if (data.data) {
                var code = data.data.status.code;
                if (code == 200 || code == 201) {
                    $('#exportportwizard').bootstrapWizard('show', 1);
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

                } else {
                    alert(code);
                }
            } else {
                alert(data);
            }

        },
        error: function (data, status, e) {


        }
    });

}
var bookingnowEPort = function () {
    var gtid = $(".gtid").val();
    var ohi = $(".ohi").val();
    var docontainer = JSON.stringify(dtarray);
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("gtid", gtid);
    dataf.append("ohi", ohi);
    dataf.append("do_container", docontainer);
    dataf.append("do_no", $(".gi-donumber").html());
    dataf.append("do_date", $(".gi-dodate").html());
    dataf.append("do_intrefno", $(".gi-intrefnumber").html());

    dataf.append("do_cdt", $(".gi-cdt").html());
    dataf.append("do_rqdn", $(".gi-rqdn").html());
    dataf.append("do_rqdate", $(".gi-rqdate").html());
    dataf.append("do_rsdn", $(".gi-rsdn").html());
    dataf.append("do_rsddate", $(".gi-rsdate").html());

    console.log("dataf");
    console.log(...dataf);
    $(".v4-loading").show();
    $.ajax({
        type: "POST",
        url: base_url + "eport-bookingnow",
        data: dataf,
        cache: false,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function () {

        },
        complete: function () {


        },
        success: function (data) {
            console.log(data);
            $(".v4-loading").hide();
            if (data.data) {
                var code = data.data.status.code;
                if (code == 200 || code == 201) {
                    window.location = base_url + "detil-payment";
                } else {
                    alert(code);
                }
            } else {
                alert(data);
            }

        },
        error: function (data, status, e) {


        }
    });
}