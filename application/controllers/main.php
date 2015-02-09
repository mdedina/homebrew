<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//THIS CONTROLLER IS JUST FOR TESTING AND WILL BE REMOVED

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('adminviews/add');
	}
}

//end of main controller