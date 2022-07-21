/* E-Depot Start */
var containercount = 0;
var boxcount = 0;
var dtarray = {};
var noitemModal = document.getElementById('noitemModal');
var bookModal = document.getElementById('bookModal');
var viewModal = document.getElementById('viewModal');
var addModal = document.getElementById('addModal');
var editModal = document.getElementById('editModal');
var deleteModal = document.getElementById('deleteModal');
var boxModal = document.getElementById('boxModal');
var datajson = null;
var dtindex = 0;
var idedit = 0;
var iddel = 0;
var dtexportdepot = {};
var itemcheck = 0;
/* E-Depot End */

$(function () {
    $('#import-port').val('');
    $('#import-depot').val('');
});
function serviceRadio(id) {
    if (!$("input[id=formRadiosExport]").is(":checked")) {
        $("#v4-service-export").fadeOut(300);
        $("#v4-service-import").fadeIn(300);
    } else {
        $("#v4-service-export").fadeIn(300);
        $("#v4-service-import").fadeOut(300);
    }
}

function getOrder(id, label, val = 1) {
    if (id == "export-depot" || id == "export-port") {
        if (id == "export-depot") {
            $("#btn-export-port").fadeOut(300);
        }
        if (id == "export-port") {
            $("#btn-export-depot").fadeOut(300);
        }
        var html = '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">' + label + '</a>';
        html += '<a href="javascript:void(0)" onclick="closeOrder(\'' + id + '\',\'' + label + '\',\'' + val + '\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
        html += '<i class="mdi mdi-close"></i>';
        html += '<input type="hidden" name="' + id + '" id="' + id + '" value="yes" readonly>';
        html += '</a>';
        $('#btn-' + id).html(html);
    } else if (id == "import-depot" || id == "import-port") {
        if (id == "import-depot") {
            let importPort = $('#import-port').val();
            if (importPort == "yes") {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-port">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Port</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-port\',\'E-Port\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                //html += '<p id="add-service" class="mt-3" style="font-size:12px;display:none">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-depot">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Depot</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-depot\',\'E-Depot\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '</div>';
                $('#import-depot').val('yes');
                $('#btn-import-port-depot').html(html);
            } else {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-port">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Depot</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-depot\',\'E-Depot\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-port">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-port\',\'E-Port\'); return false;">E-Port</a>';
                html += '</div>';
                html += '</div>';
                $('#import-depot').val('yes');
                $('#btn-import-port-depot').html(html);
            }
        }
        if (id == "import-port") {
            let importDepot = $('#import-depot').val();
            if (importDepot == "yes") {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-port">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Port</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-port\',\'E-Port\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-depot">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Depot</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-depot\',\'E-Depot\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '</div>';
                $('#import-port').val('yes');
                $('#btn-import-port-depot').html(html);
            } else {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-port">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Port</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-port\',\'E-Port\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-depot">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-depot\',\'E-Depot\'); return false;">E-Depot</a>';
                html += '</div>';
                html += '</div>';
                $('#import-port').val('yes');
                $('#btn-import-port-depot').html(html);
            }
        }

    }

    var url = site_url + 'order-request/' + id;
    $(".v4-loading").show();
    $.post(url, { 'csrf_v4kalibaru': $('meta[name="csrf_v4kalibaru"]').attr('content'), post: id },
        function (data) {
            var dthtml = data.return.html + data.return.modal;
            $('#divRequest').html(dthtml);
            $(".v4-loading").hide();
            itemcheck = 0;
            containercount = 0;
            boxcount = 0;
            dtarray = {};
            if (id == "export-depot") {
                initEDepot();
            } else if (id == "import-depot") {
                initIDepot();
            }
            initOnbehalf();
            //}
            $('.select2').select2({ width: '50%' });
        }, "json");
}

function closeOrder(id, label, val) {
    if (id == "export-depot" || id == "export-port") {
        if (id == "export-depot") {
            $("#btn-export-port").fadeIn(300);
        }
        if (id == "export-port") {
            $("#btn-export-depot").fadeIn(300);
        }
        var html = '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'' + id + '\',\'' + label + '\',\'' + val + '\'); return false;">' + label + '</a>';
        $('#btn-' + id).html(html);

    } else if (id == "import-depot" || id == "import-port") {
        if (id == "import-depot") {
            let importPort = $('#import-port').val();
            if (importPort == "yes") {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-depot">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Port</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-port\',\'E-Port\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-depot">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-depot\',\'E-Depot\'); return false;">E-Depot</a>';
                html += '</div>';
                html += '</div>';
                $('#import-depot').val('');
                $('#btn-import-port-depot').html(html);
            } else {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-port">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-port\',\'E-Port\'); return false;">E-Port</a>';
                html += '</div>';
                //html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-depot">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-depot\',\'E-Depot\'); return false;">E-Depot</a>';
                html += '</div>';
                html += '</div>';
                $('#import-port').val('');
                $('#import-depot').val('');
                $('#btn-import-port-depot').html(html);
            }
        }
        if (id == "import-port") {
            let importDepot = $('#import-depot').val();
            if (importDepot == "yes") {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mb-2" id="btn-import-depot">';
                html += '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">E-Depot</a>';
                html += '<a href="javascript:void(0)" onclick="closeOrder(\'import-depot\',\'E-Depot\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
                html += '<i class="mdi mdi-close"></i>';
                html += '</a>';
                html += '</div>';
                html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-port">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-port\',\'E-Port\'); return false;">E-Port</a>';
                html += '</div>';
                html += '</div>';
                $('#import-port').val('');
                $('#btn-import-port-depot').html(html);
            } else {
                var html = '<div id="btn-import-port-depot">';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-port">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-port\',\'E-Port\'); return false;">E-Port</a>';
                html += '</div>';
                //html += '<p id="add-service" class="mt-3" style="font-size:12px">Available Service to Add</p>';
                html += '<div class="btn-group dropup w-100 mt-2" id="btn-import-depot">';
                html += '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\'import-depot\',\'E-Depot\'); return false;">E-Depot</a>';
                html += '</div>';
                html += '</div>';
                $('#import-port').val('');
                $('#import-depot').val('');
                $('#btn-import-port-depot').html(html);
            }
        }
    }
}

function selectDepo(id) {
    if (id != "") {
        $('#accordionExample1').fadeIn(300);
        $('#accordionExample').fadeIn(300);
        /* $('#basic-pills-wizard').fadeIn(300); */
    } else {
        $('#accordionExample1').fadeOut(300);
        $('#accordionExample').fadeOut(300);
        /* $('#basic-pills-wizard').fadeOut(300); */
    }
    $('.shippingline').select2({ width: '100%' });
}

function ChangeText(oFileInput, sTargetID) {
    document.getElementById(sTargetID).value = oFileInput.value;
}

function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() *
            charactersLength));
    }
    return result;
}