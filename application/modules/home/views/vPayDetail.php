<style>
    .btn-link{
        color: black;

    }

    .btn-link:hover{
        text-decoration: none !important;
        
    }
    .card-header{
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
						<p>Payment Detail</p>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row">
							<div class="col-md-6 col-sm-6" align="left">
								<p style="font-size:11px">Expire Time Payment</p>
								<p style="font-weight: 700; font-size:14px">12:30 12/12/2021</p>
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
								<p style="font-size:11px">Amount</p>
								<p style="font-weight: 700; font-size:14px">Rp 1.500.500</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<a type="button" class="btn btn-light waves-effect w-50 waves-light mb-sm-3" style="background-color:#ECF1F4;color:#405EA3" href="">
								COPY <i class="bx bx-copy"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="card-header bg-transparent border-bottom">
						<div class="row">
							<div class="col-md-6 col-sm-6" align="left">
								<p style="font-size:11px">Virtual Account Number</p>
								<p style="font-weight: 700; font-size:14px">
								<span style="margin-right: 1em;">
									<img src="assets/images/icon/bank-bca.png" />
								</span>000991091210012
								
							</p>
							</div>
							<div class="col-md-6 col-sm-6" align="right">
								<a type="button" class="btn btn-light waves-effect w-50 waves-light mb-sm-3" style="background-color:#ECF1F4;color:#405EA3" href="">
								COPY <i class="bx bx-copy"></i>
								</a>
							</div>	
						</div>
					</div>
					<div class="accordion" id="accordionExample" >
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
										<hr/>
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
										<hr/>
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
												<div class="col-md-4 end" >
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
						<div class="col-md-8 end" >
							<p class="bva">BCA Virtual Account</p>
						</div>
					</div>
					<div class="accordion" id="accordionExample2" >
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
					<div class="accordion" id="accordionExample2" >
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
					<div class="accordion" id="accordionExample2" >
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
					<div>
						<button class="btn btn-primary" style="background-color: #497DF5;">
							Back to Order List
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
  var days 		= Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours 	= Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes 	= Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds 	= Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
 // document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
 document.getElementById("demo").innerHTML = hours + " : " + minutes + " : " + seconds;
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>