<div class="row mt-5">
	<div class="col-xxl-9">
		<h4 class="form-label">What are you looking for?</h4>
		<p class=" mt-2">Please select at least one on this list that matched with your needed.</p>
	</div>
	<div class="col-xxl-3" style="text-indent:0%;">
		<blockquote class="blockquote font-size-14 mb-0">
			<div align="right">
				<span class="text-muted">Step 2</span>
				<h5>You Need</h5>
			</div>
		</blockquote>
	</div>
</div>
<div class="row mt-5">
	<?php if(!empty($service)) : ?>
		<?php foreach($service as $data): ?>
				<div class="col-sm-3 col-lg-3" >
					<div class="card" style="height:85%" id="card_<?php echo $data['SERVICE_CONTENT_ID']; ?>" onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');">
						<div align="right" class="check-card2">
							<input onclick="cardCheck('<?php echo $data['SERVICE_CONTENT_ID']; ?>');" <?php echo (in_array($data['SERVICE_CONTENT_ID'],$postService) ? "checked" : ""); ?> wajib="yes" name="SERVICE[]" id="<?php echo $data['SERVICE_CONTENT_ID']; ?>" class="form-check-input chk-card SERVICE" type="checkbox" value="<?php echo $data['SERVICE_CONTENT_ID']; ?>">
						</div>
						<div class="text-center">
							<img src="<?php echo $data['SERVICE_CONTENT_ICON']; ?>" width="80px" alt="icon-service">
						</div>	
						<div class="card-body text-center">
							<h4 class="card-title"><?php echo $data['SERVICE_CONTENT_NAME']; ?></h4>
							<p class="card-text fs-10px"><?php echo $data['SERVICE_CONTENT_DESCRIPTION']; ?></p>
						</div>
					</div>
				</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<input type="hidden" name="PRODUCT_TYPE" id="PRODUCT_TYPE" value="<?php echo $postProductType; ?>" readonly>
</div>
<div style="float:left;">
	<button style="width:15em" href="javascript: void(0);" class="btn btn-outline-light waves-effect waves-light pad-vertical" onclick="ajaxContent('back','product-type'); return false;">
		<i class="bx bx-chevron-left ms-1"></i> Back
	</button> 
</div>
<div style="float:right;">
	<button style="width:15em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light pad-vertical blue-button rounded-1" onclick="ajaxContent('next','form'); return false;">
		Continue <i class="bx bx-chevron-right ms-1"></i>
	</button> 
</div>
<script src="<?= base_url(); ?>assets/js/customs.js?v=<?= rand(); ?>"></script>