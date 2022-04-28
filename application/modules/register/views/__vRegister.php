<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<body class="v4__register_bg">
    <div class="auth-page">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-xxl-4 col-lg-4 col-md-4 col-sm-4 register-left-wrapper">
					<p>
					 <img src="<?php echo base_url('assets/images/Logo.png'); ?>" alt="Logol" class="p-5">
					</p>
				</div>
				<div class="col-xxl-8 col-lg-9 col-md-10">
					<div class="v4_wrapper_register_container">
						<div class="v4__wrapper_register_container_attribute">
							<div class="auth-full-page-content d-flex p-sm-5 p-4">
								<div class="w-100">
									<div class="d-flex flex-column">
										<div class="auth-content my-auto">
											<div>
												<span class="d-none d-sm-inline-block">
													<i class="mdi mdi-arrow-left"></i>
													<span class="me-5 mt-2"><a href="<?php echo site_url('login'); ?>">Back</a></span>
													<span class=" mt-2"><a href="javascript:void(0)" onclick="doRegister();">.</a></span>
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
											<form name="formRegister" id="formRegister" autocomplete="off" onsubmit="doRegister('formRegister'); return false;">
												<div class="tab-pane">
													<div id="divContentRegister">Loading</div>
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
<script src="<?= base_url(); ?>assets/js/register.js?v=<?= rand(); ?>"></script>
<script>
$(function(){
	ajaxContent('next','product-type');
});
</script>