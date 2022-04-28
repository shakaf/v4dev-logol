<style>
	.form-floating .label-v4-pl-50 {
		padding: 1rem 1.50rem !important;
	}
	.form-floating input:focus {
		border-color: #0D51F1;
	}
</style>
<div class="row mt-5">
	<div class="col-xxl-9">
		<h4 class="form-label">Register</h4>
		<p class=" mt-2"></p>
	</div>
	<div class="col-xxl-3" style="text-indent:0%;">
		<blockquote class="blockquote font-size-14 mb-0">
			<div align="right">
				<span class="text-muted">Step 3</span>
				<h5>Basic Info</h5>
			</div>
		</blockquote>
	</div>
</div>
<div class="row mt-5">
	<label class="mb-4">Basic Info</label>
	<div class="mb-3 form-floating">
		<input type="text" name="COMPANY_NAME" id="COMPANY_NAME" class="form-control" placeholder="Company Name">
		<label class="label-v4-pl-50" >Company Name</label>
	</div>
	<div class="mb-3 ">
		<div class="row">
			<div class="col-sm-8 col-lg-8 form-floating">
				<input type="text" name="NPWP" id="NPWP" class="form-control " placeholder="NPWP" >
				<label class="label-v4-pl-50" >NPWP</label>
			</div>
			<div class="col-sm-4 col-lg-4">
				<div class="input-group">
					<input type="file" name="NPWP_FILE" id="NPWP_FILE" class="form-control " placeholder="Upload NPWP" style="display:none;">

					<label class="form-control" style="padding: 1.25em; border-radius: 2.5px;" for="NPWP_FILE">Upload NPWP</label>

					<div class="input-group-text" style="height:4.15em">
						<i class="mdi mdi-arrow-expand-up"></i>
					</div>
				</div>
				<label class="text-muted">must in pdf file format</label>
			</div>
		</div>
	</div>
	<div class="mb-3 form-floating">
		<input type="text" name="PIC_NAME" id="PIC_NAME" class="form-control" placeholder="Your Name (PIC)">
		<label class="label-v4-pl-50" >Your Name (PIC)</label>
	</div>
	<div class="mb-4">
		<div class="row">
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="text" name="PIC_PHONE" id="PIC_PHONE" class="form-control " placeholder="Your Mobile Number (PIC)">
				<label class="label-v4-pl-50" >Your Mobile Number (PIC)</label>
			</div>
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="text" name="OFFICE_PHONE" id="OFFICE_PHONE" class="form-control " placeholder="Office Phone">
				<label class="label-v4-pl-50" >Office Phone</label>
			</div>
		</div>
	</div>

	<label class="mb-4">Account Info</label>
	<div class="mb-4">
		<div class="row">
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="text" name="REQ_NUMBER_USER" id="REQ_NUMBER_USER" class="form-control input-group" placeholder="Request Number Of User">
				<label class="label-v4-pl-50" >Request Number Of User</label>
			</div>
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="text" name="EMAIL" id="EMAIL" class="form-control input-group" placeholder="Email">
				<label class="label-v4-pl-50" >Email</label>
			</div>
		</div>
	</div>
	<div class="mb-4">
		<div class="row">
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="password" name="PWD" id="PWD" class="form-control input-group" placeholder="Password">
				<label class="label-v4-pl-50" >Password</label>
			</div>
			<div class="col-sm-6 col-lg-6 form-floating">
				<input type="password" name="RE_PWD" id="RE_PWD" class="form-control input-group" placeholder="Retype Password">
				<label class="label-v4-pl-50" >Retype Password</label>
			</div>
		</div>
	</div>
	<label class="mb-4">Acknowledgement</label>
	<div class="mb-4">
		<div class="form-check">
			<input class="form-check-input chk-card" type="checkbox">
			<label class="form-check-label lighter">
				This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information such : your name, email address, phone number, documents and any other information you give us. When you use the Service and tells you about Your Privacy Rights and how the law protects You. We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.
			</label>
		</div>
	</div>
	<div class="mb-4">
		<div class="form-check">
			<input class="form-check-input chk-card" type="checkbox">
			<label class="form-check-label lighter">
				As part of such responsibilities I shall ensure that user IDs of staff who have left the company or who no longer need to use Logol are removed from Logol. I agree and acknowledge that Logol will not be responsible for any act or omission by your company's Data Security Administrators or its Logol users.
			</label>
		</div>
	</div>
	<div class="mb-4">
		<div class="form-check">
			<input class="form-check-input chk-card" type="checkbox">
			<label class="form-check-label lighter">
				I have read and agreed to the
				<a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"> Terms of Service </a> and
				<a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"> Privacy Policy </a>
			</label>
		</div>
	</div>
</div>
<input type="hidden" name="SERVICE" id="SERVICE" value="<?php echo $postService; ?>" readonly>
<input type="hidden" name="PRODUCT_TYPE" id="PRODUCT_TYPE" value="<?php echo $postProductType; ?>" readonly>
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
<div style="float:left;">
	<button style="width:15em" href="javascript: void(0);" class="btn btn-outline-light waves-effect waves-light pad-vertical" onclick="ajaxContent('back','service'); return false;">
		<i class="bx bx-chevron-left ms-1"></i> Back
	</button> 
</div>
<div style="float:right;">
	<button style="width:15em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light pad-vertical blue-button rounded-1" onclick="doRegister('formRegister'); return false;">
		Continue <i class="bx bx-chevron-right ms-1"></i>
	</button> 
</div>