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
													<h4 class="form-label">Forgot Password</h4>
													<p class=" mt-2">Enter the email address you used to register and we'll send instruction to</p>
												</div>
											</div>
											<form name="formForgot" id="formForgot" action="<?php echo site_url('forgot-password'); ?>" method="post" autocomplete="off" onsubmit="doforgotPassword('formForgot'); return false;">
												<div class="form-floating mb-4">
													<input type="email" class="form-control input-v4 input-v4-pl-40 w-100" id="emailAddress" placeholder="Email Address" oninput="handleInput(event)" wajib="yes" name="emailAddress" value="reza.azmawan@logol.co.id">
													<label class="label-v4-pl-45" for="emailAddress">Email Address</label>
													<span class="v4-span-validation-remarks"></span>
													<div class="icon">
														<?xml version="1.0" encoding="UTF-8"?>
														<svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17 1.5H3C1.89543 1.5 1 2.39543 1 3.5V13.5C1 14.6046 1.89543 15.5 3 15.5H17C18.1046 15.5 19 14.6046 19 13.5V3.5C19 2.39543 18.1046 1.5 17 1.5Z" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<path d="M1 3.5L10 9.5L19 3.5" stroke="#8C8CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</div>
												</div>
												<div class="mt-4 mt-md-5 text-center">
													<a class="btn btn-outline-light w-25 waves-effect waves-light pad-vertical me-4" href="<?php echo site_url('login'); ?>">Back</a>
													<button class="btn btn-primary w-25 waves-effect waves-light pad-vertical" type="submit" onclick="doforgotPassword('formForgot'); return false;">Send</button>
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