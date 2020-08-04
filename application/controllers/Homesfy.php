<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homesfy extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		error_reporting(E_ALL ^ (E_NOTICE));
	}

	public function index() {
		$data = [];
		$data['header']['title'] = "Homesfy.in - Top Real Estate Portal with High Qualified Property Advisor";
		$data['header']['base_url'] = base_url();
		$data['header']['AMAZON_URL'] = AMAZON_URL;
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "One of the leading Real Estate Portal -  Explore a wide range of under-construction & ready to move in properties in India, End Your Search Here Find The Homes For You.";
		$data['header']['keywords'] = "Homesfy.in,Homesfy,Homes for you,property in India,residential property India,India property,real estate India,residential real estate India,buy property in India,India properties,properties in India,property for sale in India,india residential property real estate,flats for sale India,residential apartments India,real estate agents";
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['css'][] = base_url()."css/assests/owl.carousel.min.css";
		$data['header']['js'][] = base_url()."css/assests/owl.carousel.min.js";
		$data['header']['css'][] = base_url()."css/assests/owl.theme.defult.min.css";
		$data['header']['js'][] = base_url()."js/carousel.js";
		$data['header']['js'][] = base_url()."js/custom.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['info'] = "Home";
		$data['header']['js'][] = base_url()."js/search.js";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['info'] = "About us";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['header']['info'] = "Why homesfy";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['header']['info'] = "Contact us";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
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
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/know_rera');
		$this->load->view('homesfy/footer');
	}

	public function byob() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/byob');
		$this->load->view('homesfy/footer');
	}

	public function byob_register() {
		$data = [];
		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/byob.js";
		// $data['header']['js'][] = base_url()."js/custom.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/byob_register');
		$this->load->view('homesfy/footer');
	}

	public function project_list() {

		$this->load->library('pagination');
		$this->load->model('search_model');
		$data = [];
		$size = 8;
		$page = 1;
		$filters = array();

		$query = $_GET['q'];
		if(!empty($_GET['from']) && is_numeric($_GET['from'])){
	 		$page = $_GET['from']/$size;
			$page = $page + 1;
	 	}

	 	if(!empty($_GET['size'])){
			$size = $_GET['size'];
		}

		if(!empty($_GET['bhk'])){

			$filters['bed_config'] = $_GET['bhk'];
		}

		// print_r($_GET['from']);	

		if(!empty($_GET['fromPrice']) && !empty($_GET['toPrice'])){

			$filters['price'][] = ["from" => $_GET['fromPrice'],"to"=>$_GET['toPrice']];
		}
		
		$req_query_string['query'] = $query;
		$req_query_string['pageId'] = $page;
		$req_query_string['size'] = $size;
		$req_query_string['filters'][] = $filters;
		print_r($req_query_string);
		// $queryString['page'] = $page;
		// $queryString['pageSize'] = $size;
		$exe_url = SITE_API_URL."/list";
		$response = $this->search_model->common_post_call($exe_url,$req_query_string);
		// $qUrl = "?pagination=". json_encode($queryString) . $fUrl;
		// $response = get_method(SERVICE_API_URL."booking",$qUrl);
    	// $response = json_decode($response, true);



		// print_r($response);
		// print_r($response['status']);
		// echo "</pre>";
		// exit;

		if($response['status'] == 200 && $response['data']['meta']['status'] == 200){
			$data['data']['list'] = $response['data']['data'];
			if(!empty($_GET['bhk']) && !empty($_GET['fromPrice']) && !empty($_GET['toPrice'])){
				$config['base_url'] = base_url().'list?q='.$query.'&bhk='.$_GET['bhk'].'&fromPrice='.$_GET['fromPrice'].'&toPrice='.$_GET['to'];
			}else if(!empty($_GET['bhk'])){
				$config['base_url'] = base_url().'list?q='.$query.'&bhk='.$_GET['bhk'];
			}else{
				$config['base_url'] = base_url().'list?q='.$query;
			}
			$config['total_rows'] = $response['data']['meta']['count'];
			$config['per_page'] = $size;
			$config['uri_segment'] = 5;
			// $config['reuse_query_string'] = TRUE;
			$config['page_query_string'] = TRUE;
			$config['query_string_segment'] = 'from';
			$this->pagination->initialize($config);
			$data['data']['pagination'] = $this->pagination->create_links();	
			// print_r($data['data']['list']);
		// echo "<pre>";
		// echo "</pre>";
		}
		// print_r($data['data']);

		$data['header']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['data']['base_url'] = base_url();
		$data['header']['description'] = "Buy/Sale Residential and Commercial Properties from Best Property Portal in India - Homesfy.in";
		$data['header']['keywords'] = "Best Property Portal in India, Real Estate, Real Estate in India, Properties, Properties in India, Real Estate Property, Properties in Pune, Properties in Thane";
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/project_list',$data['data']);
		$this->load->view('homesfy/footer');
	}

	public function project_detail() {
		$data = [];

		$this->load->model('search_model');
		$my_url = $_SERVER['REQUEST_URI'];
	 	
	 	$id = substr($my_url, strrpos($my_url, '-' )+1)."\n";
		
		$response = $this->search_model->get_project_deatil((int)trim($id));

		// print_r($response['status']);
		if($response['status'] == 200 && $response['data']['meta']['status'] == 200){
			$data['data']['detail'] = $response['data']['data'];
		}

		$data['header']['title'] = $response['data']['data']['meta']['title'];
		$data['header']['base_url'] = base_url();
		$data['footer']['base_url'] = base_url();
		$data['header']['description'] = $response['data']['data']['meta']['description'];
		$data['header']['keywords'] = $response['data']['data']['meta']['keywords'];
		$data['header']['css'][] = base_url()."css/homesfy/custom.css";
		$data['header']['js'][] = base_url()."js/search.js";
		$data['body']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		$data['footer']['title'] = "Real Estate Properties in India | Buy/Sale Properties from Homesfy.in";
		// print_r(base_url());exit;
		$this->load->view('homesfy/header', $data['header']);
		$this->load->view('homesfy/project_detail',$data['data']);
		$this->load->view('homesfy/footer');
	}
	
}
