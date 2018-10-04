<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_contactus($data){
		$this->db->insert('contactus',$data);
		return $this->db->insert_id();
	}
	public  function save_user($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	
	public  function get_user_details($u_id){
		$this->db->select('u_id,cust_name,email,address,mobile,amount,description')->from('users');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public  function update_payment_details($u_id,$data){
		$this->db->where('u_id',$u_id);
		return $this->db->update('users',$data);
	}
	
	

}