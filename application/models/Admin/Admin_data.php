<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 Admin Database working
	 */
	class Admin_data extends CI_Model
	{
		public function admin_login()
		{
			$sql = $this->db->get('superadmin');

			$result = $sql->result_array();
			
			// print_r($sql);

			if ($sql->num_rows() > 0) {
				return $result;
			} else {
				return false;
			}

		}

		public function getcountriesdata()
		{
			$sql = $this->db->get('country');

			$countries = $sql->result_array();
			
			// print_r($sql);

			if ($sql->num_rows() > 0) {
				return $countries;
			} else {
				return false;
			}

		}

		
		public function addcountry($data)
		{

			$sql = $this->db->insert('country', $data);
			// print_r($sql);
			$query = $this->db->get('country');

			$countries = $query->result_array();


			if ($query->num_rows() > 0) {
				return $countries;
			} else {
				return false;
			}

		}

		public function countrystatus($id,$status)
		{
			$data = array('status' => $status);
			$this->db->where('country.country_id', $id);
			$sql = $this->db->update('country', $data);	
			// print_r($sql);
			return $sql;
			
		}

		public function editcountry($id)
		{
			$sql = $this->db->where('country_id',$id);
			$sql = $this->db->get('country');

			$query = $sql->result_array();

			if ($sql->num_rows() > 0) {
				return $query;
			} else {
				return false;
			}
		}

		public function editedcountry($edcoundata)
		{
			// print_r($edcoundata['country_id']);
			$sql = $this->db->where('country.country_id',$edcoundata['country_id']);
			$sql = $this->db->update('country', $edcoundata);	

			if ($sql === true) {
				return true;
			} else {
				return false;
			}
		}

		public function getstatesdata()
		{
			$sql = $this->db->get('state');

			$states = $sql->result_array();
			
			// print_r($sql);

			if ($sql->num_rows() > 0) {
				return $states;
			} else {
				return false;
			}
		}

		public function addstate($data)
		{

			$sql = $this->db->insert('state', $data);
			// print_r($sql);
			$query = $this->db->get('state');

			$states = $query->result_array();
			// echo '<pre>';
			// print_r($states);

			if ($query->num_rows() > 0) {
				return $states;
			} else {
				return false;
			}
		}

		public function statestatus($id,$status)
		{
			$data = array('state_status' => $status );

			$this->db->where('state.state_id', $id );

			$sql = $this->db->update('state', $data);	

			// print_r($id);
			// print_r($status);
			return $sql;
		}

		public function editstate($id)
		{
			$sql = $this->db->where('state_id',$id);
			$sql = $this->db->get('state');

			$result = array($this->getcountriesdata(),$sql->result_array() );
		// $res = $this->getcountriesdata();
			
		// $query = $sql->result_array();

			if ($sql->num_rows() > 0) {
				return $result;
			} else {
				return false;
			}
		}

		public function editedstate($edstatedata)
		{
			// print_r($edstatedata['state_id']);
			$sql = $this->db->where('state.state_id',$edstatedata['state_id']);
			$sql = $this->db->update('state', $edstatedata);	

			if ($sql === true) {
				return true;
			} else {
				return false;
			}
		}

		public function getcitiesdata()
		{
			$sql = $this->db->get('city');

			$query = $sql->result_array();

			if ($sql->num_rows() > 0) {
				return $query;
			} else {
				return false;
			}
		}

		public function addcity($data)
		{
			$sql = $this->db->insert('city',$data);
			// print_r($sql);
			$query = $this->db->get('country');

			$cities = $query->result_array();


			if ($query->num_rows() > 0) {
				return $cities;
			} else {
				return false;
			}
		}

		public function citystatus($id,$status)
		{
			$data = array('city_status' => $status );

			$this->db->where('city.city_id', $id );

			$sql = $this->db->update('city', $data);	

			// print_r($id);
			// print_r($status);
			return $sql;
		}

		public function editcity($id)
		{
			$sql = $this->db->where('city_id',$id);
			$sql = $this->db->get('city');

			$result = array( $this->getstatesdata(), $this->getcountriesdata() , $sql->result_array() );
			// print_r("<pre>");
			// print_r($result);
			if ($sql->num_rows() > 0) {
				return $result;
			} else {
				return false;
			}
		}

		public function editedcity($edcitydata)
		{
			$sql = $this->db->where('city.city_id',$edcitydata['city_id']);
			$sql = $this->db->update('city', $edcitydata);	
			print_r($sql);

			if ($sql === true) {
				return true;
			} else {
				return false;
			}
		}
	}


?>