<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		$this->load->model("homebrew");
	}

	public function index() {
<<<<<<< HEAD
		$this->load->view('userviews/success');
=======
		redirect("/user/category/1");  // default to category 1
	}

	// load the category page, for category indicated by $category_id
	public function category($category_id) {
		//TODO $products = $this->homebrew->get_products_by_category($category_id);
		$this->load->view('userviews/category' /*,  array("products" => $products)*/ );
>>>>>>> 553a6422fac11ab2c85c4d9988020eb38401f1ae
	}
}
