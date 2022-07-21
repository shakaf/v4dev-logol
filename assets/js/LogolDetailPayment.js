var myVar;

function myFunction() {
    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("om_header_id", $("#om_header_id").val());
    $.ajax({
        type: "POST",
        url: base_url + "load-billing",
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
                    /* console.log("data");
                    console.log(dtpay); */
                    var dtpay = data.data.collection;
                    $("#dtpayment").html("");
                    var detail = dtpay.DETAIL;
                    if (dtpay.DETAIL) {
                        var subto = [];
                        for (let ind = 0; ind < detail.length; ind++) {
                            var qty = "";
                            if (detail[ind].QUANTITY != "") {
                                qty = detail[ind].QUANTITY + "x ";
                            }
                            var isip = '<div class="row">' +
                                '<div class="col-md-8">' +
                                '<p class="t-desc">' + detail[ind].DESCRIPTION + '</p>' +
                                '<p class="t-desc description" style="line-height:2px;">' + qty + detail[ind].DESTINATION_NAME + '</p>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                '<p class="t-desc text-end">Rp ' + thousandSep(detail[ind].TOTAL) + '</p>' +
                                '</div>' +
                                '</div>';
                            subto.push(parseInt(detail[ind].TOTAL));
                            $("#dtpayment").append(isip);
                        }
                        if (detail.length > 0) {
                            var subsubt = subto.reduce(function (acc, val) { return acc + val; }, 0);
                            var subt = '<div class="row mt-3">' +
                                '<div class="col-md-8 col-sm-8">' +
                                '<p class="t-desc">Sub-Total</p>' +
                                '</div>' +
                                '<div class="col-md-4 col-sm-4">' +
                                '<p class="t-desc text-end">Rp ' + thousandSep(subsubt) + '</p>' +
                                '</div>' +
                                '</div><hr/>';
                            $("#dtpayment").append(subt);
                            var pph23 = '<div class="row mt-2">' +
                                '<div class="col-md-8 col-sm-8">' +
                                '<p class="t-desc">PPh23</p>' +
                                '</div>' +
                                '<div class="col-md-4 col-sm-4">' +
                                '<p class="t-desc text-end">Rp ' + thousandSep(dtpay.TAX_VALUE) + '</p>' +
                                '</div>' +
                                '</div>';
                            $("#dtpayment").append(pph23);
                            var ppn = '<div class="row mt-2">' +
                                '<div class="col-md-8 col-sm-8">' +
                                '<p class="t-desc">PPN ' + dtpay.TAX + '</p>' +
                                '</div>' +
                                '<div class="col-md-4 col-sm-4">' +
                                '<p class="t-desc text-end">Rp ' + thousandSep(dtpay.BASIC_TAX) + '</p>' +
                                '</div>' +
                                '</div>';
                            $("#dtpayment").append(ppn);
                            var total = subsubt + dtpay.TAX_VALUE + dtpay.BASIC_TAX;
                            var totaltxt = '<div class="row mt-3">' +
                                '<div class="col-md-8 col-sm-8">' +
                                '<p class="t-desc" style="font-size: 14px; font-weight:700">Total Amount</p>' +
                                '</div>' +
                                '<div class="col-md-4 col-sm-4">' +
                                '<p class="t-desc text-end" style="font-size: 14px; color: #044795; font-weight:700">Rp ' + thousandSep(total) + '</p>' +
                                '</div>' +
                                '</div>';
                            $("#dtpayment").append(totaltxt);
                            /* console.log("aa<?php echo $this->session->userdata('total'); ?>"); */
                        }
                        myVar = setTimeout(showPage, 3000);
                    }
                } else {
                    $("#dtpayment").html(data.data);

                }
            } else {
                $("#dtpayment").html(data.data);
            }

        },
        error: function (data, status, e) {
            $("#dtpayment").html(data.data);
        }
    });

}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}

function thousandSep(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ".");
}
    /* setTimeout(function() {
//After you load data
document.querySelector('#loader').className += ' ' + 'hide';
document.getElementById("myDiv").style.display = "show";
}, 3000) */