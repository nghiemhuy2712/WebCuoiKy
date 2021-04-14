<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAo();
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$arAoThun = $this->Products_model->GetAobyIDloaiao('2');
		$arAoKhoac = $this->Products_model->GetAobyIDloaiao('1');
		$arAoSoMi = $this->Products_model->GetAobyIDloaiao('5');
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau,'arAoThun'=>$arAoThun,'arAoKhoac'=>$arAoKhoac,'arAoSoMi'=>$arAoSoMi);
		$this->load->view('User/User_view',$aritems,FALSE);
	}
	public function updateAccout()
	{
		$this->load->model('User_model');
		$this->load->model('LoginPage_model');
		$tenhienthi = $this->input->post('txtTenHienThi');
		$email = $this->input->post('txtEmail');
		$diachi = $this->input->post('txtDC');
		$sophone = $this->input->post('txtPhone');
		$iduser=$this->session->userdata('accout')['iduser'];
		$target_dir = "FileUpload/avt/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);

		if (strlen($this->session->userdata('accout')['anh_avt'])>4)
		{
			if(strlen($target_file)>15)
			{
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$message = "";
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
				   $message = $message. " " ."Chỉ hổ trợ file JPG, JPEG, PNG & GIF ";
				  $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  	echo "<script type='text/javascript'>alert('$message');</script>";
				  	$this->load->view('User/User_view');
				// if everything is ok, try to upload file
				} else {
				  	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
					    echo "File ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " đã tải lên.";
					    $hinh = base_url()."FileUpload/avt/". basename($_FILES["anh"]["name"]
						);
					    if($this->User_model->updateUserbyID($iduser,$tenhienthi,$email,$diachi,$sophone,$hinh)){
							$message ="Sửa thành công";
							echo "<script type='text/javascript'>alert('$message');</script>";
							$this->load->view('User/User_view');

						}
					else {
					    	echo "Có lỗi trong quá trình cập nhật.";
					    	$this->load->view('User/User_view');
					  	}
					}
				}
			}
			else{
			$hinh = $this->session->userdata('accout')['anh_avt'];
			if($this->User_model->updateUserbyID($iduser,$tenhienthi,$email,$diachi,$sophone,$hinh)){
					$message ="Sửa thành công";
					echo "<script type='text/javascript'>alert('$message');</script>";
					$this->load->view('User/User_view');
				}	
			}	
		}
		else{
			if($this->session->userdata('accout')['anh_avt']==0)
			{
				if(strlen($target_file)> 15)
				{
					$target_dir = "FileUpload/avt/";
					$target_file = $target_dir . basename($_FILES["anh"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$message = "";
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
					   $message = $message. " " ."Chỉ hổ trợ file JPG, JPEG, PNG & GIF ";
					  $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					  	echo "<script type='text/javascript'>alert('$message');</script>";
					  	$this->load->view('User/User_view');
					// if everything is ok, try to upload file
					} else {
					  	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
						    echo "File ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " đã tải lên.";
						    $hinh = base_url()."FileUpload/avt/". basename($_FILES["anh"]["name"]
							);
						    if($this->User_model->updateUserbyID($iduser,$tenhienthi,$email,$diachi,$sophone,$hinh)){
								$message ="Sửa thành công";
								echo "<script type='text/javascript'>alert('$message');</script>";
								$this->load->view('User/User_view');
							}
							else {
						    	echo "Có lỗi trong quá trình cập nhật.";
						    	$this->load->view('User/User_view');
						  	}
						}
					}
				}
				else
				{
					if($this->User_model->updateUserbyID($iduser,$tenhienthi,$email,$diachi,$sophone,$this->session->userdata('accout')['anh_avt'])){
						$message ="Sửa thành công";
						echo "<script type='text/javascript'>alert('$message');</script>";
						$this->load->view('User/User_view');
					}
					else {
				    	echo "Có lỗi trong quá trình cập nhật.";
				    	$this->load->view('User/User_view');
				  	}
				}
				
			}
			else{
				$target_dir = "FileUpload/avt/";
					$target_file = $target_dir . basename($_FILES["anh"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$message = "";
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
					   $message = $message. " " ."Chỉ hổ trợ file JPG, JPEG, PNG & GIF ";
					  $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					  	echo "<script type='text/javascript'>alert('$message');</script>";
					  	$this->load->view('User/User_view');
					// if everything is ok, try to upload file
					} else {
					  	if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
						    echo "File ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " đã tải lên.";
						    $hinh = base_url()."FileUpload/avt/". basename($_FILES["anh"]["name"]
							);
						    if($this->User_model->updateUserbyID($iduser,$tenhienthi,$email,$diachi,$sophone,$hinh)){
								$message ="Sửa thành công";
								echo "<script type='text/javascript'>alert('$message');</script>";
								$this->load->view('User/User_view');
							}
							else {
						    	echo "Có lỗi trong quá trình cập nhật.";
						    	$this->load->view('User/User_view');
						  	}
						}
					}
				}
			
		}
		
		// $array = $this->session->userdata('accout');
		// $this->session->set_userdata( $array );
		$this->session->unset_userdata('accout');
		$accout = $this->LoginPage_model->GetUserById($iduser);
		$accout1 = array('accout' => $accout);
		$this->session->set_userdata($accout1);
		redirect('User','refresh');			
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */