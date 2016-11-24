<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_model extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();		
	}

	var $table = "siswa";
	
	// START[TERIMA_DATA] yang dikirim dari CONTROLLER REGISTRASI
	function daftarPeserta($nis, $fnama_siswa, $pnama_siswa, $nama_siswa, $sex, $umur, $kelas, $sekolah, $Tgl_pelaksanaan, $tahun_ajaran)
	{	// INGAT 'NAMA_FIELD' => VARIABLE(CONTROLLER)
	$data = array( // KET: mengambil data yang di inputkan dari POST untuk di INPUT ke tabel SISWA
		'nis' => $nis,
		'fnama_siswa' => $fnama_siswa,
		'pnama_siswa' => $pnama_siswa,
		'nama_siswa' => $nama_siswa,
		'sex' => $sex,
		'umur' => $umur,
		'ID_kelas' => $kelas,
		'ID_sekolah' => $sekolah		
	); $this->db->insert('siswa', $data); // KET: data dimasukkan ke tabel siswa
	
	$data = array (
		'nis' => $nis,
		'ID_kelas' => $kelas,
		'ID_tahun_ajaran' => $tahun_ajaran,
		'Tgl_pelaksanaan' => $Tgl_pelaksanaan
	); $this->db->insert('siswa_kelas', $data); //KET: data dimasukkan ke tabel siswa_kelas
	}
	// END[TERIMA_DATA]

	// START[LOAD_DROPDOWN] untuk kelas, sekolah dan tahun ajaran

	function getKelas(){
	$query = $this->db->get('kelas'); //KET: mengambil seluruh data pada tabel kelas
		if ($query->num_rows >= 1){
			foreach($query->result_array() as $row){
			$data[$row['ID_kelas']] = $row['nama_kelas']; 
			} return $data;
		}
	}
	function getSekolah(){
		$query = $this->db->get('sekolah');
		if ($query->num_rows >= 1){
			foreach($query->result_array() as $row) {
			$data[$row['ID_sekolah']]= $row['nama_sekolah']; //KET: nama_sekolah yang dipilih akan di inputkan sebagai ID_sekolah
			} return $data;
		}		
	}
	function getTahunAjaran(){
		$query = $this->db->get('tahun_ajaran');
		if ($query->num_rows >= 1){
			foreach($query->result_array() as $row) {
			$data[$row['ID_tahun_ajaran']]= $row['nama_tahun_ajaran'];
			} return $data;
		}		
	}	
	// END[LOAD_DROPDOWN]

	function daftarGuru($username, $password, $fnama_guru, $nama_guru, $sex, $umur,$nik){
		$data = array(
			'nik' 		=> $nik,			
			'fnama_guru'=> $fnama_guru,
			'nama_guru'	=> $nama_guru,
			'sex'		=> $sex,			
			'umur'		=> $umur
		); $this->db->insert('guru', $data);
		$data = array(
			'nik'		=> $nik,
			'username'	=> $username,
			'password'	=> $password
		); $this->db->insert('user', $data);
	}
	
	function valid_nis($nis){ // [CONTINUE-CONTROLLLER] valid_id validasi
		$query = $this->db->get_where($this->table, array('nis' => $nis));
		if($query->num_rows() > 0){
		return TRUE;
		} else{
		return FALSE;
		}
	}
	
	
}