<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model("homebrew");
	}

	public function index() {
		$this->load->view('adminviews/admin');
	}

	/*
	 * After login:
	 * 	'is_valid' will be TRUE if the input data was valid, else FALSE.
	 *  'admin_id' will contain the user id if logon was successful, else empty.
	 */
	public function login()
	{
		$this->session->set_userdata('admin_id', "");
		$this->session->set_userdata('is_valid', $this->validate_login($this->input->post()));

		if ($this->session->userdata('is_valid')) {
			$this->session->set_userdata('admin_id', $this->homebrew->admin_login($this->input->post()));
		}

		if (empty($this->session->userdata('admin_id'))) {
			redirect('/admin');
		}

		redirect('/admin/products');
	}

	// is the login data valid?
	private function validate_login($post) {
		if (empty($post['adminemail']) || empty($post['adminpassword'])) {
			return FALSE;
		}
		return TRUE;
	}

	// load the products view
	public function products() {
		$products = $this->homebrew->get_all_products();
		$this->load->view("adminviews/products", array("products" => $products));
	}

	// load the add product view
	public function add_product() {
		$this->load->view("adminviews/add");
	}

	// create a new product
	public function create_product() {
		//TODO
	}

	// load the edit product view
	public function edit_product() {
		$this->load->view("adminviews/edit");
	}

	// update a product
	public function update_product() {
		//TODO
	}

	// load the orders view
	public function orders() {
		//TODO
	}


}