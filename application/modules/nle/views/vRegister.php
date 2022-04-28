<style>
.timeline .timeline-box-active::after{
	content: "";
	position: absolute;
	width: 22px;
	height: 22px;
	top: 23px;
	background: white;
	border: 2px solid #0D51F1;
	box-sizing: border-box;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	left:-2.1px;
	border-radius:50%;
}

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

<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="timeline">
					<div id="timeline-container" class="timeline-container">
						<div id="v4-services" class="row timeline-right">
							<div class="col-md-12">
								<div class="timeline-box bg-white">
									<div id="v4-services-active" class="timeline-box-active">
										<div class="event-content">
											<div class="row twitter-bs-wizard-nav">
												<div class="col-xxl-12">
													<h4 class="form-label">Select Role and Product Type</h4>
													<p class="mt-4">
														<b style="font-size:16px">Select Role</b><br>
														Please choose your role, and you can choose more than one role
													</p>
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
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div id="v4-product" class="row timeline-right" style="display:none">
							<div class="col-md-12">
								<div class="timeline-box bg-white">
									<div id="v4-product-active" class="timeline-box-active">
										<div class="event-content">
											<div class="row mt-1 twitter-bs-wizard-nav">
												<div class="col-xxl-12">
													<p>
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
									</div>
								</div>
							</div>
						</div>
						
						<div id="v4-basic-info" class="row timeline-right" style="display:none">
							<div class="col-md-12">
								<div class="timeline-box bg-white">
									<div id="v4-basic-info-active" class="timeline-box-active">
										<div class="event-content">
											<div class="row twitter-bs-wizard-nav">
												<div class="col-xxl-12">
													<h4 class="form-label">Requirement Data</h4>
													<p>
														Please complete the requirement data
													</p>
												</div>
											</div>
											<div class="row">
												<label class="mb-4"><b>Basic Info</b></label>
												<div class="mb-3">
													<div class="row">
														<div class="col-sm-5 col-lg-5 form-floating">
															<input type="text" name="COMPANY_NAME" id="COMPANY_NAME" class="form-control" placeholder="Company Name" wajib="yes">
															<label class="label-v4-pl-50" >Company Name</label>
														</div>
														<div class="col-sm-4 col-lg-4 form-floating">
															<input type="text" name="NPWP" id="NPWP" class="form-control" placeholder="NPWP" wajib="yes"> 
															<label class="label-v4-pl-50" >NPWP</label>
														</div>
														<div class="col-sm-3 col-lg-3">
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
												<div class="mb-4">
													<div class="row">
														<div class="col-sm-5 col-lg-5 form-floating">
															<input type="text" name="PIC_NAME" id="PIC_NAME" class="form-control" placeholder="Your Name (PIC)" wajib="yes">
															<label class="label-v4-pl-50" >Your Name (PIC)</label>
														</div>
														<div class="col-sm-4 col-lg-4 form-floating">
															<input type="text" name="PIC_PHONE" id="PIC_PHONE" class="form-control " placeholder="Your Mobile Number (PIC)" wajib="yes">
															<label class="label-v4-pl-50" >Your Mobile Number (PIC)</label>
														</div>
														<div class="col-sm-3 col-lg-3 form-floating">
															<input type="text" name="OFFICE_PHONE" id="OFFICE_PHONE" class="form-control " placeholder="Office Phone" wajib="yes">
															<label class="label-v4-pl-50" >Office Phone</label>
														</div>
													</div>
												</div>

												<label class="mb-4"><b>Account Info</b></label>
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
												<div class="mb-1" style="text-align:right">
													<button type="button" style="width:15em" href="javascript:void(0);" class="btn btn-primary waves-effect waves-light pad-vertical btnSubmit" onclick="doRegister('formRegister'); return false" disabled>
														Submit                        
													</button>
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
</div>
<script src="<?php echo base_url(); ?>assets/js/customs.js?v=<?= rand(); ?>"></script>
<script src="<?php echo base_url(); ?>assets/js/customs/nle-register.js?v=<?= rand(); ?>"></script>
<script>
	$(document).ready(function(){
		
	});
</script>