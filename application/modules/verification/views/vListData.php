<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-12 mb-4" >
				<a href="#">Home</a> > Customer
			</div>
			<div class="col-md-12 col-sm-12" >
				<div class="  ">
					<h1 style="color: #002985; font-size:24px;" class="mb-sm-4">Customer New Registrant</h1>
				</div>
			</div>

			<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-md-3  form-floating">
								<select onchange="search();" id="cp" class="form-control" >
									<option>All</option>
									<?php
									foreach($service as $row){
										?>
											<option <?= ($cp == $row['SERVICE_CONTENT_ID'] ? 'selected' : '') ?> value="<?= $row['SERVICE_CONTENT_ID'] ?>"><?= $row['SERVICE_CONTENT_NAME'] ?></option>                                                        <?php
									}
									?>
								</select>
								<label class="label-v4-pl-50" >Company Type</label>
							</div>
							<div class="col-md-3  form-floating">
								<select onchange="search();" id="pt" class="form-control" >
									<option>All</option>
									<?php
									foreach($productType as $row){
										?>
											<option <?= ($pt == $row['PRODUCT_TYPE_ID'] ? 'selected' : '') ?> value="<?= $row['PRODUCT_TYPE_ID'] ?>"><?= $row['PRODUCT_TYPE_NAME'] ?></option>                                                        <?php
									}
									?>
								</select>
								<label class="label-v4-pl-50" >Product Type</label>
							</div>
							<div class="col-md-3 form-floating"></div>
							<div class="col-md-3 form-floating">
								<input type="text" class="form-control" id="txt_searchall" style="padding-left: 10px" />
								<label class="label-v4-pl-50" >Search</label>
							</div>
						</div>
					</div>
			</div>
			<script>
				function search(sel){
					let cp = $("#cp").find(":selected").val();
					let pt = $("#pt").find(":selected").val();
					window.location.href = "<?= site_url("verification-list") ?>?cp="+cp+"&pt="+pt
				}
			</script>
			<div class="card">
					<div class="card-body">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-tabs-custom " role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
									<span class="d-none d-sm-block">New Registrant <span class="badge bg-danger ms-1"><?= ($raw == "No Data Found") ? 0 :  count($raw); ?></span></span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
									<span class="d-none d-sm-block">History</span>
								</a>
							</li>
						</ul>	
						<!-- Tab panes -->
						<div class="tab-content p-3 text-muted">
							<div class="tab-pane active" id="home1" role="tabpanel">
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th width="20%">Company Name</th>
											<th width="10%">Product Type</th>
											<th width="12%">Company Type</th>
											<th width="18%">NPWP</th>
											<th width="10%">PIC Name</th>
											<th width="10%">Email</th>
											<th width="10%">Product Interest</th>
											<th width="10%" class="action-table">Action</th>
										</tr>
									</thead>
									<tbody style="color:#333333" >
									<?php
									if($raw != "No Data Found"){
									foreach($raw as $row){
										?>
										<tr class="listSearch" >

											<td>
												<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row['COMPANY_NAME'] ?></p>
												<p style="font-weight: 500; font-size: 10px;margin:0;">
												<span>
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.5 8.21V9.978C10.5001 10.1046 10.4521 10.2265 10.3658 10.3191C10.2795 10.4117 10.1613 10.4681 10.035 10.477C9.8165 10.492 9.638 10.5 9.5 10.5C5.0815 10.5 1.5 6.9185 1.5 2.5C1.5 2.362 1.5075 2.1835 1.523 1.965C1.53186 1.83872 1.58829 1.72051 1.6809 1.6342C1.77351 1.5479 1.89541 1.49994 2.022 1.5H3.79C3.85202 1.49994 3.91185 1.52293 3.95786 1.56451C4.00388 1.60609 4.0328 1.66329 4.039 1.725C4.0505 1.84 4.061 1.9315 4.071 2.001C4.17037 2.69446 4.374 3.36892 4.675 4.0015C4.7225 4.1015 4.6915 4.221 4.6015 4.285L3.5225 5.056C4.18223 6.59323 5.40727 7.81827 6.9445 8.478L7.7145 7.401C7.74597 7.357 7.79189 7.32544 7.84425 7.31183C7.8966 7.29821 7.95208 7.3034 8.001 7.3265C8.63351 7.62693 9.30779 7.83006 10.001 7.929C10.0705 7.939 10.162 7.95 10.276 7.961C10.3376 7.96732 10.3947 7.99629 10.4362 8.04229C10.4777 8.08829 10.5006 8.14806 10.5005 8.21H10.5Z" fill="#8C8CA2"/>
												</svg>

												</span><?php echo $row['OFFICE_PHONE'] ?></p>
											</td>
											<td><span class="badge badge-soft-dark"><?php echo $row['PRODUCT_TYPE_NAME'] ?></span></td>
											<td><span class="badge badge-soft-dark"><?php echo $row['COMPANY_TYPE_NAME'] ?></span></td>
											<td>
												<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row['COMPANY_NAME'] ?></p>
												<div class="btn btn-sm btn-outline-secondary position-relative">
													<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7 1.5V3.5C7 3.63261 7.05268 3.75979 7.14645 3.85355C7.24021 3.94732 7.36739 4 7.5 4H9.5" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M8.5 10.5H3.5C3.23478 10.5 2.98043 10.3946 2.79289 10.2071C2.60536 10.0196 2.5 9.76522 2.5 9.5V2.5C2.5 2.23478 2.60536 1.98043 2.79289 1.79289C2.98043 1.60536 3.23478 1.5 3.5 1.5H7L9.5 4V9.5C9.5 9.76522 9.39464 10.0196 9.20711 10.2071C9.01957 10.3946 8.76522 10.5 8.5 10.5Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
													</span>
													<a href="<?php echo $row["COMPANY_NPWP_FILE"] ?>" target="_blank">NPWP_files.pdf</a>
												</div>
											</td>
											<td>
												<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row["PIC_NAME"] ?></p>
												<p style="font-weight: 500; font-size: 10px;margin:0;">
												<span>
												<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3 1H9C9.13261 1 9.25979 1.05268 9.35355 1.14645C9.44732 1.24021 9.5 1.36739 9.5 1.5V10.5C9.5 10.6326 9.44732 10.7598 9.35355 10.8536C9.25979 10.9473 9.13261 11 9 11H3C2.86739 11 2.74021 10.9473 2.64645 10.8536C2.55268 10.7598 2.5 10.6326 2.5 10.5V1.5C2.5 1.36739 2.55268 1.24021 2.64645 1.14645C2.74021 1.05268 2.86739 1 3 1ZM6 8.5C5.86739 8.5 5.74021 8.55268 5.64645 8.64645C5.55268 8.74021 5.5 8.86739 5.5 9C5.5 9.13261 5.55268 9.25979 5.64645 9.35355C5.74021 9.44732 5.86739 9.5 6 9.5C6.13261 9.5 6.25979 9.44732 6.35355 9.35355C6.44732 9.25979 6.5 9.13261 6.5 9C6.5 8.86739 6.44732 8.74021 6.35355 8.64645C6.25979 8.55268 6.13261 8.5 6 8.5Z" fill="#8C8CA2"/>
												</svg>
												</span> <?php echo $row['PIC_MOBILE_PHONE'] ?></p>
											</td>
											<td>
												<p><?php echo $row['USER_EMAIL'] ?></p>
											</td>
											<td>
												<?php foreach($row['SERVICE_OF_INTEREST'] as $item) { ?>
													<span class="badge badge-soft-dark"><?php  echo $item['SERVICE_CONTENT_NAME'] ?></span>
												<?php } ?>
											</td>
											<td class="action-table">
												<div class="mb-2">
													<button onclick="setAction('verify', '<?php echo $row['COMPANY_ID'] ?>', '<?php echo $row['USER_ID'] ?>', 'GET')" data-bs-toggle="modal" data-bs-target="#verify" type="button" style="border-color: #ECF1F4; border-width:2px; color:#497DF5;font-weight:bold; font-size:11px;" class="btn btn btn-outline-secondary position-relative">
														Verify
													</button>
													<span id="cid" style="display: none;"></span>
													<span id="uid" style="display: none;"></span>
												</div>
												<div>
													<button onclick="setAction('reject', '<?php echo $row['COMPANY_ID'] ?>', '<?php echo $row['USER_ID'] ?>', 'GET')"  data-bs-toggle="modal" data-bs-target="#verify" type="button" style="border-color: #ECF1F4; border-width:2px;font-weight: bold; font-size:11px;" class="btn btn btn-outline-secondary position-relative">
														Reject
													</button>
												</div>
											</td>
										</tr>
										<?php } } ?>
										<script>
											function doReq(){
												let values = $("#ModalTitle").text();
												if(values === "Verify Confirmation" || values === "Reject Confirmation"){
													let url = "";
													if(values === "Verify Confirmation"){
														url = "verify";
													}else{
														url = "reject";
													}
													$.ajax({
															url: "<?= site_url("set-verification/") ?>"+url,
															type: "post",
															data: {
																action : values,
																cid: $("#cid").text(),
																uid: $("#uid").text(),
																reason: $('#reason').val(),
																"test": "tets",
																"csrf_v4kalibaru": $('meta[name="csrf_v4kalibaru"]').attr('content'),
															} ,
															success: function (response) {
																alert(response);
																window.location.reload();
															},
															error: function(jqXHR, textStatus, errorThrown) {
															console.log(textStatus, errorThrown);
															}
														});
												}else{
													console.log("nothing todo ...");
												}
											}
											function setAction(values, cid, uid, action){
												if(values === "verify"){
														$("#ModalTitle").text("Verify Confirmation");
														$("#ModalDesc").text("If you want to verify the account please give the following reasons to continue");
														$("#cid").text(cid);
														$("#uid").text(uid);
														$('#reason').val("");
												}else if(values === "reject"){
														$("#ModalTitle").text("Reject Confirmation");
														$("#ModalDesc").text("If you want to reject the account please give the following reasons to continue");
														$("#cid").text(cid);
														$("#uid").text(uid);
														$('#reason').val("");

												}else{
													return null;
												}
											}
										</script>
									</tbody>
									<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="termsModalTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-scrollable">
										 <div class="modal-content">
											 <div class="modal-header" align="center">
												<div>
													<h5 class="modal-title mb-4 mt-2" id="ModalTitle">Verify Confirmation</h5>
													<p id="ModalDesc">If you want to verify the account please give the following reasons to continue</p>
												</div>
												 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											 </div>

											 <div class="modal-body">
											 <div class="card" style="border-radius:5px;">
												<div class="card-header" style="border-bottom:0px;">
													<h4 class="card-title"><span class="me-2">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_276_23546)">
														<rect x="0.277954" y="5.6665" width="13" height="8.33333" fill="#497DF5"/>
														<path d="M15.278 6.6665C15.278 6.11422 15.7257 5.6665 16.278 5.6665H18.9446C19.4969 5.6665 19.9446 6.11422 19.9446 6.6665V12.9998C19.9446 13.5521 19.4969 13.9998 18.9446 13.9998H15.278V6.6665Z" fill="#497DF5"/>
														<path d="M19.2368 5.50867H15.5204V4.78656H15.7644C16.4621 4.78656 17.0297 4.21895 17.0297 3.52121C17.0297 2.82348 16.4621 2.25586 15.7644 2.25586H12.834C12.1362 2.25586 11.5686 2.82348 11.5686 3.52121C11.5686 4.21891 12.1362 4.78656 12.834 4.78656H12.9897V5.50867H3.68332C3.52148 5.50867 3.39035 5.63981 3.39035 5.80164C3.39035 5.96348 3.52148 6.09461 3.68332 6.09461H12.9897V13.9055H0.763242C0.665469 13.9055 0.585938 13.826 0.585938 13.7282V6.27188C0.585938 6.17414 0.665469 6.09461 0.763242 6.09461H2.51141C2.6732 6.09461 2.80437 5.96348 2.80437 5.80164C2.80437 5.63981 2.6732 5.50867 2.51141 5.50867H0.763242C0.342383 5.50867 0 5.85105 0 6.27188V13.7282C0 14.1491 0.342383 14.4914 0.763242 14.4914H12.9897V15.2136H12.834C12.1363 15.2136 11.5686 15.7812 11.5686 16.4789C11.5686 17.1766 12.1362 17.7443 12.834 17.7443H15.7644C16.4621 17.7443 17.0298 17.1767 17.0298 16.4789C17.0298 15.7812 16.4621 15.2136 15.7644 15.2136H15.5204V14.4914H19.2368C19.6576 14.4914 20 14.1491 20 13.7282V6.27188C20 5.85105 19.6576 5.50867 19.2368 5.50867ZM19.4141 13.7282C19.4141 13.826 19.3345 13.9055 19.2368 13.9055H15.5204V12.6995C15.5204 12.5377 15.3893 12.4066 15.2275 12.4066C15.0656 12.4066 14.9345 12.5377 14.9345 12.6995V15.5065C14.9345 15.6684 15.0656 15.7995 15.2275 15.7995H15.7644C16.139 15.7995 16.4438 16.1043 16.4438 16.4789C16.4438 16.8536 16.139 17.1584 15.7644 17.1584H12.834C12.4593 17.1584 12.1545 16.8536 12.1545 16.4789C12.1545 16.1043 12.4593 15.7995 12.834 15.7995H13.2827C13.4445 15.7995 13.5756 15.6684 13.5756 15.5065V4.49359C13.5756 4.33176 13.4445 4.20063 13.2827 4.20063H12.834C12.4593 4.20063 12.1545 3.89582 12.1545 3.52121C12.1545 3.14656 12.4593 2.8418 12.834 2.8418H15.7644C16.139 2.8418 16.4438 3.1466 16.4438 3.52121C16.4438 3.89582 16.139 4.20063 15.7644 4.20063H15.2274C15.0656 4.20063 14.9345 4.33176 14.9345 4.49359V11.5277C14.9345 11.6895 15.0656 11.8206 15.2274 11.8206C15.3892 11.8206 15.5204 11.6895 15.5204 11.5277V6.09461H19.2368C19.3345 6.09461 19.414 6.17414 19.414 6.27188V13.7282H19.4141Z" fill="#0E0E2C"/>
														<path d="M2.40283 12.1704C2.40283 12.3322 2.534 12.4634 2.6958 12.4634H4.06959C4.23143 12.4634 4.36256 12.3322 4.36256 12.1704C4.36256 12.0086 4.23143 11.8774 4.06959 11.8774H2.6958C2.534 11.8774 2.40283 12.0086 2.40283 12.1704Z" fill="#0E0E2C"/>
														<path d="M7.4559 12.4634C7.61774 12.4634 7.74887 12.3322 7.74887 12.1704C7.74887 12.0086 7.61774 11.8774 7.4559 11.8774H6.08215C5.92032 11.8774 5.78918 12.0086 5.78918 12.1704C5.78918 12.3322 5.92032 12.4634 6.08215 12.4634H7.4559Z" fill="#0E0E2C"/>
														<path d="M10.8424 12.4634C11.0042 12.4634 11.1353 12.3322 11.1353 12.1704C11.1353 12.0086 11.0042 11.8774 10.8424 11.8774H9.46863C9.30679 11.8774 9.17566 12.0086 9.17566 12.1704C9.17566 12.3322 9.30679 12.4634 9.46863 12.4634H10.8424Z" fill="#0E0E2C"/>
														</g>
														<defs>
														<clipPath id="clip0_276_23546">
														<rect width="20" height="20" fill="white"/>
														</clipPath>
														</defs>
														</svg>
														</span>Reason</h4>
												</div>
												<div class="card-body">
													<Textarea class="form-control" style="height: 100px;" placeholder="Type here..."></Textarea>
												</div>
											</div>
											 </div>
											 <div class="modal-footer">
												 <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
												 <button type="button" onclick="doReq()" class="btn btn-info">Yes, Verify</button>
											 </div>
										 </div>
										</div>
									</div>
								</table>
								</div>
							</div>
							<div class="tab-pane" id="profile1" role="tabpanel">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Company Name</th>
												<th>Product Type</th>
												<th>Company Type</th>
												<th>NPWP</th>
												<th>PIC Name</th>
												<th>Email</th>
												<th>Status</th>
												<th>Product Interest</th>
											</tr>
										</thead>
										<tbody style="color:#333333">
										<?php
											if($rawHis != "No Data Found"){
											foreach($rawHis as $row){
										?>
											<tr class="listSearch">

												<td >
													<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row['COMPANY_NAME'] ?></p>
													<p style="font-weight: 500; font-size: 10px;margin:0;">
													<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.5 8.21V9.978C10.5001 10.1046 10.4521 10.2265 10.3658 10.3191C10.2795 10.4117 10.1613 10.4681 10.035 10.477C9.8165 10.492 9.638 10.5 9.5 10.5C5.0815 10.5 1.5 6.9185 1.5 2.5C1.5 2.362 1.5075 2.1835 1.523 1.965C1.53186 1.83872 1.58829 1.72051 1.6809 1.6342C1.77351 1.5479 1.89541 1.49994 2.022 1.5H3.79C3.85202 1.49994 3.91185 1.52293 3.95786 1.56451C4.00388 1.60609 4.0328 1.66329 4.039 1.725C4.0505 1.84 4.061 1.9315 4.071 2.001C4.17037 2.69446 4.374 3.36892 4.675 4.0015C4.7225 4.1015 4.6915 4.221 4.6015 4.285L3.5225 5.056C4.18223 6.59323 5.40727 7.81827 6.9445 8.478L7.7145 7.401C7.74597 7.357 7.79189 7.32544 7.84425 7.31183C7.8966 7.29821 7.95208 7.3034 8.001 7.3265C8.63351 7.62693 9.30779 7.83006 10.001 7.929C10.0705 7.939 10.162 7.95 10.276 7.961C10.3376 7.96732 10.3947 7.99629 10.4362 8.04229C10.4777 8.08829 10.5006 8.14806 10.5005 8.21H10.5Z" fill="#8C8CA2"/>
			</svg>

													</span><?php echo $row['OFFICE_PHONE'] ?></p>
												</td>
												<td><span class="badge badge-soft-dark"><?php echo $row['PRODUCT_TYPE_NAME'] ?></span></td>
												<td><span class="badge badge-soft-dark"><?php echo $row['COMPANY_TYPE_NAME'] ?></span></td>
												<td>
													<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row['PIC_NAME'] ?></p>
													<p style="font-weight: 500; font-size: 10px;margin:0;">
													<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M7 1.5V3.5C7 3.63261 7.05268 3.75979 7.14645 3.85355C7.24021 3.94732 7.36739 4 7.5 4H9.5" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M8.5 10.5H3.5C3.23478 10.5 2.98043 10.3946 2.79289 10.2071C2.60536 10.0196 2.5 9.76522 2.5 9.5V2.5C2.5 2.23478 2.60536 1.98043 2.79289 1.79289C2.98043 1.60536 3.23478 1.5 3.5 1.5H7L9.5 4V9.5C9.5 9.76522 9.39464 10.0196 9.20711 10.2071C9.01957 10.3946 8.76522 10.5 8.5 10.5Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>

													</span><a href="<?php echo $row["COMPANY_NPWP_FILE"] ?>" >NPWP_files.pdf</a></p>
												</td>
												<td>
													<p style="font-size:12px;font-weight: 500;margin:0;"><?php echo $row['PIC_NAME'] ?></p>
													<p style="font-weight: 500; font-size: 10px;margin:0;">
													<span>

													<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M3 1H9C9.13261 1 9.25979 1.05268 9.35355 1.14645C9.44732 1.24021 9.5 1.36739 9.5 1.5V10.5C9.5 10.6326 9.44732 10.7598 9.35355 10.8536C9.25979 10.9473 9.13261 11 9 11H3C2.86739 11 2.74021 10.9473 2.64645 10.8536C2.55268 10.7598 2.5 10.6326 2.5 10.5V1.5C2.5 1.36739 2.55268 1.24021 2.64645 1.14645C2.74021 1.05268 2.86739 1 3 1ZM6 8.5C5.86739 8.5 5.74021 8.55268 5.64645 8.64645C5.55268 8.74021 5.5 8.86739 5.5 9C5.5 9.13261 5.55268 9.25979 5.64645 9.35355C5.74021 9.44732 5.86739 9.5 6 9.5C6.13261 9.5 6.25979 9.44732 6.35355 9.35355C6.44732 9.25979 6.5 9.13261 6.5 9C6.5 8.86739 6.44732 8.74021 6.35355 8.64645C6.25979 8.55268 6.13261 8.5 6 8.5Z" fill="#8C8CA2"/>
			</svg>

													</span> <?php echo $row['PIC_MOBILE_PHONE'] ?></p>
												</td>
												
												<td>
													<p><?php echo $row['USER_EMAIL'] ?></p>
												</td>
												<td>
													<?php if( $row['STATUS']['COMPANY_STATUS_ID'] == "3"){ ?>
													<span class="badge rounded-pill bg-success">
														approved
													</span>
													<?php }else{ ?>
														<span class="badge rounded-pill bg-danger">
														rejected
													</span>
													<?php } ?>
												</td>
												<td>
													<?php foreach( $row['SERVICE_OF_INTEREST'] as $item ){ ?>
														<span class="badge badge-soft-dark"><?= $item['SERVICE_CONTENT_NAME'] ?></span>
													<?php } ?>
												</td>
											</tr>
											<?php }
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#txt_searchall').keyup(function(){
		var search = $(this).val();
		$('table tbody tr').hide();
		var len = $('table tbody tr:not(.notfound) td:contains("'+search+'")').length;

		if(len > 0){
			$('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
				$(this).closest('tr').show();
			});
		}else{
			$('.notfound').show();
		}
	});

	$('#txt_name').keyup(function(){
		var search = $(this).val();
		$('table tbody tr').hide();

		var len = $('table tbody tr:not(.notfound) td:nth-child(2):contains("'+search+'")').length;
		if(len > 0){
			$('table tbody tr:not(.notfound) td:contains("'+search+'")').each(function(){
				$(this).closest('tr').show();
			});
		}else{
			$('.notfound').show();
		}
	});
});

$.expr[":"].contains = $.expr.createPseudo(function(arg){
	return function( elem ){
	return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
	};
});

$("#vertical-menu").mouseenter(function(){
	$('body').attr('data-sidebar-size','lg');
	$('.offcanvas').css('left','250px');
}).mouseleave(function(){
	$('body').attr('data-sidebar-size','sm');
	$('.offcanvas').css('left','70px');
});
</script>