<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		// $this->load->model("homebrew");
	}

	public function index() {
		$this->load->view('adminviews/admin');
	}

	public function login()
	{
		var_dump($this->input->post());
		// $adminId = $this->homebrew->login($this->post());
		// if ($admin_id) {
		// 	$this->session->set_userdata('admin_id', $admin_id);
		// 	$this->load->view("adminviews/products");
		// }
		// else {
			//TODO load a partial that indicates a login error
		// }
	}


}