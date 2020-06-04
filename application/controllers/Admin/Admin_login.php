<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_login extends CI_Controller {

		public function index()
		{
			if ($this->session->has_userdata('Profile_data') != '') {
              	$this->load->view('admin/dashboard');
			} else {
	           	$this->load->view('admin/admin_login');
	    	}
		}

		public function chk_admin_login()
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if ($this->form_validation->run() === True) {
				
				$form_data = array('username' => $this->input->post('username') , 'password' => $this->input->post('password') );

				$this->load->model('admin/admin_data');

				$db_data = $this->admin_data->admin_login();


				if ($form_data['username'] === $db_data[0]['username'] && $form_data['password'] === $db_data[0]['password']) {
					
					$result = array('username' => $db_data[0]['username'] );

					$this->session->set_userdata('Profile_data',$result);

					$this->session->set_userdata('logged_in',True);

              		redirect('admin/admin_login/chk_session');

					// print("in if");
				} else {

              		redirect('admin/admin_login');

					// print("in else");
				}

			}
		}

		public function chk_session()
		{
			if ($this->session->has_userdata('Profile_data') != '') {
              	$this->load->view('admin/dashboard');
				// print_r(2);
			} else {
              	redirect('admin/admin_login');
			}
		}

		public function getcountries()
		{
			$this->load->model('admin/admin_data');

			$country_data['cd'] = $this->admin_data->getcountriesdata();

			// print_r($country_data);
			$this->load->view('admin/countries',$country_data);
		}

		public function addnewcountry()
		{
			$this->load->view('admin/addcountry');
		}

		public function new_country()
		{
			$this->form_validation->set_rules('c_name','Country Name','required');
			$this->form_validation->set_rules('c_code','Country Code','required');

			if ($this->form_validation->run() === True) {
				// print_r(1);
				$data = array('country_name' => $this->input->post('c_name') , 'country_code' => $this->input->post('c_code'));

				$this->load->model('admin/admin_data');

				$result = $this->admin_data->addcountry($data);

				redirect('admin/admin_login/getcountries');

			} else {
				$this->load->view('admin/addcountry');
			}	
		}

		public function country_status()
		{
			$ustatus = array('country_id' => $this->input->post('id') ,'status' => $this->input->post('status')  );
			// print_r($ustatus);
			if ($ustatus['status'] == '1') {
				$status = '0';
			} else {
				$status = '1';
			}

			$this->load->model('admin/admin_data');

			$result = $this->admin_data->countrystatus($ustatus['country_id'],$status);

			if ($result === True) {
				// $this->session->set_flashdata('success_msg',"User status has been changed successfully.");
				redirect('admin/admin_login/getcountries');

			} else{
				// $this->session->set_flashdata('error_msg',"User status not changed.");
				print_r(0);
			}

		}

		public function editcountry($id,$iv)
		{
			$key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        	$uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);
			
			// print_r($uid);
			$this->load->model('admin/admin_data');

			$result['ud'] = $this->admin_data->editcountry($uid);
			
			// print_r($result);
			$this->load->view('admin/editcountry',$result);
		}

		public function edited_country()
		{
			$this->form_validation->set_rules('country_id','required');
			$this->form_validation->set_rules('c_name','Country Name','required');
			$this->form_validation->set_rules('c_code','Country Code','required');

			if ($this->form_validation->run() === True) {

				$edcoundata = array('country_id' => $this->input->post('country_id') , 'country_name' => $this->input->post('c_name') , 'country_code' => $this->input->post('c_code'));

				$this->load->model('admin/admin_data');

				$result = $this->admin_data->editedcountry($edcoundata);

				if ($result === True) {
					redirect('admin/admin_login/getcountries');
				} else {
					redirect('admin/admin_login/editcountry');
				}
			} else {
					redirect('admin/admin_login/editcountry');
			}
		}

		public function getstates()
		{
			$this->load->model('admin/admin_data');

			$state_data['cd'] = $this->admin_data->getstatesdata();

			// print_r($state_data);
			$this->load->view('admin/state',$state_data);
		}


		public function new_state()
		{
			$this->form_validation->set_rules('s_name','State Name','required');
			$this->form_validation->set_rules('s_code','State Code','required');
			$this->form_validation->set_select('country','Country','required');

			if ($this->form_validation->run() === True) {
				
				$new_state = array('state_name' => $this->input->post('s_name'), 'state_code' => $this->input->post('s_code'), 'country_id' => $this->input->post('country') );

				$this->load->model('admin/admin_data');

				$result = $this->admin_data->addstate($new_state);

				// print_r($result);
				redirect('admin/admin_login/getstates');
			} else {
				redirect('admin/admin_login/addnewstate');
			}
		}

		public function addnewstate()
		{
			$this->load->model('admin/admin_data');

			$country_data['cd'] = $this->admin_data->getcountriesdata();

			$this->load->view('admin/addstate',$country_data);
		}

		public function state_status()
		{
			$state_status = array( 'state_id' => $this->input->post('id') ,'status' => $this->input->post('status' ));

			if ($state_status['status'] == 1) {
				$status = '0';
			} else {
				$status = '1';
			}

			$this->load->model('admin/admin_data');
			$result = $this->admin_data->statestatus($state_status['state_id'],$status);
			// print_r($result);

			if ($result === True) {
				// print_r('if');
				redirect('admin/admin_login/getstates');
			} else {
				// print_r('else');
				// redirect();
				print_r(0);
			}
		}

		public function editstate($id,$iv)
		{
			$key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        	$uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);
			
			// print_r($uid);
			$this->load->model('admin/admin_data');

			$result['ud'] = $this->admin_data->editstate($uid);
			
			// print_r($result);
			$this->load->view('admin/editstate',$result);
		}

		public function edited_state()
		{
			$this->form_validation->set_rules('state_id','required');
			$this->form_validation->set_rules('s_name','State Name','required');
			$this->form_validation->set_rules('s_code','State Code','required');
			$this->form_validation->set_select('country','country','required');

			if ($this->form_validation->run() === True) {

				$edstatedata = array('state_id' => $this->input->post('state_id') , 'state_name' => $this->input->post('s_name') , 'state_code' => $this->input->post('s_code') , 'country_id' => $this->input->post('country'));

				// print_r($edstatedata);
				$this->load->model('admin/admin_data');

				$result = $this->admin_data->editedstate($edstatedata);

				if ($result === True) {
					redirect('admin/admin_login/getstates');
				} else {
					redirect('admin/admin_login/editstate');
				}

			} else {
					redirect('admin/admin_login/editstate');
			}
		}

		public function getcities()
		{
			$this->load->model('admin/admin_data');
			$city_data['cd'] = $this->admin_data->getcitiesdata();
			
			// print_r($city_data);

			$this->load->view('admin/city',$city_data);
		}

		public function addnewcity()
		{
			$this->load->model('admin/admin_data');

			$data['sdcd'] = array('sd' => $this->admin_data->getstatesdata() , 'cd' => $this->admin_data->getcountriesdata() );
			// $state_data['sd'] = $this->admin_data->getstatesdata();

			// $country_data['cd'] = $this->admin_data->getcountriesdata();
			// print_r($data);
			$this->load->view('admin/addcity',$data);
			
		}

		public function new_city()
		{
			$this->form_validation->set_rules('city_name','City Name','required');
			$this->form_validation->set_rules('c_code','City Code','required');
			$this->form_validation->set_rules('state','State Name','required');
			$this->form_validation->set_rules('country','Country Name','required');
			
			if ($this->form_validation->run() === True) {
				$new_city = array('city_name' => $this->input->post('city_name'), 'city_code' => $this->input->post('c_code'), 'state_id' => $this->input->post('state') ,'country_id' => $this->input->post('country') );
				// print_r($new_city);

				$this->load->model('admin/admin_data');

				$result = $this->admin_data->addcity($new_city);

				redirect('admin/admin_login/getcities');
			} else {
				// print_r(0);
				$this->load->view('admin/addcity');
			}
			
		}

		public function city_status()
		{
			$city_status = array( 'city_id' => $this->input->post('id') ,'status' => $this->input->post('status' ));

			if ($city_status['status'] == 1) {
				$status = '0';
			} else {
				$status = '1';
			}

			$this->load->model('admin/admin_data');
			$result = $this->admin_data->citystatus($city_status['city_id'],$status);
			// print_r($result);

			if ($result === True) {
				// print_r('if');
				redirect('admin/admin_login/getcities');
			} else {
				// print_r('else');
				// redirect();
				print_r(0);
			}
		}

		public function editcity($id,$iv)
		{
			$key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        	$uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);

			// print_r($uid);
			$this->load->model('admin/admin_data');

			$result['sdcd'] = $this->admin_data->editcity($uid);

			$this->load->view('admin/editcity',$result);
		}

		public function edited_city()
		{
			$this->form_validation->set_rules('city_id','City Id','required');
			$this->form_validation->set_rules('city_name','City_name','required');
			$this->form_validation->set_rules('city_code','City_code','required');
			$this->form_validation->set_select('state','State','required');
			$this->form_validation->set_select('country','Country','required');

			
			if ($this->form_validation->run() === True) {
				$edcitydata = array('city_id' => $this->input->post('city_id') , 'city_name' => $this->input->post('city_name') , 'city_code' => $this->input->post('city_code') , 'state_id' => $this->input->post('state') ,'country_id' => $this->input->post('country'));
				
				$this->load->model('admin/admin_data');

				$result = $this->admin_data->editedcity($edcitydata);
				// print_r();
				if ($result === True) {
					redirect('admin/admin_login/getcities');
				} else {
					redirect('admin/admin_login/editcity');
				}
			} else {
				redirect('admin/admin_login/editcity');
			}
		}

		public function downloadallusers()
		{
			print_r(1);
		}

		public function admin_logout()
		{
			$this->session->unset_userdata('Profile_data');
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
      		redirect('admin_login');
			// print_r(1);
		}

	}

?>