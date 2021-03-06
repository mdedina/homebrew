<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("homebrew");
	}

	public function index() {
		redirect("/user/category/1");  // default to category 1
	}

	// load the category page for the indicated category
	public function category($category_id) {
		//TODO $products = $this->homebrew->get_products_by_category($category_id);
		$this->load->view('userviews/category' /*,  array("products" => $products)*/ );
	}

	// load the product show page for the indicated product
	public function product_show($product_id) {
		//TODO $products = $this->homebrew->get_products_by_category($category_id);
		$this->load->view('userviews/show' /*,  array("products" => $products)*/ );
		
	}
}
