<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-10 mt-5">
			<div class="row">
				<div class="col-md-12 col-sm-12" style="">
					<div class="navbar" >
						<span><a href="#">Home</a> > <a href="#">SasS</a> > Create New Order</span>
					</div>
					<div class="nav-title mt-5">
						<h4>E-Gatepass</h4>
						<span>Please fill this form correctly to make better experience</span>
					</div>

					<div class="card mt-3">
						<div class="card-body p-4">

							<div class="row">
								<div class="col-lg-12">
									<div class="mt-3 mt-lg-0">
										<div class="mb-3">
											<select class="form-select w-25" onchange="selectTerminal(this.value); return false;">
												<option value="">Please Select Terminal</option>
												<option value="NPCT1">NPCT1</option>
												<option value="JICT">JICT</option>
												<option value="KOJA">KOJA</option>
											</select>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="accordion" id="accordionExample1" style="display:none">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne1">
								<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
								General Requirement
								<span style="margin-left:82%;display:none;" id="done" class="badge badge-soft-success">DONE</span>
								</button>
								
							</h2>
							<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<form>
									<div class="row">
										<div class="col-lg-8">
											<div>
												<div class="mb-3">
													<label class="form-label">NPWP <span style="color: #E05252;">*</span></label>
													<select class="form-select">
														<option>Select NPWP</option>
													</select>
												</div>

											</div>
										</div>

										<div class="col-lg-4">
											
										</div>
									</div>

									<div class="row">
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Delivery Order Number <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="text" placeholder="Input Here">
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Delivery Order Expiry Date <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="date" placeholder="Input Here" >
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3 ">
													<label for="example-date-input" class="form-label">Internal Ref. Number</label>
													<input class="form-control" type="text" placeholder="Input Here">
													
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">BL Number <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="text" placeholder="Input Here">
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Pay Thru Date <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="date" placeholder="Input Here" >
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3 ">
													<label for="example-date-input" class="form-label">Transaction Type <span style="color: #E05252;">*</span></label>
													<select class="form-select">
														<option>Select Type</option>
													</select>
													
												</div>
											</div>
										</div>
									</div>
									<hr/>
									<div class="row">
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Request Doc. Type <span style="color: #E05252;">*</span></label>
													<select class="form-select">
														<option>Select Type</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Request Doc. Number <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="text" placeholder="Input Here">
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Request Doc. Date <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="date" placeholder="Input Here">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Response Doc. Type <span style="color: #E05252;">*</span></label>
													<select class="form-select">
														<option>Select Type</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Response Doc. Number <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="text" placeholder="Input Here">
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="mt-3 mt-lg-0">
												<div class="mb-3">
													<label for="example-date-input" class="form-label">Response Doc. Date <span style="color: #E05252;">*</span></label>
													<input class="form-control" type="date" placeholder="Input Here">
												</div>
											</div>
										</div>
									</div>
									
									<div class="row mx-2">
										<div class="col-lg-8">&nbsp;</div>
										<div class="col-lg-4">
											<button  type="button" onClick="nextSteps();" class="btn btn-light waves-effect w-100 waves-light mb-sm-3" style="background-color:#497DF5;color:white" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">Next Steps</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div><!-- end accordion -->

					<script>
						function nextSteps(){
							$("#done").show();
						}
					</script>

					<div class="accordion mt-3" id="accordionExample" style="display:none">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Container Details
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
										<i class="mdi mdi-alert-outline align-middle me-3"></i><strong>Process Container</strong> - Please select container and add the quantity to process your order. You can add more container depends on your needs.
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

									<div class="row">
										<div class="col-lg-3">
											<div class="card">
												<div class="card-body">
													<table>
														<tr>
															<td rowspan="2"><img src="<?php echo base_url(); ?>assets/images/icon/cont-20-dv.png" /></td>
															<td style="width:100%;">
																<select class="form-select" onchange="changeCont(this)" style="border:0;width:95px;font-weight:bold;">
																	<option value="default"><b>Select Container</b></option>
																	<option selected><b>20 Feet - General Purpose</b></option>
																	<option><b>40 Feet - General Purpose</b></option>
																	<option><b>45 Feet - High Cube</b></option>
																	<option><b>20 Feet - Reefer</b></option>
																	<option><b>40 Feet - Reefer High</b></option>

																</select>
																<label style="margin-left:8%;">General Purpose</label>
															</td>
														</tr>
														<tr>
															<td>
																<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																<span onClick="counting('min', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>
																<span class="t_count" style="padding: 5px;"><label>0</label></span>
																<span onClick="counting('plus', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>
																</div>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="card">
												<div class="card-body">
													<table>
														<tr>
															<td rowspan="2"><img src="<?php echo base_url(); ?>assets/images/icon/cont-null.png" /></td>
															<td style="width:100%;">
																<select class="form-select" onchange="changeCont(this)" style="border:0;width:100%;font-weight:bold;">
																	<option  value="default"><b>Select Container</b></option>
																	<option><b>20 Feet - General Purpose</b></option>
																	<option><b>40 Feet - General Purpose</b></option>
																	<option><b>45 Feet - High Cube</b></option>
																	<option><b>20 Feet - Reefer</b></option>
																	<option><b>40 Feet - Reefer High</b></option>
																</select>
																<label style="margin-left:8%;">&nbsp;</label>
															</td>
														</tr>
														<tr>
															<td>
																<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																<span onClick="counting('min', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>
																<span class="t_count" style="padding: 5px;"><label>0</label></span>
																<span onClick="counting('plus', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>
																</div>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<a href="javascript:void(0)">
											<div class="card" style="border: 2px dashed #C2D4FC;box-sizing: border-box;">
												<div class="card-body" align="center">
												<label style="margin:0 auto;padding:15% 0">Add Container
													<span>
																	
	<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M11.0001 6.89941H3.14014V18.8994H19.9401V12.75" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M6.14453 10.9004L6.14453 14.9004" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M9.72119 10.8994L9.72119 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M13.2979 10.8994L13.2979 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M16.875 13.124L16.875 14.8997" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M17.78 10.9798C20.1658 10.9798 22.1 9.04571 22.1 6.65984C22.1 4.27397 20.1658 2.33984 17.78 2.33984C15.3941 2.33984 13.46 4.27397 13.46 6.65984C13.46 9.04571 15.3941 10.9798 17.78 10.9798Z" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M16.3398 6.65918H19.2198" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	<path d="M17.7798 5.21973V8.09973" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	</svg>
													</span>
												</label>
												</div>
											</div>
											</a>
										</div>
									</div>
								</div>
								
								<div class="row mx-2">
									<div class="col-lg-8">&nbsp;</div>
									<div class="col-lg-4">
										<a type="button" class="btn btn-light waves-effect w-100 waves-light mb-sm-3" style="background-color:#497DF5;color:white" href="<?php echo site_url('create-order-gatepass-cart'); ?>">
											Continue
										</a>
									</div>
								</div>
								
								
							</div>
						</div>
					</div><!-- end accordion -->
						<script>
							function changeCont(obj){
								if(obj.value == "default"){
									$(obj).parent().find("label").text("")
									$(obj).parent().find("select").css('width', '100%')
								}else{
									let split = obj.value.split("-");
									$(obj).parent().find("label").text(split[1].trim())
									$(obj).parent().find("select").css('width', '95px')
								}
							}

							function counting(act, obj){
								let vals = parseInt($(obj).parent().find("label").text())

								if(act == "min"){
									if(vals == 0){
										$(obj).parent().find("label").text("0")
									}else{
										$(obj).parent().find("label").text((vals-1));
									}
								}else{
									
									$(obj).parent().find("label").text((vals+1));
								}
							}
						</script>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
function nextSteps(){
	$("#done").show();
}

function selectTerminal(id){
	if(id != ""){
		$('#accordionExample1').fadeIn(300);
		$('#accordionExample').fadeIn(300);
	}else{
		$('#accordionExample1').fadeOut(300);
		$('#accordionExample').fadeOut(300);
	}	
}
</script>