<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetHoaDonByUser($user)
	{
		return $this->db->query("SELECT hoadon.idhd FROM hoadon WHERE hoadon.tenuser = '$user' AND hoadon.status=0")->row_array();
	}
	public function TaoHoaDon($tenuser)
 	{
 		$data = array('tenuser'=>$tenuser);
 		$this->db->insert('hoadon', $data);
 		return $this->db->insert_id();
 	}
	public function TaoChiTietHoaDon($idhd,$idao,$idloaiao,$idloaisize,$idloaimau)
	{
		$data = array('idhd'=>$idhd,'idao'=>$idao,'idloaiao'=>$idloaiao,'idloaisize'=>$idloaisize,'idloaimau'=>$idloaimau);
 		$this->db->insert('chitiethoadon', $data);
 		return $this->db->insert_id();
	}
	public function ThemsanphamvaoCTHD($idhd,$idsp,$sl)
	{
		$data = array('idhd'=>$idhd,'idao'=>$idsp,'soluong'=>$sl);
 		$this->db->insert('chitiethoadon', $data);
 		return $this->db->insert_id();
	}
	public function GetAoTuChitietDonHang($user)
	{
		// return $this->db->query("SELECT * FROM chitiethoadon , ao , hoadon , loaiao  WHERE hoadon.idhd = chitiethoadon.idhd AND loaiao.idloaiao = ao.idloaiao AND chitiethoadon.idao = ao.id AND hoadon.status =0 AND hoadon.tenuser = '$user'")->result_array();
		return $this->db->query("SELECT * FROM hoadon,chitiethoadon WHERE hoadon.idhd = chitiethoadon.idhd AND hoadon.status =0  AND hoadon.tenuser = '$user'")->result_array();
	}
	public function FinnishDH($id,$data)
	{
		$this->db->where('idhd', $id);
		return $this->db->update('hoadon',$data);
	}
	public function UpdateEmail($id,$data)
	{
		$this->db->where('iduser', $id);
		return $this->db->update('user',$data);
	}
	public function UpdateDiaChi($id,$data)
	{
		$this->db->where('iduser', $id);
		return $this->db->update('user',$data);
	}
	public function UpdateSDT($id,$data)
	{
		$this->db->where('iduser', $id);
		return $this->db->update('user',$data);
	}
	public function UpdateSoluongById($id, $slm)
		{
			$this->db->where('idcthd', $id);
			$data = array('soluong' => $slm);	
			return $this->db->update('chitiethoadon', $data);
		}
	public function DeleteCTHDByIdao($id)
	{
		$this->db->where('idcthd', $id);
		return $this->db->delete('chitiethoadon');

	}
}

/* End of file Cart_model.php */
/* Location: ./application/models/Cart_model.php */
