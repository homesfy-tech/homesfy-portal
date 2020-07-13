<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shapoorji_hinjewadi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('shapoorji-hinjewadi/header');
		$this->load->view('shapoorji-hinjewadi/index');
		$this->load->view('shapoorji-hinjewadi/footer');
	}
}
