<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<body class="v4__forgot_bg">
    <div class="auth-page">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6 register-left-wrapper">
					<p>
					 <img src="<?php echo base_url('assets/images/Logo.png'); ?>" alt="Logol" class="p-5">
					</p>
				</div>
				<div class="col-xxl-6 col-lg-7 col-md-8">
					<div class="v4_wrapper_forgot_container">
						<div class="v4__wrapper_forgot_container_attribute">
							<div class="auth-full-page-content d-flex p-sm-5 p-4">
								<div class="w-100">
									<div>
										<span class="d-none d-sm-inline-block mt-2">
											<i class="mdi mdi-arrow-left"></i>
											<span class="me-2 mt-2"><a href="javascript:void(0);">Go To Mainsite</a></span>
										</span>
										<span class="dropdown d-none d-sm-inline-block" style="float:right">
											<button type="button" class="btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:0;border-radius:0;-webkit-box-shadow:none !important;">
												<img id="header-lang-img" src="<?php echo base_url(); ?>assets/images/flags/us.jpg" alt="Header Language" height="16">
											</button>
											<span class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="id">
													<img src="<?php echo base_url(); ?>assets/images/flags/indonesia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Indonesia</span>
												</a>
												<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
													<img src="<?php echo base_url(); ?>assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
												</a>
											</span>
										</span>
									</div>
									<div class="d-flex flex-column h-100">
										<div class="auth-content my-auto">
											<div class="row mt-5 twitter-bs-wizard-nav">
												<div class="col-xxl-12">
													<h4 class="form-label">Create New password</h4>
													<p class=" mt-2">Enter your new password</p>
												</div>
											</div>
											<form name="formForgotNewPassword" id="formForgotNewPassword" action="<?php echo site_url('set-new-password/'.$token); ?>" method="post" autocomplete="off" onsubmit="doNewPassword('formForgotNewPassword'); return false;">
												<div class="form-floating mb-4">
													<input type="password" class="form-control input-v4 input-v4-pl-40 w-100" id="password" placeholder="Password" wajib="yes" name="password">
													<i id="v4-eye-econ" class="v4-far v4-eye"></i>
													<label class="label-v4-pl-45" for="password">Password</label>
													<div class="icon">
														<?xml version="1.0" encoding="UTF-8"?>
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19 11.5H5C3.89543 11.5 3 12.3954 3 13.5V20.5C3 21.6046 3.89543 22.5 5 22.5H19C20.1046 22.5 21 21.6046 21 20.5V13.5C21 12.3954 20.1046 11.5 19 11.5Z" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M7 11.5V7.5C7 6.17392 7.52678 4.90215 8.46447 3.96447C9.40215 3.02678 10.6739 2.5 12 2.5C13.3261 2.5 14.5979 3.02678 15.5355 3.96447C16.4732 4.90215 17 6.17392 17 7.5V11.5" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</div>
												</div>
												<div class="form-floating mb-4">
													<input type="password" class="form-control input-v4 input-v4-pl-40 w-100" id="re-password" placeholder="Re-type Password" wajib="yes" name="re-password">
													<i id="v4-eye-econ2" class="v4-far v4-eye"></i>
													<label class="label-v4-pl-45" for="re-password">Re-type Password</label>
													<div class="icon">
														<?xml version="1.0" encoding="UTF-8"?>
														<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19 11.5H5C3.89543 11.5 3 12.3954 3 13.5V20.5C3 21.6046 3.89543 22.5 5 22.5H19C20.1046 22.5 21 21.6046 21 20.5V13.5C21 12.3954 20.1046 11.5 19 11.5Z" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M7 11.5V7.5C7 6.17392 7.52678 4.90215 8.46447 3.96447C9.40215 3.02678 10.6739 2.5 12 2.5C13.3261 2.5 14.5979 3.02678 15.5355 3.96447C16.4732 4.90215 17 6.17392 17 7.5V11.5" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</div>
												</div>
												<div class="mt-4 mt-md-5 text-center">
													<a class="btn btn-outline-light w-25 waves-effect waves-light pad-vertical me-4" href="<?php echo site_url('login'); ?>">Back</a>
													<button class="btn btn-primary w-25 waves-effect waves-light pad-vertical" type="submit" onclick="doNewPassword('formForgotNewPassword'); return false;">Submit</button>
												</div>
											</form>
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
</body>
<script src="<?= base_url(); ?>assets/js/forgot.js?v=<?= rand(); ?>"></script>
<script src="<?= base_url(); ?>assets/js/customs.js?v=<?= rand(); ?>"></script>
<script>
	var myInput = document.getElementById('password'),
		myIcon = document.getElementById('v4-eye-econ');

	myIcon.onclick = function () {
		if (myIcon.classList.contains('v4-eye')) {
			this.classList.toggle('v4-eye-slash');
			this.classList.toggle('v4-eye');
			myInput.setAttribute('type', 'text');
		} else {
			myInput.setAttribute('type', 'password');
			this.classList.toggle('v4-eye');
			this.classList.toggle('v4-eye-slash');
		};
	}
	
	var myInput2 = document.getElementById('re-password'),
		myIcon2  = document.getElementById('v4-eye-econ2');

	myIcon2.onclick = function () {
		if (myIcon2.classList.contains('v4-eye')){
			this.classList.toggle('v4-eye-slash');
			this.classList.toggle('v4-eye');
			myInput2.setAttribute('type', 'text');
		} else {
			myInput2.setAttribute('type', 'password');
			this.classList.toggle('v4-eye');
			this.classList.toggle('v4-eye-slash');
		};
	}
</script>