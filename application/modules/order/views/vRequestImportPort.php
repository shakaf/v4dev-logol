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
		margin-right: 10px;
	}

	.a-btn.active {
		background: #002985;
		color: white;
	}

	.chk_custom {
		background-color: #ECF1F4;
		width: 20px;
		height: 20px;
	}

	.t-desc {
		font-weight: 500;
		font-size: 12px;
		line-height: 16px;
		letter-spacing: 0.02em;
		color: #0E0E2C;
	}
</style>
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
						<div class="navbar">
							<span><a href="#">My Order</a> > Order Form</span>
						</div>
						<div class="card mt-3">
							<div class="card-body">
								<div class="row ">
									<div class="col-md-1" align="center" style="    justify-content: center;
    align-items: center;
    align-self: center;
    justify-self: center;">

										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.61979 17.28C3.71792 17.5267 3.91001 17.7242 4.15381 17.8292C4.3976 17.9343 4.67314 17.9381 4.91979 17.84C5.16644 17.7419 5.36401 17.5498 5.46903 17.306C5.57405 17.0622 5.57792 16.7867 5.47979 16.54L4.35979 13.72L10.9998 12.25V17C10.9998 17.2652 11.1051 17.5196 11.2927 17.7071C11.4802 17.8946 11.7346 18 11.9998 18C12.265 18 12.5194 17.8946 12.7069 17.7071C12.8944 17.5196 12.9998 17.2652 12.9998 17V12.25L19.6398 13.72L18.5198 16.54C18.4711 16.6621 18.4469 16.7926 18.4487 16.9241C18.4505 17.0556 18.4782 17.1854 18.5302 17.3061C18.5822 17.4269 18.6575 17.5362 18.7518 17.6278C18.8461 17.7194 18.9576 17.7915 19.0798 17.84C19.1976 17.8866 19.3231 17.9103 19.4498 17.91C19.6501 17.9102 19.8458 17.8502 20.0116 17.7379C20.1774 17.6256 20.3057 17.4661 20.3798 17.28L21.9298 13.37C21.983 13.2348 22.0061 13.0896 21.9974 12.9445C21.9888 12.7994 21.9487 12.658 21.8798 12.53C21.813 12.4025 21.7194 12.2909 21.6055 12.2029C21.4916 12.1149 21.36 12.0525 21.2198 12.02L17.9998 11.31V7C17.9998 6.73478 17.8944 6.48043 17.7069 6.29289C17.5194 6.10536 17.265 6 16.9998 6H14.9998V3C14.9998 2.73478 14.8944 2.48043 14.7069 2.29289C14.5194 2.10536 14.265 2 13.9998 2H9.99979C9.73457 2 9.48022 2.10536 9.29268 2.29289C9.10514 2.48043 8.99979 2.73478 8.99979 3V6H6.99979C6.73457 6 6.48022 6.10536 6.29268 6.29289C6.10514 6.48043 5.99979 6.73478 5.99979 7V11.31L2.77979 12C2.63955 12.0325 2.50798 12.0949 2.39408 12.1829C2.28017 12.2709 2.18661 12.3825 2.11979 12.51C2.05092 12.638 2.01077 12.7794 2.00213 12.9245C1.9935 13.0696 2.01658 13.2148 2.06979 13.35L3.61979 17.28ZM10.9998 4H12.9998V6H10.9998V4ZM7.99979 8H15.9998V10.86L12.2198 10H12.1198H11.9998H11.8798H11.7798L7.99979 10.86V8ZM20.7098 19.28C20.3589 19.3875 20.023 19.5387 19.7098 19.73C19.3912 19.9163 19.0288 20.0145 18.6598 20.0145C18.2907 20.0145 17.9284 19.9163 17.6098 19.73C16.9171 19.3392 16.1352 19.1339 15.3398 19.1339C14.5444 19.1339 13.7625 19.3392 13.0698 19.73C12.7469 19.9141 12.3815 20.011 12.0098 20.011C11.638 20.011 11.2727 19.9141 10.9498 19.73C10.2564 19.3411 9.47478 19.1368 8.67979 19.1368C7.8848 19.1368 7.10314 19.3411 6.40979 19.73C6.09122 19.9163 5.72883 20.0145 5.35979 20.0145C4.99075 20.0145 4.62835 19.9163 4.30979 19.73C3.99662 19.5387 3.66066 19.3875 3.30979 19.28C3.17673 19.2327 3.03516 19.2141 2.8944 19.2255C2.75364 19.2368 2.61688 19.2778 2.49312 19.3459C2.36937 19.4139 2.26142 19.5073 2.17639 19.6201C2.09135 19.7328 2.03117 19.8623 1.99979 20C1.92513 20.2533 1.95368 20.5258 2.0792 20.7581C2.20472 20.9904 2.41702 21.1636 2.66979 21.24C2.87115 21.2946 3.06326 21.3788 3.23979 21.49C3.84649 21.846 4.53636 22.0357 5.23979 22.04C5.97039 22.0401 6.68801 21.8469 7.31979 21.48C7.71176 21.2638 8.15213 21.1504 8.59979 21.1504C9.04745 21.1504 9.48781 21.2638 9.87979 21.48C10.5071 21.8387 11.2172 22.0274 11.9398 22.0274C12.6624 22.0274 13.3725 21.8387 13.9998 21.48C14.3918 21.2638 14.8321 21.1504 15.2798 21.1504C15.7274 21.1504 16.1678 21.2638 16.5598 21.48C17.1796 21.8499 17.888 22.0453 18.6098 22.0453C19.3316 22.0453 20.04 21.8499 20.6598 21.48C20.8363 21.3688 21.0284 21.2846 21.2298 21.23C21.3629 21.2031 21.4891 21.1493 21.6007 21.0721C21.7123 20.9948 21.8071 20.8956 21.8791 20.7805C21.9512 20.6654 21.999 20.5368 22.0198 20.4027C22.0405 20.2685 22.0337 20.1315 21.9998 20C21.968 19.8647 21.9084 19.7374 21.8247 19.6265C21.7409 19.5155 21.635 19.4232 21.5136 19.3554C21.3922 19.2877 21.2581 19.246 21.1197 19.233C20.9813 19.22 20.8417 19.236 20.7098 19.28Z" fill="#002985" />
										</svg>

									</div>
									<div class="col-md-9">
										<label style="font-weight: 700;
font-size: 12px;
line-height: 16px;
letter-spacing: 0.02em;
color: #002985;">Vessel Schedule</label>
										<div style="font-weight: 400;
font-size: 12px;
line-height: 16px;
letter-spacing: 0.02em;
color: #8C8CA2;">We also provide ship schedules for your reference</div>
									</div>
									<div class="col-md-2">

										<a type="button" style="width:10em;background-color: #002985;" target="_blank" href="<?= base_url() ?>/vessel-schedule" class="btn btn-primary waves-effect waves-light mb-sm-3">
											Search Schedule
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="nav-title mt-5">
							<h4>E-Port</h4>
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
										<div class="row">
											<div class="col-lg-8">
												<div>
													<div class="mb-3">
														<label class="form-label">NPWP <span style="color: #E05252;">*</span></label>
														<select class="form-select" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
															<option>Select NPWP</option>
														</select>
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
														<input class="form-control" type="date" placeholder="Input Here">
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
														<label for="example-date-input" class="form-label">B/L Number <span style="color: #E05252;">*</span></label>
														<input class="form-control" type="text" placeholder="Input Here">
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Pay Thru Date <span style="color: #E05252;">*</span></label>
														<input class="form-control" type="date" placeholder="Input Here">
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3 ">
														<label class="form-label">Transaction Type <span style="color: #E05252;">*</span></label>
														<select class="form-select">
															<option>Select Type</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-lg-6">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Customs Doc. Type <span style="color: #E05252;">*</span></label>
														<select class="form-select">
															<option>Select Type</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Request Doc. Number<span style="color: #E05252;">*</span></label>
														<input class="form-control" type="text" placeholder="Input Here">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Request Doc. Date<span style="color: #E05252;">*</span></label>
														<input class="form-control" type="date" placeholder="Input Here">
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Response Doc. Number<span style="color: #E05252;">*</span></label>
														<input class="form-control" type="text" placeholder="Input Here">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mt-3 mt-lg-0">
													<div class="mb-3">
														<label for="example-date-input" class="form-label">Response Doc. Date<span style="color: #E05252;">*</span></label>
														<input class="form-control" type="date" placeholder="Input Here">
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
										<div class="row mb-5">
											<div class="col-md-6">
												<ul class="nav nav-pills" id="pills-tab" role="tablist">
													<li class="nav-item" role="presentation">
														<a class="a-btn active" id="Showall" data-bs-toggle="pill" data-bs-target="#pills-Showall" type="button" role="tab" aria-selected="true">SHOW ALL</a>
													</li>
													<li class="nav-item" role="presentation">
														<a class="a-btn" id="pills20tab" data-bs-toggle="pill" data-bs-target="#pills20" type="button" role="tab" aria-selected="false">20'</a>
													</li>
													<li class="nav-item" role="presentation">
														<a class="a-btn" id="pills40tab" data-bs-toggle="pill" data-bs-target="#pills40" type="button" role="tab" aria-selected="false">40'</a>
													</li>
												</ul>
											</div>
											<div class="col-md-6" style="text-align: end;">
												<span>
													<label style="color: #4A4A68;font-weight: 700;font-size: 9px;line-height: 11px;vertical-align: middle; margin-right:10px;">Select All</label>
													<input type="checkbox" class="chk_custom" id="checkall">
												</span>
											</div>
										</div>
										<div class="tab-content" id="pills-tabContent">
											<!-- ====show all ==== -->
											<div class="card-body tab-pane fade show active" id="pills-Showall" role="tabpanel" aria-labelledby="Showall">
												<div class="row">
													<div class="col-md-6">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-8">
																		<label style="font-weight: 700; font-size: 9px; color: #FFFFFF; background: #4CAF50; padding:10px;    padding: 6px 21px; border-radius: 24px;">STACKED</label>
																	</div>
																	<div class="col-md-4" style="text-align:end;">
																		<input type="checkbox" class="chk_custom checkitem">
																	</div>
																</div>
																<div class="d-flex flex-row">
																	<div class="p-2"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<g clip-path="url(#clip0_2621_103660)">
																				<path d="M2.5 6H22.5V18H2.5V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M6.5 10L6.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M10.5 10L10.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M14.5 10L14.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M18.5 10L18.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																			</g>
																			<defs>
																				<clipPath id="clip0_2621_103660">
																					<rect width="24" height="24" fill="white" transform="translate(0.5)" />
																				</clipPath>
																			</defs>
																		</svg></div>
																	<div class="p-2">
																		<h4 class="card-title card-gp-title" style="color:#002985;">
																			20’ GP - EGHU3826956
																		</h4>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-6">
																		<label class="label">Stacking Date</label>
																		<p class="l_val">12-06-2021 | 22:45</p>
																	</div>
																	<div class="col-md-6">
																		<input type="text" placeholder="PAY THRU DATE" class="form-control">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-8">
																		<label style="font-weight: 700; font-size: 9px; color: #FFFFFF; background: #4CAF50; padding:10px;    padding: 6px 21px; border-radius: 24px;">STACKED</label>
																	</div>
																	<div class="col-md-4" style="text-align:end;">
																		<input type="checkbox" class="chk_custom checkitem">
																	</div>
																</div>
																<div class="d-flex flex-row">
																	<div class="p-2"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<g clip-path="url(#clip0_2621_103660)">
																				<path d="M2.5 6H22.5V18H2.5V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M6.5 10L6.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M10.5 10L10.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M14.5 10L14.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M18.5 10L18.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																			</g>
																			<defs>
																				<clipPath id="clip0_2621_103660">
																					<rect width="24" height="24" fill="white" transform="translate(0.5)" />
																				</clipPath>
																			</defs>
																		</svg></div>
																	<div class="p-2">
																		<h4 class="card-title card-gp-title" style="color:#002985;">
																			20’ GP - EGHU3826956
																		</h4>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-6">
																		<label class="label">Stacking Date</label>
																		<p class="l_val">12-06-2021 | 22:45</p>
																	</div>
																	<div class="col-md-6">
																		<input type="text" placeholder="PAY THRU DATE" class="form-control">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-8">
																		<label style="font-weight: 700; font-size: 9px; color: #FFFFFF; background: #4CAF50; padding:10px;    padding: 6px 21px; border-radius: 24px;">STACKED</label>
																	</div>
																	<div class="col-md-4" style="text-align:end;">
																		<input type="checkbox" class="chk_custom checkitem">
																	</div>
																</div>
																<div class="d-flex flex-row">
																	<div class="p-2"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<g clip-path="url(#clip0_2621_103660)">
																				<path d="M2.5 6H22.5V18H2.5V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M6.5 10L6.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M10.5 10L10.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M14.5 10L14.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																				<path d="M18.5 10L18.5 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
																			</g>
																			<defs>
																				<clipPath id="clip0_2621_103660">
																					<rect width="24" height="24" fill="white" transform="translate(0.5)" />
																				</clipPath>
																			</defs>
																		</svg></div>
																	<div class="p-2">
																		<h4 class="card-title card-gp-title" style="color:#002985;">
																			20’ GP - EGHU3826956
																		</h4>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-6">
																		<label class="label">Stacking Date</label>
																		<p class="l_val">12-06-2021 | 22:45</p>
																	</div>
																	<div class="col-md-6">
																		<input type="text" placeholder="PAY THRU DATE" class="form-control">
																	</div>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>

											<!-- ===exp 20'==== -->
											<div class="card-body tab-pane fade" id="pills20" role="tabpanel" aria-labelledby="pills20tab">
												<div class="row">
													content 2
												</div>
											</div>

											<!-- ===exp 40'==== -->
											<div class="card-body tab-pane fade" id="pills40" role="tabpanel" aria-labelledby="pills40tab">
												<div class="row">
													content 3 disini
												</div>
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
						<div class="d-flex flex-wrap">
							<span style="cursor:pointer" onclick="history.back()">
								<svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
							<p style="font-size: 12px;margin-left:10px; font-weight: 700;">Back To Create Order</p>
						</div>
						<div class="row mt-3">
							<div class="col-md-8">
								<div class="card mb-0">
									<div class="card-body">
										<div class="row">
											<div class="col-md-7 col-sm-7">
												<div class="nav-title">
													<h5>General Info</h5>
													<p style="font-size: 10px;font-family: 'Inter'; font-style: normal; font-weight: 500; letter-spacing: 0.02em; color: #8C8CA2;">Requirement data that can be used on all services.</p>
												</div>
											</div>
											<div class="col-md-5 col-sm-5" style="text-align: end;">
												<button type="button" class="btn btn-outline-secondary" style="font-size: 12px;border-radius:10px; border: 1 px solid #8C8CA2;" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Cancel Order</button>
												<button type="button" class="btn btn-primary" style="font-size: 12px; border-radius:10px; background:#497DF5;;" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-booking">Booking Now</button>
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
									<p>Please, review your order before you will process into the next step (booking now)</p>
								</div>
								<!-- 
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<input type="checkbox" style="width: 20px; height: 20px;" id="checkallList">
										<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em;">Select All</label>
									</div>
								</div> -->

								<div class="row mt-3">
									<!-- <div class="col-md-1 col-sm-1">
										<input type="checkbox" class="checkitemlist" id="checkall2" style="width: 20px; height: 20px;">
									</div> -->

									<div class="col-md-12 col-sm-12">
										<div class="card">
											<div class="card-header bg-transparent border-bottom">
												<h6>E-Port</h6>
												<p class="description">Port Order Detail</p>
											</div>
											<div class="card-body p-4">
												<div class="row">
													<div class="col-md-4 col-sm-4">
														<label class="t-title description">Customs Doc. Type</label>
														<p class="t-desc">NPE</p>
													</div>
													<div class="col-md-4 col-sm-4">
														<label class="t-title description">Request Doc. Number</label>
														<p class="t-desc">NPE_1188115</p>
													</div>
													<div class="col-md-4 col-sm-4">
														<label class="t-title description">Request Doc. Date</label>
														<p class="t-desc">21/04/2022</p>
													</div>
													<div class="col-md-4 col-sm-4">
														<label class="t-title description">Response Doc. Number</label>
														<p class="t-desc">PEB_11KUI899</p>
													</div>
													<div class="col-md-4 col-sm-4">
														<label class="t-title description">Response Doc. Date</label>
														<p class="t-desc">21/04/2022</p>
													</div>

													<div class="row">
														<div class="col-md-6">
															<div class="card">
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-12">
																			<label style="font-weight: 700; font-size: 9px; color: #FFFFFF; background: #4CAF50; padding:10px;    padding: 6px 21px; border-radius: 24px;">STACKED</label>
																			<h4 class="card-title card-gp-title" style="font-weight: 500;font-size: 14px;color: #002985;">
																				<span>
																					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<g filter="url(#filter0_d_1338_38064)">
																							<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																						</g>
																						<defs>
																							<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																								<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
																								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
																								<feOffset dy="4"></feOffset>
																								<feGaussianBlur stdDeviation="2"></feGaussianBlur>
																								<feComposite in2="hardAlpha" operator="out"></feComposite>
																								<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
																								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064"></feBlend>
																								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape"></feBlend>
																							</filter>
																						</defs>
																					</svg>
																				</span>20’ GP - EGHU3826956
																			</h4>
																		</div>
																		<!-- <div class="col-md-2" style="text-align:end;">
																			<input type="checkbox" class="chk_custom checkitemlist2">
																		</div> -->
																	</div>
																	<div class="row">
																		<div class="col-md-6">
																			<label class="label" style="font-weight: 700;font-size: 10px;color: #0E0E2C;">STACKING DATE</label>
																			<p class="l_val" style="font-weight: 400;font-size: 12px;">12-06-2021 | 22:45</p>
																		</div>
																		<div class="col-md-6">
																			<label class="label" style="font-weight: 700;font-size: 10px;color: #0E0E2C;">PAY THRU DATE</label>
																			<p class="l_val" style="font-weight: 400;font-size: 12px;">12-06-2021 | 23:20</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<div class="card">
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-12">
																			<label style="font-weight: 700; font-size: 9px; color: #FFFFFF; background: #4CAF50; padding:10px;    padding: 6px 21px; border-radius: 24px;">STACKED</label>
																			<h4 class="card-title card-gp-title" style="font-weight: 500;font-size: 14px;color: #002985;">
																				<span>
																					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<g filter="url(#filter0_d_1338_38064)">
																							<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																							<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																						</g>
																						<defs>
																							<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																								<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
																								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
																								<feOffset dy="4"></feOffset>
																								<feGaussianBlur stdDeviation="2"></feGaussianBlur>
																								<feComposite in2="hardAlpha" operator="out"></feComposite>
																								<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
																								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064"></feBlend>
																								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape"></feBlend>
																							</filter>
																						</defs>
																					</svg>
																				</span>20’ GP - EGHU3826956
																			</h4>
																		</div>
																		<!-- <div class="col-md-2" style="text-align:end;">
																			<input type="checkbox" class="chk_custom checkitemlist2">
																		</div> -->
																	</div>
																	<div class="row">
																		<div class="col-md-6">
																			<label class="label" style="font-weight: 700;font-size: 10px;color: #0E0E2C;">STACKING DATE</label>
																			<p class="l_val" style="font-weight: 400;font-size: 12px;">12-06-2021 | 22:45</p>
																		</div>
																		<div class="col-md-6">
																			<label class="label" style="font-weight: 700;font-size: 10px;color: #0E0E2C;">PAY THRU DATE</label>
																			<p class="l_val" style="font-weight: 400;font-size: 12px;">12-06-2021 | 23:20</p>
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

							<div class="col-md-4">
								<div class="card">
									<div class="card-header bg-transparent border-bottom">
										<h6>Payment Summary</h6>
										<p class="description">This is your payment summary from your order</p>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12" align="center">
												<div id="p_details" class="mb-5 mt-5">
													<svg width="57" height="61" viewBox="0 0 57 61" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M25.8418 28.3442H44.294C46.51 28.3442 48.294 30.1282 48.294 32.3442V54.573C48.294 56.789 46.51 58.573 44.294 58.573H25.8418C23.6258 58.573 21.8418 56.789 21.8418 54.573V32.3442C21.8418 30.1282 23.6258 28.3442 25.8418 28.3442Z" fill="#E4EBF0" />
														<path d="M6.49117 6.02931C3.20176 6.02931 0.49707 8.734 0.49707 12.0234V55.0008C0.49707 58.2902 3.20176 60.9949 6.49117 60.9949H44.4931C47.7825 60.9949 50.502 58.2902 50.502 55.0008V27.7892C50.5064 26.6785 49.6049 25.7769 48.4941 25.7813C47.3892 25.7851 46.4967 26.6842 46.501 27.7892V55.0008C46.501 56.1434 45.6357 56.9939 44.4931 56.9939H6.49117C5.34858 56.9939 4.49805 56.1434 4.49805 55.0008V12.0234C4.49805 10.8808 5.34858 10.0303 6.49117 10.0303H13.9321C15.0371 10.0347 15.9362 9.14215 15.94 8.03719C15.9444 6.92646 15.0428 6.02493 13.9321 6.02931H6.49117ZM37.3032 6.02931C36.1982 6.03311 35.3057 6.93223 35.3101 8.03719C35.3138 9.13638 36.204 10.0265 37.3032 10.0303H44.4931C45.6357 10.0303 46.501 10.8808 46.501 12.0234V12.9978C46.5048 14.097 50.4982 14.1028 50.502 12.9978V12.0234C50.502 8.73399 47.7825 6.02931 44.4931 6.02931H37.3032Z" fill="#CDD0D6" />
														<path d="M18.1251 0.994629C14.8357 0.994629 12.1162 3.71408 12.1162 7.00349V8.9966C12.1162 12.286 14.8357 14.9907 18.1251 14.9907H32.8741C36.1635 14.9907 38.8682 12.286 38.8682 8.9966V7.00349C38.8682 3.71409 36.1635 0.994629 32.8741 0.994629H18.1251ZM18.1251 4.99561H32.8741C34.0167 4.99561 34.8672 5.8609 34.8672 7.00349V8.9966C34.8672 10.1392 34.0167 10.9897 32.8741 10.9897H18.1251C16.9825 10.9897 16.1172 10.1392 16.1172 8.9966V7.00349C16.1172 5.86091 16.9825 4.99561 18.1251 4.99561Z" fill="#5D5D6D" />
														<path d="M15.1211 19.0654C14.0219 19.0692 13.1317 19.9593 13.1279 21.0585C13.1236 22.1635 14.0161 23.0626 15.1211 23.0664H17.2588C18.3638 23.0626 19.2563 22.1635 19.2519 21.0585C19.2482 19.9593 18.358 19.0692 17.2588 19.0654H15.1211Z" fill="#CDD0D6" />
														<path d="M12.1162 47.8013C11.017 47.8051 10.1268 48.6952 10.1231 49.7944C10.1187 50.8994 11.0112 51.7985 12.1162 51.8023H25.219C26.3298 51.8067 27.2313 50.9052 27.2269 49.7944C27.2231 48.6895 26.324 47.7969 25.219 47.8013H12.1162Z" fill="#CDD0D6" />
														<path d="M52.1996 11.7896C49.5949 9.78078 45.7931 10.2773 43.7843 12.8821L23.0855 39.7226C21.382 41.9314 21.461 44.6378 21.7124 46.7059C21.9639 48.774 22.5392 50.4116 22.5392 50.4116C22.7951 51.1581 23.4659 51.6843 24.2518 51.7551C24.2518 51.7551 26.0012 51.9122 28.0904 51.6518C30.1796 51.3913 32.8398 50.8075 34.5569 48.5809L55.2705 21.7404C57.2793 19.1356 56.7827 15.3339 54.178 13.325L52.1996 11.7896ZM49.7636 14.9638L51.742 16.4845C52.6467 17.1822 52.7941 18.3848 52.0963 19.2896L31.3974 46.1449C30.8435 46.8631 29.2252 47.4781 27.6032 47.6803C26.7524 47.7864 26.578 47.731 26.0234 47.7249C25.8853 47.1983 25.7858 47.0572 25.6839 46.219C25.4892 44.6183 25.6773 42.9097 26.2449 42.1738L46.9585 15.3184C47.6563 14.4137 48.8588 14.2663 49.7636 14.9641L49.7636 14.9638Z" fill="#5D5D6D" />
														<path d="M15.1211 27.3154C14.0219 27.3192 13.1317 28.2093 13.1279 29.3085C13.1236 30.4135 14.0161 31.3126 15.1211 31.3164H17.2588C18.3638 31.3126 19.2563 30.4135 19.2519 29.3085C19.2482 28.2093 18.358 27.3192 17.2588 27.3154H15.1211Z" fill="#CDD0D6" />
														<path d="M15.1211 35.6904C14.0219 35.6942 13.1317 36.5843 13.1279 37.6835C13.1236 38.7885 14.0161 39.6876 15.1211 39.6914H17.2588C18.3638 39.6876 19.2563 38.7885 19.2519 37.6835C19.2482 36.5843 18.358 35.6942 17.2588 35.6904H15.1211Z" fill="#CDD0D6" />
													</svg>

													<p class="mt-4 description">There’s no information to show. Please select which services should be process.</p>
												</div>
												<div id="p_details2" style="display:none;" class="">
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
																		<hr />
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
												<!-- <a class="btn btn-secondary w-100 mt-5" href="<?= site_url('payment') ?>" id="btn-mthd" disabled>Select Payment Method</a> -->
												<!--<button type="button" class="btn btn-outline-light waves-effect mt-4 w-100" style="border: none !important">Cancel Order</button>-->
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
	function nextSteps() {
		$("#done").show();
	}

	function selectTerminal(id) {
		if (id != "") {
			$('#accordionExample1').fadeIn(300);
			$('#accordionExample').fadeIn(300);
			//$('#basic-pills-wizard').fadeIn(300);
		} else {
			$('#accordionExample1').fadeOut(300);
			$('#accordionExample').fadeOut(300);
			//$('#basic-pills-wizard').fadeOut(300);
		}
	}

	function changeCont(obj) {
		if (obj.value == "default") {
			$(obj).parent().find("label").text("")
			$(obj).parent().find("select").css('width', '100%')
		} else {
			let split = obj.value.split("-");
			$(obj).parent().find("label").text(split[1].trim())
			$(obj).parent().find("select").css('width', '95px')
		}
	}

	function counting(act, obj) {
		let vals = parseInt($(obj).parent().find("label").text())

		if (act == "min") {
			if (vals == 0) {
				$(obj).parent().find("label").text("0")
			} else {
				$(obj).parent().find("label").text((vals - 1));
			}
		} else {

			$(obj).parent().find("label").text((vals + 1));
		}
	}

	$("#checkall").change(function() {
		$(".checkitem").prop("checked", $(this).prop("checked"))
	})
	$(".checkitem").change(function() {
		if ($(this).prop("checked") == false) {
			$("#checkall").prop("checked", false)
		}
		if ($(".checkitem:checked").length == $(".checkitem").length) {
			$("#checkall").prop("checked", true)
		}
	})

	$("#checkallList").change(function() {
		$(".checkitemlist").prop("checked", $(this).prop("checked"))
	})
	$(".checkitemlist").change(function() {
		if ($(this).prop("checked") == false) {
			$("#checkallList").prop("checked", false)
		}
		if ($(".checkitemlist:checked").length == $(".checkitemlist").length) {
			$("#checkallList").prop("checked", true)
		}
	})

	$("#checkall2").change(function() {
		$(".checkitemlist2").prop("checked", $(this).prop("checked"))
	})
	$(".checkitemlist2").change(function() {
		if ($(this).prop("checked") == false) {
			$("#checkall2").prop("checked", false)
		}
		if ($(".checkitemlist2:checked").length == $(".checkitemlist2").length) {
			$("#checkall2").prop("checked", true)
		}
	})

	$(document).ready(function() {
		$('#basic-pills-wizard').bootstrapWizard();
	});

	function ChangeText(oFileInput, sTargetID) {
		document.getElementById(sTargetID).value = oFileInput.value;
	}
</script>


<!--  Extra Large modal view NPWP -->
<form action="" method="get">
	<div class="modal fade bs-example-modal-xl" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myExtraLargeModalLabel">On Behalf Customer</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row mb-2">
						<div class="col-md-10 col-sm-10">
							<input type="text" class="form-control" />
						</div>
						<div class="col-md-2 col-sm-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#addModal">
								<svg width="97" height="32" viewBox="0 0 97 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 4C0 1.79086 1.79086 0 4 0H93C95.2091 0 97 1.79086 97 4V28C97 30.2091 95.2091 32 93 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
									<path d="M32.3335 10V12.6667C32.3335 12.8435 32.4037 13.013 32.5288 13.1381C32.6538 13.2631 32.8234 13.3333 33.0002 13.3333H35.6668" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M34.3335 22H27.6668C27.3132 22 26.9741 21.8595 26.724 21.6095C26.474 21.3594 26.3335 21.0203 26.3335 20.6667V11.3333C26.3335 10.9797 26.474 10.6406 26.724 10.3905C26.9741 10.1405 27.3132 10 27.6668 10H32.3335L35.6668 13.3333V20.6667C35.6668 21.0203 35.5264 21.3594 35.2763 21.6095C35.0263 21.8595 34.6871 22 34.3335 22Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M31 15.3333V19.3333" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M29 17.3333H33" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M49.304 20H47.3268L50.3395 11.2727H52.7174L55.7259 20H53.7486L51.5626 13.267H51.4944L49.304 20ZM49.1805 16.5696H53.8509V18.0099H49.1805V16.5696ZM60.1101 20H57.0163V11.2727H60.1357C61.0135 11.2727 61.7692 11.4474 62.4027 11.7969C63.0362 12.1435 63.5234 12.642 63.8643 13.2926C64.2081 13.9432 64.38 14.7216 64.38 15.6278C64.38 16.5369 64.2081 17.3182 63.8643 17.9716C63.5234 18.625 63.0334 19.1264 62.3942 19.4759C61.7578 19.8253 60.9964 20 60.1101 20ZM58.8615 18.419H60.0334C60.5788 18.419 61.0376 18.3224 61.4098 18.1293C61.7848 17.9332 62.0661 17.6307 62.2536 17.2216C62.4439 16.8097 62.5391 16.2784 62.5391 15.6278C62.5391 14.983 62.4439 14.456 62.2536 14.0469C62.0661 13.6378 61.7862 13.3366 61.4141 13.1435C61.0419 12.9503 60.5831 12.8537 60.0376 12.8537H58.8615V18.419ZM69.0806 20H65.9868V11.2727H69.1061C69.984 11.2727 70.7396 11.4474 71.3732 11.7969C72.0067 12.1435 72.4939 12.642 72.8348 13.2926C73.1786 13.9432 73.3504 14.7216 73.3504 15.6278C73.3504 16.5369 73.1786 17.3182 72.8348 17.9716C72.4939 18.625 72.0038 19.1264 71.3646 19.4759C70.7283 19.8253 69.9669 20 69.0806 20ZM67.832 18.419H69.0038C69.5493 18.419 70.0081 18.3224 70.3803 18.1293C70.7553 17.9332 71.0365 17.6307 71.224 17.2216C71.4144 16.8097 71.5095 16.2784 71.5095 15.6278C71.5095 14.983 71.4144 14.456 71.224 14.0469C71.0365 13.6378 70.7567 13.3366 70.3845 13.1435C70.0124 12.9503 69.5536 12.8537 69.0081 12.8537H67.832V18.419Z" fill="#4A4A68" />
								</svg>
							</a>

						</div>

					</div>
					<table style="width:100%; font-size:12px;">
						<tr>
							<th>Onbehalf NPWP Number</th>
							<th>Onbehalf NPWP Name</th>
							<th>Onbehalf NPWP Address</th>
							<th>Attachment</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>90.000.000.0-000.000</td>
							<td>Rizki Fatimah</td>
							<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
								RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
							<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
							<td>
								<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
								<div class="mt-2">
									<a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
										<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
											<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
										<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
											<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
											<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
										</svg>
									</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>90.000.000.0-000.000</td>
							<td>Rizki Fatimah</td>
							<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
								RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
							<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
							<td>
								<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
								<div class="mt-2">
									<a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
										<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
											<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
										<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
											<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
											<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
										</svg>
									</a>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>

<!--  Extra Large modal Add NPWP -->
<form action="" method="post">
	<div class="modal fade bs-example-modal-xl2" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myExtraLargeModalLabel2">Add On Behalf Customer</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" name="nameCustomer" class="form-control" placeholder="Onbehalf of Customer Name" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<input type="text" name="numberCustomer" class="form-control" placeholder="Onbehalf of Customer Number" />
						</div>
						<div class="col-md-6">
							<div class="input-group" name="upload" onclick="javascript:document.getElementById('file').click();">
								<input class="form-control" style="border-color:#86A8F8; color:#0D51F1" id="txt" type="text" value="Upload Onbhealf Of Customer">
								<img src="<?php echo base_url('assets/images/v4-input-file-icon.png'); ?>" class="input-group-text" style="border-color:#86A8F8" />
								</input>
							</div>
							<span style="font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2;">must in pdf file format</span>
							<input id="file" type="file" style='visibility: hidden;' onchange="ChangeText(this, 'txt');" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<label>Onbehalf NPWP Address</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select" name="province">
								<option>Province</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select" name="city">
								<option>City</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select" name="district">
								<option>District</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select" name="area">
								<option>Area</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control" name="address" placeholder="Address" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control" name="postalCode" placeholder="Postal Code" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="wrapper-buttons-dialog wrapper-w-loader">
							<button class="btn-modal-dialog btn-dialog-cancel" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" style="width: 50%">Discard</button>
							<button class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </button>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</form>

<!--  Extra Large modal Edit NPWP -->
<form action="" method="post">
	<div class="modal fade bs-example-modal-xl2" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myExtraLargeModalLabel2">Edit On Behalf Customer</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" name="nameCustomer" class="form-control" placeholder="Onbehalf of Customer Name" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<input type="text" name="numberCustomer" class="form-control" placeholder="Onbehalf of Customer Number" />
						</div>
						<div class="col-md-6">
							<div class="input-group" name="upload" onclick="javascript:document.getElementById('file2').click();">
								<input class="form-control" style="border-color:#86A8F8; color:#0D51F1" id="uploadDocument" type="text" value="Upload Onbhealf Of Customer">
								<img src="<?php echo base_url('assets/images/v4-input-file-icon.png'); ?>" class="input-group-text" style="border-color:#86A8F8" />
								</input>
							</div>
							<span style="font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2;">must in pdf file format</span>
							<input id="file2" type="file" style='visibility: hidden;' name="img" onchange="ChangeText(this, 'uploadDocument');" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<label>Onbehalf NPWP Address</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select" name="province">
								<option>Province</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select" name="city">
								<option>City</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select" name="district">
								<option>District</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select" name="area">
								<option>Area</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control" name="address" placeholder="Address" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control" name="postalCode" placeholder="Postal Code" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="wrapper-buttons-dialog wrapper-w-loader">
							<button class="btn-modal-dialog btn-dialog-cancel" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" style="width: 50%">Discard</button>
							<button class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </button>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</form>
<!-- end modal edit npwp -->

<!-- Modal Delete On Behalf Customer-->
<form action="" method="post">
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete On Behalf Customer</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<h4>Are you sure want to delete this On Behalf Customer?</h4>

				</div>
				<div class="modal-footer">
					<input type="hidden" name="idCustomer" class="customerId">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="wrapper-buttons-dialog wrapper-w-loader">
							<button class="btn-modal-dialog btn-dialog-cancel" data-dismiss="modal" style="width: 50%">Discard</button>
							<button class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- End Modal Delete On Behalf Customer-->

<!-- modal cancel order -->
<form action="" method="post">
	<div class="modal fade bs-example-modal-center" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-content">
					<div class="modal-header">
						<div>
							<h5 class="modal-title" style="font-weight: 700;font-size: 16px;color: #4A4A68;">Confirmation</h5>
							<p class="description">You can save or cancel this order</p>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" align="center">
						<div>
							<svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M40.763 135.562C39.7316 135.562 38.8693 134.778 38.7719 133.751L36.44 109.16C36.3287 107.986 37.2519 106.971 38.431 106.971L102.024 106.971C103.217 106.971 104.144 108.008 104.011 109.194L101.256 133.785C101.142 134.797 100.286 135.562 99.268 135.562L40.763 135.562Z" fill="#1627A1" />
								<path d="M78.0603 73.8184C76.7876 73.8184 75.9391 74.6668 75.9391 75.9396L73.8179 121.97C73.8179 123.243 74.6664 124.091 75.9391 124.091C76.9997 124.091 78.0603 123.243 78.0603 121.97L80.1815 75.9396C80.1815 74.879 79.1209 73.8184 78.0603 73.8184Z" fill="#1C3E58" />
								<path d="M61.9391 73.8184C60.6664 73.8184 59.8179 74.879 59.8179 75.9396L61.9391 121.97C61.9391 123.03 62.9997 124.091 64.0603 124.091C65.333 124.091 66.1815 123.03 66.1815 121.97L64.0603 75.9396C64.0603 74.6668 62.9997 73.8184 61.9391 73.8184Z" fill="#1C3E58" />
								<path d="M94.1816 73.8179C92.9088 73.6058 91.8482 74.4542 91.8482 75.5148L85.2725 121.545C85.0603 122.606 85.9088 123.878 86.9694 123.878C88.03 124.091 89.3028 123.242 89.3028 122.182L95.8785 76.3633C96.0906 75.0906 95.2422 74.03 94.1816 73.8179Z" fill="#1C3E58" />
								<path d="M45.8181 73.8176C44.7575 74.0298 43.909 75.0904 44.1211 76.151L50.6969 122.181C50.909 123.242 51.7575 124.09 52.8181 124.09C54.0908 124.09 55.1514 123.03 54.9393 121.757L48.3635 75.7267C48.1514 74.454 47.0908 73.6055 45.8181 73.8176Z" fill="#1C3E58" />
								<path d="M113.06 37.9696C115.818 35.212 115.818 30.9696 113.06 28.212C110.727 25.8787 91.6362 6.99988 88.8787 4.03018C86.3332 1.48473 81.6665 1.48473 79.1211 4.03018C70.8484 12.3029 47.7271 35.4241 38.6059 44.5453C37.5453 45.6059 36.909 46.6665 36.6968 48.1514H29.6968C25.2423 48.1514 21.6362 51.7575 21.6362 56.212C21.6362 60.6665 25.2423 64.0605 29.4847 64.2726L36.6968 130.242C37.1211 134.485 40.7271 137.879 44.9696 137.879H95.0302C99.2726 137.879 102.879 134.697 103.303 130.454L110.515 64.4847C114.97 64.4847 118.364 60.8787 118.364 56.4241C118.364 51.9696 114.757 48.3635 110.303 48.3635H102.667C103.091 48.1514 113.273 37.7575 113.06 37.9696ZM110.091 34.9999L103.939 41.1514C100.545 36.4847 100.545 29.909 103.939 25.2423L110.091 31.3938C111.151 32.4544 111.151 33.9393 110.091 34.9999ZM85.0605 60.0302H50.909C55.5756 53.6665 55.3635 44.7575 50.4847 38.6059L72.9696 16.1211C79.3332 21.212 88.4544 21.212 94.8181 16.1211L100.757 22.0605C95.6665 28.4241 95.6665 37.5453 100.757 43.909L85.0605 60.0302ZM82.0908 7.212C83.1514 6.1514 84.8484 6.1514 85.909 7.212L92.0605 13.3635C87.3938 16.7575 80.8181 16.7575 76.1514 13.3635L82.0908 7.212ZM41.3635 47.7271L47.515 41.5756C50.909 46.2423 50.909 52.6059 47.515 57.4847L41.3635 51.3332C40.515 50.4847 40.515 48.7878 41.3635 47.7271ZM25.8787 56.212C25.8787 54.0908 27.5756 52.3938 29.6968 52.3938H37.1211C37.5453 53.0302 37.9696 53.6665 38.3938 54.3029L43.909 59.8181H31.1817H29.6968C27.5756 60.0302 25.8787 58.3332 25.8787 56.212ZM99.0605 129.818C98.8484 131.939 97.1514 133.636 95.0302 133.636H44.9696C42.8484 133.636 41.1514 131.939 40.9393 129.818L33.7271 64.2726H106.273L99.0605 129.818ZM110.303 52.6059C112.424 52.6059 114.121 54.3029 114.121 56.4241C114.121 58.5453 112.424 60.2423 110.303 60.2423H108.606H90.9999L98.6362 52.6059H110.303Z" fill="#1C3E58" />
							</svg>
						</div>
						<p style="color: #818181;font-weight: 400;font-size: 14px;padding: 16px 43px;">Do you want to cancel this order? Orders will not be processed</p>
						<div class="row">
							<div class="col-md-6">
								<button type="button" class="btn cancelOrderodal waves-effect waves-light" data-bs-dismiss="modal">Cancel Order</button>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn saveOrderModal waves-effect waves-light">Keep Order</button>
							</div>
						</div>
					</div>
				</div><!-- /.modal-content -->
			</div>
		</div>
	</div>
</form>
<!-- /.modal -->


<div class="modal fade bs-example-modal-center-booking" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div>
					<h5 class="modal-title" style="font-weight: 700;font-size: 16px;color: #4A4A68;">Booking Now</h5>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" align="center">

				<p style="color: #818181;font-weight: 400;font-size: 14px;">Your order will be process after you confirm this order and system will be show the information of payment.</p>
				<div style="text-align: end;">
					<a href="<?php echo base_url('detil-payment') ?>" style="width:25%;" type="button" class="btn btn-primary waves-effect waves-light">Confirm</a>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->