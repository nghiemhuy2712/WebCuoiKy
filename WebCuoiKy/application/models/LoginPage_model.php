<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginPage_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetUserByUserName($name)
	{
		$this->db->where('tentaikhoan',$name);
		return $this->db->get('user')->row_array();
	}
	public function GetUserByID($id)
	{
		$this->db->where('iduser',$id);
		return $this->db->get('user')->row_array();
	}
	public function InsertUser($name,$uname,$pw)
 	{
 		$data = array('tentaikhoan'=>$name ,'tenhienthi'=>$uname, 'matkhau'=>$pw);
 		$this->db->insert('user', $data);
 		return $this->db->insert_id();
 	}
}

/* End of file LoginPage_model.php */
/* Location: ./application/models/LoginPage_model.php */