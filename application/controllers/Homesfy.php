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
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
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

	public function about_us() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/about_us');
		$this->load->view('homesfy/footer');
	}

	public function why_homesfy() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/why_homesfy');
		$this->load->view('homesfy/footer');
	}

	public function contact_us() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/contact_us');
		$this->load->view('homesfy/footer');
	}

	public function privacy_policy() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/privacy_policy');
		$this->load->view('homesfy/footer');
	}

	public function terms_and_condition() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/tandc');
		$this->load->view('homesfy/footer');
	}

	public function know_rera() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom.css";
		$data['header']['css'][] = "http://localhost/homesfy/css/homesfy/custom1.css";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/know_rera');
		$this->load->view('homesfy/footer');
	}
}
