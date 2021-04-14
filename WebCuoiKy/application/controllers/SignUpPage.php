<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignUpPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/SignUp_view');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */