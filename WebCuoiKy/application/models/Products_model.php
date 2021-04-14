<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getid($id)
	{
		 return $this->db->query("SELECT * FROM `ao` WHERE ao.id='$id'")->result_array();
		
	}
	public function GetAo() {
		$this->db->select('*');
		return $this->db->get('ao')->result_array();
 	}
 	public function GetLoaiAo() {
		$this->db->select('*');
		return $this->db->get('loaiao')->result_array();
 	}
 	public function GetLoaiSize() {
		$this->db->select('*');
		return $this->db->get('loaisizeAo')->result_array();
 	}
 	public function GetLoaiMau() {
		$this->db->select('*');
		return $this->db->get('LoaiMau')->result_array();
 	}
 	public function GetAobyIDloaiao($id)
 	{
 		$this->db->select('*');
 		$this->db->where('idloaiao', $id);
		return $this->db->get('ao')->result_array();
 	}
 	public function GetAobyID($id)
 	{
 		$this->db->select('*');
 		$this->db->where('id', $id);
		return $this->db->get('ao')->result_array();
 	}
 	public function GetAobyChiTietDonHang($id)
 	{
 		$this->db->select('*');
 		$this->db->where('id', $id);
		return $this->db->get('chitietdonhang')->result_array();
 	}
 	public function search($keyword) 
    {
        $this->db->like('ten',$keyword);
        return $this->db->get('ao')->result_array();
    }
}

/* End of file Products_model.php */
/* Location: ./application/models/Products_model.php */