<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perbagian_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}
	
	function get_all_bagian(){
		$sql = "SELECT nama_bagian as bagian FROM bagian"; return $this->db->query($sql);
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */