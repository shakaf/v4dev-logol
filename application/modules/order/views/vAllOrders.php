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
</style>
<style>
	.a-btn {
		font-size: 9px;
		padding-left: 40px;
		padding-right: 40px;

		padding-top: 10px;
		padding-bottom: 10px;

		border-radius: 21px;
		margin-bottom: 2em;
		background: #ECF1F4;
		color: #002985;
	}

	.description {
		font-family: Inter;
		font-size: 11px;
		font-style: normal;
		font-weight: 500;
		letter-spacing: 0.02em;
		color: #8C8CA2;
	}

	.active {
		background: #002985;
		color: white;
	}
</style>
<div class="v4-loading"></div>
<div class="page-content" style="background-color: #F8F8F9; ">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar">
                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" value="all" name="btnradio" id="all" autocomplete="off" onclick="getContent(this.value,1,10); return false;">
                    <label class="btn btn-outline-primary btn-list" id="act-all" for="all">All Order</label>
                    &nbsp; &nbsp;
                    <input type="radio" class="btn-check" value="draft" name="btnradio" id="draft" autocomplete="off" onclick="getContent(this.value,1,10); return false;">
                    <label class="btn btn-outline-primary btn-list" id="act-draft" for="draft">Draft</label>
                    &nbsp; &nbsp;
                    <input type="radio" class="btn-check" value="payment" name="btnradio" id="payment" autocomplete="off" onclick="getContent(this.value,1,10); return false;">
                    <label class="btn btn-outline-primary btn-list" id="act-payment" for="payment">Waiting Payment</label>
                    &nbsp; &nbsp;
                    <input type="radio" class="btn-check" value="progress" name="btnradio" id="progress" autocomplete="off" onclick="getContent(this.value,1,10); return false;">
                    <label class="btn btn-outline-primary btn-list" id="act-progress" for="progress">In Progress</label>
                    &nbsp; &nbsp;
                    <input type="radio" class="btn-check" value="issue" name="btnradio" id="issue" autocomplete="off" onclick="getContent(this.value,1,10); return false;">
                    <label class="btn btn-outline-primary btn-list" id="act-issue" for="issue">Order Issue</label>
                </div>
                <a href="<?php echo site_url('create-order'); ?>">
                    <img src="<?php echo base_url('assets/images/create_order.png'); ?>">
                </a>
            </div>
        </div>
        <div id="listOrder">&nbsp;</div>
    </div>
</div>
<script>
    $(function() {
        getContent('all',1,10);
        //getContent('draft');
    });

    function getContent(id,page,size) {
        var url = site_url + 'order-list/' + id;
        $(".v4-loading").show();

        $.post(url, {
                'csrf_v4kalibaru': $('meta[name="csrf_v4kalibaru"]').attr('content'),
                post: id,
                page:page,
                size:size
            },
            function(data) {
                /* console.log("data");
                console.log(dt);
                var data = JSON.parse(dt); */

                $('.btn-list').removeClass('active');
                $('#act-' + id).addClass('active');
                $('#listOrder').html(data.return.html);
                $('#oldtable').html("");
                
                $(".v4-loading").hide();
            }, "json");
    }
</script>