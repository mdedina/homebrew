<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("homebrew");
	}

	// load the login page
	public function index() {
		$this->load->view('adminviews/admin');
	}

	/*
	 * After login:
	 * 	'badinput' will be TRUE if the input data was empty, else FALSE.
	 *  'loginfailed' will be TRUE if the username/password were not in the database.
	 *  'adminid' will contain the user id if logon was successful, else 0;
	 */
	public function login()
	{
		$this->session->set_userdata('adminid', 0);
		$badinput = !$this->validate_login($this->input->post());
		$this->session->set_flashdata('badinput', $badinput);

		if (!$badinput) {
			$id = $this->homebrew->admin_login($this->input->post());
			$this->session->set_userdata('adminid', $id);
			if ($id == 0) {
				$this->session->set_flashdata('loginfailed', TRUE);
			}
		}

		if (!$this->session->userdata('adminid')) {
			redirect('/admin');
		}

		redirect('/admin/orders');
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

	// create a new product (i.e. handle the post from the 'add product' view)
	public function create_product() {
		$post = $this->input->post();
		//TODO $this->homebrew->create_product($post);
		redirect('/admin/products');
	}

	// load the edit product view
	public function edit_product($product_id) {
		//TODO $product = $this->homebrew->get_product($product_id);
		$this->load->view("adminviews/edit" /*, $product*/);
	}

	// update a product (i.e. handle the post from the 'edit product' view)
	public function update_product() {
		$post = $this->input->post();
		//TODO $this->homebrew->update_product($post);
		redirect('/admin/products');
	}

	public function delete_product($product_id) {
		//TODO $this->homebrew->delete_product($product_id);
		redirect('/admin/products');
	}

	// load the orders view
	public function orders() {
		//TODO $orders = $this->homebrew->get_all_orders();
		$this->load->view("adminviews/orders" /*, array("orders" => $orders) */);
	}

	// load the show order view
	public function show_order($order_id) {
		//TODO $order = $this->homebrew->get_order($order_id);
		$this->load->view("adminviews/showorder" /*, array("order" => $order)*/);
	}

	// handle the post when an order status is modified
	public function update_order() {
		$post = $this->input->post();
		//TODO $this->homebrew->update_order($post);
		redirect('/admin/orders');
	}

}