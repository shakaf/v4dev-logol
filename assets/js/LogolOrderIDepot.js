function backtoZeroI() {
    $('#importdepot-wizard').bootstrapWizard('show', 0);
}

function addCont() {
    var $validatorb = $("#formlistC").validate();
    var $validb = $("#formlistC").valid();
    if (!$validb) {
        $validatorb.focusInvalid();
        return false;
    }
    var id = makeid(5);
    $('#list-cont').append('<div class="row dtbox" id="boxc' + id + '" style="margin-top:20px;">\
        <div class="col-md-4 col-sm-4">\
            <select name="type'+ id + '" class="form-control" required>\
                <option value="" selected disabled>Choose type</option>\
                <option value="GP">General Purpose</option>\
                <option value="HC">High Cube</option>\
                <option value="RE">Reefer</option>\
                <option value="RH">Reefer High</option>\
            </select>\
        </div>\
        <div class="col-md-3 col-sm-3">\
            <select name="size'+ id + '" class="form-select" required>\
                <option value="" selected disabled>Choose Size</option>\
                <option value="20">20 Feet</option>\
                <option value="40">40 Feet</option>\
                <option value="45">45 Feet</option>\
            </select>\
        </div>\
        <div class="col-md-4 col-sm-4">\
            <input name="number'+ id + '" type="text" placeholder="Cont. Number" class="form-control" required />\
        </div>\
        <div class="col-md-1 col-sm-1">\
            <a href="javascript:;" onclick="removeBoxCont(\''+ id + '\')">\
                <svg style="margin-top:8px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">\
                    <path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20V20ZM7 11H17V13H7V11Z" fill="#8C8CA2"/>\
                </svg>\
            </a>\
        </div >\
    </div > ');
}

function SaveNewCont() {
    dtarray = {};
    var dtbox = $('.dtbox').length;
    /* var ida = makeid(5);
    dtarray[ida] = { id: selboxv, height: split[0].trim(), type: split[1].trim(), count: cx }; */
    var $validatorb = $("#formlistC").validate();
    var $validb = $("#formlistC").valid();
    if (!$validb) {
        $validatorb.focusInvalid();
        return false;
    }
    boxModal = document.getElementById('boxModal');
    var bmodal = bootstrap.Modal.getOrCreateInstance(boxModal);
    bmodal.hide();
    $('#list-contDetil').html('<div class="col-lg-4">\
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-conter">\
            <div class="card" style="border: 2px dashed #C2D4FC;box-sizing: border-box;">\
                <div class="card-body" align="center">\
                    <label style="margin:0 auto;padding:15% 0">Add Container\
                        <span>\
                            <svg width="25" height="24" style="margin-top:7px;" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">\
                                <path d="M11.0001 6.89941H3.14014V18.8994H19.9401V12.75" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M6.14453 10.9004L6.14453 14.9004" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M9.72119 10.8994L9.72119 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M13.2979 10.8994L13.2979 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M16.875 13.124L16.875 14.8997" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M17.78 10.9798C20.1658 10.9798 22.1 9.04571 22.1 6.65984C22.1 4.27397 20.1658 2.33984 17.78 2.33984C15.3941 2.33984 13.46 4.27397 13.46 6.65984C13.46 9.04571 15.3941 10.9798 17.78 10.9798Z" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M16.3398 6.65918H19.2198" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                                <path d="M17.7798 5.21973V8.09973" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />\
                            </svg>\
                        </span>\
                    </label>\
                </div>\
            </div>\
        </a>\
    </div>');
    containercount = 0;
    $(".dtbox").each(function () {

        //for (let index = 0; index < dtbox; index++) {
        containercount++;
        var id = $(this).attr('id');//makeid(5);
        var rid = id.replace(/boxc/g, '');
        var type = $('select[name="type' + rid + '"] option:selected').text();
        var size = $('select[name="size' + rid + '"] option:selected').val();
        var sizet = $('select[name="size' + rid + '"] option:selected').text();
        var number = $('input[name="number' + rid + '"]').val();
        dtarray[id] = { id: rid, height: sizet, type: type, count: number };
        /* console.log("dt");
        data-bs-dismiss="alert" aria-label="Close"
        console.log(id);
        console.log(rid);
        console.log(type);
        console.log(size);
        console.log(number); */
        var img = "";
        if (size == 20) {
            img = base_url + 'assets/images/icon/cont-20-dv.png';
        } else if (size == 40) {
            img = base_url + 'assets/images/icon/cont-40-dv.png';
        } else {
            img = base_url + 'assets/images/icon/cont-40-hc.png';
        }
        $('#list-contDetil').append('<div class="col-lg-4" id="contDetil' + id + '">\
            <div class="card">\
                <div class="alert-dismissible fade show">\
                    <button type="button" class="btn-close" onclick="removeContainer(\''+ id + '\')"></button>\
                </div>\
                <div class="card-body">\
                    <table>\
                        <tr>\
                            <td rowspan="3"><img src="'+ img + '" /></td>\
                            <td style="width: 100 %; ">\
                                <label style="font - weight: 500; font - size: 14px; color: #002985; margin - left: 14px; ">'+ number + '</label>\
                            </td>\
                        </tr>\
                        <tr>\
                            <td>\
                                <label style="margin - left: 8 %; font - weight: 700; font - size: 14px; color: #0E0E2C; ">'+ size + ' Feet</label>\
                            </td>\
                        </tr>\
                        <tr>\
                            <td>\
                                <div style=" cursor: pointer; text - align: left; vertical - align: middle; margin - left: 1em">\
                                    <p style="font - weight: 400; font - size: 10px; color: #8C8CA2; ">'+ type + '</p>\
                                </div>\
                            </td>\
                        </tr>\
                    </table>\
                </div>\
            </div>\
        </div>');
    });

    $("#total").html(containercount);
}

function toggleb(event) {
    var valid = $("#formB").valid();
    if (valid == true) {
        $("#done").show();
        var myCollapse = document.getElementsByClassName('collapse')[0];
        var bsCollapse = new bootstrap.Collapse(myCollapse, {
            toggle: true
        });
    }
}

function nextStepsb() {
    var valid = $("#formB").valid();
    if (valid == true) {
        $("#done").show();

    } else {

    }
}

function removeContainer(id) {
    containercount--;
    if (id != "boxc1") {
        var elementb = document.getElementById(id);
        if (elementb !== null) {
            elementb.remove();
        }
    } else {
        $("#type1").val("").change();
        $("#size1").val("").change();
        $("#number1").val("");
    }
    var element = document.getElementById("contDetil" + id);
    if (element !== null) {
        element.remove();
    }
    $("#total").html(containercount);
}

function removeBoxCont(id) {
    containercount--;
    var element = document.getElementById("boxc" + id);
    if (element !== null) {
        element.remove();
    }
    var elementb = document.getElementById("contDetilboxc" + id);
    if (elementb !== null) {
        elementb.remove();
        $("#total").html(containercount);
    }
}

var initIDepot = function () {
    var $validatorb = $("#formB").validate();
    $('#importdepot-wizard').bootstrapWizard({
        onNext: function (tab, navigation, index) {
            switch (index) {
                case 0:

                    break;
                case 1:
                    var $validb = $("#formB").valid();
                    if (!$validb) {
                        $validatorb.focusInvalid();
                        return false;
                    }
                    if (containercount == 0) {
                        return false;
                    }
                    $(".gi-npwpi").html($("#selnpwp option:selected").text());
                    $(".gi-donumberi").html($(".donumberi").val());
                    let yourDate = new Date();
                    var tglnow = yourDate.toISOString().split('T')[0];
                    $(".gi-dodatei").html(tglnow);
                    $(".gi-irni").html($(".dointrefnumberi").val());
                    var depo = $('#depotIdi').select2('data');
                    $(".gi-depoi").html(depo[0].text);
                    var sl = $('.shippingline').select2('data');
                    $(".gi-shippinglinei").html(sl[0].text);
                    $(".gi-gidate").html($(".gatein_date").val());
                    var doatt = $("#uploadDocumentatt").val();
                    var sppb = $("#uploadDocument2sbb").val();
                    $(".gi-doattachi").html('<a href="' + doatt + '">DOAttachment.pdf</a>');
                    $(".gi-sppb").html('<a href="' + sppb + '">SPPBattachment.pdf</a>');
                    $("#orderlisti").html('');
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
                            '<label style="margin-left:8%;font-weight:bold;">' + value['count'] + '</label>' +
                            '</td>' +
                            '</tr>' +
                            '</table>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $("#orderlisti").append(isi);
                    });
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
                default:
                    break;
            }
        }
    });
}

var checkItemI = function () {
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

var bookingNowi = function () {
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("do_companyid", $("#company_id").val());
    dataf.append("do_no", $(".donumberi").val());
    dataf.append("do_intrefno", $(".dointrefnumberi").val());
    dataf.append("do_date", $(".dodatei").val());
    dataf.append("npwp", $("#selnpwp option:selected").text());
    dataf.append("idnpwp", $("#selnpwp option:selected").val());
    var depo = $('#depotIdi').select2('data');
    dataf.append("do_depot", depo[0].id);
    dataf.append("depot", depo[0].text);
    var sl = $('.shippingline').select2('data');
    dataf.append("do_shippingid", sl[0].id);
    dataf.append("do_shippingline", sl[0].text);
    /* dataf.append("do_grade", $("#grade option:selected").text()); */
    dataf.append("do_container", JSON.stringify(dtarray));
    dataf.append("do_qty", Object.keys(dtarray).length);
    var file_data = $('#file1')[0].files;
    for (var i = 0; i < file_data.length; i++) {
        dataf.append("img", file_data[i]);
    }
    var file_data2 = $('#file2sbb')[0].files;
    for (var i = 0; i < file_data2.length; i++) {
        dataf.append("img2", file_data2[i]);
    }
    console.log("dataf");
    console.log(depo);
    console.log(sl);
    console.log(...dataf);
    $.ajax({
        type: "POST",
        url: base_url + "order-idepot",
        data: dataf,
        cache: false,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function () {
            console.log("beforeSend");
        },
        complete: function () {
            console.log("complete");
        },
        success: function (data) {
            console.log("success");
            console.log(data);
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
            console.log("error");
            console.log(data);
            console.log(status);
            console.log(e);


        }
    });
}