<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

	class Aj extends CI_Controller 
	{
		public function getdata()
		{
			$this->load->model('api_m/internal_data');

			$result = $this->internal_data->getalldata();

			// print_r(count($result));

			if (count($result) > 0) {

				echo json_encode($result);
				
			} else {
				$message = array('error' => "No data found" );

				echo json_encode($message);
			}
		}
	}

?>