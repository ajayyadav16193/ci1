<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<!-- <?php print_r($sdcd); ?> -->

<h2 align="center"><strong>Add New City</strong></h2>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/new_city">
				<div>
					<label for="City Name">City Name :</label>
					<input type="text" name="city_name" id="c_name">
				</div>
				<div>
					<label for="City Name">City Code :</label>
					<input type="text" name="c_code" id="c_code">
				</div>
				<div>
					<label for="State Name">State Name :</label>
					<select name="state" id="state_data">
						<option value="">Select state</option>
					  		<?php foreach ($sdcd['sd'] as $state) { ?>
						  			<option value="<?php echo $state['state_id']; ?>">
						  				<?php echo $state['state_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<div>
					<label for="Country Name">Country Name :</label>
					<select name="country" id="country_data">
						<option value="">Select Country</option>
					  		<?php foreach ($sdcd['cd'] as $country) { ?>
						  			<option value="<?php echo $country['country_id']; ?>">
						  				<?php echo $country['country_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<div>
					<input type="submit" name="btn btn-success" id="btn_submit" value="Add">
				</div>
			</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>



<?php include_once 'dashboard_footer.php' ?>