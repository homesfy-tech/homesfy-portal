<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	function post_call($_url, $_param){

		$ci =& get_instance(); // CI_Loader instance
        $ci->load->config('config',TRUE);
        $user_agents =$ci->config->item('useragent');

	    // $last_segment = explode('/',$_SERVER['REQUEST_URI']);
        // $user_id = 'user_id:'.$_SESSION['user_info']['id'];
        // $last_segment = end($last_segment);
        
	  //   if($last_segment == 'forget_password' || $last_segment == 'reset_password' || $last_segment == 'register_user'){
			// $auth_token = '';
	  //   }else{
			// $auth_token = 'Authorization: Bearer '.$_SESSION['access_key'];
	  //   }

		$headers = [
					"Content-Type:application/json",
		];

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_URL,$_url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    // curl_setopt($ch, CURLOPT_HEADER, false);
	    // curl_setopt($ch, CURLOPT_USERAGENT, array_rand($user_agents)); 
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_param));

	    $output = curl_exec($ch);
	    // print_r($output);exit;
	    check_api_session($output);
	    /*$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($output, 0, $header_size);
        $body = substr($output, $header_size);*/
        $getInfo = curl_getinfo($ch);

	    $response_data = array('status' => $getInfo['http_code'], 'local_ip' => $getInfo['local_ip'], 'data' => json_decode($output, true));

	    curl_close($ch);

	    return json_encode($response_data);
	}	

	function get_call($_url, $_param = ''){

		########################################
		## make changes according to $_params ##
		########################################
		// $req_query_string = $_url."?pagination=".json_encode($_param);

		// print_r($_param);

		if(!empty($_param)){
			$req_query_string = $_url.$_param;
		}else{
			$req_query_string = $_url;
		}

		// $user_id = 'user_id:'.$_SESSION['user_info']['id'];
		// $auth_token = 'Authorization: Bearer '.$_SESSION['access_key'];
		$headers = [
					"Content-Type:application/json",
		];
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $req_query_string);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		// print_r($output);exit;
		check_api_session($output);

	    $getInfo = curl_getinfo($ch);

	    $response_data = array('status' => $getInfo['http_code'], 'local_ip' => $getInfo['local_ip'], 'data' => json_decode($output, true));

	    curl_close($ch);

		// print_r($response_data);exit;
	    return json_encode($response_data);
	}

	function patch_call($_url, $data){

		### Note : Data should be json encoded ####

		$user_id = 'user_id:'.$_SESSION['user_info']['id'];
		$auth_token = 'Authorization: Bearer '.$_SESSION['access_key'];
		$headers = [
					"Content-Type:application/json",
					$user_id,
					$auth_token,
		];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $_url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$output = curl_exec($ch);
		check_api_session($output);
		// print_r($output);exit;

	    $getInfo = curl_getinfo($ch);

	    $response_data = array('status' => $getInfo['http_code'], 'local_ip' => $getInfo['local_ip'], 'data' => json_decode($output, true));

	    curl_close($ch);

	    return json_encode($response_data);
	}
	
	function create_session($session_name, $session_data){
		// $this->session->set_userdata($session_name, $session_data);
		session_start();
		$inactive = 7200;
		$session_data['expire'] = time() + $inactive; // static expire
		$_SESSION = $session_data;
	}

	function destroy_session(){
		// $this->session->sess_destroy();
		session_destroy();
	}

	function check_session($session_name){

		if((!empty($_SESSION['expire'])) && (time() > $_SESSION['expire']))
		{  
			session_unset();
			session_destroy(); 
			return false;
		}else if(empty($_SESSION['expire'])){
			return false;
		}else{
			return true;
		}
	}

	/**
	 * Formats the string representation of an array for human readability
	 *
	 * @param Array $arr The array to get the string representation of
	 * @param Boolean $htmlentities Whether the string representation be HTML encoded (default: FALSE)
	 * @param Boolean $pre_tags Whether the string representation have <pre> tags around (default: TRUE)
	 * @return String String representation of the array
	 */
	function print_array($arr, $htmlentities = FALSE, $pre_tags = TRUE) {
		$prefix = ' ';
		$suffix = ' ';
		if ($pre_tags) {
			$prefix = '<pre>';
			$suffix = '</pre>';
		}
		if ($htmlentities === TRUE) {
			return $prefix . htmlentities(print_r($arr, TRUE)) . $suffix;
		} else {
			return $prefix . print_r($arr, TRUE) . $suffix;
		}
	}

	function get_method($_url, $_qString){

		########################################
		## make changes according to $_params ##
		########################################
		$req_query_string = $_url."$_qString";

		$user_id = 'user_id:'.$_SESSION['user_info']['id'];
		$auth_token = 'Authorization: Bearer '.$_SESSION['access_key'];
		$headers = [
					"Content-Type:application/json",
					$user_id,
					$auth_token,
		];
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $req_query_string);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$output = curl_exec($ch);
		check_api_session($output);

		$getInfo = curl_getinfo($ch);

		$response_data = array('status' => $getInfo['http_code'], 'local_ip' => $getInfo['local_ip'], 'data' => json_decode($output, true));

		curl_close($ch);

		return json_encode($response_data);
	}

	function check_api_session($res_obj){
		// print_r(json_decode($res_obj));exit;
		$res_obj = json_decode($res_obj, true);

		if($res_obj['meta']['status'] == 403){
			destroy_session();
			$ci =& get_instance(); // CI_Loader instance
			$ci->load->helper('url');
			redirect(base_url().'login');
		}

	}
?>
