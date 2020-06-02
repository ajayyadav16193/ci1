<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'header.php'; ?>


<?php

	if ($this->session->has_userdata('profile_data')) {
		
		$name = $this->session->userdata('profile_data'); 
		// print_r($name);
		if($this->session->has_userdata('logged_in') == 1){
?>

		
		<div class="container">
			<h2><strong><u>Profile Page</u></strong></h2>
			<div class="card">
			  	<div class="row">
			  		<div class="col-md-10">
						
						<div class="row">
							
							<div class="col-md-8">
								<label class="ml-2 mr-4"><strong>Email : </strong></label>
							  	<span><?php echo $name['email']; ?></span><br>
								<input type="hidden" id="uid" name="uid" value="<?php echo $name['id']; ?>">
								<label class="ml-2 mr-4"><strong> Name : </strong></label>
								<input type="text" id="fname" name="fname" value="<?php echo $name['fname']; ?>"><br><br>
							  	<label class="ml-2 mr-2"><strong>Surname : </strong></label>
							  	<input type="text" id="lname" name="lname" value="<?php echo $name['lname']; ?>"> <br><br>
								<label class="ml-2 mr-4"><strong>City : </strong></label>
							  	<input type="text" id="city" name="city" value="<?php echo $name['city']; ?>"> <br><br>								
								<label class="ml-2 mr-4"><strong>State : </strong></label>
							  	<input type="text" id="state" name="state" value="<?php echo $name['state']; ?>"> <br><br>								
								<label class="ml-2 mr-4"><strong>Country : </strong></label>
							  	<input type="text" id="country" name="country" value="<?php echo $name['country']; ?>"> <br><br>
							  	<button type="submit" id="profileUpdate" name="profileUpdate" class="btn btn-success">Update</button>											
							</div>

							<div class="col-md-2">
								<h6><strong>Profile Picture</strong></h6>
								<img src="<?php echo base_url(); ?>assets/images/<?php  echo $name['img']; ?>" alt="img" style = "width: 260px; border-style: solid;">
							</div>
						
						</div>
			  		</div>
				</div>
			</div>
		  	
		  	<div class="card">
		  		<div class="col-md-2">
		  			<a href="<?php echo base_url(); ?>registration/getAllData" >Back</a>	
		  		</div>
		  	</div>	
		  	
		</div>
<?php
	}
 }
?>


<?php include_once 'footer.php'; ?>
