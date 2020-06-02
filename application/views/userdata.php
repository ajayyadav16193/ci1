<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php include_once 'header.php';?>

<?php if($this->session->flashdata('successMessage')){ ?>
			<div class="alert alert-success" role="alert">
 				<?php print_r($this->session->flashdata('successMessage')); ?>
			</div>
<?php } ?>


<?php if($this->session->flashdata('errorMessage')){ ?>
			<div class="alert alert-success" role="alert">
 				<?php print_r($this->session->flashdata('errorMessage')); ?>
			</div>
<?php  }  ?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
		<br><h2 align="center"><strong>All User Data</strong></h2><br>
		<table width="600" border="1" cellspacing="5" cellpadding="5">
			<thead>
				<tr style="background:#CCC;" class="text-center">
				  <th>Sr.No.</th>
				  <th>Name</th>
				  <th>Surname</th>
				  <th>Email</th>
				  <th>Image</th>
				  <th colspan="3">Action</th>
				</tr>

			</thead>
			<tbody>
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
					// print_r($iv);
			
				    foreach($row as $data)
				    {
				      $sno = 1;
					  echo "<tr>";
					  echo "<td>".$data['id']."</td>";
					  echo "<td>".$data['fname']."</td>";
					  echo "<td>".$data['lname']."</td>";
					  echo "<td>".$data['email']."</td>";
					  echo "<td><img src='".base_url()."assets/images/".$data['img']."' alt='profile_img' style = 'width:100px;' /></td>";
					  
					  echo "<td><a href='".base_url()."registration/viewdata/".bin2hex(openssl_encrypt($data['id'],'AES-128-CBC', $key,0, $iv))."/$iv'><button>View</button></a></td>";
 					  
 					  echo "<td><a href='".base_url()."registration/editdata/".bin2hex(openssl_encrypt($data['id'],'AES-128-CBC', $key,0, $iv))."/$iv'><button>Edit</button></td>";
 					  
 					  echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='".base_url()."registration/deletedata/".bin2hex(openssl_encrypt($data['id'],'AES-128-CBC', $key,0, $iv))."/$iv'><button>Delete</button></a></td>";
					  echo "</tr>";
					  $data['id']++;
				    }
				?>
				
			</tbody>


			<!-- <a href="<?php echo base_url(); ?>home" >Back</a> -->

			<!-- <?php
				$key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";
				$text=5;
				$iv = random_bytes(16);
				$encrypted = bin2hex(openssl_encrypt($text,'AES-128-CBC', $key,0, $iv));
				$decrypted=openssl_decrypt(hex2bin($encrypted),'AES-128-CBC',$key,0, $iv);

				print_r($decrypted);
			?> -->

			
		</table>
		     <p><?php echo $links; ?></p>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>









<?php  include_once 'footer.php';?>