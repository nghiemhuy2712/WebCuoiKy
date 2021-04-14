<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignInPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if(!$this->session->userdata('accout'))
		{
			$this->load->view('login/SignIn_view');
		}
		else{
			if($this->session->userdata('accout')['tentaikhoan']="a")
			{
				$this->load->view('login/SignIn_view');
			}
			else{
				redirect('HomePage','refresh');
			}
		}
	}
	public function InsertUser() {
		$uname = $this->input->post('txtUserName');
		$name = $this->input->post('txtNameTK');
		$pw =$this->input->post('txtPassDK1');
		$pw2 =$this->input->post('txtPassDK2');

		if ($pw != $pw2) {
			$message = "Mật khẩu sai vui lòng nhập lại !!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$this->load->view('LoginPage_view');
		}
		$this->load->model('LoginPage_model');
		if($this->LoginPage_model->InsertUser($name,$uname,md5($pw)))
		{
			$accout['tenhienthi'] = $uname;
			$accout['tentaikhoan'] = $name;
			$accout['matkhau'] = md5($pw);
			$accout = $this->LoginPage_model->GetUserByUserName($name);
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
			redirect('HomePage','refresh');
		}
		else echo "khong thanh cong";
	}
	public function LoginUser()
	{
		$user = $this->input->post('txtName');
		$pw = $this->input->post('txtPW');
		if($this->CheckLogin($user,$pw))
		{ 
			$this->load->model('LoginPage_model');
			$this->session->unset_userdata('accout');
			$accout = $this->LoginPage_model->GetUserByUserName($user);
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
			redirect('HomePage','refresh');
		}
		else{
			redirect('SignInPage','refresh');
		}
	}
	public function CheckLogin($user,$pw)
	{
		$this->load->model('LoginPage_model');
		$data = $this->LoginPage_model->GetUserByUserName($user);
		if($data){
			$pw = md5($pw);
			if($pw == $data['matkhau'])
				return true;
		}
		return false;
	}
	public function LogOut()
	{
		$this->session->sess_destroy();
		redirect('HomePage','refresh');

	}
}

/* End of file dangkypage.php */
/* Location: ./application/controllers/dangkypage.php */