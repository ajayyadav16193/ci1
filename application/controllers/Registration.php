<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Registration extends CI_Controller 
	{   
    public function signup()
    {
      $this->form_validation->set_rules('fname', 'first name', 'required');
      $this->form_validation->set_rules('lname', 'last name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == FALSE)
      {
              $this->load->view('index.php');
      }
      else
      {

        $config['upload_path']     = 'assets/images/';
        $config['allowed_types']   = 'jpg|png|jpeg';
        $config['max_size']        = 0;
        $config['max_width']       = 0;
        $config['max_height']      = 0;
        $config['encrypt_name']    = TRUE;



        $this->load->library('upload');
        $this->upload->initialize($config);
        // print_r($config);

        if (! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else
        {
            
            $this->load->library('encryption');
            // $password = $this->encryption->encrypt($this->input->post('password'));
            // print_r($password);

            $image = $this->upload->data();
            // echo "<pre>";
            // print_r($image['file_name']);

            $data = array('fname' => $this->input->post('fname'), 'lname' => $this->input->post('lname'), 'email' => $this->input->post('email'), 'country' => $this->input->post('country'), 'state' => $this->input->post('state'), 'city' => $this->input->post('city'), 
            'password' => $this->encryption->encrypt($this->input->post('password')),
             'img' => $image['file_name']);
            // echo "<pre>";
            // print_r($data);
            // die();

            $this->load->model('registrationdata');

            $result = $this->registrationdata->insertData($data);
            
            if($result === true)
            {
               $this->session->set_flashdata('successMessage','record registered');
              redirect("home");
              // $this->load->view('index.php');

            } else {
//add flash data 
              $this->session->set_flashdata('errorMessage','record not registered');
              redirect("home");
              // $this->load->view('index.php');

            }
        }
      }
    }

    public function fetch_state()
      {
        if($this->input->post('country_id'))
        {
          $this->load->model('registrationdata');
          $state = $this->registrationdata->fetch_state($this->input->post('country_id'));

          echo json_encode($state);
        }
      }

      public function fetch_city()
      {
        if($this->input->post('state_id'))
        {
          $this->load->model('registrationdata');
          $city= $this->registrationdata->fetch_city($this->input->post('state_id'));

          echo json_encode($city);
        }
      }

    public function login()
    {
      if ($this->session->has_userdata('profile_data')) {
          redirect('registration/base');
      } else {
        $this->load->view('login');
      }
    }

    

    public function authenticate()
    {
      $this->load->library('encryption');

      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() == TRUE)
      {
        $data = array('email' => $this->input->post('email'));
        $pwd = array('password' => $this->input->post('password'));
        // print_r($data);// print_r($pwd);
        $this->load->model('registrationdata');
        $result = $this->registrationdata->logindata($data);
        // echo "<pre>";
        // print_r($result);
// die;
        // $u = $this->encryption->decrypt($result['password']);
        // $u = $this->encryption->decrypt($result[0]['password']);
        // print_r($result[0]['password']);  // print_r($u);
        if ( $pwd['password'] === $this->encryption->decrypt($result[0][0]['password']) )
        {
            if (isset($result[0]) && !empty($result[0]) && count($result[0]) === 1 ) 
            {
              $result_data = array(
                                'id'       => $result[0][0]['id'],
                                'fname'    => $result[0][0]['fname'],
                                'lname'    => $result[0][0]['lname'],
                                'email'    => $result[0][0]['email'],
                                'img'      => $result[0][0]['img'],
                                'city'     => $result[1][0]['city_name'],
                                'state'    => $result[2][0]['state_name'],
                                'country'  => $result[3][0]['country_name']
              );

              $this->session->set_userdata('profile_data',$result_data);

              $this->session->set_userdata('logged_in',True);

              redirect('registration/base');
            } else {
              redirect('registration/login');
            }
        } else {
           redirect('registration/login');
        }
      }
      else
      {
        redirect('registration/login');
      }     
    }

    public function base()
    {
      if ($this->session->userdata('profile_data') != '' ) {
        $this->load->view('profile');        
      } else {
        redirect('registration/login');
      }
    }


    public function signout()
    {
      $this->session->unset_userdata('profile_data');
      $this->session->unset_userdata('logged_in');
      $this->session->sess_destroy();
      redirect('registration/login');
    }

    public function startajax()
    {
      $this->load->model('registrationdata');

      $data['users'] = $this->registrationdata->ajaxdata();

      $this->load->view('ajxview', $data);
    }

    public function getdatabyajax()
    {
      $this->load->model('registrationdata');

      $data = $this->registrationdata->ajaxdata();

      echo json_encode($data);
    }

    


    public function getAllData()
    {
      /* Pagination */
      $this->load->library('pagination');
      $this->load->model('registrationdata');

      $config['base_url'] = base_url() . "registration/getAllData";
      $config['total_rows'] = $this->registrationdata->get_user_count();
      $config['per_page'] = '3';
      $config['uri_segment'] = 3;
      $config['display_pages'] = True;
      $config['use_page_numbers'] = True;
      // $choice = $config["total_rows"] / $config["per_page"];
      // $config['num_links'] = round('choice');
      $config['num_links'] = 3;


//    Pagination
      // $config['full_tag_open'] = '<p>';
      $config['full_tag_open'] = '<ul class = "pagination">';
      //First link
      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';

      //Last link
      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';

      //Next link
      $config['next_link'] = 'Next';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';

      //Previous link
      $config['prev_link'] = 'Prev';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';


      $config['full_tag_close'] = '</ul>';
      // $config['full_tag_close'] = '</p>';


      $this->pagination->initialize($config);
      // echo "<pre>";
      // print_r($config);

          if ($this->uri->segment(3) == 0) 
          {
            $value = 0;
          } else 
          {
            $value = ($config['per_page'])*($this->uri->segment(3) - 1);
            // print_r($value);
          }

        $result['row'] = $this->registrationdata->getdata($config['per_page'],$value);
        $result['links'] = $this->pagination->create_links();
      // print_r();
      $this->load->view('userdata',$result);
    }

    public function viewdata($id,$iv)
    {
        $key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        $uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);
         
        // echo $uid;

        $this->load->model('registrationdata');

        $result['row'] = $this->registrationdata->getsingledata($uid);

        $this->load->view('viewsingleuser',$result);
    }


    public function editdata($id,$iv)
    {
        $key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        $uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);
         
        // echo $uid;

        $this->load->model('registrationdata');

        $result['uv'] = $this->registrationdata->editdata($uid);

        // echo "Hi";
        // print_r($result);

        $this->load->view('edituser',$result);
    }

    public function editdata2()
    {
      $this->form_validation->set_rules('fname', 'first name', 'required');
      $this->form_validation->set_rules('lname', 'last name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');

      if ($this->form_validation->run() == FALSE)
      {
              $this->load->view('edituser');
      }
      else
      {
            

            $data = array('id' => $this->input->post('uid'), 'fname' => $this->input->post('fname'), 'lname' => $this->input->post('lname'), 'email' => $this->input->post('email'));
            
            $this->load->model('registrationdata');

            $result = $this->registrationdata->editdata2($data);
            
            if($result === true){

                $this->session->set_flashdata('successMessage','record updated');
                redirect('registration/getAllData');
              // $this->load->view('userdata');

            } else {
//add flash data 
              $this->session->set_flashdata('errorMessage','record not updated');
              redirect("");
              // $this->load->view('index.php');

            }
      }
    }

    public function deletedata($id,$iv)
    {
        $key = "dd&efhf8909(%$#@^^DVHDSUH565444!!!!HUHDVN&*&*";

        $uid = openssl_decrypt(hex2bin($id),'AES-128-CBC',$key,0, $iv);

        // echo $uid;
        $this->load->model('registrationdata');

        $res = $this->registrationdata->deluserdata($uid);

        redirect("registration/getAllData");
    }
  }

?>