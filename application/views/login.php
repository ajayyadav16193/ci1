<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'header.php'; ?>

<?php echo validation_errors(); ?>

 <form action="<?php echo base_url(); ?>registration/authenticate" method="post">	
	<div class="container">
		<h1 class="text-center text-uppercase mt-5 mb-5">login</h1>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				
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
				    <?php 
						// echo form_label('', 'password'); 
						echo form_submit(array(
						        'class' => 'btn btn-success',
						        'name' => 'submit',
						        'value' => 'Submit'
						    ));
				    ?>
			  	</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>



		</form>

<?php  include_once 'footer.php'; ?>