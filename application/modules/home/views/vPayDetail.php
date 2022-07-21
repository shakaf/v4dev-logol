<style>
	.btn-link {
		color: black;

	}

	.btn-link:hover {
		text-decoration: none !important;

	}

	.card-header {
		padding-left: 1em !important;
		padding-right: 1em !important;
		padding-bottom: 0em !important;
		vertical-align: center;

	}

	h7 {
		color: #2B313B;
		font-weight: 700;
		font-size: 12px;
	}

	.sub-title {
		color: #2B313B;
		font-weight: 500;
		font-size: 12px;
	}

	.bsa {
		color: #576175;
		font-weight: 400;
		font-size: 12px;
	}

	.end {
		text-align: end;
	}

	.sub-total {
		font-weight: 700;
		font-size: 14px;
		color: #2B313B;
	}

	.sub-total-amount {
		font-weight: 700;
		font-size: 14px;
		color: #044795;
	}

	.htp {
		font-weight: 500;
		font-size: 12px;
		color: #0E0E2C;
	}

	.bva {
		color: #333333;
		font-weight: 700;
		font-size: 12px;
	}
</style>
<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header bg-transparent border-bottom">
						<p style="font-weight:700;">Payment Detail</p>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row">
							<div class="col-md-6 col-sm-6" align="left">
								<p class="description">Expire Time Payment</p>
								<p style="font-weight: 700; font-size:14px">15:30 7/12/2022</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<p>&nbsp;</p>
								<p style="color:red" id="demo">&nbsp;</p>
							</div>
						</div>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row">
							<div class="col-md-6 col-sm-6" align="left">
								<p class="description">Amount</p>
								<p style="font-weight: 700; font-size:14px" id="amounttxt" readonly>Rp 1.500.500</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<a type="button" onclick="copy_text()">
									<svg width="64" height="28" viewBox="0 0 64 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H60C62.2091 0 64 1.79086 64 4V24C64 26.2091 62.2091 28 60 28H4C1.79086 28 0 26.2091 0 24V4Z" fill="#ECF1F4" />
										<path d="M15.7742 13.2188H14.5299C14.5072 13.0578 14.4608 12.9148 14.3907 12.7898C14.3206 12.6629 14.2306 12.5549 14.1208 12.4659C14.0109 12.3769 13.8841 12.3087 13.7401 12.2614C13.5981 12.214 13.4437 12.1903 13.277 12.1903C12.9759 12.1903 12.7136 12.2652 12.4901 12.4148C12.2666 12.5625 12.0933 12.7784 11.9702 13.0625C11.8471 13.3447 11.7856 13.6875 11.7856 14.0909C11.7856 14.5057 11.8471 14.8542 11.9702 15.1364C12.0952 15.4186 12.2695 15.6316 12.493 15.7756C12.7164 15.9195 12.975 15.9915 13.2685 15.9915C13.4333 15.9915 13.5858 15.9697 13.7259 15.9261C13.868 15.8826 13.9939 15.8191 14.1038 15.7358C14.2136 15.6506 14.3045 15.5473 14.3765 15.4261C14.4503 15.3049 14.5015 15.1667 14.5299 15.0114L15.7742 15.017C15.742 15.2841 15.6615 15.5417 15.5327 15.7898C15.4058 16.036 15.2344 16.2566 15.0185 16.4517C14.8045 16.6449 14.5488 16.7983 14.2515 16.9119C13.956 17.0237 13.6217 17.0795 13.2486 17.0795C12.7297 17.0795 12.2657 16.9621 11.8566 16.7273C11.4494 16.4924 11.1274 16.1525 10.8907 15.7074C10.6558 15.2623 10.5384 14.7235 10.5384 14.0909C10.5384 13.4564 10.6577 12.9167 10.8964 12.4716C11.135 12.0265 11.4589 11.6875 11.868 11.4545C12.277 11.2197 12.7373 11.1023 13.2486 11.1023C13.5858 11.1023 13.8983 11.1496 14.1861 11.2443C14.4759 11.339 14.7325 11.4773 14.956 11.6591C15.1795 11.839 15.3613 12.0597 15.5015 12.321C15.6435 12.5824 15.7344 12.8816 15.7742 13.2188ZM22.1629 14.0909C22.1629 14.7254 22.0426 15.2652 21.8021 15.7102C21.5635 16.1553 21.2377 16.4953 20.8248 16.7301C20.4138 16.9631 19.9517 17.0795 19.4385 17.0795C18.9214 17.0795 18.4574 16.9621 18.0464 16.7273C17.6354 16.4924 17.3106 16.1525 17.072 15.7074C16.8334 15.2623 16.714 14.7235 16.714 14.0909C16.714 13.4564 16.8334 12.9167 17.072 12.4716C17.3106 12.0265 17.6354 11.6875 18.0464 11.4545C18.4574 11.2197 18.9214 11.1023 19.4385 11.1023C19.9517 11.1023 20.4138 11.2197 20.8248 11.4545C21.2377 11.6875 21.5635 12.0265 21.8021 12.4716C22.0426 12.9167 22.1629 13.4564 22.1629 14.0909ZM20.9157 14.0909C20.9157 13.6799 20.8542 13.3333 20.7311 13.0511C20.6099 12.7689 20.4385 12.5549 20.2169 12.4091C19.9953 12.2633 19.7358 12.1903 19.4385 12.1903C19.1411 12.1903 18.8816 12.2633 18.6601 12.4091C18.4385 12.5549 18.2661 12.7689 18.143 13.0511C18.0218 13.3333 17.9612 13.6799 17.9612 14.0909C17.9612 14.5019 18.0218 14.8485 18.143 15.1307C18.2661 15.4129 18.4385 15.6269 18.6601 15.7727C18.8816 15.9186 19.1411 15.9915 19.4385 15.9915C19.7358 15.9915 19.9953 15.9186 20.2169 15.7727C20.4385 15.6269 20.6099 15.4129 20.7311 15.1307C20.8542 14.8485 20.9157 14.5019 20.9157 14.0909ZM23.2341 17V11.1818H25.5296C25.9709 11.1818 26.3468 11.2661 26.6574 11.4347C26.968 11.6013 27.2048 11.8333 27.3676 12.1307C27.5324 12.4261 27.6148 12.767 27.6148 13.1534C27.6148 13.5398 27.5315 13.8807 27.3648 14.1761C27.1981 14.4716 26.9567 14.7017 26.6404 14.8665C26.326 15.0312 25.9453 15.1136 25.4983 15.1136H24.0353V14.1278H25.2995C25.5362 14.1278 25.7313 14.0871 25.8847 14.0057C26.04 13.9223 26.1555 13.8078 26.2313 13.6619C26.3089 13.5142 26.3478 13.3447 26.3478 13.1534C26.3478 12.9602 26.3089 12.7917 26.2313 12.6477C26.1555 12.5019 26.04 12.3892 25.8847 12.3097C25.7294 12.2282 25.5324 12.1875 25.2938 12.1875H24.4642V17H23.2341ZM28.2329 11.1818H29.6107L30.9374 13.6875H30.9943L32.321 11.1818H33.6988L31.5766 14.9432V17H30.3551V14.9432L28.2329 11.1818Z" fill="#405EA3" />
										<path d="M52 12.5H47.5C46.9477 12.5 46.5 12.9477 46.5 13.5V18C46.5 18.5523 46.9477 19 47.5 19H52C52.5523 19 53 18.5523 53 18V13.5C53 12.9477 52.5523 12.5 52 12.5Z" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M44.5 15.5H44C43.7348 15.5 43.4804 15.3946 43.2929 15.2071C43.1054 15.0196 43 14.7652 43 14.5V10C43 9.73478 43.1054 9.48043 43.2929 9.29289C43.4804 9.10536 43.7348 9 44 9H48.5C48.7652 9 49.0196 9.10536 49.2071 9.29289C49.3946 9.48043 49.5 9.73478 49.5 10V10.5" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M4 2H60V-2H4V2ZM62 4V24H66V4H62ZM60 26H4V30H60V26ZM2 24V4H-2V24H2ZM4 26C2.89543 26 2 25.1046 2 24H-2C-2 27.3137 0.686291 30 4 30V26ZM62 24C62 25.1046 61.1046 26 60 26V30C63.3137 30 66 27.3137 66 24H62ZM60 2C61.1046 2 62 2.89543 62 4H66C66 0.686292 63.3137 -2 60 -2V2ZM4 -2C0.686292 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row">
							<div class="col-md-6 col-sm-6" align="left">
								<p class="description">Virtual Account Number</p>
								<p style="font-weight: 700; font-size:14px">
									<span style="margin-right: 1em;">
										<img src="assets/images/icon/bank-bca.png" />
									</span>000991091210012
								</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<a type="button" onclick="copy_text()">
									<svg width="64" height="28" viewBox="0 0 64 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H60C62.2091 0 64 1.79086 64 4V24C64 26.2091 62.2091 28 60 28H4C1.79086 28 0 26.2091 0 24V4Z" fill="#ECF1F4" />
										<path d="M15.7742 13.2188H14.5299C14.5072 13.0578 14.4608 12.9148 14.3907 12.7898C14.3206 12.6629 14.2306 12.5549 14.1208 12.4659C14.0109 12.3769 13.8841 12.3087 13.7401 12.2614C13.5981 12.214 13.4437 12.1903 13.277 12.1903C12.9759 12.1903 12.7136 12.2652 12.4901 12.4148C12.2666 12.5625 12.0933 12.7784 11.9702 13.0625C11.8471 13.3447 11.7856 13.6875 11.7856 14.0909C11.7856 14.5057 11.8471 14.8542 11.9702 15.1364C12.0952 15.4186 12.2695 15.6316 12.493 15.7756C12.7164 15.9195 12.975 15.9915 13.2685 15.9915C13.4333 15.9915 13.5858 15.9697 13.7259 15.9261C13.868 15.8826 13.9939 15.8191 14.1038 15.7358C14.2136 15.6506 14.3045 15.5473 14.3765 15.4261C14.4503 15.3049 14.5015 15.1667 14.5299 15.0114L15.7742 15.017C15.742 15.2841 15.6615 15.5417 15.5327 15.7898C15.4058 16.036 15.2344 16.2566 15.0185 16.4517C14.8045 16.6449 14.5488 16.7983 14.2515 16.9119C13.956 17.0237 13.6217 17.0795 13.2486 17.0795C12.7297 17.0795 12.2657 16.9621 11.8566 16.7273C11.4494 16.4924 11.1274 16.1525 10.8907 15.7074C10.6558 15.2623 10.5384 14.7235 10.5384 14.0909C10.5384 13.4564 10.6577 12.9167 10.8964 12.4716C11.135 12.0265 11.4589 11.6875 11.868 11.4545C12.277 11.2197 12.7373 11.1023 13.2486 11.1023C13.5858 11.1023 13.8983 11.1496 14.1861 11.2443C14.4759 11.339 14.7325 11.4773 14.956 11.6591C15.1795 11.839 15.3613 12.0597 15.5015 12.321C15.6435 12.5824 15.7344 12.8816 15.7742 13.2188ZM22.1629 14.0909C22.1629 14.7254 22.0426 15.2652 21.8021 15.7102C21.5635 16.1553 21.2377 16.4953 20.8248 16.7301C20.4138 16.9631 19.9517 17.0795 19.4385 17.0795C18.9214 17.0795 18.4574 16.9621 18.0464 16.7273C17.6354 16.4924 17.3106 16.1525 17.072 15.7074C16.8334 15.2623 16.714 14.7235 16.714 14.0909C16.714 13.4564 16.8334 12.9167 17.072 12.4716C17.3106 12.0265 17.6354 11.6875 18.0464 11.4545C18.4574 11.2197 18.9214 11.1023 19.4385 11.1023C19.9517 11.1023 20.4138 11.2197 20.8248 11.4545C21.2377 11.6875 21.5635 12.0265 21.8021 12.4716C22.0426 12.9167 22.1629 13.4564 22.1629 14.0909ZM20.9157 14.0909C20.9157 13.6799 20.8542 13.3333 20.7311 13.0511C20.6099 12.7689 20.4385 12.5549 20.2169 12.4091C19.9953 12.2633 19.7358 12.1903 19.4385 12.1903C19.1411 12.1903 18.8816 12.2633 18.6601 12.4091C18.4385 12.5549 18.2661 12.7689 18.143 13.0511C18.0218 13.3333 17.9612 13.6799 17.9612 14.0909C17.9612 14.5019 18.0218 14.8485 18.143 15.1307C18.2661 15.4129 18.4385 15.6269 18.6601 15.7727C18.8816 15.9186 19.1411 15.9915 19.4385 15.9915C19.7358 15.9915 19.9953 15.9186 20.2169 15.7727C20.4385 15.6269 20.6099 15.4129 20.7311 15.1307C20.8542 14.8485 20.9157 14.5019 20.9157 14.0909ZM23.2341 17V11.1818H25.5296C25.9709 11.1818 26.3468 11.2661 26.6574 11.4347C26.968 11.6013 27.2048 11.8333 27.3676 12.1307C27.5324 12.4261 27.6148 12.767 27.6148 13.1534C27.6148 13.5398 27.5315 13.8807 27.3648 14.1761C27.1981 14.4716 26.9567 14.7017 26.6404 14.8665C26.326 15.0312 25.9453 15.1136 25.4983 15.1136H24.0353V14.1278H25.2995C25.5362 14.1278 25.7313 14.0871 25.8847 14.0057C26.04 13.9223 26.1555 13.8078 26.2313 13.6619C26.3089 13.5142 26.3478 13.3447 26.3478 13.1534C26.3478 12.9602 26.3089 12.7917 26.2313 12.6477C26.1555 12.5019 26.04 12.3892 25.8847 12.3097C25.7294 12.2282 25.5324 12.1875 25.2938 12.1875H24.4642V17H23.2341ZM28.2329 11.1818H29.6107L30.9374 13.6875H30.9943L32.321 11.1818H33.6988L31.5766 14.9432V17H30.3551V14.9432L28.2329 11.1818Z" fill="#405EA3" />
										<path d="M52 12.5H47.5C46.9477 12.5 46.5 12.9477 46.5 13.5V18C46.5 18.5523 46.9477 19 47.5 19H52C52.5523 19 53 18.5523 53 18V13.5C53 12.9477 52.5523 12.5 52 12.5Z" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M44.5 15.5H44C43.7348 15.5 43.4804 15.3946 43.2929 15.2071C43.1054 15.0196 43 14.7652 43 14.5V10C43 9.73478 43.1054 9.48043 43.2929 9.29289C43.4804 9.10536 43.7348 9 44 9H48.5C48.7652 9 49.0196 9.10536 49.2071 9.29289C49.3946 9.48043 49.5 9.73478 49.5 10V10.5" stroke="#405EA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M4 2H60V-2H4V2ZM62 4V24H66V4H62ZM60 26H4V30H60V26ZM2 24V4H-2V24H2ZM4 26C2.89543 26 2 25.1046 2 24H-2C-2 27.3137 0.686291 30 4 30V26ZM62 24C62 25.1046 61.1046 26 60 26V30C63.3137 30 66 27.3137 66 24H62ZM60 2C61.1046 2 62 2.89543 62 4H66C66 0.686292 63.3137 -2 60 -2V2ZM4 -2C0.686292 -2 -2 0.686291 -2 4H2C2 2.89543 2.89543 2 4 2V-2Z" fill="#ECF1F4" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Detail Order
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="accordion" id="accordionExampleDetail">
										<div>
											<div class="row">
												<div class="col-md-12">
													<h7>E-Depot</h7>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Depo Reimbursement</label>
													<p class="bsa">BSA</p>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 200.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Platform Fee</label>
													<p class="bsa">8x Containers</p>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 100.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Sub-Total</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 300.000</label>
												</div>
											</div>
										</div>
										<hr />
										<div>
											<div class="row">
												<div class="col-md-12">
													<h7>E-Port</h7>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Depo Reimbursement</label>
													<p class="bsa">BSA</p>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 200.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Platform Fee</label>
													<p class="bsa">8x Containers</p>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 100.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">Sub-Total</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 300.000</label>
												</div>
											</div>
										</div>
										<hr />
										<div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">E-Depot</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 300.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">E-Port</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 300.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">PPh 23</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 6.000</label>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<label class="sub-title">PPN 10%</label>
												</div>
												<div class="col-md-4 end">
													<label class="sub-title">Rp 30.000</label>
												</div>
											</div>
										</div>
										<div class="row" style="margin-top:1em; margin-bottom: 1em;">
											<div class="col-md-8">
												<p class="sub-total">Total Amount</p>
											</div>
											<div class="col-md-4 end">
												<p class="sub-total-amount">Rp 636.000</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding: 20px 20px 0px 20px;">
						<div class="col-md-4">
							<p class="htp">How To Pay</p>
						</div>
						<div class="col-md-8 end">
							<p class="bva">BCA Virtual Account</p>
						</div>
					</div>
					<div class="accordion" id="accordionExample2">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne2">
								<button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
									BCA Internet Banking
								</button>
							</h2>
							<div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
								<div class="accordion-body">
									<div class="accordion" id="accordionExampleDetail">
										<ol>
											<li>Log in to the BCA Mobile application.</li>
											<li>Select the m-BCA menu.</li>
											<li>Select m-Transfer > BCA Virtual Account.</li>
											<li>Enter Virtual Account Number 000991091210012.</li>
											<li>Enter m-BCA pin.</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" id="accordionExample2">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne2">
								<button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne">
									BCA Mobile (M-BCA)
								</button>
							</h2>
							<div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
								<div class="accordion-body">
									<div class="accordion" id="accordionExampleDetail">
										<ol>
											<li>Log in to the BCA Mobile application.</li>
											<li>Select the m-BCA menu.</li>
											<li>Select m-Transfer > BCA Virtual Account.</li>
											<li>Enter Virtual Account Number 000991091210012.</li>
											<li>Enter m-BCA pin.</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion" id="accordionExample2">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne2">
								<button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne">
									ATM BCA
								</button>
							</h2>
							<div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
								<div class="accordion-body">
									<div class="accordion" id="accordionExampleDetail">
										<ol>
											<li>Log in to the BCA Mobile application.</li>
											<li>Select the m-BCA menu.</li>
											<li>Select m-Transfer > BCA Virtual Account.</li>
											<li>Enter Virtual Account Number 000991091210012.</li>
											<li>Enter m-BCA pin.</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-3">
						<!-- <button class="btn btn-primary" style="background-color: #497DF5; width: 100%;"> -->
						<button type="button" class="btn btn-outline-primary waves-effect waves-light" style="width: 100%;">Back to Order List</button>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<p id="demo"></p>
<script>
	var countDownDate = new Date("Mar 7, 2022 23:59:00").getTime();
	var x = setInterval(function() {
		// Untuk mendapatkan tanggal dan waktu hari ini
		var now = new Date().getTime();

		// Temukan jarak antara sekarang dan tanggal hitung mundur
		var distance = countDownDate - now;

		// Perhitungan waktu untuk hari, jam, menit dan detik
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Keluarkan hasil dalam elemen dengan id = "demo"
		// document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
		document.getElementById("demo").innerHTML = hours + " : " + minutes + " : " + seconds;

		// Jika hitungan mundur selesai, tulis beberapa teks 
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
		}
	}, 1000);

	function copy_text() {
		document.getElementById("amounttxt").select();
		document.execCommand("copy");
		alert("Copy To Clipbord");
	}
</script>
</script>