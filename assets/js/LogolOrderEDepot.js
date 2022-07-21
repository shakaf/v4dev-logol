function backtoZero() {
    $('#exportdepot-wizard').bootstrapWizard('show', 0);
}
function toggle(event) {
    var valid = $("#formA").valid();
    if (valid == true) {
        $("#done").show();
        var myCollapse = document.getElementsByClassName('collapse')[0];
        var bsCollapse = new bootstrap.Collapse(myCollapse, {
            toggle: true
        });
    }
}
function nextSteps() {
    var valid = $("#formA").valid();
    if (valid == true) {
        $("#done").show();

    } else {

    }
}


function changeCont(obj, id) {
    if (obj.value == "") {
        $(obj).parent().find("label").text("")
        $(obj).parent().find("select").css('width', '100%')

    } else {
        var tcount = $("#t_count" + id).find("label").text();
        var selbox = $("#selbox" + id + " option:selected").text();
        var selboxv = $("#selbox" + id + " option:selected").val();
        let split = selbox.split("-");
        if (tcount == 0) {
            boxcount++;
            $("#t_count" + id).find("label").html(1);

        }
        var cx = $("#t_count" + id).find("label").html();
        dtarray[id] = { id: selboxv, height: split[0].trim(), type: split[1].trim(), count: cx };

        $(obj).parent().find("label").text(split[1].trim());
        $(obj).parent().find("select").css('width', '95px');
        if (split[0].trim() == '20 Feet') {
            $(obj).parent().parent().find("img").attr('src', base_url + 'assets/images/icon/cont-20-dv.png');
        } else if (split[0].trim() == '40 Feet') {
            $(obj).parent().parent().find("img").attr('src', base_url + 'assets/images/icon/cont-40-dv.png');
        } else {
            $(obj).parent().parent().find("img").attr('src', base_url + 'assets/images/icon/cont-40-hc.png');
        }

    }
}

function counting(act, obj, id) {
    let vals = parseInt($(obj).parent().find("label").text())
    var selbox = $("#selbox" + id + " option:selected").val();
    var selboxtext = $("#selbox" + id + " option:selected").text();
    var selboxv = $("#selbox" + id + " option:selected").val();
    let split = selboxtext.split("-");
    if (selbox != "") {
        if (act == "min") {
            if (vals == 1) {
                $(obj).parent().find("label").text("1");
            } else {
                $(obj).parent().find("label").text((vals - 1));
            }
        } else {
            $(obj).parent().find("label").text((vals + 1));
        }
        var cx = $(obj).parent().find("label").text();
        dtarray[id] = { id: selboxv, height: split[0].trim(), type: split[1].trim(), count: cx };

    }
}

function removeContainer(idc) {
    const element = document.getElementById("contDetil" + idc);
    element.remove();
    delete dtarray[idc];
    containercount--;
    boxcount--;
}

function addNewCont() {
    containercount++;
    var id = makeid(5);
    /* alert('add new'); */
    $('#list-cont').append('<div class="col-md-4" id="contDetil' + id + '">\
        <div class="alert-dismissible fade show">\
            <button type="button" onclick="removeContainer(\''+ id + '\')" class="btn-close" ></button>\
        </div>\
        <div class="card">\
            <div class="card-body">\
                <table>\
                    <tr>\
                        <td rowspan="2"><img src="'+ base_url + 'assets/images/icon/cont-null.png" /></td>\
                        <td style="width:100%;">\
                            <select class="form-select" id="selbox'+ id + '" onchange="changeCont(this,\'' + id + '\')" style="border:0;width:100%;">\
                                <option value="" selected disabled>Select Container</option>\
                                <option value="20-GP">20 Feet - General Purpose</option>\
                                <option value="40-GP">40 Feet - General Purpose</option>\
                                <option value="45-HC">45 Feet - High Cube</option>\
                                <option value="20-RE">20 Feet - Reefer</option>\
                                <option value="40-RH">40 Feet - Reefer High</option>\
                            </select>\
                            <label style="margin-left:8%;">&nbsp;</label>\
                        </td>\
                    </tr>\
                    <tr>\
                        <td>\
                            <div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">\
                            <span onClick="counting(\'min\', this,\''+ id + '\')" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>\
                            <span class="t_count" id="t_count'+ id + '" style="padding: 5px;"><label>0</label></span>\
                            <span onClick="counting(\'plus\', this,\''+ id + '\')" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>\
                            </div>\
                        </td>\
                    </tr>\
                </table>\
            </div>\
        </div>\
    </div>');
}

var initEDepot = function () {
    var $validator = $("#formA").validate();
    $('#exportdepot-wizard').bootstrapWizard({
        onNext: function (tab, navigation, index) {
            switch (index) {
                case 0:

                    break;
                case 1:
                    var $valid = $("#formA").valid();
                    /* console.log("onNext");
                    console.log($valid);
                    console.log(containercount);
                    console.log(boxcount); */
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                    if (containercount == 0 || containercount != boxcount) {
                        return false;
                    }
                    $(".gi-npwp").html($("#selnpwp option:selected").text());
                    $(".gi-donumber").html($(".donumber").val());
                    /* $(".gi-dodate").html($(".dodate").val()); */
                    let yourDate = new Date();
                    var tglnow = yourDate.toISOString().split('T')[0];
                    $(".gi-dodate").html(tglnow);
                    $(".gi-intrefnumber").html($(".dointrefnumber").val());
                    var depo = $('#depotId').select2('data');
                    $(".gi-depo").html(depo[0].text);
                    var sl = $('.shippingline').select2('data');
                    $(".gi-shippingline").html(sl[0].text);
                    $(".gi-grade").html($("#grade option:selected").text());
                    $("#orderlist").html("");
                    /* console.log("dtarray"); */
                    $.each(dtarray, function (key, value) {
                        /* console.log( key + ": " + value );
                        $.each( value, function( k, v ) {
                            console.log( k + ": " + v );
                        }); */
                        var img = "";
                        if (value['height'].trim() == '20 Feet') {
                            img = base_url + 'assets/images/icon/cont-20-dv.png';
                        } else if (value['height'].trim() == '40 Feet') {
                            img = base_url + 'assets/images/icon/cont-40-dv.png';
                        } else {
                            img = base_url + 'assets/images/icon/cont-40-hc.png';
                        }
                        var isi = '<div class="col-lg-6 mt-3">' +
                            '<div class="card">' +
                            '<div class="card-body">' +
                            '<table>' +
                            '<tr>' +
                            '<td rowspan="2"><img src="' + img + '" /></td>' +
                            '<td style="width:100%;">' +
                            '<p style="margin-left:8%;font-weight:bold;">' + value['height'] + '</p>' +
                            '<label style="margin-left:8%;">' + value['type'] + '</label>' +
                            '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>' +
                            '<label style="margin-left:8%;font-weight:bold;">x' + value['count'] + '</label>' +
                            '</td>' +
                            '</tr>' +
                            '</table>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#orderlist").append(isi);
                    });
                    /* {{v4_base_url_depot}}/orderRequest/export/depot */
                    /* dtexportdepot = {
                        "DO_DATE": "",
                        "COMPANY_ID": "",
                        "CARGO_OWNER_ID": "",
                        "DO_NO": "",
                        "DO_EXP_DATE": "",
                        "INT_REF_NO": "",
                        "STATUS_CODE": "",
                        "DEPOT_ID": "",
                        "SHIPPING_ID": "",
                        "SHIPPING_NAME": "",
                        "CONTAINER_GRADE": "",
                        "CONTAINER_LIST": [
                            {
                                "CONTAINER_TYPE_ID": "",
                                "CONTAINER_TYPE": "",
                                "CONTAINER_SIZE_ID": "",
                                "CONTAINER_SIZE": "",
                                "QTY": "",
                            }
                        ],
                        "TOTAL_QTY": "",
                        "DO_FILE_NAME": "",
                        "DO_FILE_ENCODE": "",
                        "CUSTOMS_REQ_DOC_FILE_NAME": "",
                        "CUSTOMS_REQ_DOC_FILE_ENCODE": "",
                        "CUSTOMS_RES_DOC_FILE_NAME": "",
                        "CUSTOMS_RES_DOC_FILE_ENCODE": ""
                    }; */
                    /* select all */
                    $("#checkall").change(function () {
                        $(".checkitem").prop("checked", $(this).prop("checked"));
                        if ($(this).prop("checked") == false) {
                            itemcheck = 0;
                        } else {
                            var numItems = $('.checkitem').length
                            itemcheck = numItems;
                        }
                    });
                    $(".checkitem").change(function () {
                        if ($(this).prop("checked") == false) {
                            $("#checkall").prop("checked", false);
                            itemcheck--;
                        } else {
                            itemcheck++;
                        }
                        if ($(".checkitem:checked").length == $(".checkitem").length) {
                            $("#checkall").prop("checked", true)
                        }
                    });
                    break;

                default:
                    break;
            }
        }
    });
}
var checkItem = function () {
    console.log("itemcheck");
    console.log(itemcheck);
    if (itemcheck > 0) {
        bookModal = document.getElementById('bookModal');
        var bmodal = bootstrap.Modal.getOrCreateInstance(bookModal);
        bmodal.show();
    } else {
        noitemModal = document.getElementById('noitemModal');
        var nimodal = bootstrap.Modal.getOrCreateInstance(noitemModal);
        nimodal.show();
    }
}

var bookingNow = function () {
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("do_companyid", $("#company_id").val());
    dataf.append("do_no", $(".donumber").val());
    dataf.append("do_intrefno", $(".dointrefnumber").val());
    dataf.append("do_date", $(".dodate").val());
    dataf.append("npwp", $("#selnpwp option:selected").text());
    dataf.append("idnpwp", $("#selnpwp option:selected").val());
    var depo = $('#depotId').select2('data');
    dataf.append("do_depot", depo[0].id);
    dataf.append("depot", depo[0].text);
    var sl = $('.shippingline').select2('data');
    dataf.append("do_shippingid", sl[0].id);
    dataf.append("do_shippingline", sl[0].text);
    dataf.append("do_grade", $("#grade option:selected").text());
    dataf.append("do_container", JSON.stringify(dtarray));
    dataf.append("do_qty", Object.keys(dtarray).length);
    var file_data = $('#file')[0].files;
    for (var i = 0; i < file_data.length; i++) {
        dataf.append("img", file_data[i]);
    }
    /* console.log("dataf");
    console.log(depo);
    console.log(sl);
    console.log(...dataf); */
    $.ajax({
        type: "POST",
        url: base_url + "order-edepot",
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