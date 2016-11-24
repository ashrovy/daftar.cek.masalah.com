<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();		
	}
	
	var $table = 'user';

	//----- UNTUK validasi username password guru	
	function user_check($username, $password){
		$sql = "SELECT user.username, user.password
				FROM user
				WHERE 	user.username = '$username'
				AND 	user.password = '$password'"; 
		$query =  $this->db->query($sql);
		if($query->num_rows() == 1){
			return TRUE;
		}
	}


}