<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include_once 'header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 align="center"><strong><u>User Data By AJAX</u></strong></h2>
				<table width="800" border="1" cellspacing="5" cellpadding="5">
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
						
						
					</tbody>
				</table>
									
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>

<?php include_once 'footer.php'; ?>