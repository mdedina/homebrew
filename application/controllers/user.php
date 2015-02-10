<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		// $this->load->model("homebrew");
	}

	public function index() {
		$this->load->view('userviews/category');
	}
}
