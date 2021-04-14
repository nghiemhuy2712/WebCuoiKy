<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CartPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data=$this->session->all_userdata();
		$this->load->model('Products_model');
		$this->load->model('Cart_model');
		$NowHD=$this->Cart_model->GetHoaDonByUser($this->session->userdata('accout')['tentaikhoan']);
		$arao = $this->Products_model->GetAo();
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$this->load->model('Products_model');
		$this->load->model('Cart_model');
		$ten = $this->input->post('inpten');
		$diachi = $this->input->post('inpdc');
		$sdt = $this->input->post('inpsdt');
		$user = $this->session->userdata('accout')['tentaikhoan'];
		$arCT = $this->Cart_model->GetAoTuChitietDonHang($user);
		$i = 0;
		foreach ($arCT as $key => $value) {
			$i++;
		}
		$up = array(
			'soluongsanpham' => $i
		);
		$this->session->set_userdata($up);
		// $data=$this->session->all_data();
		$tongtien = 0;
		foreach ($arCT as $key => $value) {
			foreach ($arao as $key1 => $value1) {
				if($value['idao']==$value1['id'])
				{
					$tongtien += $value1['gia']*$value['soluong'];
				}
			}
		}
		$arritems = array('arCT' => $arCT,'arao'=>$arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau ,'tongtien'=>$tongtien);
		$this->load->view('Cart/Cart_view',$arritems,FALSE);
	}
	public function TaoDonHang($id)
	{
		$loaiao = $this->input->post('loaiao');
		$loaisize = $this->input->post('loaisize');
		$loaimau = $this->input->post('loaimau');
		$this->load->model('Cart_model');
		$this->load->model('Products_model');
		$user = $this->session->userdata('accout')['tentaikhoan'];
		$arao = $this->Products_model->GetAobyID($id);
		if($arao[0]['idloaiao']!=$loaiao)
		{
			$arao[0]['idloaiao']=$loaiao;
		}
		if($arao[0]['idloaisize']!=$loaisize)
		{
			$arao[0]['idloaisize']=$loaisize;
		}
		if($arao[0]['idloaimau']!=$loaimau)
		{
			$arao[0]['idloaimau']=$loaimau;
		}
		if(isset($user)){
			$NowHD=$this->Cart_model->GetHoaDonByUser($user);
			if(isset($NowHD))
			{
				$arCTDH = $this->Cart_model->TaoChiTietHoaDon($NowHD['idhd'],$id,$arao[0]['idloaiao'],$arao[0]['idloaisize'],$arao[0]['idloaimau']);
				redirect('CartPage','refresh');
			}
			else{
				$arDH = $this->Cart_model->TaoHoaDon($user);
				$arCTDH = $this->Cart_model->TaoChiTietHoaDon($arDH,$id,$arao[0]['idloaiao'],$arao[0]['idloaisize'],$arao[0]['idloaimau']);
				redirect('CartPage','refresh');
			}
		}
	}
	public function UpdateSoluong($id)
	{
		$data['soluong'] = $this->input->post('soluong');
		$this->load->model('Cart_model');
		$data = $this->Cart_model->UpdateSoluongById($id,$data);
		redirect('CartPage','refresh');
	}
	public function XoaItemCTDH($id)
	{
		$this->load->model('Cart_model');
		if($this->Cart_model->DeleteCTHDByIdao($id)){
			redirect('CartPage','refresh');
			}
	}
	public function ThanhToan($id)
	{
		if($this->session->userdata('accout')['tentaikhoan']=="a")
		{
			$messageS = "Cần đăng nhập để thanh toán !!!";
			echo "<script type='text/javascript'>alert('$messageS');</script>";
			redirect('SignUpPage','refresh');
		}
		$data['status'] = 1;
		$data1['email'] = $this->input->post('txtEmail');
		$data1['diachi'] = $this->input->post('txtDiaChi');
		$data1['sodienthoai']= $this->input->post('txtSDT');
		$iduser = $this->session->userdata('accout')['iduser'];
		$this->load->model('Cart_model');
		$this->load->model('LoginPage_model');
		if($this->Cart_model->FinnishDH($id,$data)){
			$message = "Đã thanh toán thành công !!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if($this->Cart_model->UpdateEmail($iduser,$data1 )&&$this->Cart_model->UpdateDiaChi($iduser,$data1)&&$this->Cart_model->UpdateSDT($iduser,$data1))
		{
			$this->session->unset_userdata('accout');
			$accout = $this->LoginPage_model->GetUserById($iduser);
			$accout1 = array('accout' => $accout);
			$this->session->set_userdata($accout1);
			$message2 = "Đã thêm thông tin thành công !!!";
			echo "<script type='text/javascript'>alert('$message2');</script>";
		}
		else
		{
			$message3 = "Thêm thông tin ko thành công !!!";
			echo "<script type='text/javascript'>alert('$message2');</script>";
		}
		redirect('CartPage','refresh');
	}
}

/* End of file CartPage.php */
/* Location: ./application/controllers/CartPage.php */