<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-10">
			<div id="basic-pills-wizard" class="twitter-bs-wizard">
				<ul class="twitter-bs-wizard-nav">
					<li class="nav-item">
						<a href="#steps-1" class="" data-toggle="tab">&nbsp;</a>
					</li>
					<li class="nav-item">
						<a href="#steps-2" class="" data-toggle="tab">&nbsp;</a>
					</li>
				</ul>
				<div class="tab-content twitter-bs-wizard-tab-content">
					<div class="tab-pane" id="steps-1">
						<div class="navbar" >
							<span><a href="#">My Order</a> > Order Form</span>
						</div>
						<div class="nav-title mt-5">
							<h4>E-Depot</h4>
							<span>Please fill this form correctly to make better experience</span>
						</div>
						<div class="card mt-3">
							<div class="card-body p-4">
								<div class="row">
									<div class="col-lg-12">
										<div class="mt-3 mt-lg-0">
											<div>
												<select class="form-select w-50" name="depotId" id="depotId" onchange="selectDepo(this.value); return false;">
													<option value="">- Select Depo</option>
													<?php if(!empty($arrdepot)): ?>
														<?php foreach($arrdepot as $depot): ?>
															<option value="<?php echo $depot['DEPOT_ID']; ?>"><?php echo strtoupper($depot['DEPOT_NAME']); ?></option>
														<?php endforeach; ?>
													<?php endif; ?>
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
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Delivery Order Attachment <span style="color: #E05252;">*</span></label>
														<input class="form-control" type="text" placeholder="Upload Here">
													</div>
												</div>
											</div>
										</div>
										<hr/>
										<div class="row">
											<div class="col-lg-4">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Shipping Line <span style="color: #E05252;">*</span></label>
														<select class="form-select">
															<option>Select Type</option>
														</select>
													</div>
												</div>
											</div>
											
											<div class="col-lg-4">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Container Grade <span style="color: #E05252;">*</span></label>
														<select class="form-select">
															<option>Select Grade</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="row mx-2">
											<div class="col-sm-10">&nbsp;</div>
											<div class="col-sm-2" style="float:right">
												<button type="button" style="width:10em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light mb-sm-3" onClick="nextSteps();" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
													Continue <i class="bx bx-chevron-right ms-1"></i>
												</button> 
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<div class="accordion mt-3" id="accordionExample" style="display:none">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Container Details
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row">
											<div class="col-md-6 col-sm-6" align="left">
												<label>Total : 2</label>
											</div>
											<div class="col-md-6 col-sm-6" align="right">
												<a href="#">EDIT</a>
											</div>
										</div>
										<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
											<i class="mdi mdi-alert-outline align-middle me-3"></i><strong>Process Container</strong> - Please select container and add the quantity to process your order. You can add more container depends on your needs.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>

										<div class="row">
											<!--<div class="col-lg-3">
												<div class="card">
													<div class="card-body">
														<table>
															<tr>
																<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
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
														-->
											<div class="col-lg-3">
												<div class="card">
													<div class="card-body">
														<table>
															<tr>
																<td rowspan="3"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
																<td style="width:100%;">
																	<label style="font-weight: 500;
font-size: 14px;color: #002985;margin-left:14px;">EGHU3826956</label>																	
																</td>
															</tr>
															<tr>
																<td>
																	<label style="margin-left:8%;font-weight: 700;
font-size: 14px;color: #0E0E2C;">20 Feet</label>
																</td>
															</tr>
															<tr>
																<td>
																	<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																	<p style="font-weight: 400;
font-size: 10px;color: #8C8CA2;">General Purpose</p>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="col-lg-3">
												<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-booking">
												<div class="card" style="border: 2px dashed #C2D4FC;box-sizing: border-box;">
													<div class="card-body" align="center">
													<label style="margin:0 auto;padding:15% 0">Add Container
														<span>
															<svg width="25" height="24" style="margin-top:7px;" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
									<div class="row mx-2 mb-2">
										<div class="col-lg-10">&nbsp;</div>
										<div class="col-lg-2">
											<ul class="pager wizard twitter-bs-wizard-pager-link">
												<li class="next">
													<button type="button" style="width:10em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light mb-sm-3">
														Continue <i class="bx bx-chevron-right ms-1"></i>
													</button> 
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="steps-2">
						<ul class="pager wizard twitter-bs-wizard-pager-link">
							<li class="previous">
								<span style="cursor:pointer;">Back To Create Order</span>
							</li>
						</ul>
						<div class="row mt-3">
							<div class="col-md-8">
								<div class="card mb-0">
									<div class="card-body">
										<div class="row">
											<div class="col-md-8 col-sm-8" style="">
												<div class="nav-title">
													<h5>General Info</h5>
													<p>Requirement data that can be used on all services.</p>
												</div>
											</div>
											<div class="col-md-4 col-sm-4" style="text-align: end;">
												<button type="button" class="btn btn-outline-secondary waves-effect">Cancel Order</button>
												<button type="button" class="btn btn-primary waves-effect waves-light">Save Order</button>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
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

							<div class="col-md-4">
								<div class="card">
									<div class="card-header bg-transparent border-bottom">
										<h6>Payment Summary</h6>
										<p>This is your payment summary from your order</p>
									</div>
									<div class="card-body">
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
													<div class="accordion" id="accordionExamplePay">
														<div class="accordion-item">
															<h2 class="accordion-header" id="headingOne1">
																<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
																E-Depo
																</button>
																
															</h2>
															<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExamplePay">
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
				</div>
			</div>
			
		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script>
	function addCont(){
		
		$('#list-cont').append('<div class="row" style="margin-top:20px;">\
					<div class="col-md-6 col-sm-6">\
						<select class="form-control">\
							<option>Cont. type</option>\
						</select>\
					</div>\
					<div class="col-md-5 col-sm-5">\
						<input type="text" placeholder="Cont. Number" class="form-control" />\
					</div>\
					<div class="col-md-1 col-sm-1">\
					<svg style="margin-top:8px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">\
<path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20V20ZM7 11H17V13H7V11Z" fill="#8C8CA2"/>\
</svg>\
					</div>\
				</div>');

	}
function nextSteps(){
	$("#done").show();
}

function selectDepo(id){
	if(id != ""){
		$('#accordionExample1').fadeIn(300);
		$('#accordionExample').fadeIn(300);
		//$('#basic-pills-wizard').fadeIn(300);
	}else{
		$('#accordionExample1').fadeOut(300);
		$('#accordionExample').fadeOut(300);
		//$('#basic-pills-wizard').fadeOut(300);
	}	
}

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

$(document).ready(function(){
	$('#basic-pills-wizard').bootstrapWizard();
});

</script>


<div class="modal fade bs-example-modal-center-booking" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div>
					<span>
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.80078 8V7C4.2485 7 3.80078 7.44772 3.80078 8H4.80078ZM27.2008 8H28.2008C28.2008 7.44772 27.7531 7 27.2008 7V8ZM27.2008 24V25C27.7531 25 28.2008 24.5523 28.2008 24H27.2008ZM4.80078 24H3.80078C3.80078 24.5523 4.2485 25 4.80078 25V24ZM4.80078 9H27.2008V7H4.80078V9ZM26.2008 8V24H28.2008V8H26.2008ZM27.2008 23H4.80078V25H27.2008V23ZM5.80078 24V8H3.80078V24H5.80078Z" fill="#8C8CA2"/>
<path d="M8.80664 13.334L8.80664 18.6673" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.5742 13.333L13.5742 18.6663" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.3438 13.333L18.3437 18.6663" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M23.1133 13.334L23.1133 18.6673" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<label class="modal-title" style="font-weight: 700;font-size: 16px;color: #4A4A68 !important;">Container List</label></span>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" align="center">
				<div class="row">
					<div class="col-md-6 col-sm-6" align="left">
						<label>Cnt. Type & Size</label>
					</div>
					<div class="col-md-5 col-sm-5" align="left">
						<label>Container Number</label>
					</div>
					<div class="col-md-1 col-sm-1">

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<select class="form-control">
							<option>Cont. type</option>
						</select>
					</div>
					<div class="col-md-5 col-sm-5">
						<input type="text" placeholder="Cont. Number" class="form-control" />
					</div>
					<div class="col-md-1 col-sm-1">
						<a onclick="addCont();"><svg style="margin-top:8px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20Z" fill="#497DF5"/>
						</svg>
</a>
					</div>
				</div>
				<div id="list-cont">
					<!--<div class="row">
						<div class="col-md-6 col-sm-6">
							<select class="form-control">
								<option>Cont. type</option>
							</select>
						</div>
						<div class="col-md-5 col-sm-5">
							<input type="text" placeholder="Cont. Number" class="form-control" />
						</div>
						<div class="col-md-1 col-sm-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20Z" fill="#497DF5"/>
							</svg>
						</div>
					</div>-->
				</div>
				
				<div style="text-align: end;margin-top:20px;">
					<button style="width:25%;" type="button" class="btn btn-primary waves-effect waves-light">Save</button>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->