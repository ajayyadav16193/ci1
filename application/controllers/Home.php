<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Home Controller */
	class Home extends CI_Controller 
	{
		public function index()
		{
			if ($this->session->has_userdata('profile_data')) {
	          redirect('registration/base');
	        } else {
	          
	          $this->load->model('registrationdata');

	          $data["countries"] = $this->registrationdata->fetch_country();

	          // print_r($data);

	          $this->load->view('index',$data);
	        }
	    }

	}

?>