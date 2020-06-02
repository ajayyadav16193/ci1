<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

 include_once 'dashboard_header.php';
?>

<!-- <?php print_r($cd); ?> -->
<?php 	if($this->session->flashdata('success_msg')){ ?>
			<div class="alert alert-success" role="alert">
 				<?php print_r($this->session->flashdata('success_msg')); ?>
			</div>
<?php	} ?>


<?php 	if($this->session->flashdata('error_msg')){ ?>
			<div class="alert alert-danger" role="alert">
			 <?php print_r($this->session->flashdata('error_msg')); ?>
			</div>
<?php	}	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="<?php echo base_url(); ?>admin/admin_login/addnewcountry" class="btn btn-info" style="float : right">Add country</a>
			</div>
			<div class="col-md-12">
				<h2 align="center"><strong><u>All Countries</u></strong></h2>
				<table border="1" cellspacing="5" cellpadding="5" align="center"  style="text-align: center" class="datatable-1 table table-bordered table-striped display" id="mytable">
					<thead>
						<tr style="background:#CCC;" class="text-center">
						  <th>Sr.No.</th>
						  <th>Country Name</th>
						  <th>Country Code</th>
						  <th colspan="1">Status</th>
						  <th colspan="1">Action</th>
						</tr>
					</thead>
					<tbody id="ajaxOutput">
						<?php 

							$key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";
				
							if( !function_exists('random_bytes') )
							{
							    function random_bytes($length = 16)
							    {
							        $characters = '0123456789';
							        $characters_length = strlen($characters);
							        $output = '';
							        for ($i = 0; $i < $length; $i++)
							            $output .= $characters[rand(0, $characters_length - 1)];

							        return $output;
							    }
							}

							$iv = random_bytes();
							

						    $sno = 1;
							foreach($cd as $data)
						    {
							  echo "<tr>";
							  echo "<td>$sno.</td>";
							  echo "<td>".$data['country_name']."</td>";
							  echo "<td>".$data['country_code']."</td>";
							  // echo "<td>".$data['email']."</td>";
							  // echo "<td><img src='".base_url()."assets/images/".$data['img']."' alt='profile_img' style = 'width:100px;' /></td>";
							  
							  // echo "<td><a href='".base_url()."registration/viewdata/".bin2hex(openssl_encrypt($data['id'],'AES-128-CBC', $key,0, $iv))."/$iv'><button>View</button></a></td>";
		 					  		 					  
		 					  // echo "<td><input type ='submit' id='active' value = 'Active'/></td>";

		 					  // echo "<td><a href='".base_url()."'><button>Deactive</button></td>";
					    		if ($data['status'] == 1) {
					    			echo "<td><button class='btn btn-success' onclick ='uStatus(".$data['country_id'].",status=".$data['status'].")'>Active</button></td>";
					    			// print_r($data['country_id']);
					    		} else {
					    			echo "<td><button class='btn btn-primary' onclick ='uStatus(".$data['country_id'].",status=".$data['status'].")'>Inactive</button></td>";
					    			// uid=".$data['country_id']." status=".$data['status']."
					    			// print_r($data['country_id']);

					    		}

				  			  echo "<td><a href='".base_url()."admin/admin_login/editcountry/".bin2hex(openssl_encrypt($data['country_id'],'AES-128-CBC', $key,0, $iv))."/$iv'><button class='btn btn-info'>Edit</button></td>";
				  			  // <a href='".base_url()."admin/admin_login/editcountry"."/".$data['country_id']."'>
		 					  // echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='".base_url()."'><button>Delete</button></a></td>";
							  echo "</tr>";
							  $sno++;
						    }
						?>

					</tbody>
				</table>
				
			</div>
			<!-- <div class="col-md-2">
				

			</div> -->
		</div>
	</div>

<?php include_once 'dashboard_footer.php'; ?>

