<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<h2 align="center"><strong>Edit State</strong></h2>
<!-- <?php echo "<pre>"; print_r($ud[1][0]); ?> -->

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/edited_state">
				<input type="hidden" name="state_id" id="state_id" value="<?php echo $ud[1][0]['state_id']; ?>">
				<div>
					<label for="State Name">State Name :</label>
					<input type="text" name="s_name" id="state_name" value="<?php echo $ud[1][0]['state_name']; ?>">
				</div>
				<div>
					<label for="State Name">State Code :</label>
					<input type="text" name="s_code" id="state_code" value="<?php echo $ud[1][0]['state_code']; ?>">
				</div>
				<div>
					<label for="Country">Country :</label>
					<select name="country" id="country_data">
						<option value="">Select Country</option>
					  		<?php foreach ($ud[0] as $country) { ?>
						  			<option <?php if($country['country_id'] === $ud[1][0]['country_id'])  echo 'selected'; ?> value="<?php echo $country['country_id']; ?>">
						  				<?php echo $country['country_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<br><br>
				<div>
				 <input type="submit" class="btn btn-success" name="updatestate" id="btn_submit" value="Update">
				</div>
			</form>
			
		</div>
		<div class="col-md-2"></div>
	</div>
</div>



<?php include_once 'dashboard_footer.php' ?>