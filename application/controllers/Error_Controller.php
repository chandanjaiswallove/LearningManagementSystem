<?php 
defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class Error_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->output->set_status_header('404');
		$this->load->view('errors/CustomError');
	}

}
?>