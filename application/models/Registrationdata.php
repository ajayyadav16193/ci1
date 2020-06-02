<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Registrationdata extends CI_Model
	{
    public function fetch_country()
    {
      $this->db->where('status','1');

      $result = $this->db->get('country');

      $data = $result->result_array();

      if ($result->num_rows()> 0) {
        return $data;
      } else  {
        return false;
      }
    }

    public function fetch_state($country_id)
    {
      $this->db->select('state.state_id,state.state_name');
      $this->db->from('country');
      $this->db->where('state.state_status','1');
      $this->db->where('country.country_id', $country_id);
      $this->db->join('state', 'country.country_id = state.country_id');
      $state = $this->db->get();
      $state_data = $state->result_array();
      // print_r($state_data);

      if ($state->num_rows()> 0) {
        return $state_data;
      } else  {
        return false;
      }
    }

    public function fetch_city($state_id)
    {
      $this->db->select('city.city_id,city.city_name');
      $this->db->from('state');
      $this->db->where('city.city_status','1');
      $this->db->where('state.state_id', $state_id);
      $this->db->join('city', 'state.state_id = city.state_id');
      $city = $this->db->get();
      $city_data = $city->result_array();
      // print_r($city_data);

      if ($city->num_rows()> 0) {
        return $city_data;
      } else  {
        return false;
      }      
    }


		public function insertData($data)
		{
      $result = $this->db->insert('user', $data);
      
      if($result === true){
        return $result;
      } else {
        return false;
      }
    }    

    public function logindata($data)
    {
       $this->db->where('email' , $data['email']);

       $result = $this->db->get('user');
       $data = $result->result_array();

       $city_name = Registrationdata::getcitybyid($data[0]["city"]);
       // print_r($city_name);
      
       $state_name = Registrationdata::getstatebyid($data[0]['state']);
       // print_r($state_name);
       $country_name = Registrationdata::getcountrybyid($data[0]['country']);
       // print_r($data);
       $userdata = [$data,$city_name,$state_name,$country_name];
       // $address = array(Registrationdata::getcitybyid($data[0]["city"]) ,Registrationdata::getstatebyid($data[0]["state"]) ,Registrationdata::getcountrybyid($data[0]["country"]) );
       // print_r("<pre>");
       // print_r($userdata);

       // die;

       if ($result->num_rows() > 0) {
          return $userdata;
       } else {
          return false;
       }
    }   
    
    public static function getcitybyid($city_id)
    {
      $CI = & get_instance();
      $CI->db->where('city_id',$city_id);
      $CI->db->select('city_name');
      $sql = $CI->db->get('city');
      
      return $sql->result_array();
    }

    static function getstatebyid($state_id)
    {
      $CI = & get_instance();
      $CI->db->where('state_id',$state_id);
      $CI->db->select('state_name');
      
      $query = $CI->db->get('state');
      
      return $query->result_array();
    }

    static function getcountrybyid($country_id)
    {
      $CI = & get_instance();
      $CI->db->where('country_id',$country_id);
      $CI->db->select('country_name');
      $sql = $CI->db->get('country');
      
      return $sql->result_array();
    }

    public function get_user_count()
    {
      $result = $this->db->count_all('user');     
      return $result;
    } 
    
    public function getdata($limit, $start)
    {
      $this->db->limit($limit, $start);

      $result = $this->db->get('user');

      $data = $result->result_array();

      if ($result->num_rows()> 0) {
        return $data;
      } else  {
        return false;
      } 
    }

    public function ajaxdata()
    {
      $sql = $this->db->get('user');

      $data = $sql->result_array();

      if ($sql->num_rows()> 0) {
        return $data;
      } else  {
        return false;
      }
      // echo "<pre>";
      // print_r($data);
    }

    public function getsingledata($id)
    {
      
      $sql = $this->db->get_where('user', array('id' => $id));

      $data = $sql->result_array();

      // print_r($data);      
      return $data;
    }

    public function editdata($id)
    {
      $sql = $this->db->get_where('user', array('id' => $id));

      $data = $sql->result_array();

      // print_r($data);
      return $data;
    }

    public function editdata2($data)
    {
      // print_r($data);

        $result = $this->db->update('user', $data , array('id' => $data['id'])); 
        // $this->db->where('id', $data['id'];
        return $result;
      // print_r($result);

    }

    public function deluserdata($id)
    {
      // echo $id;

      $res = $this->db->delete('user', array('id' => $id));
      
      if ( $res === true ) {
          return $res;
      } else {
          return false;
      }
    }
	}

?>