<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowIDLOAIAO extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url','form');
        $this->load->library("pagination");
		$this->load->model('StudentPagination_Model');
	}
//http://localhost:8888/WebCK/index.php/HomePage/IDLOAIAO/index/5
	public function index()
	{
		$this->load->view('ShowIDLOAIAO_view');
	}

}

/* End of file ShowIDLOAIAO.php */
/* Location: ./application/controllers/ShowIDLOAIAO.php */