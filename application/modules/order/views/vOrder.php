<div class="offcanvas offcanvas-start show" style="left:-3px !important;width: 200px; visibility:visible;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" aria-modal="true" role="dialog">
	<div class="offcanvas-header" style="padding-top: 4em;">
		<h6 class="offcanvas-title" id="offcanvasScrollingLabel">Product and Service</h6>
		<img src="<?php echo base_url('assets/images/icon/icon-pns.png'); ?>" />
		<!--<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
	</div>
	<div class="offcanvas-body">
		<p style="font-size:12px;">Type of order</p>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="formRadios" value="EXPORT" id="formRadiosExport" onclick="serviceRadio(this.value);">
					<label class="form-check-label" for="formRadiosExport">
						Export
					</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="formRadios" value="IMPORT" id="formRadiosImport" onclick="serviceRadio(this.value);">
					<label class="form-check-label" for="formRadiosImport">
						Import
					</label>
				</div>
			</div>
		</div>
		<div id="v4-service-export" style="display:none">
			<hr class="mt-3">
			<p style="margin-top:2.5em;font-size:12px;">Service Selected</p>
			<div class="btn-group dropup w-100" id="btn-export-depot">
				<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder('export-depot','E-Depot'); return false;">E-Depot</a>
				<input type="hidden" name="export-depot" id="export-depot" readonly>
			</div>
			<div class="btn-group dropup w-100 mt-2" id="btn-export-port">
				<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder('export-port','E-Port'); return false;">E-Port</a>
				<input type="hidden" name="export-port" id="export-port" readonly>
			</div>
			<div class="card mt-5" style="background: #F8F8F9;border:2px dashed #BFC9E0;">
				<div class="card-body">
					<h4 class="card-title">Info</h4>
					<ul style="font-size:10px;padding-left:0.7rem !important">
						<li>For export, you can only one service.</li>
						<li>At this moment, we just accept E-Depot and E-Port only. For next update we will have Trucking and E-Customs</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="v4-service-import" style="display:none">
			<hr class="mt-3">
			<p style="margin-top:2.5em;font-size:12px;">Service Selected</p>
			<div id="btn-import-port-depot">
				<div class="btn-group dropup w-100 mb-2" id="btn-import-port">
					<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder('import-port','E-Port'); return false;">E-Port</a>
				</div>
				<p id="add-service" class="mt-3" style="font-size:12px;display:none">Available Service to Add</p>
				<div class="btn-group dropup w-100" id="btn-import-depot">
					<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder('import-depot','E-Depot'); return false;">E-Depot</a>
				</div>
			</div>
			<div class="card mt-5" style="background: #F8F8F9;border:2px dashed #BFC9E0;">
				<div class="card-body">
					<h4 class="card-title">Info</h4>
					<ul style="font-size:10px;padding-left:0.7rem !important">
						<li>For export, you can only one service.</li>
						<li>At this moment, we just accept E-Depot and E-Port only. For next update we will have Trucking and E-Customs</li>
					</ul>
				</div>
			</div>
			<input type="hidden" name="import-port" id="import-port" readonly>
			<input type="hidden" name="import-depot" id="import-depot" readonly>
		</div>
		
		<div class="tex-center mx-2" style="position:fixed;bottom:5px">
			<a href="<?php echo site_url('my-order'); ?>" class="btn btn-light waves-effect">Back to Order List</a>
		</div>
	</div>
</div>

<div id="divRequest" class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">&nbsp;</div>
			<div class="col-md-5 mt-5">
				<div class="mt-5">&nbsp;</div>
				<div class=" align-items-center mt-5">
					<h1 class="mb-sm-4">Select Product and Services</h1>
					<p>Please select our service in Left to start your journey using our digital platform</p>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?=  base_url() ?>assets/images/img-dashboard.png" style="width:30em; margin-top:10em" />
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
	$('#import-port').val('');
	$('#import-depot').val('');
});
function serviceRadio(id){
    if(!$("input[id=formRadiosExport]").is(":checked")){
		$("#v4-service-export").fadeOut(300);
		$("#v4-service-import").fadeIn(300);
    }else{
		$("#v4-service-export").fadeIn(300);
		$("#v4-service-import").fadeOut(300);
    }
}

function getOrder(id,label,val=1){
	if(id == "export-depot" || id == "export-port"){
		if(id == "export-depot"){
			$("#btn-export-port").fadeOut(300);
		}
		if(id == "export-port"){
			$("#btn-export-depot").fadeOut(300);
		}
		var html  = '<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">'+label+'</a>';
			html += '<a href="javascript:void(0)" onclick="closeOrder(\''+id+'\',\''+label+'\',\''+val+'\'); return false;" class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" style="background-color:#86A8F8">';
				html += '<i class="mdi mdi-close"></i>';
				html += '<input type="hidden" name="'+id+'" id="'+id+'" value="yes" readonly>';
			html += '</a>';
		$('#btn-'+id).html(html);
	}else if(id == "import-depot" || id == "import-port"){
		if(id == "import-depot"){
			let importPort = $('#import-port').val();
			if(importPort == "yes"){
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
			}else{
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
		if(id == "import-port"){
			let importDepot = $('#import-depot').val();
			if(importDepot == "yes"){
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
			}else{
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
	var url = site_url + 'order-request/'+id;
	$(".v4-loading").show();
	$.post(url,{'csrf_v4kalibaru': $('meta[name="csrf_v4kalibaru"]').attr('content'), post:id},
		function(data){
			$('#divRequest').html(data.return.html);
			$(".v4-loading").hide();
	}, "json");
}

function closeOrder(id,label,val){
	if(id == "export-depot" || id == "export-port"){
		if(id == "export-depot"){
			$("#btn-export-port").fadeIn(300);
		}
		if(id == "export-port"){
			$("#btn-export-depot").fadeIn(300);
		}
		var html  = '<a href="javascript:void(0);" class="btn btn-outline-light waves-effect" onclick="getOrder(\''+id+'\',\''+label+'\',\''+val+'\'); return false;">'+label+'</a>';
		$('#btn-'+id).html(html);
	}else if(id == "import-depot" || id == "import-port"){
		if(id == "import-depot"){
			let importPort = $('#import-port').val();
			if(importPort == "yes"){
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
			}else{
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
		if(id == "import-port"){
			let importDepot = $('#import-depot').val();
			if(importDepot == "yes"){
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
			}else{
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

</script>