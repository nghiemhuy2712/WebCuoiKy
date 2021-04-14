<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function updateUserbyID($id,$tenhienthi,$email,$diachi,$sophone,$hinh=0)
 	{
 		$data = array('anh_avt'=>$hinh,'tenhienthi'=>$tenhienthi,'email'=>$email,'diachi'=>$diachi,'sodienthoai'=>$sophone);
 		$this->db->where('iduser', $id);
 		return $this->db->update('user', $data);
 	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */