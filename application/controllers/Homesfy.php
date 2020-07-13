<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homesfy extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/index');
		$this->load->view('homesfy/footer');
	}
}
