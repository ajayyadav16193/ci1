<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'header.php'; ?>

<?php echo validation_errors(); ?>

	<div class="container">

		<div class="row">	  		
			<div class="col-md-3"></div>

			<div class="col-md-6">

	  			<h2 align="center" class="card-title"><u><strong>Edit Profile</strong></u></h2>
 
				<?php echo form_open('registration/editdata2/',"class='form-horizontal'");?>

				<?php $data = $uv[0]; // print_r($data); ?>
				
				<div class="card">
					<div class="row">
						<div class="col-md-2"></div>

						<div class="col-md-8">
							<input type="hidden" name="uid" value="<?php echo $data['id']; ?>">
							<div class="form-group">
								<label> Name : </label>
								<input type="text" placeholder="Name" name="fname" value="<?php echo $data['fname']; ?>">
							</div>
						 
							<div class="form-group">
								<label> Surname : </label>
								<input type="text" placeholder="Surname" name="lname" value="<?php echo $data['lname']; ?>">
							</div>

							<div class="form-group">
								<label> Email : </label>
						 		<input type="text" placeholder="Email" name="email" value="<?php echo $data['email']; ?>" >
							</div>
							
							<button class="btn btn-info" type="submit">Update</button>

							<?php echo form_close(); ?>
						</div>

						<div class="col-md-2"></div>
					</div>
				</div>
  			</div>


	  		<div class="col-md-3"></div>
  		</div>	
	</div>

<?php include_once 'footer.php'; ?>
