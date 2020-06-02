<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<h2 align="center"><strong>Edit Country</strong></h2>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/edited_country">
				<div>
					<input type="hidden" name="country_id" id="country_id" value="<?php echo $ud[0]['country_id']; ?>">

					<label for="Country Name">Country Name :</label>
					<input type="text" name="c_name" id="c_name" value="<?php echo $ud[0]['country_name']; ?>">
				</div>
				<div>
					<label for="Country Name">Country Code :</label>
					<input type="text" name="c_code" id="c_code" value="<?php echo $ud[0]['country_code']; ?>">
				</div>
				<!-- <?php  print_r($ud); ?> -->
				<br><br>
				<div>
				 <input type="submit" class="btn btn-success" name="updatecountry" id="btn_submit" value="Update">
				</div>
			</form>
			
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<?php include_once 'dashboard_footer.php' ?>