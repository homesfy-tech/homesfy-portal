<?php 
	
	class Search_model extends CI_Model {

        public function __construct(){
            parent::__construct();
            // $this->load->library('curl');
            $this->load->helper('my_custom');
            // $this->load->library('session');
        }
	    
	    public function get_project_deatil($query_str)
        {
            // print_r(SITE_API_URL);    
            $response = get_call(SITE_API_URL."/details/".$query_str);
            $response = json_decode($response, true);

            return $response;
        }

        public function common_post_call($url, $post_data){
            $response = post_call($url, $post_data);
            $response = json_decode($response, true);

            return $response;            
        }

    }

?>