<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}

	var $table = "soal";

	function count_soal(){
		$sql = "SELECT COUNT(ID_soal) as soal FROM soal;"; return $this->db->query($sql);
	}

	function count_bagian(){
		$sql = "SELECT COUNT(ID_bagian) as bagian FROM bagian;"; return $this->db->query($sql); 
	}

	// DAFTAR SOAL
	function get_all_soal_bagian1(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 1;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian2(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 2;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian3(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 3;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian4(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 4;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian5(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 5;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian6(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 6;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian7(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 7;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian8(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 8;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian9(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 9;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian10(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 10;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian11(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 11;"
				; return $this->db->query($sql);
	}
	function get_all_soal_bagian12(){
		$sql = "SELECT soal.ID_soal, soal.ID_bagian, soal.soal, bagian.nama_bagian 
				FROM soal, bagian
				WHERE soal.ID_bagian = bagian.ID_bagian
				AND soal.ID_bagian = 12;"
				; return $this->db->query($sql);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */