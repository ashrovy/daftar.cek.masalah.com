<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Construct_model extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();		
	}

	function check_user(){
		$this->db->select('username, password');
	    $this->db->from('user');
	    $this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		 
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
		return $query->result();
		}
		else
		{
		return false;
		}
	}

	function user_check($username, $password){
		$sql = "SELECT user.username, user.password
				FROM user
				WHERE 	user.username = '$username'
				AND 	user.password = '$password'
		"; $query =  $this->db->query($sql);
		if($query->num_rows() == 1)
			return TRUE;
	}

	function getIDUser($nik){
		$sql = "SELECT user.nik 
				FROM   user
				WHERE  nik = '$nik';"
			; return $this->db->query($sql);
	}

}