<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latihan_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}

//	var $table = "tahun_ajaran";

	function coba(){
	$sql = ("
		SELECT soal.ID_soal as soal
		from soal
		where soal.ID_bagian = 1;
		"); return $this->db->query($sql);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */