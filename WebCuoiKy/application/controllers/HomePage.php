<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url','form');
        $this->load->library("pagination");
		$this->load->model('StudentPagination_Model');
	}

	public function index()
	{	
		if($this->session->userdata('accout')==NULL)
		{
			$accout['tentaikhoan'] = "a";
			$accout['matkhau'] = 0;
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
		}

		$this->load->model('Cart_model');
		if($this->session->userdata('accout'))
			$NowHD=$this->Cart_model->GetHoaDonByUser($this->session->userdata('accout')['tentaikhoan']);
		$this->load->model('Products_model');
		$arao = $this->Products_model->GetAo();
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$arsize = $this->Products_model->GetLoaiSize();
		$arMau = $this->Products_model->GetLoaiMau();
		$arAoThun = $this->Products_model->GetAobyIDloaiao('2');
		$arAoKhoac = $this->Products_model->GetAobyIDloaiao('1');
		$arAoSoMi = $this->Products_model->GetAobyIDloaiao('5');
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau,'arAoThun'=>$arAoThun,'arAoKhoac'=>$arAoKhoac,'arAoSoMi'=>$arAoSoMi);
		$this->load->view('HomePage_view',$aritems,FALSE);
	}
	public function AddProducts() {
		$nameao = $this->input->post('ten');
		if($nameao.length >500)
		{
			echo"1";
		}
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$loaiao = $this->input->post('loaiao');
		$loaisize = $this->input->post('loaisize');
		$loaimau = $this->input->post('loaimau');
		$target_dir = "FileUpload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["anh"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["anh"]["size"] > 500000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}
		$hinh = base_url()."FileUpload/". basename($_FILES["anh"]["name"]);
		$this->load->model('AddProducts_model');
		if($this->AddProducts_model->AddProducts($nameao,$mota,$gia,$hinh,$loaiao,$loaisize,$loaimau)){
			echo"TC";
		}
		else echo "khong thanh cong";
		}	
	public function IDLOAI($id)
		{
			$this->load->model('Products_model');
			$arid = $this->Products_model->getid($id);
			$arao = $this->Products_model->GetAo();
			$arLoaiao = $this->Products_model->GetLoaiAo();
			$arsize = $this->Products_model->GetLoaiSize();
			$arMau = $this->Products_model->GetLoaiMau();
			$aritems = array('arid'=>$arid,'arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau);
			$this->load->view('detailitem_view',$aritems,FALSE);
		}
	public function search_keyword() 
    {
    	$this->load->model('Products_model');
        $this->load->model('LoginPage_model');
        $arLoaiao = $this->Products_model->GetLoaiAo();
        $arsize = $this->Products_model->GetLoaiSize();
        $arMau = $this->Products_model->GetLoaiMau();

    	$config = array();
        $config['key'] = $this->input->get('keyword'); 
 
        $keyword = $this->input->get('keyword');
        
        if ($keyword!=NULL) {
        	$fullAo = $this->StudentPagination_Model->GetAobyTenAo($keyword);
        }
        else
        {
        	$fullAo = $this->StudentPagination_Model->GetAobyTenAo($config['key']);
        }

        $config['page'] = empty($this->input->get('page')) ? 1 : $this->input->get('page');
		$config['per_page'] = empty($this->input->get('show')) ? 8 : $this->input->get('show');

		$config['total'] = count($fullAo);
		$config['maxPage'] = ceil($config['total']/$config['per_page']);
		
		$config['product_keyword'] = $keyword;

		$start = ($config['page'] - 1) * $config['per_page'] + 1;

		

		$arao = $this->StudentPagination_Model->GetAobyTenAo($config['key'], $start, $config['per_page']);
        $aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau,'keyword'=>$keyword,'config'=>$config);
        $this->load->view('SearchPage_view',$aritems,FALSE);
    }
	public function IDLOAIAO($id)
		{	$this->load->model('Products_model');
			$arLoaiao = $this->Products_model->GetLoaiAo();
			$arsize = $this->Products_model->GetLoaiSize();
			$arMau = $this->Products_model->GetLoaiMau();

			$fullAo = $this->StudentPagination_Model->GetAobyIDloaiao($id);
			$config = array();
			$config['page'] = empty($this->input->get('page')) ? 1 : $this->input->get('page');
			$config['per_page'] = empty($this->input->get('show')) ? 8 : $this->input->get('show');
			$config['total'] = count($fullAo);
			$config['maxPage'] = ceil($config['total']/$config['per_page']);
			$config['product_id'] = $id;
			
			// get data
			$start = ($config['page'] - 1) * $config['per_page'] + 1;
			$arao = $this->StudentPagination_Model->GetAobyIDloaiao($id, $start, $config['per_page']);
			// echo $start . "<br>";
			// echo $end;


	
	        $data = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'arsize'=>$arsize,'arMau'=>$arMau, 'config' => $config);
			$this->load->view('ShowIDLOAIAO_view',$data);
		}
	public function LogOut()
	{
		$this->session->sess_destroy();
		redirect('HomePage','refresh');
	}
}


/* End of file HomePage.php */
/* Location: ./application/controllers/HomePage.php */
