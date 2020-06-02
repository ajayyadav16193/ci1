<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php include_once 'header.php';?>

<?php 	if($this->session->flashdata('successMessage')){ ?>
			<div class="alert alert-success" role="alert">
 				<?php print_r($this->session->flashdata('successMessage')); ?>
			</div>
<?php	} ?>


<?php 	if($this->session->flashdata('errorMessage')){ ?>
			<div class="alert alert-danger" role="alert">
			 <?php print_r($this->session->flashdata('errorMessage')); ?>
			</div>
<?php	}	?>

	<!-- <form enctype="multipart/form-data" action="<?php echo base_url(); ?>registration" method="post">	 -->
	<!-- <?php echo form_open_multipart('registration') ?> -->
	<div class="container">
		<h1 class="text-center text-uppercase mt-5 mb-5">registration form</h1>
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<?php echo form_open_multipart('registration/signup') ?>
					<div class="form-group">
					    <?php 
							echo form_label('First Name', 'firstname'); 
							echo form_input(array(
							        'class' => 'form-control',
							        'name' => 'fname',
							        'placeholder' => 'Enter Name'			
							    ));
							echo form_error('fname');
					    ?>
				  	</div>

				  	<div class="form-group">
					    <?php 
							echo form_label('Last Name', 'lastname'); 
							echo form_input(array(
							        'class' => 'form-control',
							        'name' => 'lname',
							        'placeholder' => 'Enter Surname'			
							    ));
							echo form_error('lname');
					    ?>
				  	</div>

				  	<div class="form-group">
					    <?php 
							echo form_label('Email', 'email'); 
							echo form_input(array(
								'type' => 'email',
							        'class' => 'form-control',
							        'name' => 'email',
							        'placeholder' => 'Email'			
							    ));
							echo form_error('email');
					    ?>
				  	</div>

				  	<div class="form-group">
					    <?php 
							echo form_label('Password', 'password'); 
							echo form_password(array(
							        'class' => 'form-control',
							        'name' => 'password',
							        'placeholder' => 'Password'			
							    ));
							echo form_error('password');
					    ?>
				  	</div>

					<div class="form-group">
						<?php echo form_label('Country', 'country'); ?>
					  	<select name="country" id="country_data" class="form-control input-lg">
							<option value="">Select country</option>
					  		<?php foreach ($countries as $country) { ?>
					  			<option value="<?php echo $country['country_id']; ?>">
					  				<?php echo $country['country_name']; ?>
					  			</option>
					  		<?php } ?>
					  	</select>
					</div>

					<div class="form-group">
						<?php echo form_label('State', 'state'); ?>
					  	<select name="state" id="state_data" class="form-control input-lg">
							<option value="">Select state</option>
					  	</select>
					</div>
				  	
				  	<div class="form-group">
						<?php echo form_label('City', 'city'); ?>
					  	<select name="city" id="city_data" class="form-control input-lg">
							<option value="">Select city</option>
					  	</select>
					</div>
					
					<div class="form-group">
					    <?php 
							echo form_label('Upload Image', 'img');
							echo form_upload(array(
									'class' => 'form-control',
									'type' => 'file',
							        'name' => 'userfile'			
							    ));
						?>
				  	</div>

					<div class="form-group">
					    <?php 
							// echo form_label('', 'password'); 
							echo form_submit(array(
							        'class' => 'btn btn-success',
							        'name' => 'submit',
							        'value' => 'Submit'
							    ));
					    ?>
				  	</div>
				  	
			  	<?php echo form_close(); ?>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

<?php  include_once 'footer.php';?>