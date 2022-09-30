
var initOnbehalf = function () {
    viewModal = document.getElementById('viewModal');
    addModal = document.getElementById('addModal');
    editModal = document.getElementById('editModal');
    deleteModal = document.getElementById('deleteModal');
    addModal.addEventListener('hide.bs.modal', function (event) {
        var vmodal = bootstrap.Modal.getOrCreateInstance(viewModal)
        vmodal.show();
    });
    editModal.addEventListener('hide.bs.modal', function (event) {
        var vmodal = bootstrap.Modal.getOrCreateInstance(viewModal)
        vmodal.show();
    });
    deleteModal.addEventListener('hide.bs.modal', function (event) {
        var vmodal = bootstrap.Modal.getOrCreateInstance(viewModal)
        vmodal.show();
    });
    addModal.addEventListener('shown.bs.modal', function (event) {
        $(".nameCustomer").val("");
        $(".numberCustomer").val("");
        $("#uploadDocument").val("");
        $("#file2").val("");
        $(".province").val("");
        $(".city").val("");
        $(".district").val("");
        $(".area").val("");
        $(".address").val("");
        $(".postalCode").val("");
    });
    editModal.addEventListener('shown.bs.modal', function (event) {
        $('.editbtn').prop('disabled', true);
        $(".idonbehalf").val(idedit);
        $(".enamaCustomer").val(datajson[dtindex].ONBEHALF_NAME);
        $(".enumberCustomer").val(datajson[dtindex].ONBEHALF_NPWP);
        $("#uploadDocument2").val(datajson[dtindex].ONBEHALF_NPWP_FILE);
        setTimeout(() => {
            $(".eprovince").val(datajson[dtindex].PROVINCE_ID).change();
        }, 1000);
        setTimeout(() => {
            $(".ecity").val(datajson[dtindex].CITY_ID).change();
        }, 2000);
        setTimeout(() => {
            $(".edistrict").val(datajson[dtindex].DISTRICT_ID).change();
        }, 3000);
        setTimeout(() => {
            $(".earea").val(datajson[dtindex].AREA_ID).change();
            $('.editbtn').prop('disabled', false);
        }, 4000);
        $(".address").val(datajson[dtindex].ONBEHALF_ADDRESS);
        $(".postalCode").val(datajson[dtindex].POSTAL_CODE);
    });
    deleteModal.addEventListener('shown.bs.modal', function (event) {
        $("#formDeleteOnbehalf").attr("data-id", iddel);
    });
    viewModal.addEventListener('shown.bs.modal', function (event) {
        var urlget = $("#tbl-onbehalf").data("url");
        $("#tbl-onbehalf tbody").html("");
        $.ajax({
            url: urlget,
            type: 'get',
            data: {},
            success: function (json) {
                datajson = json;
                var content = '';
                for (var i = 0; i < json.length; i++) {
                    content += '<tr id="' + json[i].ONBEHALF_ID + '">';
                    content += '<td>' + json[i].ONBEHALF_NPWP + '</td>';
                    content += '<td>' + json[i].ONBEHALF_NAME + '</td>';
                    content += '<td style="width:25%; padding-right:5%;">' + json[i].ONBEHALF_ADDRESS + '</td>';
                    content += '<td style="margin-left:5px;"><a href="' + json[i].ONBEHALF_NPWP_FILE + '">' + json[i].ONBEHALF_NAME + '</a></td>';
                    content += '<td>' + json[i].ACTION + '</td>';
                    content += '</tr>';
                }
                $("#tbl-onbehalf tbody").html(content);
                $(document).on("click", ".choosenpwp", function () {
                    var id = $(this).data('index');
                    dtindex = id;
                    $("#selnpwp").html("");
                    $("#selnpwp").append('<option value="' + datajson[dtindex].ONBEHALF_ID + '" selected>' + datajson[dtindex].ONBEHALF_NPWP + ' - ' + datajson[dtindex].ONBEHALF_NAME + '</option>');
                    $("#npwpcust").val(datajson[dtindex].ONBEHALF_NPWP);
                    $("#namecust").val(datajson[dtindex].ONBEHALF_NAME);
                });
                $(document).on("click", ".editOnbehalf", function () {
                    var id = $(this).data('index');
                    $("#formEditOnbehalf").attr("data-id", id);
                    dtindex = id;
                    idedit = datajson[dtindex].ONBEHALF_ID;
                    $(".eprovince").val("");
                    $(".ecity").val("");
                    $(".edistrict").val("");
                    $(".earea").val("");
                });

                $(document).on("click", ".delOnbehalf", function () {
                    var id = $(this).data('id');
                    $("#formDeleteOnbehalf").attr("data-id", id);
                    iddel = id;
                });

            }
        });
    });

}

var onbehalfChangeLoc = function (urlc, val, child) {
    $.ajax({
        type: "GET",
        url: urlc + "/" + val,
        dataType: "json",
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function (data) {

            if (child == ".city") {
                $(".city").html("");
                $(".city").append('<option value="" selected disabled>Select City</option>');
            }
            if (child == ".city" || child == ".district") {
                $(".district").html("");
                $(".district").append('<option value="" selected disabled>Select District</option>');
            }
            if (child == ".city" || child == ".district" || child == ".area") {
                $(".area").html("");
                $(".area").append('<option value="" selected disabled>Select Area</option>');
            }
            $.each(data, function (key, input) {

                if (child == ".city") {
                    $(".city").append('<option value="' + input.CITY_ID + '">' + input.CITY_NAME + '</option>');
                } else if (child == ".district") {
                    $(".district").append('<option value="' + input.DISTRICT_ID + '">' + input.DISTRICT_NAME + '</option>');
                } else if (child == ".area") {
                    $(".area").append('<option value="' + input.AREA_ID + '">' + input.AREA_NAME + '</option>');
                }
            });
        },
        error: function (data, status, e) {


        }
    });
}

var actOnbehalf = function (wrapper, act) {
    let $this = $(wrapper);
    var validasi = $this.valid();
    if (validasi == true) {
        var idonbehalf = $(".idonbehalf").val();
        var selnpwp = $("#selnpwp").val();

        var dataf = new FormData();
        $formSerialize = $this.serializeArray();
        $formSerialize.push({ name: "csrf_v4kalibaru", value: $('meta[name="csrf_v4kalibaru"]').attr('content') });
        $.each($formSerialize, function (key, input) {
            dataf.append(input.name, input.value);
        });
        var file_data = $('#file2')[0].files;
        for (var i = 0; i < file_data.length; i++) {
            dataf.append("img", file_data[i]);
        }
        $.ajax({
            type: "POST",
            url: $this.attr('action'),
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
                if (act == "add") {
                    var amodal = bootstrap.Modal.getOrCreateInstance(addModal)
                    amodal.hide();
                } else if (act == "edit") {
                    if (idonbehalf == selnpwp) {
                        var namaCustomer = $(".enamaCustomer").val();
                        var numberCustomer = $(".enumberCustomer").val();
                        $("#selnpwp").html("");
                        $("#selnpwp").append('<option value="' + selnpwp + '" selected>' + numberCustomer + ' - ' + namaCustomer + '</option>');

                    }
                    var emodal = bootstrap.Modal.getOrCreateInstance(editModal)
                    emodal.hide();
                }
                var vmodal = bootstrap.Modal.getOrCreateInstance(viewModal)
                vmodal.show();
            },
            error: function (data, status, e) {


            }
        });
    }
    return false;

}

var delOnbehalf = function (wrapper) {
    let $this = $(wrapper);
    var id = iddel;
    var selnpwp = $("#selnpwp").val();

    var dataf = new FormData();
    dataf.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
    dataf.append("id", id);
    $.ajax({
        type: "POST",
        url: $this.attr('action'),
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
            if (selnpwp == id) {
                $("#selnpwp").html("");
                $("#selnpwp").append('<option value="" selected disabled>Select NPWP</option>');
            }
            var dmodal = bootstrap.Modal.getOrCreateInstance(deleteModal)
            dmodal.hide();
            var vmodal = bootstrap.Modal.getOrCreateInstance(viewModal)
            vmodal.show();
        },
        error: function (data, status, e) {


        }
    });

    return false;

}

/* var searchData = function (cari) {

    $.each(datajson, function (i, v) {
        if (cari.length > 0) {
            $("#" + v.ONBEHALF_ID).hide();
        } else {
            $("#" + v.ONBEHALF_ID).show();
        }
        if (v.ONBEHALF_NPWP.toLowerCase().indexOf(cari.toLowerCase()) >= 0) {
            $("#" + v.ONBEHALF_ID).show();
        }
        if (v.ONBEHALF_NAME.toLowerCase().indexOf(cari.toLowerCase()) >= 0) {
            $("#" + v.ONBEHALF_ID).show();
        }
        if (v.ONBEHALF_ADDRESS.toLowerCase().indexOf(cari.toLowerCase()) >= 0) {
            $("#" + v.ONBEHALF_ID).show();
        }
    });

} */