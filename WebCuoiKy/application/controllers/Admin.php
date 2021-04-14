<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Test đăng nhập admin

// if($this->session->userdata('accout')==NULL)
// {
// 	$accout['tentaikhoan'] = "admin";
// 	$accout['isADmin'] = 1;
// 	$accout = array('accout' => $accout);
// 	$this->session->set_userdata($accout);
// }

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->library("session");
	}

	public function index()
	{
		$this->load->model('Products_model');
		$this->load->view('Admin/Admin_view');
	}
//--------------------------------------------- Quản lý sản phẩm---------------------------------------------
	public function showListItem()//hiển thị danh sách sp
	{
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAo();
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau);
		$this->load->view('Admin/AdminShowListItem_view',$aritems,FALSE);
	}

	public function showAddItem()//hiện form add
	{
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAo();
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau);
		$this->load->view('Admin/AdminAddItem_view',$aritems,FALSE);
	}

	public function addItem(){//add sản phẩm
		$nameao = $this->input->post('ten');
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$loaiao = $this->input->post('loaiao');
		$loaisize = $this->input->post('loaisize');
		$loaimau = $this->input->post('loaimau');
		$soluong = $this->input->post('soluong');
		$target_dir = "FileUpload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$message = "";
		if($nameao == ""||$mota == ""||$gia<10000 || $gia > 1000000000000){
			$message = $message. " " ."Thông tin áo không hợp lệ.";
			$uploadOk = 0;
		}
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["anh"]["tmp_name"]);
		  if($check !== false) {
		    $message = $message. " " ."File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    $message = $message. " " ."Chưa chọn ảnh.";
		    $uploadOk = 0;
		  }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		  $message = $message. " " ."File ảnh đã tồn tại";
		  $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["anh"]["size"] > 500000) {
		  $message = $message. " " ."File ảnh quá lớn";
		  $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		   $message = $message. " " ."Chỉ hổ trợ file JPG, JPEG, PNG & GIF";
		  $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  	echo "<script type='text/javascript'>alert('$message');</script>";
		  	$this->load->view('Admin/LoadingAddItem_view');	
		// if everything is ok, try to upload file
		} else {
		  	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
			    echo "File ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " đã tải lên.";
			    $hinh = base_url()."FileUpload/". basename($_FILES["anh"]["name"]);
			    $this->load->model('AdminManaDetail_model');
				if($this->AdminManaDetail_model->AddProducts($nameao,$mota,$gia,$soluong,$hinh,$loaiao,$loaisize,$loaimau)){
					$message ="Thêm thành công";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('Admin/LoadingAddItem_view');
				}
			else echo "<script type='text/javascript'>alert('$message');</script>";
		  	} else {
		    	echo "Có lỗi trong quá trình upload.";
		    	$this->load->view('Admin/LoadingAddItem_view');
		  	}
		}
	}

	public function showEditP($id)
	{
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAobyID($id);
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau);
		$this->load->view('Admin/AdminManaP_view', $aritems, FALSE);
	}

	public function deleteP($id)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deletePbyID($id)){
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaP_view');
		}else{
			echo "<script type='text/javascript'>alert('Xóa thất bại');</script>";
			$this->load->view('Admin/LoadingManaP_view');
		}
	}
	public function updateP()
	{
		$idao = $this->input->post('id');
		$nameao = $this->input->post('ten');
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$loaiao = $this->input->post('loaiao');
		$loaisize = $this->input->post('loaisize');
		$loaimau = $this->input->post('loaimau');
		$soluong = $this->input->post('soluong');
		$target_dir = "FileUpload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$message = "";
		if($nameao == ""||$mota == ""||$gia<10000 || $gia > 1000000000000){
			$message = $message. " " ."Thông tin áo không hợp lệ.";
			$uploadOk = 0;
		}
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["anh"]["tmp_name"]);
			if($check !== false) {
			    $message = $message. " " ."File is an image - " . $check["mime"] . ".";
			    $uploadOk = 1;
			}
		}
		
		// Check if file null
		if ($target_file == $target_dir) {
			$uploadOk = 1;
		 	$uploadOk2 = 2;
			// $uploadOk = 0;
		}else{
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			   $message = $message. " " ."Chỉ hổ trợ file JPG, JPEG, PNG & GIF";
			  $uploadOk = 0;
			}
		}

		// Check if file already exists
		if(file_exists($target_file)){
			$uploadOk = 1;
		 	$uploadOk2 = 2;
		}

		// Check file size
		if ($_FILES["anh"]["size"] > 500000) {
			$message = $message. " " ."File ảnh quá lớn";
			$uploadOk = 0;
		}
		

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  	echo "<script type='text/javascript'>alert('$message');</script>";
		  	$this->load->view('Admin/LoadingManaP_view');	
		// if everything is ok, try to upload file
		} else {
		  	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
			    echo "File ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " đã tải lên.";
			    $hinh = base_url()."FileUpload/". basename($_FILES["anh"]["name"]);
			    $this->load->model('AdminManaDetail_model');
				if($this->AdminManaDetail_model->updatePbyID($idao,$nameao,$mota,$gia,$soluong,$hinh,$loaiao,$loaisize,$loaimau)){
					$message ="Sửa thành công";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('Admin/LoadingManaP_view');
				}
			else echo "<script type='text/javascript'>alert('$message');</script>";
		  	} else {
		  		if($uploadOk2 == 2){
		  			$hinh = "";
					$this->load->model('AdminManaDetail_model');
					if($this->AdminManaDetail_model->updatePbyID($idao,$nameao,$mota,$gia,$soluong,$hinh,$loaiao,$loaisize,$loaimau)){
					 	$message ="Sửa thành công";
						echo "<script type='text/javascript'>alert('$message');</script>";
						$this->load->view('Admin/LoadingManaP_view');
					 }
					else {echo "<script type='text/javascript'>alert('$message');</script>";
				  	}
		  		}else{
		  			echo "Có lỗi trong quá trình upload.";
		    		$this->load->view('Admin/LoadingManaP_view');
		  		}
		  	}
		}
	}

    public function search_keyword() 
    {
        $keyword   =  $this->input->post('keyword');
        $this->load->model('Products_model');
        $arao = $this->Products_model->search($keyword);
        $arLoaiao = $this->Products_model->GetLoaiAo();
        $arsize = $this->Products_model->GetLoaiSize();
        $arMau = $this->Products_model->GetLoaiMau();
        $aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau);
        $this->load->view('Admin/AdminShowListItem_view',$aritems);
    }

//--------------------------------------------- Quản lý màu---------------------------------------------
	public function showManaC()
	{
		$this->load->model('Products_model');
		$arMau = $this->Products_model->GetLoaiMau();
		$aritems = array('arMau'=>$arMau);
		$this->load->view('Admin/AdminManaC_view',$aritems,FALSE);
	}
	public function deleteC($idmau)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deleteCbyID($idmau)){
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaC_view');
		}else{
			echo "<script type='text/javascript'>alert('Có sản phẩm đang sử dụng màu này, không thể xóa');</script>";
			$this->load->view('Admin/LoadingManaC_view');
		}
	}

	public function updateC()
	{
		$idmau = $this->input->post('idmau');
		$tenmau = $this->input->post('tenmau');
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->updateCbyID($idmau,$tenmau)){
			echo "<script type='text/javascript'>alert('Đang cập nhật');</script>";
			$this->load->view('Admin/LoadingManaC_view');
		}
	}

	public function addC()
	{
		$tenmau = $this->input->post('tenmau');
		if($tenmau == ""){
			echo "<script type='text/javascript'>alert('Chưa có tên màu');</script>";
				$this->load->view('Admin/LoadingManaC_view');
		}else{
			$this->load->model('AdminManaDetail_model');
			if($this->AdminManaDetail_model->addCbyName($tenmau)){
				echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
				$this->load->view('Admin/LoadingManaC_view');
			}
		}
	}

//--------------------------------------------- Quản lý size---------------------------------------------
	public function showManaS(){
		$this->load->model('Products_model');
		$arsize = $this->Products_model->GetLoaiSize();
		$aritems = array('arsize'=>$arsize);
		$this->load->view('Admin/AdminManaS_view',$aritems,FALSE);
	}
	public function addS()
	{
		$tensize = $this->input->post('tensize');
		if($tensize == ""){
			echo "<script type='text/javascript'>alert('Chưa có tên size');</script>";
				$this->load->view('Admin/LoadingManaS_view');
		}else{
			$this->load->model('AdminManaDetail_model');
			if($this->AdminManaDetail_model->addSbyName($tensize)){
				echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
				$this->load->view('Admin/LoadingManaS_view');
			}
		}
	}

	public function deleteS($idsize)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deleteSbyID($idsize)){
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaS_view');
		}else{
			echo "<script type='text/javascript'>alert('Có sản phẩm đang sử dụng size này, không thể xóa');</script>";
			$this->load->view('Admin/LoadingManaS_view');
		}
	}
	public function updateS()
	{
		$idsize = $this->input->post('idsize');
		$tensize = $this->input->post('tensize');
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->updateSbyID($idsize,$tensize)){
			echo "<script type='text/javascript'>alert('Đang cập nhật');</script>";
			$this->load->view('Admin/LoadingManaS_view');
		}
	}

	//--------------------------------------------- Quản lý loại---------------------------------------------
	public function showManaT(){
		$this->load->model('Products_model');
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$aritems = array('arLoaiao'=>$arLoaiao);
		$this->load->view('Admin/AdminManaT_view',$aritems,FALSE);
	}
	public function addT()
	{
		$tenloai = $this->input->post('tenloai');
		if($tenloai == ""){
			echo "<script type='text/javascript'>alert('Chưa có tên loại');</script>";
				$this->load->view('Admin/LoadingManaT_view');
		}else{
			$this->load->model('AdminManaDetail_model');
			if($this->AdminManaDetail_model->addTbyName($tenloai)){
				echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
				$this->load->view('Admin/LoadingManaT_view');
			}
		}
	}

	public function deleteT($idloai)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deleteTbyID($idloai)){
		$this->AdminManaDetail_model->deleteTbyID($idloai);
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaT_view');
		}else{
			echo "<script type='text/javascript'>alert('Có sản phẩm đang sử dụng loại này, không thể xóa');</script>";
			$this->load->view('Admin/LoadingManaT_view');
		}
	}
	public function updateT()
	{
		$idloai = $this->input->post('idloai');
		$tenloai = $this->input->post('tenloai');
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->updateTbyID($idloai,$tenloai)){
			echo "<script type='text/javascript'>alert('Đang cập nhật');</script>";
			$this->load->view('Admin/LoadingManaT_view');
		}
	}
//--------------------------------------------- Quản lý acc ---------------------------------------------
	public function showManaAcc(){
		$this->load->model('AdminManaDetail_model');
		$arAcc = $this->AdminManaDetail_model->GetAccForMana();
		$arAcc = array('arAcc'=>$arAcc);
		$this->load->view('Admin/AdminManaAcc_view',$arAcc,FALSE);
	}
	
	public function deleteAcc($id)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deleteAccbyID($id)){
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaAcc_view');
		}else{
			echo "<script type='text/javascript'>alert('Acc đang có đon, hãy hủy tất cả đơn của Acc trước khi xóa.');</script>";
			$this->load->view('Admin/LoadingManaAcc_view');
		}
	}
	public function setAcc($id)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->setAccbyID($id)){
			echo "<script type='text/javascript'>alert('Đang cập nhật');</script>";
			$this->load->view('Admin/LoadingManaAcc_view');
		}
	}
//--------------------------------------------- Quản lý hóa đơn ---------------------------------------------
	public function showListUncheckedBill(){
		$this->load->model('AdminManaDetail_model');
		$arBill = $this->AdminManaDetail_model->GetUncheckedBill();
		$arBill = array('arBill'=>$arBill);
		$this->load->view('Admin/AdminShowListBill_view',$arBill,FALSE);
	}
	public function showListCheckedBill(){
		$this->load->model('AdminManaDetail_model');
		$arBill = $this->AdminManaDetail_model->GetCheckedBill();
		$arBill = array('arBill'=>$arBill);
		$this->load->view('Admin/AdminShowListCheckedBill_view',$arBill,FALSE);
	}
	public function deleteBill($id)
	{
		$this->load->model('AdminManaDetail_model');
		if($this->AdminManaDetail_model->deleteBillbyID($id)){
			echo "<script type='text/javascript'>alert('Xóa thành công');</script>";
			$this->load->view('Admin/LoadingManaBill_view');
		}else{
			echo "<script type='text/javascript'>alert('Xóa thất bại');</script>";
			$this->load->view('Admin/LoadingManaBill_view');
		}
	}
	public function showDetailBill($id)
	{
		$this->load->model('AdminManaDetail_model');
		$arBill = $this->AdminManaDetail_model->GetBillbyID($id);
		$arDetail = $this->AdminManaDetail_model->GetDetailBillbyID($id);
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAo();
		$checkStatus = $this->AdminManaDetail_model->checkSlAo($arDetail);
		$aritems = array('arBill' => $arBill, 'arDetail' => $arDetail,'arao' => $arao, 'checkStatus' => $checkStatus);
		$this->load->view('Admin/AdminDetailBill_view', $aritems, FALSE);
	}
	public function showDetailCheckedBill($id)
	{
		$this->load->model('AdminManaDetail_model');
		$arBill = $this->AdminManaDetail_model->GetBillbyID($id);
		$arDetail = $this->AdminManaDetail_model->GetDetailBillbyID($id);
		$aritems = array('arBill' => $arBill, 'arDetail' => $arDetail);
		$this->load->view('Admin/AdminDetaiCheckedlBill_view', $aritems, FALSE);
	}
	
	public function checkBill()
	{
		$this->load->model('AdminManaDetail_model');
		$idAo = $this->input->post('idao[]');
		$slAo = $this->input->post('slao[]');
		$idBill = $this->input->post('id');
		$status = $this->AdminManaDetail_model->checkStatusBFChecked($idBill);
		$arDetail = $this->AdminManaDetail_model->GetDetailBillbyID($idBill);
		$checkStatus = $this->AdminManaDetail_model->checkBeforeChecked($arDetail);
		$abc = $this->AdminManaDetail_model->checkBillbyID($idBill,$checkStatus,$status,$idAo,$slAo);
		$this->load->view('Admin/LoadingManaBill_view');
	}

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */