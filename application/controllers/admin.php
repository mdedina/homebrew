<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("homebrew");
	}

	public function index() {
		$this->load->view('adminviews/admin');
	}

	public function login()
	{
		// var_dump($this->input->post());
		$messages = $this->validate_login($this->input->post());
		if (!empty($messages)) {
			//TODO load a partial to display invalid input messages
			return;
		}

		$admin_id = $this->homebrew->admin_login($this->input->post());
		if (!$admin_id) {
			//TODO load a partial to indicate user not found
			echo "<p>login failed</p>";
			return;
		}

		$this->session->set_userdata('admin_id', $admin_id);

		$products = $this->homebrew->get_all_products();

		$this->load->view("adminviews/products", array("products", $products));

	}

	private function validate_login($post) {
		//TODO check user and pw are not empty
		return "";
	}


}