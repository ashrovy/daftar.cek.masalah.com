<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dcm_model extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();		
	}
	
	//START[MASTER]
	function getSoal(){
		$this->db->select('ID_soal,soal');
		$query = $this->db->get('soal');
		
		if ($query->num_rows() > 0){
			return $query->result_array();
		}		
	}
	//END[/MASTER]

	// [GET SOAL]
	function getSoalBag1(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=1;
		"); return $this->db->query($sql);
	}	
	function getSoalBag2(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=2;
		"); return $this->db->query($sql);
	}
	function getSoalBag3(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=3;
		"); return $this->db->query($sql);
	}
	function getSoalBag4(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=4;
		"); return $this->db->query($sql);
	}
	function getSoalBag5(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=5;
		"); return $this->db->query($sql);
	}
	function getSoalBag6(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=6;
		"); return $this->db->query($sql);
	}
	function getSoalBag7(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=7;
		"); return $this->db->query($sql);
	}
	function getSoalBag8(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=8;
		"); return $this->db->query($sql);
	}
	function getSoalBag9(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=9;
		"); return $this->db->query($sql);
	}
	function getSoalBag10(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=10;
		"); return $this->db->query($sql);
	}
	function getSoalBag11(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=11;
		"); return $this->db->query($sql);
	}
	function getSoalBag12(){
	$sql = ("SELECT ID_soal, Soal
			FROM soal
			WHERE ID_bagian=12;
		"); return $this->db->query($sql);
	}
	// [/GET SOAL]

	//[INPUT JAWAB]
	function InputJawaban($nis, $soal, $jawaban){
	
	$data = array(
		'nis' => $nis,
		'ID_soal' => $soal,
		'jawaban' => $jawaban
	); $this->db->insert('jawab',$data);

	}
	//[/INPUT JAWAB]
}