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
</style>

<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header bg-transparent border-bottom">
						<div class="d-flex flex-wrap">
							<span style="cursor:pointer" onclick="history.back()">
								<svg width=" 24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5 12H19" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M5 12L9 16" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M5 12L9 8" stroke="#4A4A68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</span>
							<?php 
							$dataPayment = $payData['data']['collection'][0];
							$bank = $dataPayment['available_banks']
							?>
							<pre><?php //$rId; ?><?php //print_r($bank); ?></pre>
							<p>Back</p>
						</div>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row" style="font-weight: 700; font-size:14px">
							<div class="col-md-6 col-sm-6" align="left">
								<p>Total Amount</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<p style="color: #044795;">Rp <?php echo number_format($this->session->userdata('total'),0,".","."); ?></p>
							</div>
						</div>
					</div>
					<div class="card-body border-bottom">
						<h6>Virtual Account</h6>
						<?php
						$pics = array("bni","bca","bri");
						foreach ($bank as $key => $vbank) {
							$img = in_array(strtolower($vbank['bank_code']),$pics)?strtolower($vbank['bank_code']): "";
							//$imgurl="";
							//if($img!=""){
								$imgurl = '<img src="assets/images/icon/bank-'.strtolower($vbank['bank_code']).'.png" />';
							//}
							?>
							<div class="row">
								<div class="col-md-10 cold-sm-10">
									<a href="<?php echo site_url("payment-va/".strtolower($vbank['bank_code'])) ?>" class="btn btn-link waves-effect">
										<span style="margin-right: 1em;">
										<?= $imgurl ?>
										</span><?= $vbank['bank_code']." ".$vbank['bank_branch'] ?>
									</a>
								</div>
								<div class="col-md-2 cold-sm-2">
									<a href="<?php echo site_url("payment-va/".strtolower($vbank['bank_code'])) ?>" class="btn btn-link waves-effect">
										<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</a>
								</div>
							</div>
							<?php
						}
						?>
						<!-- <div class="row">
							<div class="col-md-10 cold-sm-10">
								<a href="<?php echo site_url("payment-va/bni") ?>" class="btn btn-link waves-effect">
									<span style="margin-right: 1em;">
										<img src="assets/images/icon/bank-bni.png" />
									</span>BNI Virtual Account
								</a>
							</div>
							<div class="col-md-2 cold-sm-2">
								<a href="<?php echo site_url("payment-va/bni") ?>" class="btn btn-link waves-effect">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 cold-sm-10">
								<a href="<?php echo site_url("payment-va/bca") ?>" class="btn btn-link waves-effect">
									<span style="margin-right: 1em;">
										<img src="assets/images/icon/bank-bca.png" />
									</span>BCA Virtual Account
								</a>
							</div>
							<div class="col-md-2 cold-sm-2">
								<a href="<?php echo site_url("payment-va/bca") ?>" class="btn btn-link waves-effect">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 cold-sm-10">
								<a href="<?php echo site_url("payment-va/bri") ?>" class="btn btn-link waves-effect">
									<span style="margin-right: 1em;">
										<img src="assets/images/icon/bank-bri.png" />
									</span>BRI Virtual Account
								</a>
							</div>

							<div class="col-md-2 cold-sm-2">
								<a href="<?php echo site_url("payment-va/bri") ?>" class="btn btn-link waves-effect">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>
						</div> -->
					</div>
					<div class="card-body border-bottom">

						<div class="row">
							<div class="col-md-10 cold-sm-10">
								<a href="<?php echo site_url("payment-finance") ?>" class="btn btn-link waves-effect">
									Financing
								</a>
							</div>
							<div class="col-md-2 cold-sm-2">
								<a href="<?php echo site_url("payment-finance") ?>" class="btn btn-link waves-effect">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="card-body border-bottom">

						<div class="row">
							<div class="col-md-10 cold-sm-10">
								<a href="<?php echo site_url("payment-confirmation") ?>" class="btn btn-link waves-effect">
									Logol Credit Term
								</a>
							</div>
							<div class="col-md-2 cold-sm-2">
								<a href="<?php echo site_url("payment-confirmation") ?>" class="btn btn-link waves-effect">
									<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 9L7.5 6L4.5 3" stroke="#4A4A68" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page-content -->