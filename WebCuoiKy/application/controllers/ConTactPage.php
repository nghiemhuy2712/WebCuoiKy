<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConTactPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Products_model');
		$arLoaiao = $this->Products_model->GetLoaiAo();
		$aritems = array('arLoaiao'=>$arLoaiao);
		$this->load->view('ConTact_view',$aritems,FALSE);
	}

}

/* End of file ConTactPage.php */
/* Location: ./application/controllers/ConTactPage.php */
