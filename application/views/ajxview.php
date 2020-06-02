<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 align="center"><strong><u>User Data By AJAX</u></strong></h2>
				<table id="ajaxInput" class = "table table-bordered table-striped table-hover">
					<thead>
						<tr style="background: #cccc;" class="text-center">
							<th>Sr.No.</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Email</th>
							<th>Image</th>
						</tr>
					</thead>
					<tbody id="ajaxOutput">
						<?php  
							foreach($users as $data)
						    {
						      $sno = 1;
							  echo "<tr>";
							  echo "<td>".$data['id']."</td>";
							  echo "<td>".$data['fname']."</td>";
							  echo "<td>".$data['lname']."</td>";
							  echo "<td>".$data['email']."</td>";
							  echo "<td><img src='".base_url()."assets/images/".$data['img']."' alt='profile_img' style = 'width:100px;' /></td>";
							  echo "</tr>";	
							}
					    ?>
					</tbody>
				</table>
									
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

<?php include_once 'footer.php'; ?>