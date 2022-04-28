<style>

</style>
<div class="row mt-5">
	<div class="col-xxl-9">
		<h4 class="form-label">Product Type</h4>
		<p class=" mt-2">We can two service type logistic order.</p>
	</div>
	<div class="col-xxl-3" style="text-indent:0%;">
		<blockquote class="blockquote font-size-14 mb-0">
			<div align="right">
				<span class="text-muted">Step 1</span>
				<h5>Product Type</h5>
			</div>
		</blockquote>
	</div>
</div>
<div class="row mt-5">
	<?php if(!empty($productType)) : ?>
		<?php foreach($productType as $data): ?>
			<div class="col-sm-6 col-lg-6" onclick="cardCheck('<?php echo $data['PRODUCT_TYPE_ID']; ?>');">
				<div class="card" style="height:85%" id="card_<?php echo $data['PRODUCT_TYPE_ID']; ?>">
					<div class="card-body" >
						<div class="row">
							<div class="col-sm-11 col-lg-11">
								<h5 class="card-title"><?php echo $data['PRODUCT_TYPE_NAME']; ?></h5>
							</div>
							<div class="col-sm-1 col-lg-1">
								<input onclick="cardCheck('<?php echo $data['PRODUCT_TYPE_ID']; ?>');" <?php echo ($data['PRODUCT_TYPE_ID'] == $postProductType ? "checked" : ""); ?> wajib="yes" name="PRODUCT_TYPE" id="<?php echo $data['PRODUCT_TYPE_ID']; ?>" class="form-check-input <?php echo "chk_".$data['PRODUCT_TYPE_ID']; ?>" type="radio" value="<?php echo $data['PRODUCT_TYPE_ID']; ?>">
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
<div style="float:right;">
	<button style="width:15em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light pad-vertical blue-button rounded-1" onclick="ajaxContent('next','service'); return false;">
		Continue <i class="bx bx-chevron-right ms-1"></i>
	</button> 
</div>
<script src="<?= base_url(); ?>assets/js/customs.js?v=<?= rand(); ?>"></script>
