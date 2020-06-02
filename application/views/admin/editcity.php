<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<!-- <?php echo "<pre>";print_r($sdcd); ?> -->

<h2 align="center"><strong>Edit City</strong></h2>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/edited_city">
				<input type="hidden" name="city_id" id="city_id" value="<?php echo $sdcd[2][0]['city_id']; ?>">
				<!-- <?php print_r($sdcd[2][0]['city_id']); ?> -->
				<div>
					<label for="City Name">City Name :</label>
					<input type="text" name="city_name" id="city_name" value="<?php echo $sdcd[2][0]['city_name']; ?>">
				</div>
				<div>
					<label for="City Name">City Code :</label>
					<input type="text" name="city_code" id="city_code" value="<?php echo $sdcd[2][0]['city_code']; ?>">
				</div>
				<div>
					<label for="State Name">State Name :</label>
					<select name="state" id="state_data">
						<option value="">Select state</option>
					  		<?php foreach ($sdcd[0] as $state) { ?>
						  			<option <?php if($state['state_id'] === $sdcd[2][0]['state_id'])  
						  						echo 'selected'; ?> value="<?php echo $state['state_id']; ?>">
						  				<?php echo $state['state_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<div>
					<label for="Country Name">Country Name :</label>
					<select name="country" id="country_data">
						<option value="">Select Country</option>
					  		<?php foreach ($sdcd[1] as $country) { ?>
						  			<option <?php if($country['country_id'] === $sdcd[2][0]['country_id'])  echo 'selected'; ?> value="<?php echo $country['country_id']; ?>">
						  				<?php echo $country['country_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<br><br>
				<div>
				 <input type="submit" class="btn btn-success" name="updatecity" id="btn_submit" value="Update">
				</div>
			</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>



<?php include_once 'dashboard_footer.php' ?>