<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'dashboard_header.php' ?>

<h2 align="center"><strong>Add New Country</strong></h2>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="post" action="<?php echo base_url(); ?>admin/admin_login/new_country">
				<div>
					<label for="Country Name">Country Name :</label>
					<input type="text" name="c_name" id="c_name">
				</div>
				<div>
					<label for="Country Name">Country Code :</label>
					<input type="text" name="c_code" id="c_code">
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