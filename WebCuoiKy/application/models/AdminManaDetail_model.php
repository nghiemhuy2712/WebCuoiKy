<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminManaDetail_model extends CI_Model { 
	

	//-----------------------------------------Quản lý sản phẩm
	public function AddProducts($name,$mota,$gia,$soluong,$hinh,$maloaiao,$maloaisize,$maloaimau)
 	{
 		$data = array('ten'=>$name,'mota'=>$mota,'gia'=>$gia,'soluong'=>$soluong,'hinh'=>$hinh,'idloaiao'=>$maloaiao,'idloaisize'=>$maloaisize,'idloaimau'=>$maloaimau);
 		$this->db->insert('ao', $data);
 		return $this->db->insert_id();
 	}

 	public function deletePbyID($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('ao');
	}
	public function updatePbyID($id,$name,$mota,$gia,$soluong,$hinh,$maloaiao,$maloaisize,$maloaimau)
 	{
 		$this->db->where('id', $id);
 		$ao = $this->db->get('ao')->result_array();
 		if($hinh == ""){
 			$hinh = $ao[0]['hinh'];
 		}else{	
 			$this->load->helper("file");
			delete_files($ao[0]['hinh']);
 		}
 		
 		$aosua = array('id' => $id, 'ten'=>$name,'mota'=>$mota,'gia'=>$gia,'soluong'=>$soluong,'hinh'=>$hinh,'idloaiao'=>$maloaiao,'idloaisize'=>$maloaisize,'idloaimau'=>$maloaimau);
 		$this->db->where('id', $id);
 		return $this->db->update('ao', $aosua);
 	}
	//-----------------------------------------quản lý màu
	public function checkFkC($idmau)
	{
		$this->db->where('idloaimau', $idmau);
 		$ao = $this->db->get('ao')->result_array();
 		if(empty($ao)){
 			return true; //rỗng
 		}else{
 			return false;
 		}
	}

	public function deleteCbyID($idmau)
	{ 
		$check = $this->checkFkC($idmau);
		if($check){
			$this->db->where('idmau', $idmau);
			return $this->db->delete('LoaiMau'); //rỗng, xóa được
		}else{
			return false; //không thể xóa
		}
	}

	public function updateCbyID($idmau,$tenmau)
	{
		$mausua = array('idmau' => $idmau,'tenmau' => $tenmau );
		$this->db->where('idmau', $idmau);
		return $this->db->update('LoaiMau', $mausua);
	}

	public function addCbyName($tenmau)
	{
		$mauthem = array('tenmau' => $tenmau);
		$this->db->insert('LoaiMau', $mauthem);
		return $this->db->insert_id();
	}

	//----------------------------------------- quản lý size
	public function addSbyName($tensize)
	{
		$sizethem = array('tensizeao' => $tensize);
		$this->db->insert('loaisizeAo', $sizethem);
		return $this->db->insert_id();
	}

	public function checkFkS($idsize)
	{
		$this->db->where('idloaisize', $idsize);
 		$ao = $this->db->get('ao')->result_array();
 		if(empty($ao)){
 			return true; //rỗng
 		}else{
 			return false;
 		}
	}

	public function deleteSbyID($idsize)
	{
		$check = $this->checkFkS($idsize);
		if($check){
			$this->db->where('idsizeao', $idsize);
			// $this->db->where('idsizeao', $idsize);
			return $this->db->delete('loaisizeAo'); //rỗng, xóa được
		}else{
			return false; //không thể xóa
		}
	}

	public function updateSbyID($idsize,$tensize)
	{
		$sizesua = array('idsizeao' => $idsize,'tensizeao' => $tensize);
		$this->db->where('idsizeao', $idsize);
		return $this->db->update('loaisizeAo', $sizesua);
	}

	//----------------------------------------- quản lý loại
	public function addTbyName($tenloai)
	{
		$loaithem = array('tenloaiao' => $tenloai);
		$this->db->insert('loaiao', $loaithem);
		return $this->db->insert_id();
	}

	public function checkFkT($idloai)
	{
		$this->db->where('idloaiao', $idloai);
 		$ao = $this->db->get('ao')->result_array();
 		if(empty($ao)){
 			return true; //rỗng
 		}else{
 			return false;
 		}
	}

	public function deleteTbyID($idloai)
	{
		$check = $this->checkFkT($idloai);
		if($check){
			$this->db->where('idloaiao', $idloai);
			return $this->db->delete('loaiao'); //rỗng, xóa được
		}else{
			return false; //không thể xóa
		}
	}

	public function updateTbyID($idloai,$tenloai)
	{
		$loaisua = array('idloaiao' => $idloai,'tenloaiao' => $tenloai);
		$this->db->where('idloaiao', $idloai);
		return $this->db->update('loaiao', $loaisua);
	}

	//----------------------------------------- quản lý ACC
	public function GetAcc() {
		$this->db->select('*');
		return $this->db->get('user')->result_array();
 	}
 	public function GetAccForMana() {
		$this->db->select('*');
		$this->db->where('isAdmin', 0);
		return $this->db->get('user')->result_array();
 	}
	
	public function checkFkAcc($id)
	{
		$this->db->where('iduser', $id);
 		$acc = $this->db->get('user')->result_array();
 		if(empty($acc)){
 			return true; //rỗng
 		}else{
 			return false;
 		}
	}

	public function deleteAccbyID($id)
	{ 
		$check = $this->checkFkAcc($id);
		if($check){
			$this->db->where('iduser', $id);
			return $this->db->delete('user'); //rỗng, xóa được
		}else{
			return false; //không thể xóa
		}
	}

	public function setAccbyID($id)
	{
		$pass = "11be96009b1b24fc52543c13c3bfa6f5"; //set pass là P12345678
		$accsua = array('iduser' => $id,'matkhau' => $pass);
		$this->db->where('iduser', $id);
		return $this->db->update('user', $accsua);
	}
//----------------------------------------- quản lý Bill
	public function GetBill() {
		$this->db->select('*');
		return $this->db->get('hoadon')->result_array();
 	}
 	public function GetUncheckedBill() {
		$this->db->select('*');
		$this->db->where('status', "0");
		return $this->db->get('hoadon')->result_array();
 	}
  	public function GetCheckedBill() {
		$this->db->select('*');
		$this->db->where('status', "1");
		return $this->db->get('hoadon')->result_array();
 	}
 	public function deleteBillbyID($id)
	{
		$this->db->where('idhd', $id);
		return $this->db->delete('hoadon');
	}
	public function GetBillbyID($id) {
 		$this->db->select('*');
 		$this->db->where('idhd', $id);
		return $this->db->get('hoadon')->result_array();
 	}
	public function GetDetailBillbyID($id) {
 		$this->db->select('*');
 		$this->db->where('idhd', $id);
		return $this->db->get('chitiethoadon')->result_array();
 	}
 	public function checkSlAo($chitiet)
 	{
 		foreach ($chitiet as $key => $value) {
 			$this->db->select('*');
 			$this->db->where('id', $value['idao']);
 			$aotam = $this->db->get('ao')->result_array();
 			if(empty($aotam)){
 			}else{
 				if($value['soluong']<=$aotam[0]['soluong']){
 					$status[]=  array('tt' => "Còn đủ hàng");
 				}else{
 					$status[] = array('tt' => "Không đủ hàng");
 				}
 			}
 		}
 		return $status;
 	}
 	public function checkBeforeChecked($chitiet)
 	{
 		foreach ($chitiet as $key => $value) {
 			$this->db->select('*');
 			$this->db->where('id', $value['idao']);
 			$aotam = $this->db->get('ao')->result_array();
 			if(empty($aotam)){
 			}else{
 				if($value['soluong']<=$aotam[0]['soluong']){
 					
 				}else{
 					return 0;
 				}
 			}
 		}
 		return 1;
 	}
 	public function checkStatusBFChecked($idBill)
 	{
 		$this->db->select('*');
 		$this->db->where('idhd', $idBill);
 		$bill = $this->db->get('hoadon')->result_array();
		return $bill[0]['status'];
 	}
	public function checkBillbyID($idBill,$checkStatus,$status,$idAo,$slAo)
	{
		if($checkStatus == 1){
			if($status == 0){
				$dem =0;
				foreach ($idAo as $key => $value) {
					$this->db->where('id', $value);
					$ao = $this->db->get('ao')->result_array();
					if($ao != null){
						$slmoi = $ao[0]['soluong'] - $slAo[$dem];
						$aosua = array('soluong' => $slmoi);
						$this->db->where('id', $value);
						$this->db->update('ao', $aosua);
					}
					$dem++;
				}
				$bill = array('status' => "1");
				$this->db->where('idhd', $idBill);
				return $this->db->update('hoadon', $bill);
			}else{
				echo "Hóa đơn đã được xác nhận trước.";
			}
		}else{
			echo "Không còn đủ áo để xác nhận đơn.";
		}
	}



}

/* End of file DeleteColor_model.php */
/* Location: ./application/models/DeleteColor_model.php */