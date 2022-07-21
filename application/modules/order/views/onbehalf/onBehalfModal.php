<!--  Extra Large modal example View NPWP -->
<form action="" method="get">
	<div class="modal fade bs-example-modal-xl" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myExtraLargeModalLabel">On Behalf Customer</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row mb-2">
						<div class="col-md-10 col-sm-10">
							<input type="text" name="cari" class="form-control" />
						</div>
						<div class="col-md-2 col-sm-2">
							<!-- <button type="button" class="btn btn-primary showmodal" data-show-modal="addModal" >Add</button> -->
							<a href="#" data-bs-toggle="modal" data-bs-target="#addModal">
								<svg width="97" height="32" viewBox="0 0 97 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 4C0 1.79086 1.79086 0 4 0H93C95.2091 0 97 1.79086 97 4V28C97 30.2091 95.2091 32 93 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
									<path d="M32.3335 10V12.6667C32.3335 12.8435 32.4037 13.013 32.5288 13.1381C32.6538 13.2631 32.8234 13.3333 33.0002 13.3333H35.6668" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M34.3335 22H27.6668C27.3132 22 26.9741 21.8595 26.724 21.6095C26.474 21.3594 26.3335 21.0203 26.3335 20.6667V11.3333C26.3335 10.9797 26.474 10.6406 26.724 10.3905C26.9741 10.1405 27.3132 10 27.6668 10H32.3335L35.6668 13.3333V20.6667C35.6668 21.0203 35.5264 21.3594 35.2763 21.6095C35.0263 21.8595 34.6871 22 34.3335 22Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M31 15.3333V19.3333" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M29 17.3333H33" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M49.304 20H47.3268L50.3395 11.2727H52.7174L55.7259 20H53.7486L51.5626 13.267H51.4944L49.304 20ZM49.1805 16.5696H53.8509V18.0099H49.1805V16.5696ZM60.1101 20H57.0163V11.2727H60.1357C61.0135 11.2727 61.7692 11.4474 62.4027 11.7969C63.0362 12.1435 63.5234 12.642 63.8643 13.2926C64.2081 13.9432 64.38 14.7216 64.38 15.6278C64.38 16.5369 64.2081 17.3182 63.8643 17.9716C63.5234 18.625 63.0334 19.1264 62.3942 19.4759C61.7578 19.8253 60.9964 20 60.1101 20ZM58.8615 18.419H60.0334C60.5788 18.419 61.0376 18.3224 61.4098 18.1293C61.7848 17.9332 62.0661 17.6307 62.2536 17.2216C62.4439 16.8097 62.5391 16.2784 62.5391 15.6278C62.5391 14.983 62.4439 14.456 62.2536 14.0469C62.0661 13.6378 61.7862 13.3366 61.4141 13.1435C61.0419 12.9503 60.5831 12.8537 60.0376 12.8537H58.8615V18.419ZM69.0806 20H65.9868V11.2727H69.1061C69.984 11.2727 70.7396 11.4474 71.3732 11.7969C72.0067 12.1435 72.4939 12.642 72.8348 13.2926C73.1786 13.9432 73.3504 14.7216 73.3504 15.6278C73.3504 16.5369 73.1786 17.3182 72.8348 17.9716C72.4939 18.625 72.0038 19.1264 71.3646 19.4759C70.7283 19.8253 69.9669 20 69.0806 20ZM67.832 18.419H69.0038C69.5493 18.419 70.0081 18.3224 70.3803 18.1293C70.7553 17.9332 71.0365 17.6307 71.224 17.2216C71.4144 16.8097 71.5095 16.2784 71.5095 15.6278C71.5095 14.983 71.4144 14.456 71.224 14.0469C71.0365 13.6378 70.7567 13.3366 70.3845 13.1435C70.0124 12.9503 69.5536 12.8537 69.0081 12.8537H67.832V18.419Z" fill="#4A4A68" />
								</svg>
							</a>
						</div>
					</div>
					<table id="tbl-onbehalf" data-urlicon="<?php echo base_url() ?>assets/bootstrap-icons-1.8.3/bootstrap-icons.svg#" data-url="<?php echo site_url('onbehalf-get') ?>" style="width:100%; font-size:12px;">
						<thead>
							<tr>
								<th>Onbehalf NPWP Number</th>
								<th>Onbehalf NPWP Name</th>
								<th>Onbehalf NPWP Address</th>
								<th>Attachment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<!-- <tr><td colspan="5">No Data</td>
								<td>90.000.000.0-000.000</td>
								<td>Rizki Fatimah</td>
								<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
									RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
								<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
								<td>
									<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
									<div class="mt-2">
										<a href="#" data-bs-toggle="modal" data-bs-target="#editModal">
											<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
												<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">
											<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
												<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
												<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
											</svg>

										</a>
									</div>
								</td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>
<!-- /.End modal View NPWP -->


<!--  Extra Large modal Add NPWP On Behalf Customer -->

<div class="modal fade bs-example-modal-xl2" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel2">Add On Behalf Customer</h5>
				<button type="button" class="btn-close closeAddOnbehalf" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formAddOnbehalf" name="formAddOnbehalf" autocomplete="off" method="post" action="<?php echo site_url('onbehalf-add') ?>">
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" name="nameCustomer" class="form-control nameCustomer" placeholder="Onbehalf of Customer Name" required />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<input type="text" name="numberCustomer" class="form-control numberCustomer" placeholder="Onbehalf of Customer Number" required />
						</div>
						<div class="col-md-6">
							<div class="input-group" name="upload" onclick="javascript:document.getElementById('file2').click();">
								<input class="form-control" style="border-color:#86A8F8; color:#0D51F1;background-color:white;" id="uploadDocument" type="text" placeholder="Upload Onbhealf Of Customer" required readonly>
								<img src="<?php echo base_url('assets/images/v4-input-file-icon.png'); ?>" class="input-group-text" style="border-color:#86A8F8" />
								</input>
							</div>
							<span style="font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2;">must in pdf file format</span>
							<label for="file2">
								<input id="file2" type="file" accept="application/pdf" style='visibility: hidden;' name="img" onchange="ChangeText(this, 'uploadDocument');" />
							</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<label>Onbehalf NPWP Address</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select province" name="province" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-cities"); ?>',this.value,'.city')" required>
								<option value="" selected disabled>Select Province</option>
								<?php
								foreach ($province as $dtp) {
								?>
									<option value="<?php echo $dtp['PROVINCE_ID'] ?>"><?php echo $dtp['PROVINCE_NAME'] ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select city" name="city" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-district"); ?>',this.value,'.district')" required>
								<option value="" selected disabled>Select City</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select district" name="district" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-area"); ?>',this.value,'.area')" required>
								<option value="" selected disabled>Select District</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select area" name="area" required>
								<option value="" selected disabled>Select Area</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control address" placeholder="Address" name="address" required />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control postalCode" placeholder="Postal Code" name="postalCode" required />
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="wrapper-buttons-dialog wrapper-w-loader">
						<button type="button" class="btn-modal-dialog btn-dialog-cancel closeAddOnbehalf" data-bs-dismiss="modal" style="width: 50%">Discard</button>
						<a href="javascript:void(0);" id="<?= rand(); ?>" onclick="actOnbehalf('#formAddOnbehalf','add'); return false;" class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<!-- /.END modalADD On Behalf Customer  -->


<!--  Extra Large modal Edit NPWP On Behalf Customer -->

<div class="modal fade bs-example-modal-xl2" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel2">Edit On Behalf Customer</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formEditOnbehalf" action="<?php echo site_url('onbehalf-edit') ?>" data-urlcity="<?php echo site_url("onbehalf-cities"); ?>" data-urldistrict="<?php echo site_url("onbehalf-district"); ?>" method="post">
					<input type="hidden" name="id" class="idonbehalf" />
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" name="namaCustomer" class="form-control enamaCustomer" placeholder="Onbehalf of Customer Name" required />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<input type="text" name="numberCustomer" class="form-control enumberCustomer" placeholder="Onbehalf of Customer Number" required />
						</div>
						<div class="col-md-6">
							<div class="input-group" name="upload" onclick="javascript:document.getElementById('file3').click();">
								<input class="form-control" style="border-color:#86A8F8; color:#0D51F1;background-color:white;" id="uploadDocument2" accept=".jpg, .pdf" type="text" placeholder="Upload Onbhealf Of Customer" required readonly>
								<img src="<?php echo base_url('assets/images/v4-input-file-icon.png'); ?>" class="input-group-text" style="border-color:#86A8F8" />
								</input>
							</div>
							<span style="font-size: 12px; line-height: 16px; letter-spacing: 0.02em; color: #8C8CA2;">must in pdf file format</span>
							<input id="file3" type="file" accept="application/pdf" style='visibility: hidden;' name="img" onchange="ChangeText(this, 'uploadDocument2');" />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<label>Onbehalf NPWP Address</label>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select province eprovince" name="province" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-cities"); ?>',this.value,'.city')" required>
								<option value="" selected disabled>Select Province</option>
								<?php
								foreach ($province as $dtp) {
								?>
									<option value="<?php echo $dtp['PROVINCE_ID'] ?>"><?php echo $dtp['PROVINCE_NAME'] ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select city ecity" name="city" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-district"); ?>',this.value,'.district')" required>
								<option value="" selected disabled>Select City</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<select class="form-select district edistrict" name="district" onchange="onbehalfChangeLoc('<?php echo site_url("onbehalf-area"); ?>',this.value,'.area')" required>
								<option value="" selected disabled>Select District</option>
							</select>
						</div>
						<div class="col-md-6">
							<select class="form-select area earea" name="area" required>
								<option value="" selected disabled>Select Area</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control address" placeholder="Address" name="address" required />
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-12">
							<input type="text" class="form-control postalCode" placeholder="Postal Code" name="postalCode" required />
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="wrapper-buttons-dialog wrapper-w-loader">
						<button class="btn-modal-dialog btn-dialog-cancel" data-bs-dismiss="modal" style="width: 50%">Discard</button>
						<a href="javascript:void(0);" id="<?= rand(); ?>" onclick="actOnbehalf('#formEditOnbehalf','edit'); return false;" class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </a>
					</div>
				</div>
			</div>
		</div>

	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

<!-- /.END modal Edit On Behalf Customer  -->

<!-- Modal Delete On Behalf Customer-->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete On Behalf Customer</h5>
				<button type="button" class="btn-close closeAddOnbehalf" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="formDeleteOnbehalf" action="<?php echo site_url('onbehalf-delete') ?>" method="post">
				<div class="modal-body">

					<h4>Are you sure want to delete this On Behalf Customer?</h4>

				</div>
			</form>
			<div class="modal-footer">
				<input type="hidden" name="idCustomer" class="customerId">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="wrapper-buttons-dialog wrapper-w-loader">
						<button type="button" class="btn-modal-dialog btn-dialog-cancel closeAddOnbehalf" data-bs-dismiss="modal" style="width: 50%">Discard</button>
						<button type="button" class="btn-modal-dialog btn-dialog-submit" style="width: 50%" onclick="delOnbehalf('#formDeleteOnbehalf'); return false;"> Save </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Modal Delete On Behalf Customer-->