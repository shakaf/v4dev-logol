<style>
    .btn-outline-primary {
        background-color: white;
        border: none;
        color: #8C8CA1;
    }

    .btn-outline-info {
        background-color: white;
        border: none;
        color: #8C8CA1;
    }

    .btn-check:active+.btn-outline-primary,
    .btn-check:checked+.btn-outline-primary,
    .btn-outline-primary.active,
    .btn-outline-primary.dropdown-toggle.show,
    .btn-outline-primary:active {
        color: #0D51F1;
        background-color: #E7EEFE;

        border-bottom: 4px solid #0D51F1;
    }

    table.classtable>thead>tr>th {
        border-bottom: 2px solid #F2F2F2;
    }

    .titles {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 0.02em;
        color: #0E0E2C;
    }
</style>
<div class="v4-loading"></div>
<div class="page-content" style="background-color: #F8F8F9; ">
    <div class="row">
        <ol class="breadcrumb mt-4" style="margin-left:-10px;">
            <li class="breadcrumb-item"><a href="javascript: void(0);" style="color:#497DF5;">Master Document List</a></li>
            <li class="breadcrumb-item">Master Document Detail</li>
        </ol>
    </div>
    <div class="row">
        <div class="d-flex flex-wrap" style="margin-left:-10px">
            <span style="cursor:pointer" onclick="history.back()">
                <svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
            <h4 style="font-size: 16px;margin-left:10px">LG/2191019/021</h4>
        </div>
    </div>
    <div class="row">
        <div class="card mt-4">
            <h2 class="accordion-header" id="headingOne2">
                <button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title">General Info</h4>
                            <p class="description">Requirement data that can be used on all services.</p>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="collapseOne2" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="">Type of Order</label>
                            <p class="titles">Export</p>
                        </div>
                        <div class="col-md-3">
                            <label class="">DO Number</label>
                            <p class="titles">DO_11233RBG_22</p>
                        </div>
                        <div class="col-md-3">
                            <label class="">Order ID</label>
                            <p class="titles">DO_11233RBG_22</p>
                        </div>
                        <div class="col-md-3">
                            <label class="">Internal Ref. Number</label>
                            <p class="titles">MRS123456</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="navbar mt-4" style="margin-left:-10px;">
            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" value="invoice" name="btnradio" id="invoice" autocomplete="off" onclick="getContent(this.value); return false;">
                <label class="btn btn-outline-primary btn-list" id="act-invoice" for="invoice">Invoice</label>
                &nbsp; &nbsp;
                <input type="radio" class="btn-check" value="etrucking" name="btnradio" id="etrucking" autocomplete="off" onclick="getContent(this.value); return false;">
                <label class="btn btn-outline-primary btn-list" id="act-etrucking" for="etrucking">E-Trucking</label>
                &nbsp; &nbsp;
                <input type="radio" class="btn-check" value="eport" name="btnradio" id="eport" autocomplete="off" onclick="getContent(this.value); return false;">
                <label class="btn btn-outline-primary btn-list" id="act-eport" for="eport">E-Port</label>
                &nbsp; &nbsp;
                <input type="radio" class="btn-check" value="edepot" name="btnradio" id="edepot" autocomplete="off" onclick="getContent(this.value); return false;">
                <label class="btn btn-outline-primary btn-list" id="act-edepot" for="edepot">E-Depot</label>
                &nbsp; &nbsp;
                <input type="radio" class="btn-check" value="suport" name="btnradio" id="suport" autocomplete="off" onclick="getContent(this.value); return false;">
                <label class="btn btn-outline-primary btn-list" id="act-suport" for="suport">Suporting Docs</label>
            </div>
        </div>
    </div>
    <div id="listDocument">&nbsp;</div>
</div>
<script>
    $(function() {
        getContent('all');
    });

    function getContent(id) {
        var url = site_url + 'document-list/' + id;
        $(".v4-loading").show();
        $.post(url, {
                'csrf_v4kalibaru': $('meta[name="csrf_v4kalibaru"]').attr('content'),
                post: id
            },
            function(data) {
                $('.btn-list').removeClass('active');
                $('#act-' + id).addClass('active');
                $('#listDocument').html(data.return.html);
                $(".v4-loading").hide();
            }, "json");
    }
</script>