<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

	class Internal_data extends CI_Model
	{
		public function getalldata()
		{
			$result = $this->db->get('user');

      		$data = $result->result_array();

      		return $data;
		}
	}
?>