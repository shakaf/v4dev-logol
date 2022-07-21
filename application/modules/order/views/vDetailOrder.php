<style>
	.card-title {
		font-size: 14px;
	}

	.card-subtitle {
		color: #8C8CA1 !important;
		font-weight: 500;
		font-size: 10px;
		line-height: 160%;
	}

	.label {
		font-weight: 600;
		font-size: 10px;
		color: #4A4A68;
	}

	.l_val {
		font-style: normal;
		font-weight: 500;
		font-size: 12px;
		color: #0E0E2C;
	}

	.card-gp {
		border: #ECF1F4 solid 1px;
		border-radius: 8px;
	}

	.card-gp-title {
		color: #002985;
		font-weight: 500;
		font-size: 14px;
	}

	.payment-title {
		font-weight: 500;
		font-size: 12px;
		line-height: 16px;
		color: #2B313B;
	}

	.payment-total {
		font-style: normal;
		font-weight: 700;
		font-size: 14px;
		color: #2B313B;
	}

	.payment-total-amount {
		font-style: normal;
		font-weight: 700;
		font-size: 14px;
		color: #044795;
	}

	.payment-grey {
		font-weight: 400;
		font-size: 12px;
		color: #576175;
	}

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

	.a-btn.active {
		background: #002985;
		color: white;
	}
</style>

<div class="page-content" style="background-color: #F8F8F9; ">
	<div class="container-fluid">
		<!-- <div class="row" style="margin-top:1em; margin-bottom: 2em;">
			<h4 style="font-size: 16px;">Detail Order</h4>
		</div> -->
		<div class="row">
			<div class="d-flex flex-wrap">
				<span style="cursor:pointer" onclick="history.back()">
					<svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</span>
				<h4 style="font-size: 16px;margin-left:10px">Detail Order</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">

			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">General Info</h4>
						<p class="description">Requirement data that can be used on all services.</p>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<label class="label">Type of Order</label>
								<p class="l_val">Export</p>
							</div>
							<div class="col-md-8">
								<label class="label">NPWP</label>
								<p class="l_val">08.178.554.2-123.321 - PT. TEGUH ABADI JAYA</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="label">DO Number</label>
								<p class="l_val">DO_11233RBG_22</p>
							</div>
							<div class="col-md-4">
								<label class="label">DO Date</label>
								<p class="l_val">22/04/2022</p>
							</div>
							<div class="col-md-4">
								<label class="label">Internal Ref. Number</label>
								<p class="l_val">MRS123456</p>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-9">
								Your order will be canceled automatically, if you do not complete the payment by the specified time limit!
							</div>
							<div class="col-md-3">

							</div>
						</div>
					</div>
				</div> -->
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Service Details</h4>
						<h6 class="card-subtitle">Specific data that required by each services will shown here.</h6>
						<style>
							.a-btn {
								padding-left: 40px;
								padding-right: 40px;

								padding-top: 10px;
								padding-bottom: 10px;

								border-radius: 21px;
							}
						</style>
						<div style="margin-top:25px;" class="multipleService">
							<div class="row">
								<ul class="nav nav-pills" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="a-btn active" id="Edepot" data-bs-toggle="pill" data-bs-target="#pills-Edepot" type="button" role="tab" aria-selected="true">E-Depot</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="a-btn" id="pills-Eport1" data-bs-toggle="pill" data-bs-target="#pills-port2" type="button" role="tab" aria-selected="false">E-Port</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- ====content depot===== -->
					<div class="tab-content" id="pills-tabContent">
						<div class="card-body tab-pane fade show active" id="pills-Edepot" role="tabpanel" aria-labelledby="Edepot">
							conten deport
						</div>

						<!-- ====content eport====== -->
						<div class="card-body tab-pane fade" id="pills-port2" role="tabpanel" aria-labelledby="pills-Eport1">
							<div class="row">
								<div class="col-md-4">
									<label class="label">Order ID</label>
									<p class="l_val">LG/202105/I0159/022</p>
								</div>
								<div class="col-md-8">
									<label class="label">Terminal</label>
									<p class="l_val">NPCT 1</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label class="label">Request Doc. Type</label>
									<p class="l_val">NPE</p>
								</div>
								<div class="col-md-4">
									<label class="label">Request Doc. Number</label>
									<p class="l_val">2345432345</p>
								</div>
								<div class="col-md-4">
									<label class="label">Request Doc. Date</label>
									<p class="l_val">21/04/2022</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label class="label">Response Doc. Type</label>
									<p class="l_val">Export</p>
								</div>
								<div class="col-md-4">
									<label class="label">Response Doc. Number</label>
									<p class="l_val">2345432345</p>
								</div>
								<div class="col-md-4">
									<label class="label">Response Doc. Number</label>
									<p class="l_val">21/04/2022</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title card-gp-title">
												<span>
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_1338_38064)">
															<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														</g>
														<defs>
															<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix" />
																<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
																<feOffset dy="4" />
																<feGaussianBlur stdDeviation="2" />
																<feComposite in2="hardAlpha" operator="out" />
																<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
																<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
															</filter>
														</defs>
													</svg>
												</span>20’ GP - EGHU3826956
											</h4>
											<div class="row">
												<div class="col-md-6">
													<label class="label">Yard Opening Time</label>
													<p class="l_val">12-06-2021 | 22:45</p>
												</div>
												<div class="col-md-6">
													<label class="label">Yard Closing Time</label>
													<p class="l_val">12-06-2021 | 23:20</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title card-gp-title">
												<span>
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_1338_38064)">
															<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														</g>
														<defs>
															<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix" />
																<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
																<feOffset dy="4" />
																<feGaussianBlur stdDeviation="2" />
																<feComposite in2="hardAlpha" operator="out" />
																<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
																<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
															</filter>
														</defs>
													</svg>
												</span>20’ GP - EGHU3826956
											</h4>
											<div class="row">
												<div class="col-md-6">
													<label class="label">Yard Opening Time</label>
													<p class="l_val">12-06-2021 | 22:45</p>
												</div>
												<div class="col-md-6">
													<label class="label">Yard Closing Time</label>
													<p class="l_val">12-06-2021 | 23:20</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title card-gp-title">
												<span>
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_1338_38064)">
															<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														</g>
														<defs>
															<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix" />
																<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
																<feOffset dy="4" />
																<feGaussianBlur stdDeviation="2" />
																<feComposite in2="hardAlpha" operator="out" />
																<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
																<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
															</filter>
														</defs>
													</svg>
												</span>20’ GP - EGHU3826956
											</h4>
											<div class="row">
												<div class="col-md-6">
													<label class="label">Yard Opening Time</label>
													<p class="l_val">12-06-2021 | 22:45</p>
												</div>
												<div class="col-md-6">
													<label class="label">Yard Closing Time</label>
													<p class="l_val">12-06-2021 | 23:20</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title card-gp-title">
												<span>
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g filter="url(#filter0_d_1338_38064)">
															<path d="M6 6H26V18H6V6Z" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M10 10L10 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M14 10L14 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M18 10L18 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M22 10L22 14" stroke="#002985" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														</g>
														<defs>
															<filter id="filter0_d_1338_38064" x="0" y="0" width="32" height="32" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix" />
																<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
																<feOffset dy="4" />
																<feGaussianBlur stdDeviation="2" />
																<feComposite in2="hardAlpha" operator="out" />
																<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
																<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1338_38064" />
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1338_38064" result="shape" />
															</filter>
														</defs>
													</svg>
												</span>20’ GP - EGHU3826956
											</h4>
											<div class="row">
												<div class="col-md-6">
													<label class="label">Yard Opening Time</label>
													<p class="l_val">12-06-2021 | 22:45</p>
												</div>
												<div class="col-md-6">
													<label class="label">Yard Closing Time</label>
													<p class="l_val">12-06-2021 | 23:20</p>
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
				<!-- ===============activity log =============== -->
				<div class="card">
					<h2 class="accordion-header" id="headingOne1">
						<button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
							<div class="row">
								<div class="col-md-12">
									<h4 class="card-title">Activity Log</h4>
									<p class="description">Keep track and see your order progress</p>
								</div>
							</div>
							<a href="#" style="margin-left:20%;" id="reload" onclick="location.reload()">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M3.42211 8.62043C3.36827 8.20973 2.99169 7.92043 2.58099 7.97426C2.17029 8.0281 1.88099 8.40468 1.93483 8.81538L3.42211 8.62043ZM5.21137 2.60111C4.84207 2.78871 4.69478 3.24016 4.88238 3.60946C5.06998 3.97875 5.52144 4.12605 5.89073 3.93844L5.21137 2.60111ZM3.42847 2.7179C3.42847 2.30369 3.09268 1.9679 2.67847 1.9679C2.26425 1.9679 1.92847 2.30369 1.92847 2.7179L3.42847 2.7179ZM2.67847 6.05123H1.92847C1.92847 6.46545 2.26425 6.80123 2.67847 6.80123L2.67847 6.05123ZM6.0118 6.80123C6.42601 6.80123 6.7618 6.46545 6.7618 6.05123C6.7618 5.63702 6.42601 5.30123 6.0118 5.30123V6.80123ZM1.93483 8.81538C2.12713 10.2824 2.8475 11.6291 3.96109 12.6033L4.94874 11.4743C4.10973 10.7403 3.56699 9.72573 3.42211 8.62043L1.93483 8.81538ZM3.96109 12.6033C5.07469 13.5775 6.50517 14.1125 7.98475 14.1081L7.98027 12.6081C6.86551 12.6114 5.78776 12.2083 4.94874 11.4743L3.96109 12.6033ZM7.98475 14.1081C9.46434 14.1036 10.8916 13.5601 11.9993 12.5793L11.005 11.4562C10.1704 12.1952 9.09502 12.6047 7.98027 12.6081L7.98475 14.1081ZM11.9993 12.5793C13.1071 11.5984 13.8194 10.2475 14.0029 8.77929L12.5145 8.59324C12.3762 9.69939 11.8396 10.7172 11.005 11.4562L11.9993 12.5793ZM14.0029 8.77929C14.1864 7.31113 13.8286 5.8264 12.9964 4.60305L11.7561 5.44676C12.3832 6.36846 12.6528 7.48709 12.5145 8.59324L14.0029 8.77929ZM12.9964 4.60305C12.1641 3.3797 10.9146 2.50159 9.48163 2.1331L9.10805 3.58583C10.1877 3.86346 11.1291 4.52505 11.7561 5.44676L12.9964 4.60305ZM9.48163 2.1331C8.04866 1.7646 6.53051 1.93099 5.21137 2.60111L5.89073 3.93844C6.8846 3.43356 8.02841 3.3082 9.10805 3.58583L9.48163 2.1331ZM1.92847 2.7179L1.92847 6.05123H3.42847L3.42847 2.7179L1.92847 2.7179ZM2.67847 6.80123L6.0118 6.80123V5.30123L2.67847 5.30123L2.67847 6.80123Z" fill="#BFC9E0" />
								</svg>
							</a>
						</button>
					</h2>
					<div id="collapseOne1" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
						<div class="card-body">
							<div class="history-tl-container">
								<ul class="tl">
									<li class="tl-item active" ng-repeat="item in retailer_history">
										<div class="timestamp">
											<p style="font-size:14px; font-weight:10px; color:#0E0E2C;">11:22</p>
										</div>
										<div class="timestamp">
											<p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
										</div>
										<div class="item-title" style="font: weight 500px;">Port 20’ GP - EGHU3826956</div>
										<div class="description" style="font-weight:10px;">
											<p class="description">Shared via Whatsapp by Putri Rizki Ayu</p>
										</div>
									</li>
									<li class="tl-item" ng-repeat="item in retailer_history">
										<div class="timestamp">
											<p style="font-size:14px; font-weight:10px; color:#0E0E2C;">10:50</p>
										</div>
										<div class="timestamp">
											<p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
										</div>
										<div class="item-title" style="font: weight 500px;">Port Created</div>
										<div class="description" style="font-weight:10px;">
											<p class="description">2 of 4 loading card generated</p>
										</div>
									</li>
									<li class="tl-item" ng-repeat="item in retailer_history">
										<div class="timestamp">
											<p style="font-size:14px; font-weight:10px; color:#0E0E2C;">14:09</p>
										</div>
										<div class="timestamp">
											<p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
										</div>
										<div class="item-title" style="font: weight 500px;">Port Created</div>
										<div class="description" style="font-weight:10px;">
											<p class="description">1 of 4 loading card generated</p>
										</div>
									</li>
									<li class="tl-item" ng-repeat="item in retailer_history">
										<div class="timestamp">
											<p style="font-size:14px; font-weight:10px; color:#0E0E2C;">10:27</p>
										</div>
										<div class="timestamp">
											<p style="font-size:12px; font-weight:10px; margin-top:20px">31.01.22</p>
										</div>
										<div class="item-title" style="font: weight 500px;">Order Processed</div>
										<div class="description" style="font-weight:10px;">
											<p class="description">NPCT 1 start processing your order</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- ================payment detil =============== -->

				<div class="card">
					<h2 class="accordion-header" id="headingOne2">
						<button class="accordion-button fw-medium bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
							<div class="row">
								<div class="col-md-12">
									<h4 class="card-title">Payment Details</h4>
									<p class="description">This is your payment summary from your order.</p>
								</div>
							</div>
							<span style="margin-left:7%;" id="paid" class="badge badge-soft-info">Paid</span>
						</button>
					</h2>
					<div id="collapseOne2" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne2">
						<div class="card-body">
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">Depo Reimbursement</p>
									<p class="payment-grey">Seacon</p>
								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp. 200.000</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">Port Reimbursement</p>
									<p class="payment-grey">NPCT1</p>
								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp. 200.000</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">Platform Fee</p>
									<p class="payment-grey">8x Containers</p>
								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp. 100.000</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">Sub-Total</p>

								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp 300.000</label>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">PPh 23</p>

								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp 6.000</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="payment-title">PPn 10%</p>

								</div>
								<div class="col-md-4">
									<label class="payment-title">Rp 30.000</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="payment-total">Total Amount</p>

								</div>
								<div class="col-md-4">
									<label class="payment-total-amount">Rp 336.000</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- ========document detail==== -->
				<div class="card">
					<div class="card-header accordion-button" id="headingOne3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
						<div class="row">
							<div class="col-md-12">
								<h4 class="card-title">Document Detail</h4>
								<p class="description">All Documents generated by each service will be shown here.</p>
							</div>
						</div>
					</div>
					<div id="collapseOne3" class="row accordion-collapse collapse show card-body" aria-labelledby="headingOne3">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 multipleDetail">
									<div class="row">
										<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<a class="a-btn active" id="EloadingCard" data-bs-toggle="pill" data-bs-target="#pills-EloadingCard" type="button" role="tab" aria-controls="pills-EloadingCard" aria-selected="true">E-Loading Card</a>
											</li>
											<li class="nav-item" role="presentation">
												<a class="a-btn" id="pills-Eport" data-bs-toggle="pill" data-bs-target="#pills-port" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">E-Port</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-EloadingCard" role="tabpanel" aria-labelledby="EloadingCard">
									<div class="row mt-4">
										<input class="form-control" type="search" value="Search" id="example-search-input">
										<div class="row" style="margin-top:40px;">
											<div class="col-md-12 col-sm-12">

												<input type="checkbox" id="checkall" class="" style="width: 20px; height: 20px;">
												<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Select All</label>
												<span class="badge rounded-pill badge-soft-primary" style="margin-left: 1em;cursor:pointer" data-bs-toggle="modal" data-bs-target="#confirmEmail">Send Email</span>
												<span class="badge rounded-pill badge-soft-primary" style="cursor:pointer">Download</span>
												<span class="badge rounded-pill badge-soft-success" style="cursor:pointer">Print</span>
											</div>
										</div>
									</div>
									<div class="row card-gp" style="margin-top:40px;">
										<div class="col-md-12 col-sm-12">
											<input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
											<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
											<div class="col">
												<label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
												<svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
													<path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
													<path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
												</svg>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="20" rx="4" fill="#E7EEFE" />
													<path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
										</div>
									</div>
									<div class="row card-gp" style="margin-top:40px;">
										<div class="col-md-12 col-sm-12">
											<input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
											<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
											<div class="col">
												<label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
												<svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
													<path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
													<path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
												</svg>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="20" rx="4" fill="#E7EEFE" />
													<path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
												</svg>

											</div>
										</div>
									</div>
									<div class="row card-gp" style="margin-top:40px;">
										<div class="col-md-12 col-sm-12">
											<input type="checkbox" class="checkitem" style="width: 20px; height: 20px;">
											<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Container</label>
											<div class="col">
												<label style="font-weight: bold;margin-left:40px;">20’ GP - EGHU3826956</label>
												<svg width="74" height="20" viewBox="0 0 74 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 4C0 1.79086 1.79086 0 4 0H70C72.2091 0 74 1.79086 74 4V16C74 18.2091 72.2091 20 70 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#ECF1F4" />
													<path d="M10.7212 13V7.18182H14.5734V8.19602H11.9513V9.58239H14.3177V10.5966H11.9513V13H10.7212ZM15.5381 13V8.63636H16.7483V13H15.5381ZM16.1461 8.07386C15.9661 8.07386 15.8118 8.0142 15.683 7.89489C15.5561 7.77367 15.4927 7.62879 15.4927 7.46023C15.4927 7.29356 15.5561 7.15057 15.683 7.03125C15.8118 6.91004 15.9661 6.84943 16.1461 6.84943C16.326 6.84943 16.4794 6.91004 16.6063 7.03125C16.7351 7.15057 16.7995 7.29356 16.7995 7.46023C16.7995 7.62879 16.7351 7.77367 16.6063 7.89489C16.4794 8.0142 16.326 8.07386 16.1461 8.07386ZM19.088 7.18182V13H17.8778V7.18182H19.088ZM22.2061 13.0852C21.7573 13.0852 21.3709 12.9943 21.047 12.8125C20.7251 12.6288 20.477 12.3693 20.3027 12.0341C20.1285 11.697 20.0413 11.2983 20.0413 10.8381C20.0413 10.3892 20.1285 9.99527 20.3027 9.65625C20.477 9.31723 20.7222 9.05303 21.0385 8.86364C21.3567 8.67424 21.7298 8.57955 22.1578 8.57955C22.4457 8.57955 22.7137 8.62595 22.9618 8.71875C23.2118 8.80966 23.4296 8.94697 23.6152 9.13068C23.8027 9.31439 23.9485 9.54545 24.0527 9.82386C24.1569 10.1004 24.209 10.4242 24.209 10.7955V11.1278H20.5243V10.3778H23.0698C23.0698 10.2036 23.0319 10.0492 22.9561 9.91477C22.8804 9.7803 22.7753 9.67519 22.6408 9.59943C22.5082 9.52178 22.3538 9.48295 22.1777 9.48295C21.994 9.48295 21.8311 9.52557 21.6891 9.6108C21.5489 9.69413 21.4391 9.80682 21.3595 9.94886C21.28 10.089 21.2393 10.2453 21.2374 10.4176V11.1307C21.2374 11.3466 21.2771 11.5331 21.3567 11.6903C21.4381 11.8475 21.5527 11.9688 21.7004 12.054C21.8482 12.1392 22.0234 12.1818 22.226 12.1818C22.3605 12.1818 22.4836 12.1629 22.5953 12.125C22.7071 12.0871 22.8027 12.0303 22.8823 11.9545C22.9618 11.8788 23.0224 11.786 23.0641 11.6761L24.1834 11.75C24.1266 12.0189 24.0101 12.2538 23.834 12.4545C23.6597 12.6534 23.4343 12.8087 23.1578 12.9205C22.8832 13.0303 22.566 13.0852 22.2061 13.0852ZM27.193 13V7.18182H29.4885C29.9298 7.18182 30.3057 7.2661 30.6163 7.43466C30.9269 7.60133 31.1637 7.83333 31.3265 8.13068C31.4913 8.42614 31.5737 8.76705 31.5737 9.15341C31.5737 9.53977 31.4904 9.88068 31.3237 10.1761C31.157 10.4716 30.9156 10.7017 30.5993 10.8665C30.2849 11.0312 29.9042 11.1136 29.4572 11.1136H27.9942V10.1278H29.2584C29.4951 10.1278 29.6902 10.0871 29.8436 10.0057C29.9989 9.92235 30.1144 9.80777 30.1902 9.66193C30.2678 9.5142 30.3067 9.3447 30.3067 9.15341C30.3067 8.96023 30.2678 8.79167 30.1902 8.64773C30.1144 8.50189 29.9989 8.3892 29.8436 8.30966C29.6883 8.22822 29.4913 8.1875 29.2527 8.1875H28.4231V13H27.193ZM34.4113 13.0852C33.97 13.0852 33.5883 12.9915 33.2664 12.804C32.9463 12.6146 32.6991 12.3513 32.5249 12.0142C32.3507 11.6752 32.2635 11.2822 32.2635 10.8352C32.2635 10.3845 32.3507 9.99053 32.5249 9.65341C32.6991 9.31439 32.9463 9.05114 33.2664 8.86364C33.5883 8.67424 33.97 8.57955 34.4113 8.57955C34.8526 8.57955 35.2332 8.67424 35.5533 8.86364C35.8753 9.05114 36.1234 9.31439 36.2976 9.65341C36.4719 9.99053 36.559 10.3845 36.559 10.8352C36.559 11.2822 36.4719 11.6752 36.2976 12.0142C36.1234 12.3513 35.8753 12.6146 35.5533 12.804C35.2332 12.9915 34.8526 13.0852 34.4113 13.0852ZM34.4169 12.1477C34.6177 12.1477 34.7853 12.0909 34.9198 11.9773C35.0543 11.8617 35.1556 11.7045 35.2238 11.5057C35.2938 11.3068 35.3289 11.0805 35.3289 10.8267C35.3289 10.5729 35.2938 10.3466 35.2238 10.1477C35.1556 9.94886 35.0543 9.79167 34.9198 9.67614C34.7853 9.56061 34.6177 9.50284 34.4169 9.50284C34.2143 9.50284 34.0438 9.56061 33.9056 9.67614C33.7692 9.79167 33.666 9.94886 33.5959 10.1477C33.5277 10.3466 33.4937 10.5729 33.4937 10.8267C33.4937 11.0805 33.5277 11.3068 33.5959 11.5057C33.666 11.7045 33.7692 11.8617 33.9056 11.9773C34.0438 12.0909 34.2143 12.1477 34.4169 12.1477ZM37.5059 13V8.63636H38.6792V9.39773H38.7247C38.8042 9.12689 38.9377 8.92235 39.1252 8.78409C39.3127 8.64394 39.5287 8.57386 39.773 8.57386C39.8336 8.57386 39.8989 8.57765 39.969 8.58523C40.0391 8.5928 40.1006 8.60322 40.1537 8.61648V9.69034C40.0968 9.6733 40.0182 9.65814 39.9179 9.64489C39.8175 9.63163 39.7256 9.625 39.6423 9.625C39.4643 9.625 39.3052 9.66383 39.165 9.74148C39.0268 9.81723 38.9169 9.9233 38.8355 10.0597C38.7559 10.196 38.7162 10.3532 38.7162 10.5312V13H37.5059ZM43.4791 8.63636V9.54545H40.8513V8.63636H43.4791ZM41.4479 7.59091H42.6581V11.6591C42.6581 11.7708 42.6752 11.858 42.7092 11.9205C42.7433 11.9811 42.7907 12.0237 42.8513 12.0483C42.9138 12.0729 42.9858 12.0852 43.0672 12.0852C43.124 12.0852 43.1808 12.0805 43.2377 12.071C43.2945 12.0597 43.338 12.0511 43.3683 12.0455L43.5587 12.946C43.4981 12.965 43.4128 12.9867 43.303 13.0114C43.1932 13.0379 43.0596 13.054 42.9024 13.0597C42.6108 13.071 42.3551 13.0322 42.1354 12.9432C41.9176 12.8542 41.7481 12.7159 41.6269 12.5284C41.5056 12.3409 41.446 12.1042 41.4479 11.8182V7.59091Z" fill="#405EA3" />
													<path d="M59 5.5V7.5C59 7.63261 59.0527 7.75979 59.1464 7.85355C59.2402 7.94732 59.3674 8 59.5 8H61.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M60.5 14.5H55.5C55.2348 14.5 54.9804 14.3946 54.7929 14.2071C54.6054 14.0196 54.5 13.7652 54.5 13.5V6.5C54.5 6.23478 54.6054 5.98043 54.7929 5.79289C54.9804 5.60536 55.2348 5.5 55.5 5.5H59L61.5 8V13.5C61.5 13.7652 61.3946 14.0196 61.2071 14.2071C61.0196 14.3946 60.7652 14.5 60.5 14.5Z" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M56.5 11.5L57.5 12.5L59.5 10.5" stroke="#405EA3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M4 2H70V-2H4V2ZM72 4V16H76V4H72ZM70 18H4V22H70V18ZM2 16V4H-2V16H2ZM4 18C2.89543 18 2 17.1046 2 16H-2C-2 19.3137 0.686295 22 4 22V18ZM72 16C72 17.1046 71.1046 18 70 18V22C73.3137 22 76 19.3137 76 16H72ZM70 2C71.1046 2 72 2.89543 72 4H76C76 0.68629 73.3137 -2 70 -2V2ZM4 -2C0.686291 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
												</svg>
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="20" rx="4" fill="#E7EEFE" />
													<path d="M12 6H8C7.72386 6 7.5 6.22386 7.5 6.5V13.5C7.5 13.7761 7.72386 14 8 14H12C12.2761 14 12.5 13.7761 12.5 13.5V6.5C12.5 6.22386 12.2761 6 12 6Z" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M9.5 6.5H10.5" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M10 12.5V12.505" stroke="#405EA3" stroke-linecap="round" stroke-linejoin="round" />
												</svg>

											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-port" role="tabpanel" aria-labelledby="pills-Eport">
									<div class="row mt-3">
										<input class="form-control" type="search" value="Search" id="example-search-input">
									</div>
									<div class="row mt-5">
										<svg width="86" height="87" viewBox="0 0 86 87" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1573_142150)">
												<g opacity="0.08">
													<path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M47.713 86.1909L18.192 69.2513C18.0657 69.1789 17.9609 69.075 17.888 68.95C17.8151 68.8249 17.7767 68.6832 17.7767 68.5389C17.7767 68.3946 17.8151 68.2528 17.888 68.1278C17.9609 68.0028 18.0657 67.8989 18.192 67.8265L27.8952 62.1993C28.2631 61.9894 28.6803 61.8789 29.1051 61.8789C29.5298 61.8789 29.9471 61.9894 30.315 62.1993L59.3969 78.8725C59.5641 78.9687 59.7028 79.1066 59.7992 79.2724C59.8956 79.4381 59.9463 79.626 59.9463 79.8172C59.9463 80.0084 59.8956 80.1962 59.7992 80.362C59.7028 80.5278 59.5641 80.6656 59.3969 80.7619L50.0429 86.1875C49.6897 86.3922 49.2878 86.5003 48.8784 86.5009C48.469 86.5015 48.0668 86.3945 47.713 86.1909V86.1909Z" fill="black" />
												</g>
												<path d="M13.9755 25.1016V44.5764C14.023 45.4266 14.2724 46.2539 14.7036 46.9911C15.1348 47.7284 15.7357 48.3548 16.4574 48.8198L36.6797 60.3612L36.334 63.7232L31.3908 60.884C31.0944 60.7128 30.7574 60.6227 30.4142 60.6227C30.071 60.6227 29.734 60.7128 29.4377 60.884L21.5666 65.4178C21.4585 65.4794 21.3693 65.5688 21.3084 65.6765C21.2475 65.7842 21.2173 65.9061 21.2209 66.0294V68.011C21.2159 68.1337 21.2456 68.2552 21.3066 68.3621C21.3677 68.4689 21.4577 68.5568 21.5666 68.6158C21.5666 68.6158 47.5927 83.5601 47.6792 83.6045C47.8902 83.7295 48.1336 83.7906 48.3793 83.7803C48.6251 83.77 48.8624 83.6887 49.0619 83.5465C49.1241 83.5191 56.736 79.1048 56.736 79.1048C56.8673 79.0288 56.9766 78.9207 57.0535 78.7908C57.1303 78.661 57.1722 78.5138 57.175 78.3634C57.175 78.3634 57.175 76.0572 57.175 76.0538C57.18 75.895 57.1415 75.7379 57.0636 75.599C56.9858 75.4601 56.8713 75.3445 56.7325 75.2646L47.3992 69.856L47.3335 66.4428L67.6076 77.991C68.4545 78.4728 69.1458 78.606 69.5503 78.5035C69.5503 78.5035 72.3157 77.0412 72.3157 77.0275C72.7962 76.7884 73.0969 76.228 73.0969 75.4183C73.0969 75.4183 73.4703 36.192 72.9863 33.9917C72.7582 32.9667 71.7315 31.518 70.9503 30.8279C70.7394 30.6434 34.6747 10.024 34.654 10.0343L20.2564 1.8036L18.7251 0.928942C18.4765 0.756616 18.1887 0.647459 17.8873 0.61111C17.5858 0.574761 17.28 0.61234 16.9967 0.720528L14.8397 2.21018C14.2244 2.37418 13.8234 2.97209 13.8234 3.91849L14.0826 8.56511" fill="white" />
												<path d="M14.3547 24.0923V6.80078L70.2751 38.8454V74.4637L20.9053 46.1945L14.0021 42.0502L13.9398 25.0866L14.3547 24.0923Z" fill="white" />
												<path d="M18.1513 3.51047L15.3029 1.89099L17.0313 0.900167C17.262 0.768524 17.5237 0.699219 17.7901 0.699219C18.0565 0.699219 18.3182 0.768524 18.5489 0.900167L20.1978 1.83632L18.1513 3.51047Z" fill="#1627A1" />
												<path d="M20.1969 1.83203L70.5277 30.46C70.763 30.5976 70.9831 30.759 71.1845 30.9417C71.9914 31.6784 72.5704 32.6262 72.8542 33.675C72.9544 34.0167 73.0028 34.3823 73.0789 34.7V75.4604C73.0028 76.2736 72.7021 76.8271 72.2216 77.0731L69.5426 78.491C70.0542 78.2621 70.3895 77.6846 70.3134 76.8339V36.0803C70.3766 35.7732 70.3635 35.4555 70.2754 35.1544C70.0149 34.1281 69.4745 33.1921 68.7129 32.4485C68.4707 32.2119 68.2002 32.0054 67.9075 31.8335L18.1297 3.50618L20.1969 1.83203Z" fill="#1627A1" />
												<path fill-rule="evenodd" clip-rule="evenodd" d="M21.3384 65.8599C21.3443 65.9681 21.3775 66.0733 21.4348 66.1657C21.4921 66.2582 21.5719 66.3351 21.6668 66.3894L47.4994 81.2279C47.7826 81.3915 48.1047 81.4777 48.4328 81.4777C48.7608 81.4777 49.0829 81.3915 49.3661 81.2279L56.857 76.8819C57.0025 76.8025 57.1223 76.6841 57.2026 76.5402V78.539C57.1996 78.6862 57.1583 78.8302 57.0826 78.9571C57.0069 79.0839 56.8994 79.1894 56.7705 79.2633L49.4076 83.5272C49.3488 83.5614 48.291 83.9202 47.8416 83.7698C47.7379 83.7254 47.6342 83.681 47.534 83.6263L21.5562 68.7025C21.4465 68.6426 21.356 68.5536 21.2949 68.4455C21.2338 68.3374 21.2046 68.2146 21.2105 68.0909V65.8359L21.3384 65.8599Z" fill="#1627A1" />
												<path d="M48.4287 81.6547C48.7929 81.6568 49.151 81.5624 49.4658 81.3814L56.8357 76.9671C56.9948 76.8745 57.1267 76.7423 57.2183 76.5839C57.31 76.4254 57.3582 76.246 57.3582 76.0634C57.3582 75.8809 57.31 75.7015 57.2183 75.543C57.1267 75.3845 56.9948 75.2524 56.8357 75.1597L47.5023 69.7785L47.3295 70.0724L56.6663 75.4536C56.7738 75.516 56.863 75.6051 56.9249 75.7121C56.9869 75.819 57.0195 75.9402 57.0195 76.0634C57.0195 76.1867 56.9869 76.3078 56.9249 76.4148C56.863 76.5218 56.7738 76.6109 56.6663 76.6733L49.2826 81.0876C49.0259 81.2352 48.7343 81.313 48.4374 81.313C48.1405 81.313 47.8488 81.2352 47.5922 81.0876L21.6663 66.2628C21.5917 66.2193 21.53 66.1574 21.4871 66.0831C21.4441 66.0088 21.4216 65.9247 21.4216 65.8392C21.4216 65.7536 21.4441 65.6695 21.4871 65.5952C21.53 65.5209 21.5917 65.459 21.6663 65.4155L29.5339 60.8987C29.804 60.7426 30.1112 60.6603 30.4241 60.6603C30.7369 60.6603 31.0441 60.7426 31.3142 60.8987L36.1053 63.6491L36.2712 63.3689L31.4766 60.6151C31.1538 60.4297 30.7871 60.332 30.4137 60.332C30.0403 60.332 29.6736 60.4297 29.3507 60.6151L21.4796 65.1353C21.3526 65.2084 21.2473 65.3131 21.174 65.439C21.1008 65.5649 21.0623 65.7076 21.0623 65.8528C21.0623 65.9981 21.1008 66.1407 21.174 66.2666C21.2473 66.3925 21.3526 66.4973 21.4796 66.5703L47.4055 81.3985C47.7174 81.5724 48.0707 81.6609 48.4287 81.6547V81.6547Z" fill="#1C3E58" />
												<path d="M48.3705 84.0334C48.6967 84.035 49.0175 83.9513 49.3004 83.7908C49.3436 83.77 49.3852 83.746 49.4248 83.7191L49.487 83.6815L56.8396 79.4278C56.9954 79.3389 57.1251 79.2116 57.216 79.0583C57.3069 78.9049 57.3559 78.7308 57.3582 78.5531V76.1615H57.0125V78.5531C57.0086 78.6708 56.9749 78.7856 56.9145 78.8871C56.8541 78.9886 56.769 79.0734 56.6668 79.134L49.328 83.3877L49.2554 83.4321C49.2231 83.4532 49.1896 83.4726 49.1552 83.4902C48.9674 83.5955 48.7595 83.6611 48.5447 83.6829C48.3299 83.7047 48.1128 83.6821 47.9073 83.6166C47.8209 83.579 47.7241 83.5346 47.6307 83.4833L21.653 68.5595C21.5733 68.5139 21.5081 68.4471 21.4647 68.3668C21.4214 68.2866 21.4016 68.1959 21.4075 68.1051V65.8398H21.0619V68.0982C21.0551 68.2499 21.0905 68.4004 21.1643 68.5335C21.238 68.6667 21.3473 68.7773 21.4801 68.8533L47.4579 83.7772C47.5631 83.8357 47.6716 83.8882 47.7828 83.9343C47.9722 83.9979 48.1705 84.0313 48.3705 84.0334V84.0334Z" fill="#1627A1" />
												<path d="M44.6675 73.4821C44.8015 73.4828 44.9336 73.4499 45.0512 73.3864L47.3915 72.0505C47.4679 72.0182 47.5314 71.9618 47.572 71.8901C47.6127 71.8184 47.6282 71.7355 47.6161 71.6542L47.5194 66.4267H47.1737L47.2739 71.6576C47.2779 71.6779 47.2779 71.6988 47.2739 71.7191L47.2255 71.7464L44.8853 73.0823C44.8036 73.1249 44.7107 73.1416 44.6191 73.1301C44.5853 73.1307 44.5519 73.1224 44.5223 73.1062L36.0082 68.2478C35.9322 68.2068 35.9218 68.1726 35.9287 68.1179L36.6996 61.3188L36.3539 61.2812L35.5796 68.0838C35.5665 68.1777 35.5834 68.2733 35.6281 68.3573C35.6727 68.4412 35.7428 68.5092 35.8285 68.5518L44.3391 73.4103C44.4127 73.4494 44.4942 73.4715 44.5776 73.4752L44.6675 73.4821Z" fill="#1C3E58" />
												<path d="M13.803 25.1027H14.1487V3.79322C14.1487 2.9869 14.3838 2.50857 14.9058 2.24549L14.7502 1.94141C14.1038 2.28307 13.803 2.85365 13.803 3.79322V25.1027Z" fill="#1C3E58" />
												<path d="M69.19 78.7426C69.3371 78.7468 69.4836 78.7236 69.6221 78.6743L69.4734 78.3634C69.4734 78.3634 69.0206 78.5445 68.1529 78.1174L16.5431 48.6661C15.8457 48.217 15.2653 47.6117 14.8491 46.8993C14.4329 46.1869 14.1925 45.3875 14.1475 44.5661V25.1016H13.8018V44.5763C13.8513 45.4565 14.1096 46.3128 14.5558 47.076C15.0019 47.8393 15.6235 48.4881 16.3702 48.9701L67.9905 78.401C68.3577 78.6063 68.7686 78.7233 69.19 78.7426Z" fill="#1C3E58" />
												<path d="M69.5501 78.675C69.573 78.6795 69.5965 78.6795 69.6193 78.675C69.6691 78.6527 69.7176 78.6276 69.7645 78.5998C71.4306 77.7286 72.0701 77.3937 72.2948 77.2332V77.2605C72.8479 76.9667 73.1798 76.3517 73.2593 75.4907V34.7132C73.2154 33.9675 73.0198 33.2383 72.6842 32.5691C72.3486 31.8998 71.8799 31.3043 71.3062 30.8182C71.0944 30.6271 70.8626 30.4587 70.6148 30.316L20.64 1.80078L20.4672 2.09461L70.442 30.6132C70.6689 30.7429 70.881 30.8964 71.0746 31.0711C71.6131 31.5263 72.0534 32.0839 72.3693 32.7108C72.6853 33.3377 72.8704 34.021 72.9136 34.72V75.4736C72.8445 76.2082 72.5679 76.7207 72.1531 76.9359H72.1255C72.0217 76.9974 71.1887 77.4382 70.3556 77.8755C70.486 77.5383 70.5334 77.1752 70.4938 76.8163V36.0833C70.4963 35.3776 70.3503 34.6792 70.0653 34.0322C69.7803 33.3853 69.3623 32.8039 68.838 32.325C68.5881 32.0774 68.3069 31.8626 68.0015 31.686L18.4484 3.41343L18.2756 3.70726L67.8287 31.9833C68.1095 32.1479 68.3684 32.3465 68.5995 32.5744C69.0882 33.0223 69.478 33.5652 69.7445 34.169C70.011 34.7728 70.1484 35.4245 70.1482 36.0833V76.8471C70.2104 77.5304 70.0099 78.0361 69.5985 78.2855L69.4672 78.3538C69.428 78.3749 69.3985 78.4101 69.385 78.4521C69.3715 78.4942 69.3749 78.5397 69.3946 78.5793C69.4081 78.6086 69.4301 78.6333 69.4578 78.6503C69.4855 78.6673 69.5176 78.6759 69.5501 78.675V78.675Z" fill="#1627A1" />
												<path d="M18.2756 3.7066L18.4485 3.41277L16.3744 2.23403C16.1106 2.07 15.819 1.95426 15.5137 1.89237L17.2594 0.945965C17.5158 0.856001 17.7903 0.828283 18.0598 0.86515C18.3293 0.902016 18.5859 1.00238 18.808 1.1578L20.45 2.09395L20.6228 1.80012L18.9877 0.860549C18.7158 0.67601 18.4025 0.55967 18.0748 0.521573C17.7472 0.483477 17.4151 0.524769 17.1073 0.641885L14.7324 1.94362C14.6945 1.96352 14.6654 1.99669 14.6508 2.03665C14.6363 2.07661 14.6373 2.12049 14.6537 2.15975C14.6701 2.199 14.7007 2.23081 14.7396 2.24896C14.7784 2.26712 14.8227 2.27032 14.8638 2.25795C15.3283 2.16938 15.8094 2.26644 16.2016 2.52786L18.2756 3.7066Z" fill="#1627A1" />
												<path d="M14.1097 6.36093L70.4929 38.6914L70.3195 38.9869L13.9362 6.65646L14.1097 6.36093Z" fill="#1C3E58" />
												<path d="M70.3098 74.6151L70.4827 74.3179L21.1162 46.0487L14.0609 41.9453L13.8881 42.2391L20.9399 46.3425L70.3098 74.6151Z" fill="#1C3E58" />
												<g clip-path="url(#clip1_1573_142150)">
													<path d="M24.7848 31.0037C24.546 30.9226 24.2912 30.8986 24.0412 30.9336C23.7913 30.9686 23.5533 31.0618 23.3467 31.2053C22.715 31.6108 22.1889 32.1578 21.8111 32.8019C21.4333 33.446 21.2145 34.169 21.1724 34.9124C21.1724 35.5957 21.4179 36.0706 21.8085 36.279C22.1991 36.4874 32.4692 42.4836 32.4692 42.4836C32.4692 42.4836 31.1902 41.995 32.3448 39.2788C33.7137 36.0774 35.5803 37.2664 35.5803 37.2664C35.5803 37.2664 24.8262 31.0242 24.7848 31.0037Z" fill="#1C3E58" />
													<path d="M54.9384 41.78C51.9103 34.9809 45.8263 30.2284 41.3913 31.1645C40.9607 31.2513 40.5443 31.3962 40.1537 31.595C39.9117 31.7214 38.4253 32.5619 38.4253 32.5619C38.8354 32.3487 39.2743 32.1945 39.7285 32.1041C44.1498 31.1611 50.2337 35.9239 53.2792 42.7196C55.9582 48.6987 55.4051 54.2917 52.2145 56.1948C52.2145 56.1948 53.4935 55.5114 53.9429 55.2244C57.0885 53.294 57.6209 47.7284 54.9384 41.78Z" fill="#1C3E58" />
													<path d="M41.017 35.1758C37.6743 35.8864 36.8688 40.68 39.1607 45.8049C41.4525 50.9299 46.1088 54.5549 49.4516 53.8443C50.0894 53.6879 50.6716 53.3618 51.135 52.9013C47.7923 53.6153 43.1395 49.9903 40.8441 44.8653C39.0051 40.7756 39.1745 36.9251 41.017 35.1758Z" fill="#1C3E58" />
													<path d="M41.257 45.7316C38.7508 40.7024 39.2728 35.6731 41.1637 35.1982C44.4787 34.3714 49.1454 38.0545 51.3923 43.2102C54.4412 50.1938 51.1365 52.8997 51.1365 52.8997C51.1365 52.8997 45.3395 53.9316 41.257 45.7316Z" fill="#BFC9E0" />
													<rect width="6.54594" height="1.02849" rx="0.514243" transform="matrix(-0.846038 0.533123 0.542056 0.840342 48.3459 41.4648)" fill="#1C3E58" />
													<rect width="6.52095" height="1.03244" rx="0.516218" transform="matrix(0.62355 0.781784 0.788819 -0.614626 43.4148 41.4102)" fill="#1C3E58" />
												</g>
											</g>
											<defs>
												<clipPath id="clip0_1573_142150">
													<rect width="86" height="86" fill="white" transform="matrix(-1 0 0 1 86 0.5)" />
												</clipPath>
												<clipPath id="clip1_1573_142150">
													<rect width="35.4943" height="25.2831" fill="white" transform="matrix(-1 0 0 1 56.6677 30.9102)" />
												</clipPath>
											</defs>
										</svg>
										<div class="row mt-5">
											<p class="description" style="text-align: center;">There’s no information to show.</p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- modal confirm send email -->
			<form action="" method="get">
				<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" id="confirmEmail">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body" align="center">
								<!-- <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
						<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
					</svg> -->
								<img src="<?php echo base_url('assets/images/success.gif'); ?>" width="140" height="140" viewBox="0 0 140 140" fill="none" alt="">
								<p class="description">
									Your document has been sent to email</p>
								<p>jaka.morbius@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!-- end modal -->
			<script>
				//select all
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

				$('.multipleService').on('click', 'a', function() {
					$('.multipleService a.active').removeClass('active');
					$(this).addClass('active');
				});

				$('.multipleDetail').on('click', 'a', function() {
					$('.multipleDetail a.active').removeClass('active');
					$(this).addClass('active');
				});
			</script>