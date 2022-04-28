<style>
    .t-desc {
        font-weight: 600;
        font-size: 12px;
        color: #0E0E2C;
    }
    .t-title {
        font-weight: 500;
        font-size: 10px;
        color: #0E0E2C;
    }

    .desc-2{
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: #576175;
    }
    
    .accordion-item{
        border: none !important;
    }

    .accordion-button:not(.collapsed){
        background-color: transparent !important;
    }
</style>
<div class="offcanvas offcanvas-start show" style="left: 70px !important; width: 200px; visibility: visible;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" aria-modal="true" role="dialog">
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
					<input class="form-check-input" type="radio" name="formRadios" value="EXPORT" id="formRadiosExport" onclick="serviceRadio(this.value);" <?php echo ($type == "export" ? "checked" : ""); ?>>
					<label class="form-check-label" for="formRadiosExport">
						Export
					</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="form-check mb-3">
					<input class="form-check-input" type="radio" name="formRadios" value="IMPORT" id="formRadiosImport" onclick="serviceRadio(this.value);" <?php echo ($type == "import" ? "checked" : ""); ?>>
					<label class="form-check-label" for="formRadiosImport">
						Import
					</label>
				</div>
			</div>
		</div>
		
		<div id="v4-service-export">
			<hr class="mt-3">
			<p style="margin-top:2.5em;font-size:12px;">Service Selected</p>
			<div class="btn-group dropup w-100">
				<a class="btn btn-primary" href="javascript:void(0);" style="background-color:#497DF5">
					E-Depot
				</a>
				<a class="btn btn-primary dropdown-toggle dropdown-toggle-split w-10" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#86A8F8" onclick="cancelDepot();">
					<i class="mdi mdi-close"></i>
				</a>
			</div>
			<?php if($type == "import"): ?>
			<p style="margin-top:2.5em;font-size:12px;">Available Service to Add</p>
			<div class="btn-group dropup w-100">
				<div class="btn-group dropup w-100">
					<a href="<?php echo site_url('create-order-gatepass'); ?>" class="btn btn-outline-light waves-effect">E-Port</a>
				</div>
			</div>
			<?php endif; ?>
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
			<div class="btn-group dropup w-100">
				<a href="<?php echo site_url('create-order-gatepass'); ?>" class="btn btn-outline-light waves-effect">E-Port</a>
			</div>
			<div class="btn-group dropup w-100 mt-2">
				<a href="<?php echo site_url('create-order-depo/import'); ?>" class="btn btn-outline-light waves-effect">E-Depot</a>
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
		<div class="tex-center mx-2" style="position:fixed;bottom:5px">
			<a href="<?php echo site_url('my-order'); ?>" class="btn btn-light waves-effect">Back to Order List</a>
		</div>
	</div>
</div>

<div class="page-content" style="background-color: #F8F8F9;padding-left:200px">
	<div class="container-fluid">

		<div class="row">
		<div class="navbar" >
					<span>Back To Create Order</span>
				</div>
			<div class="col-md-8 col-sm-8" style="">
				<div class="row">
					<div class="col-md-8 col-sm-8" style="">
						<div class="nav-title mt-5">
							<h5>General Info</h5>
						</div>
					</div>
					<div class="col-md-4 col-sm-4" style="text-align: end;">
					<button type="button" class="btn btn-outline-secondary waves-effect">Cancels Order</button>
					<button type="button" class="btn btn-primary waves-effect waves-light">Save Order</button>
					</div>
				</div>

				<div class="card mt-3">
					<div class="card-body p-4">

						<div class="row">
								<div class="col-md-3 col-sm-3">
										<label class="t-title">Type of Order</label>
										<p class="t-desc">Export</p>
								</div>
								<div class="col-md-9 col-sm-9">
										<label class="t-title">NPWP</label>
										<p class="t-desc">08.178.554.2-123.321 - PT. TEGUH ABADI JAYA</p>
								</div>
						</div>
						<div class="row">
								<div class="col-md-3 col-sm-3">
										<label class="t-title">DO Number</label>
										<p class="t-desc">DO_11233RBG_22</p>
								</div>
								<div class="col-md-3 col-sm-3">
										<label class="t-title">DO Date</label>
										<p class="t-desc">22/04/2022</p>
								</div>
								<div class="col-md-3 col-sm-3">
										<label class="t-title">Internal Ref. Number</label>
										<p class="t-desc">MRS123456</p>
								</div>
								
						</div>

					</div>
				</div>

				<div class="nav-title mt-5">
					<h5>Your Order Listing</h5>
					<p>Please select which order you will process into the next step (payment)</p>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12">
						<input type="checkbox" class="" style="width: 20px; height: 20px;"> 
						<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; " >Select All</label>
					</div>  
				</div>
				
				<div class="row mt-3">
				
					<div class="col-md-1 col-sm-1">
						<input type="checkbox" onclick="doSummary(this);" class="" style="width: 20px; height: 20px;"> 
					</div>
					<div class="col-md-11 col-sm-11" style="margin-left:-2.5em">
						<div class="card">
						<div class="card-header bg-transparent border-bottom">
							<h6>E-Depo</h6>
							<p>Depo Order Detail</p>
						</div>
						<div class="card-body p-4">

							<div class="row">
								
									<div class="col-md-3 col-sm-3">
										<label class="t-title">Depo</label>
										<p class="t-desc">BSA</p>
									</div>
									<div class="col-md-3 col-sm-3">
										<label class="t-title">Shipping Line</label>
										<p class="t-desc">Maersk Line</p>
									</div>
									<div class="col-md-3 col-sm-3">
										<label class="t-title">Bussiness Unit</label>
										<p class="t-desc">Maersk Sea Land</p>
									</div>
									<div class="col-md-3 col-sm-3">
										<label class="t-title">Container Grade</label>
										<p class="t-desc">GRADE B</p>
									</div>
									
									<div class="col-lg-5 mt-3">
										<div class="card">
											<div class="card-body">
												<table>
													<tr>
														<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
														<td style="width:100%;">
															<label style="margin-left:8%;font-weight:bold;">20 Feet</label>
															<label style="margin-left:8%;">General Purpose</label>
														</td>
													</tr>
													<tr>
														<td>
														<label style="margin-left:8%;font-weight:bold;">x4</label>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<div class="col-lg-5 mt-3">
										<div class="card">
											<div class="card-body">
												<table>
													<tr>
														<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-40-dv.png'); ?>" /></td>
														<td style="width:100%;">
															<label style="margin-left:8%;font-weight:bold;">40 Feet</label>
															<label style="margin-left:8%;">General Purpose</label>
														</td>
													</tr>
													<tr>
														<td>
														<label style="margin-left:8%;font-weight:bold;">x4</label>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								
							</div>

						</div>
					</div>
					</div>
				</div>

				
				   
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="card mt-3">
					<div class="card-header bg-transparent border-bottom">
						<h6>Payment Summary</h6>
						<p>This is your payment summary from your order</p>
					</div>
					<div class="card-body p-4">

						<div class="row">
							<div class="col-lg-12" align="center">
								<div id="p_details" class="mb-5 mt-5">
										<svg width="57" height="61"  viewBox="0 0 57 61" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M25.8418 28.3442H44.294C46.51 28.3442 48.294 30.1282 48.294 32.3442V54.573C48.294 56.789 46.51 58.573 44.294 58.573H25.8418C23.6258 58.573 21.8418 56.789 21.8418 54.573V32.3442C21.8418 30.1282 23.6258 28.3442 25.8418 28.3442Z" fill="#E4EBF0"/>
										<path d="M6.49117 6.02931C3.20176 6.02931 0.49707 8.734 0.49707 12.0234V55.0008C0.49707 58.2902 3.20176 60.9949 6.49117 60.9949H44.4931C47.7825 60.9949 50.502 58.2902 50.502 55.0008V27.7892C50.5064 26.6785 49.6049 25.7769 48.4941 25.7813C47.3892 25.7851 46.4967 26.6842 46.501 27.7892V55.0008C46.501 56.1434 45.6357 56.9939 44.4931 56.9939H6.49117C5.34858 56.9939 4.49805 56.1434 4.49805 55.0008V12.0234C4.49805 10.8808 5.34858 10.0303 6.49117 10.0303H13.9321C15.0371 10.0347 15.9362 9.14215 15.94 8.03719C15.9444 6.92646 15.0428 6.02493 13.9321 6.02931H6.49117ZM37.3032 6.02931C36.1982 6.03311 35.3057 6.93223 35.3101 8.03719C35.3138 9.13638 36.204 10.0265 37.3032 10.0303H44.4931C45.6357 10.0303 46.501 10.8808 46.501 12.0234V12.9978C46.5048 14.097 50.4982 14.1028 50.502 12.9978V12.0234C50.502 8.73399 47.7825 6.02931 44.4931 6.02931H37.3032Z" fill="#CDD0D6"/>
										<path d="M18.1251 0.994629C14.8357 0.994629 12.1162 3.71408 12.1162 7.00349V8.9966C12.1162 12.286 14.8357 14.9907 18.1251 14.9907H32.8741C36.1635 14.9907 38.8682 12.286 38.8682 8.9966V7.00349C38.8682 3.71409 36.1635 0.994629 32.8741 0.994629H18.1251ZM18.1251 4.99561H32.8741C34.0167 4.99561 34.8672 5.8609 34.8672 7.00349V8.9966C34.8672 10.1392 34.0167 10.9897 32.8741 10.9897H18.1251C16.9825 10.9897 16.1172 10.1392 16.1172 8.9966V7.00349C16.1172 5.86091 16.9825 4.99561 18.1251 4.99561Z" fill="#5D5D6D"/>
										<path d="M15.1211 19.0654C14.0219 19.0692 13.1317 19.9593 13.1279 21.0585C13.1236 22.1635 14.0161 23.0626 15.1211 23.0664H17.2588C18.3638 23.0626 19.2563 22.1635 19.2519 21.0585C19.2482 19.9593 18.358 19.0692 17.2588 19.0654H15.1211Z" fill="#CDD0D6"/>
										<path d="M12.1162 47.8013C11.017 47.8051 10.1268 48.6952 10.1231 49.7944C10.1187 50.8994 11.0112 51.7985 12.1162 51.8023H25.219C26.3298 51.8067 27.2313 50.9052 27.2269 49.7944C27.2231 48.6895 26.324 47.7969 25.219 47.8013H12.1162Z" fill="#CDD0D6"/>
										<path d="M52.1996 11.7896C49.5949 9.78078 45.7931 10.2773 43.7843 12.8821L23.0855 39.7226C21.382 41.9314 21.461 44.6378 21.7124 46.7059C21.9639 48.774 22.5392 50.4116 22.5392 50.4116C22.7951 51.1581 23.4659 51.6843 24.2518 51.7551C24.2518 51.7551 26.0012 51.9122 28.0904 51.6518C30.1796 51.3913 32.8398 50.8075 34.5569 48.5809L55.2705 21.7404C57.2793 19.1356 56.7827 15.3339 54.178 13.325L52.1996 11.7896ZM49.7636 14.9638L51.742 16.4845C52.6467 17.1822 52.7941 18.3848 52.0963 19.2896L31.3974 46.1449C30.8435 46.8631 29.2252 47.4781 27.6032 47.6803C26.7524 47.7864 26.578 47.731 26.0234 47.7249C25.8853 47.1983 25.7858 47.0572 25.6839 46.219C25.4892 44.6183 25.6773 42.9097 26.2449 42.1738L46.9585 15.3184C47.6563 14.4137 48.8588 14.2663 49.7636 14.9641L49.7636 14.9638Z" fill="#5D5D6D"/>
										<path d="M15.1211 27.3154C14.0219 27.3192 13.1317 28.2093 13.1279 29.3085C13.1236 30.4135 14.0161 31.3126 15.1211 31.3164H17.2588C18.3638 31.3126 19.2563 30.4135 19.2519 29.3085C19.2482 28.2093 18.358 27.3192 17.2588 27.3154H15.1211Z" fill="#CDD0D6"/>
										<path d="M15.1211 35.6904C14.0219 35.6942 13.1317 36.5843 13.1279 37.6835C13.1236 38.7885 14.0161 39.6876 15.1211 39.6914H17.2588C18.3638 39.6876 19.2563 38.7885 19.2519 37.6835C19.2482 36.5843 18.358 35.6942 17.2588 35.6904H15.1211Z" fill="#CDD0D6"/>
										</svg>

										<p class="mt-4">There’s no information to show. Please select which services should be process.</p>
								</div>
								<div id="p_details2" style="display:none;"  class="" >
									<div class="accordion" id="accordionExample1">
										<div class="accordion-item">
											<h2 class="accordion-header" id="headingOne1">
												<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
												E-Depo
												</button>
												
											</h2>
											<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
												<div class="accordion-body">
													<form align="left">
														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc">Depo Reimbursement</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc">Rp 200.000</label>
															</div>
															<div class="col-md-12 col-sm-12">
																<label class="t-desc-2">BSA</label>
															</div>
														</div>

														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc">Platform Fee</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc">Rp 100.000</label>
															</div>
															<div class="col-md-12 col-sm-12">
																<label class="t-desc-2">8x Containers</label>
															</div>
														</div>
													
														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc">Sub-Total</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc">Rp 300.000</label>
															</div>
														</div>
														<hr/>
														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc">PPh23</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc">Rp 6.000</label>
															</div>
														</div>
														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc">PPN 10%</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc">Rp 30.000</label>
															</div>
														</div>

														<div class="row mt-3">
															<div class="col-md-8 col-sm-8">
																<label class="t-desc" style="font-size: 14px;">Total Amount</label>
															</div>
															<div class="col-md-4 col-sm-4">
																<label class="t-desc" style="font-size: 14px; color: #044795;">Rp 336.000</label>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div><!-- end accordion -->
								</div>
							<a class="btn btn-secondary w-100 mt-5" href="<?= site_url('payment') ?>" id="btn-mthd" disabled>Select Payment Method</a>
							<button type="button" class="btn btn-outline-light waves-effect mt-4 w-100" style="border: none !important">Cancel Order</button>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- container-fluid -->
</div>
<!-- End Page-content -->

<script>

function serviceRadio(id){
    if(!$("input[id=formRadiosExport]").is(":checked")){
		$("#v4-service-export").fadeOut(500);
		//$("input[id=formRadiosExport]").prop('checked', false);
		$("#v4-service-import").fadeIn(500);
		//$("input[id=formRadiosImport]").prop('checked', false);
    }else{
		$("#v4-service-export").fadeIn(500);
		$("#v4-service-import").fadeOut(500);
    }
}

function cancelDepot(){
	$("#v4-service-export").fadeOut(500);
	$("input[id=formRadiosExport]").prop('checked', false);
	setTimeout(function(){ 
		location.href = '<?php echo site_url("create-order"); ?>';
	}, 1000);
}

function selectDepo(id){
	if(id != ""){
		$('#accordionExample1').fadeIn(300);
		$('#accordionExample').fadeIn(300);
	}else{
		$('#accordionExample1').fadeOut(300);
		$('#accordionExample').fadeOut(300);
	}
	
}

function doSummary(obj){
	let chk  = obj.checked;
	if(chk == true){
		$('#p_details2').show();
		$('#p_details').hide();
		$('#btn-mthd').removeAttr("disabled");
		$('#btn-mthd').attr("class", "btn btn-primary w-100 mt-5");
	}else{
		$('#p_details2').hide();
		$('#p_details').show();
		$('#btn-mthd').attr("disabled");
		$('#btn-mthd').attr("class", "btn btn-secondary w-100 mt-5");
	}
}
</script>
