<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php include_once 'header.php';?>

	<div class="container">
		
		<div class="row">	  		
			<div class="col-md-4"></div>

			<div class="col-md-4">

	  			<h2 align="center" class="card-title"><u>User Data</u></h2>
				
				<?php $data = $row[0]; ?>
				
				<div class="card">
					<div class="row">
						<div class="col-sm-2">
														
						</div>
						<div class="col-sm-8">
							<label><strong>Name : </strong></label>
							<span><?php echo $data['fname']; ?></span><br>
						  	<label><strong>Surname : </strong></label>
						  	<span><?php echo $data['lname']; ?></span><br>
						  	<label><strong>Email : </strong></label>
							<span><?php echo $data['email']; ?></span><br>
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>
		  		</div>

		  		<div class="card">
  		  			<a href="<?php echo base_url(); ?>registration/getAllData" align="center">Back</a>	
  				</div>
			</div>
	  	
	  		<div class="col-md-4"></div>
	  	</div>	
  	
  	</div>

<br><?php  include_once 'footer.php';?>