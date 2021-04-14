<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddProducts_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function AddProducts($name,$mota,$gia,$hinh,$maloaiao,$maloaisize,$maloaimau)
 	{
 		$data = array('ten'=>$name,'mota'=>$mota,'gia'=>$gia,'hinh'=>$hinh,'idloaiao'=>$maloaiao,'idloaisize'=>$maloaisize,'idloaimau'=>$maloaimau);
 		$this->db->insert('ao', $data);
 		return $this->db->insert_id();
 	}
}