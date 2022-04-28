<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
	.form-floating .label-v4-pl-50 {
		padding-left: 1.50rem !important;
	}
	.form-floating input:focus {
		border-color: #0D51F1;
	}
	.v4-loading {
	  display: none;
	  position: fixed;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  z-index: 9999;
	  background-color: rgba(94, 130, 152, 0.08);
	  background-color: rgba(0, 0, 0, 0.5);
	  overflow-x: hidden;
	  transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
	  transition: 0.5s;
	}
	.v4-loading-content {
	  z-index: 999999;
	  display: block;
	  position: relative;
	  left: 50%;
	  top: 50%;
	  width: 350px;
	  height: 125px;
	  margin: -100px 0 0 -200px;
	  border-radius: 6px;
	  background-color: #fff;
	  -webkit-box-shadow: 0px 4px 4px 0 rgba(46, 130, 255, 0.75);
	  box-shadow: 0 4px 4px 0 rgba(46, 130, 255, 0.75);
	}
	.v4-loading-content .content-preloader {
	  background-image: url('<?php echo base_url('assets/images/v4-preloader.gif'); ?>');
	  background-repeat: no-repeat;
	  background-position: center;
	  background-size: 40%;
	  height: 100%;
	}
	
	.v4-eye {
	  background: url('<?php echo base_url('assets/images/password-hide.svg'); ?>') no-repeat;
		background-size: auto;
	  background-size: 24px;
	}
	
	.v4-eye-slash {
	  background: url('<?php echo base_url('assets/images/password-show.svg'); ?>') no-repeat;
		background-size: auto;
	  background-size: 24px;
	}
	
	.v4-far {
	  position: absolute;
	  left: 90%;
	  top: 15px;
	  padding: 15px;
	  cursor: pointer;
	  transition: all 0.3s ease-in-out;
	}
</style>
<?php echo $scriptTag; ?>
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
													<span class=" mt-2"><a href="<?php echo site_url('login'); ?>">Back</a></span>
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
											<form name="formRegister" id="formRegister" method="post" autocomplete="off" action="<?php echo site_url('set-register'); ?>" enctype="multipart/form-data">
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
														<div class="tab-pane px-5" id="steps-1">
															<div class="row mt-5 twitter-bs-wizard-nav">
																<div class="col-xxl-9">
																	<h4 class="form-label">Select Role and Product Type</h4>
																	<p class="mt-4">
																		<b style="font-size:16px">Select Role</b><br>
																		Please choose your role, and you can choose more than one role
																	</p>
																</div>
																<div class="col-xxl-3" style="text-indent:0%;">
																	<blockquote class="blockquote font-size-14 mb-0">
																		<div align="right">
																			<span class="text-muted">Step 1</span>
																			<h5>Role and Product</h5>
																		</div>
																	</blockquote>
																</div>
															</div>
															<div class="row">
																<?php if(!empty($service)) : ?>
																	<?php foreach($service as $data): ?>
																			<?php if($data['SERVICE_CONTENT_ID'] == "9"): ?>
																				<div class="col-sm-12 col-lg-12">
																					<div class="card" style="height:85%;cursor:pointer;" id="card_<?php echo $data['SERVICE_CONTENT_ID']; ?>" onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');">
																						<div align="right" class="check-card2">
																							<input onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');" wajib="yes" name="SERVICE[]" id="<?php echo $data['SERVICE_CONTENT_ID']; ?>" class="form-check-input chk-card SERVICE" type="checkbox" value="<?php echo $data['SERVICE_CONTENT_ID']."~".$data['SERVICE_CONTENT_NAME']; ?>">
																						</div>
																						<div class="text-center">
																							<img src="<?php echo $data['SERVICE_CONTENT_ICON']; ?>" width="80px" alt="icon-service">
																						</div>	
																						<div class="card-body text-center">
																							<h4 class="card-title"><?php echo $data['SERVICE_CONTENT_NAME']; ?></h4>
																							<p class="card-text fs-10px"><?php echo $data['SERVICE_CONTENT_DESCRIPTION']; ?></p>
																							<input type="text" name="SERVICE_OTHERS_NAME" id="SERVICE_OTHERS_NAME" class="form-control" value="" style="display:none">
																						</div>
																					</div>
																				</div>
																			<?php else : ?>
																				<div class="col-sm-4 col-lg-4">
																					<div class="card" style="height:85%;cursor:pointer;" id="card_<?php echo $data['SERVICE_CONTENT_ID']; ?>" onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');">
																						<div align="right" class="check-card2">
																							<input onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');" wajib="yes" name="SERVICE[]" id="<?php echo $data['SERVICE_CONTENT_ID']; ?>" class="form-check-input chk-card SERVICE" type="checkbox" value="<?php echo $data['SERVICE_CONTENT_ID']."~".$data['SERVICE_CONTENT_NAME']; ?>">
																						</div>
																						<div class="text-center">
																							<img src="<?php echo $data['SERVICE_CONTENT_ICON']; ?>" width="50px" alt="icon-service">
																						</div>	
																						<div class="card-body text-center">
																							<h4 class="card-title"><?php echo $data['SERVICE_CONTENT_NAME']; ?></h4>
																							<p class="card-text fs-10px"><?php echo $data['SERVICE_CONTENT_DESCRIPTION']; ?></p>
																						</div>
																					</div>
																				</div>
																			<?php endif; ?>
																	<?php endforeach; ?>
																<?php endif; ?>
															</div>
															<div id="v4-product">
																<div class="row mt-1 twitter-bs-wizard-nav">
																	<div class="col-xxl-9">
																		<p class="mt-4">
																			<b style="font-size:16px">Product Type</b><br>
																			Please select the type of product that you want
																		</p>
																	</div>
																</div>
																<div class="row">
																	<?php if(!empty($productType)) : ?>
																		<?php foreach($productType as $data): ?>
																			<div class="col-sm-6 col-lg-6" onclick="cardCheckRadio('<?php echo $data['PRODUCT_TYPE_ID']; ?>');">
																				<div class="card" style="height:85%;cursor:pointer;" id="card_<?php echo $data['PRODUCT_TYPE_ID']; ?>">
																					<div class="card-body">
																						<div class="row">
																							<div class="col-sm-11 col-lg-11">
																								<h5 class="card-title"><?php echo $data['PRODUCT_TYPE_NAME']; ?></h5>
																							</div>
																							<div class="col-sm-1 col-lg-1 form-check">
																								<input onclick="cardCheckRadio('<?php echo $data['PRODUCT_TYPE_ID']; ?>'); return false;" wajib="yes" name="PRODUCT_TYPE" id="<?php echo $data['PRODUCT_TYPE_ID']; ?>" class="form-check-input <?php echo "chk_".$data['PRODUCT_TYPE_ID']; ?>" type="radio" value="<?php echo $data['PRODUCT_TYPE_ID']; ?>">
																							</div>
																						</div>
																						<p class="card-text" for="<?php echo $data['PRODUCT_TYPE_ID']; ?>"><small class="text-reg">&nbsp;</small></p>
																						<p class="card-text" for="<?php echo $data['PRODUCT_TYPE_ID']; ?>"><?php echo $data['PRODUCT_TYPE_DESCRIPTION']; ?></p>
																					</div>
																				</div>
																			</div>
																		<?php endforeach; ?>
																	<?php endif; ?>
																</div>
															</div>
															<ul class="pager wizard twitter-bs-wizard-pager-link">
																<li class="next">
																	<button type="button" style="width:15em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light pad-vertical">
																		Continue <i class="bx bx-chevron-right ms-1"></i>
																	</button> 
																</li>
															</ul>
														</div>
														<div class="tab-pane px-5" id="steps-2">
															<div class="row mt-5 twitter-bs-wizard-nav">
																<div class="col-xxl-9">
																	<h4 class="form-label">Register</h4>
																</div>
																<div class="col-xxl-3" style="text-indent: 0%;">
																	<blockquote class="blockquote font-size-14 mb-0">
																		<i class="bx bx-chevron-left" style="margin-top:15px !important; position:absolute;"></i>
																		<div align="right">
																			<span class="text-muted">Step 2</span>
																			<h5>Basic Info</h5>
																		</div>
																	</blockquote>
																</div>
															</div>
															<div class="row mt-3">
																<label class="mb-4">Basic Info</label>
																<div class="mb-3 form-floating">
																	<input type="text" name="COMPANY_NAME" id="COMPANY_NAME" class="form-control" placeholder="Company Name" wajib="yes">
																	<label class="label-v4-pl-50" >Company Name</label>
																</div>
																<div class="mb-3 ">
																	<div class="row">
																		<div class="col-sm-8 col-lg-8 form-floating">
																			<input type="text" name="NPWP" id="NPWP" class="form-control" placeholder="NPWP" wajib="yes"> 
																			<label class="label-v4-pl-50" >NPWP</label>
																		</div>
																		<div class="col-sm-4 col-lg-4">
																			<div class="input-group">
																				<input type="file" name="NPWP_FILE" id="NPWP_FILE" class="form-control " placeholder="Upload NPWP" style="display:none;" wajib="yes">
																				<label id="labelNpwp" class="form-control" style="padding:1.25em; border-radius: 2.5px;" for="NPWP_FILE">&nbsp;</label>
																				<div class="input-group-text" style="height:4.15em">
																					<i class="mdi mdi-upload d-block font-size-16"></i>
																				</div>
																			</div>
																			<label class="text-muted">must in pdf file format</label>
																		</div>
																	</div>
																</div>
																<div class="mb-3 form-floating">
																	<input type="text" name="PIC_NAME" id="PIC_NAME" class="form-control" placeholder="Your Name (PIC)" wajib="yes">
																	<label class="label-v4-pl-50" >Your Name (PIC)</label>
																</div>
																<div class="mb-4">
																	<div class="row">
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<input type="text" name="PIC_PHONE" id="PIC_PHONE" class="form-control " placeholder="Your Mobile Number (PIC)" wajib="yes">
																			<label class="label-v4-pl-50" >Your Mobile Number (PIC)</label>
																		</div>
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<input type="text" name="OFFICE_PHONE" id="OFFICE_PHONE" class="form-control " placeholder="Office Phone" wajib="yes">
																			<label class="label-v4-pl-50" >Office Phone</label>
																		</div>
																	</div>
																</div>

																<label class="mb-4">Account Info</label>
																<div class="mb-4">
																	<div class="row">
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<?php echo form_dropdown('REQ_NUMBER_USER',['' => 'Maximum User', '2' => '2 User', '5' => '5 User', '10' => '10 User', '99' => '> 10 User'],'2','id="REQ_NUMBER_USER" mandatory="yes" class="form-select" wajib="yes"'); ?>
																			<label class="label-v4-pl-50" >Maximum User</label>
																		</div>
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<input type="text" name="EMAIL" id="EMAIL" class="form-control input-group" placeholder="Email" wajib="yes" format="email">
																			<label class="label-v4-pl-50" >Email</label>
																		</div>
																	</div>
																</div>
																<div class="mb-4">
																	<div class="row">
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<input type="password" name="PWD" id="PWD" class="form-control input-group input-v4 input-v4-pl-40" placeholder="Password" wajib="yes">
																			<i id="v4-eye-pwd" class="v4-far v4-eye"></i>
																			<label class="label-v4-pl-50" for="PWD">Password</label>
																		</div>
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<input type="password" name="RE_PWD" id="RE_PWD" class="form-control input-group input-v4 input-v4-pl-40" placeholder="Retype Password" wajib="yes">
																			<i id="v4-eye-repwd" class="v4-far v4-eye"></i>
																			<label class="label-v4-pl-50" >Retype Password</label>
																		</div>
																	</div>
																</div>
																<label class="mb-4">Acknowledgement</label>
																<div class="mb-4">
																	<div class="form-check">
																		<input class="form-check-input chk-card chkTermAndCondition" type="checkbox" id="chkTermAndCondition_1">
																		<label class="form-check-label lighter" for="chkTermAndCondition_1">
																			This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information such : your name, email address, phone number, documents and any other information you give us. When you use the Service and tells you about Your Privacy Rights and how the law protects You. We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.
																		</label>
																	</div>
																</div>
																<div class="mb-4">
																	<div class="form-check">
																		<input class="form-check-input chk-card chkTermAndCondition" type="checkbox" id="chkTermAndCondition_2">
																		<label class="form-check-label lighter" for="chkTermAndCondition_2">
																			As part of such responsibilities I shall ensure that user IDs of staff who have left the company or who no longer need to use Logol are removed from Logol. I agree and acknowledge that Logol will not be responsible for any act or omission by your company's Data Security Administrators or its Logol users.
																		</label>
																	</div>
																</div>
																<div class="mb-4">
																	<div class="form-check">
																		<input class="form-check-input chk-card chkTermAndCondition" type="checkbox" id="chkTermAndCondition_3">
																		<label class="form-check-label lighter" for="chkTermAndCondition_3">
																			I have read and agreed to the
																			<a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"> Terms of Service </a> and
																			<a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"> Privacy Policy </a>
																		</label>
																	</div>
																</div>
																<div class="mb-4">
																	<div class="row">
																		<div class="col-sm-6 col-lg-6 form-floating">
																			<?php echo $captcha; ?>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalTitle" aria-hidden="true">
																<div class="modal-dialog modal-dialog-scrollable">
																 <div class="modal-content">
																	 <div class="modal-header">
																		<div>
																			<h5 class="modal-title" id="termsModalTitle">Terms Of Service & Privacy Policy</h5>
																			<p>Please read to submit your registry</p>
																		</div>

																		 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	 </div>

																	 <div class="modal-body">
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																		Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																		Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																		Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																			Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																			Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																			Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																				Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																				Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																				Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																					Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																					Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																					Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																						Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																						Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																						Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																							Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																							Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																							Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																								Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																								Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																								Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																									Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																									Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																									Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie feugiat dictum nunc, neque sed vitae gravida. Et ac metus vulputate dictumst ut. Ut adipiscing sit porttitor velit ultricies. Sodales vitae diam id rutrum sed. Magna eu, pellentesque ut ornare. Lectus justo lorem sit pulvinar mus aliquet feugiat. Cum lorem volutpat faucibus faucibus dictumst vitae ut purus. Aenean at interdum aenean donec at odio sed odio. Enim pulvinar adipiscing consectetur ut. Odio dictum sed turpis ac diam pretium. Habitasse a pharetra non quam in tincidunt nisl.
																										Senectus cursus mauris feugiat blandit. Aliquam vitae penatibus gravida et imperdiet felis sed. Elit cursus cursus lectus nunc velit purus aliquet tortor. Placerat aliquam eget interdum porttitor. Morbi egestas turpis viverra odio dolor mollis nisl consectetur. Pellentesque nam platea cum gravida sed lectus eget a.
																										Velit, non id nullam orci. Malesuada sapien sed mi mi sapien neque commodo tellus. Aliquam nam sit volutpat lacus. Posuere mattis massa auctor nunc cursus. Mattis tellus tortor, tincidunt senectus dictum tempus fermentum sodales.
																										Adipiscing tempor, sodales senectus nisi. Aliquet faucibus lectus dictumst sit viverra convallis egestas.</p>
																	 </div>
																	 <div class="modal-footer">
																		 <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
																		 <button type="button" class="btn btn-info">I, Agree Terms of Service & Privacy Policy</button>
																	 </div>
																 </div>
																</div>
															</div>
															
															<ul class="pager wizard twitter-bs-wizard-pager-link">
																<li class="previous">
																	<button type="button" style="width:15em" href="javascript: void(0);" class="btn btn-outline-light waves-effect waves-light pad-vertical">
																		<i class="bx bx-chevron-left me-1"></i> Back
																	</button>
																</li>
																<li class="float-end">
																	<button type="button" style="width:15em" href="javascript:void(0);" class="btn btn-primary waves-effect waves-light pad-vertical btnSubmit" onclick="doRegister('formRegister'); return false" disabled>
																		Submit                        
																	</button>
																</li>
															</ul>
														</div>
													</div>
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
<span class="v4-loading" style="display:none"></span>
<script src="<?php echo base_url(); ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/imask/imask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/customs.js?v=<?= rand(); ?>"></script>
<script src="<?php echo base_url(); ?>assets/js/customs/register.js?v=<?= rand(); ?>"></script>
<script>
$(document).ready(function(){
	showPwd('PWD','v4-eye-pwd');
	showPwd('RE_PWD','v4-eye-repwd');
	$("#v4-product").fadeOut(500);
	$('#basic-pills-wizard').bootstrapWizard({
		onNext: function(tab, navigation, index){
			if(index == 1){
				if ($('input[name="SERVICE[]"]:checked').length == 0){
					swalert('error','There are required fields');
					return false;
				} else {
					var notvalid = 0;
					$('input[name="SERVICE[]"]:checked').each(function(){
						if($(this).val() == "9~Others"){
							$('#SERVICE_OTHERS_NAME').focus();
							if($('#SERVICE_OTHERS_NAME').val() == ""){
								$('#SERVICE_OTHERS_NAME').addClass('is-invalid');
								notvalid++;
							}else{
								$('#SERVICE_OTHERS_NAME').removeClass('is-invalid');
							}
						}
					});
					if(notvalid > 0){
						swalert('error','There are required fields');
						return false;
					}
				}
				if ($('input[name="PRODUCT_TYPE"]:checked').length == 0){
					swalert('error','There are required fields');
					return false;
				}
			}	
		}
	});
	
	 $(".chkTermAndCondition").change(function(){
		let $length = $('.chkTermAndCondition').filter(':checked').length;
		($length == 3 ? $(".btnSubmit").removeAttr('disabled') : $(".btnSubmit").attr('disabled', 'disabled'));
		return false;
	});
	
	$('input[type=file]').change(function(){ 
		$('#labelNpwp').html($('input[type=file]').val().replace(/C:\\fakepath\\/i, '').substring(0,23));
	});
	
	IMask(document.getElementById("NPWP"),{
		mask: '00.000.000.0-000-000'
	});
});
</script>