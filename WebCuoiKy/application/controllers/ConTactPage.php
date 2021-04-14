<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConTactPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Contact/ConTact_view');
	}

}

/* End of file ConTactPage.php */
/* Location: ./application/controllers/ConTactPage.php */