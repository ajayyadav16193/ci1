<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<h2 align="center"><strong>Add New State</strong></h2>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/new_state">
				<div>
					<label for="State Name">State Name :</label>
					<input type="text" name="s_name" id="state_name">
				</div>
				<div>
					<label for="State Name">State Code :</label>
					<input type="text" name="s_code" id="state_code">
				</div>
				<div>
					<label for="Country">Country :</label>
					<select name="country" id="country_data">
						<option value="">Select Country</option>
					  		<?php foreach ($cd as $country) { ?>
						  			<option value="<?php echo $country['country_id']; ?>">
						  				<?php echo $country['country_name']; ?>
						  			</option>
					  		<?php } ?>
					</select>
				</div>
				<div>
					<input type="submit" name="btn btn-info" id="btn_submit" value="Add">
				</div>
			</form>
			
		</div>
		<div class="col-md-2"></div>
	</div>
</div>



<?php include_once 'dashboard_footer.php' ?>