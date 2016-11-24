<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}
	
	// [INISIASI] nama tabel yang digunakan
	var $table = "kelas";
	
	function dataKelas(){
	$sql =(' /* BELUM KOMPLIT LHO */
	SELECT ID_kelas, nama_kelas
	FROM kelas	
	'); return $this->db->query($sql);
	}
	
	function tambah_data($ID_kelas,$nama_kelas){
	$data = array(
		'ID_kelas' => $ID_kelas,
		'nama_kelas' => $nama_kelas
		); $this->db->insert('kelas',$data);
	}

	function get_kelas_by_id($ID_kelas){
	return $this->db->get_where($this->table, array('ID_kelas' => $ID_kelas), 1)->row();
	}
	
	function edit($ID_kelas, $kelas){
		$this->db->where('ID_kelas', $ID_kelas);
		$this->db->update($this->table, $kelas);
	}	

	function delete($ID_kelas)
	{
		$this->db->delete($this->table, array('ID_kelas' => $ID_kelas));
	}
		
	function valid_id($ID_kelas){ // [CONTINUE-CONTROLLLER] valid_id validasi
	$query = $this->db->get_where($this->table, array('ID_kelas' => $ID_kelas));
		if($query->num_rows() > 0){
		return TRUE;
		} else{
		return FALSE;
		}
	}

	function get_all_kelas(){
	$sql = "SELECT COUNT(ID_kelas) as kelas FROM kelas;" 
			; return $this->db->query($sql);
	}
	
	function identitasKelas($ID_kelas, $tahun){
	$sql = "SELECT kelas.ID_kelas as id, kelas.nama_kelas as kelas, COUNT(siswa.nis) as jmlSiswa
			FROM kelas, siswa, tahun_ajaran, siswa_kelas
			WHERE kelas.ID_kelas = '$ID_kelas'
			AND kelas.ID_kelas = siswa.ID_kelas
			AND siswa.nis = siswa_kelas.NIS
			AND siswa_kelas.ID_tahun_ajaran = tahun_ajaran.ID_tahun_ajaran
			AND tahun_ajaran.ID_tahun_ajaran = '$tahun';"
			; return $this->db->query($sql);
	}

	function dcmKelas($ID_kelas, $tahun){
	$sql =("
	SELECT
	(SELECT kelas.ID_kelas FROM kelas WHERE ID_kelas = '$ID_kelas') as kelas,
	(SELECT COUNT(siswa.nis) FROM kelas, siswa, siswa_kelas, tahun_ajaran 
		WHERE kelas.ID_kelas = siswa.ID_kelas AND kelas.ID_kelas = '$ID_kelas'
		AND siswa.nis = siswa_kelas.NIS
		AND siswa_kelas.ID_tahun_ajaran = tahun_ajaran.ID_tahun_ajaran
		AND tahun_ajaran.ID_tahun_ajaran = '$tahun'
		) AS jmlKelas,
	/* soal bagian 1 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 1 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal1,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 2 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal2,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 3 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal3,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 4 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal4,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 5 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal5,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 6 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal6,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 7 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal7,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 8 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal8,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 9 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal9,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 10 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal10,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 11 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal11,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 12 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal12,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 13 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal13,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 14 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal14,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 15 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal15,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 16 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal16,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 17 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal17,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 18 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal18,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 19 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal19,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 20 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal20,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 21 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal21,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 22 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal22,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 23 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal23,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 24 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal24,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 25 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal25,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 26 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal26,
	/* soal bagian 2 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 27 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal27,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 28 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal28,	
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 29 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal29,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 30 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal30,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 31 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal31,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 32 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal32,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 33 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal33,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 34 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal34,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 35 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal35,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 36 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal36,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 37 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal37,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 38 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal38,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 39 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal39,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 40 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal40,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 41 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal41,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 42 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal42,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 43 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal43,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 44 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal44,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 45 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal45,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 46 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal46,
	/* soal bagian 3 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 47 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal47,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 48 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal48,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 49 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal49,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 50 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal50,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 51 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal51,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 52 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal52,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 53 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal53,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 54 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal54,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 55 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal55,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 56 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal56,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 57 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal57,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 58 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal58,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 59 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal59,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 60 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal60,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 61 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal61,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 62 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal62,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 63 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal63,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 64 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal64,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 65 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal65,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 66 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal66,
	/* soal bagian 4 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 67 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal67,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 68 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal68,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 69 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal69,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 70 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal70,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 71 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal71,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 72 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal72,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 73 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal73,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 74 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal74,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 75 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal75,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 76 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal76,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 77 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal77,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 78 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal78,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 79 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal79,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 80 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal80,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 81 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal81,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 82 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal82,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 83 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal83,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 84 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal84,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 85 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal85,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 86 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal86,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 87 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal87,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 88 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal88,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 89 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal89,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 90 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal90,
	/* soal bagian 5 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 91 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal91,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 92 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal92,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 93 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal93,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 94 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal94,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 95 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal95,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 96 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal96,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 97 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal97,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 98 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal98,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 99 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal99,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 100 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal100,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 101 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal101,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 102 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal102,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 103 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal103,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 104 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal104,
	/* soal bagian 6 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 105 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal105,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 106 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal106,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 107 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal107,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 108 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal108,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 109 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal109,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 110 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal110,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 111 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal111,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 112 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal112,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 113 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal113,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 114 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal114,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 115 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal115,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 116 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal116,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 117 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal117,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 118 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal118,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 119 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal119,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 120 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal120,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 121 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal121,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 122 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal122,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 123 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal123,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 124 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal124,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 125 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal125,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 126 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal126,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 127 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal127,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 128 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal128,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 129 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal129,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 130 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal130,
	/* bagian 7 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 131 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal131,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 132 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal132,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 133 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal133,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 134 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal134,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 135 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal135,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 136 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal136,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 137 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal137,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 138 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal138,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 139 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal139,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 140 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal140,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 141 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal141,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 142 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal142,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 143 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal143,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 144 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal144,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 145 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal145,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 146 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal146,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 147 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal147,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 148 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal148,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 149 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal149,
	/* bagian 8 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 150 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal150,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 151 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal151,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 152 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal152,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 153 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal153,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 154 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal154,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 155 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal155,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 156 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal156,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 157 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal157,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 158 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal158,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 159 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal159,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 160 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal160,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 161 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal161,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 162 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal162,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 163 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal163,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 164 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal164,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 165 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal165,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 166 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal166,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 167 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal167,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 168 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal168,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 169 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal169,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 170 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal170,
	/* bagian 9 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 171 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal171,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 172 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal172,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 173 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal173,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 174 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal174,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 175 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal175,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 176 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal176,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 177 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal177,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 178 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal178,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 179 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal179,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 180 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal180,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 181 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal181,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 182 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal182,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 183 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal183,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 184 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal184,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 185 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal185,
	/* bagian 10 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 186 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal186,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 187 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal187,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 188 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal188,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 189 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal189,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 190 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal190,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 191 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal191,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 192 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal192,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 193 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal193,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 194 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal194,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 195 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal195,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 196 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal196,
	/* bagian 11 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 197 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal197,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 198 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal198,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 199 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal199,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 200 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal200,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 201 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal201,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 202 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal202,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 203 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal203,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 204 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal204,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 205 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal205,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 206 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal206,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 207 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal207,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 208 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal208,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 209 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal209,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 210 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal210,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 211 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal211,
	/* bagian 12 */
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 212 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal212,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 213 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal213,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 214 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal214,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 215 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal215,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 216 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal216,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 217 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal217,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 218 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal218,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 219 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal219,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 220 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal220,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 221 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal221,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 222 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal222,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 223 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal223,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 224 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal224,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 225 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal225,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 226 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal226,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 227 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal227,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 228 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal228,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 229 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal229,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 230 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal230,
	(SELECT COUNT(jawab.jawaban) FROM jawab, kelas, siswa WHERE jawab.jawaban = 1 AND kelas.ID_kelas = '$ID_kelas' AND jawab.ID_soal = 231 AND kelas.ID_kelas = siswa.ID_kelas AND siswa.nis = jawab.nis) AS soal231,

	(SELECT ROUND((soal1 / jmlKelas) * 100)) AS h1,	
	(SELECT ROUND((soal2 / jmlKelas) * 100)) AS h2,	
	(SELECT ROUND((soal3 / jmlKelas) * 100)) AS h3,
	(SELECT ROUND((soal4 / jmlKelas) * 100)) AS h4,	
	(SELECT ROUND((soal5 / jmlKelas) * 100)) AS h5,	
	(SELECT ROUND((soal6 / jmlKelas) * 100)) AS h6,
	(SELECT ROUND((soal7 / jmlKelas) * 100)) AS h7,	
	(SELECT ROUND((soal8 / jmlKelas) * 100)) AS h8,	
	(SELECT ROUND((soal9 / jmlKelas) * 100)) AS h9,
	(SELECT ROUND((soal10 / jmlKelas) * 100)) AS h10,	
	(SELECT ROUND((soal11 / jmlKelas) * 100)) AS h11,	
	(SELECT ROUND((soal12 / jmlKelas) * 100)) AS h12,
	(SELECT ROUND((soal13 / jmlKelas) * 100)) AS h13,	
	(SELECT ROUND((soal14 / jmlKelas) * 100)) AS h14,	
	(SELECT ROUND((soal15 / jmlKelas) * 100)) AS h15,
	(SELECT ROUND((soal16 / jmlKelas) * 100)) AS h16,	
	(SELECT ROUND((soal17 / jmlKelas) * 100)) AS h17,	
	(SELECT ROUND((soal18 / jmlKelas) * 100)) AS h18,
	
	(SELECT ROUND((soal19 / jmlKelas) * 100)) AS h19,	
	(SELECT ROUND((soal20 / jmlKelas) * 100)) AS h20,	
	(SELECT ROUND((soal21 / jmlKelas) * 100)) AS h21,
	(SELECT ROUND((soal22 / jmlKelas) * 100)) AS h22,	
	(SELECT ROUND((soal23 / jmlKelas) * 100)) AS h23,	
	(SELECT ROUND((soal24 / jmlKelas) * 100)) AS h24,
	(SELECT ROUND((soal25 / jmlKelas) * 100)) AS h25,	
	(SELECT ROUND((soal26 / jmlKelas) * 100)) AS h26,	
	(SELECT ROUND((soal27 / jmlKelas) * 100)) AS h27,
	
	(SELECT ROUND((soal28 / jmlKelas) * 100)) AS h28,	
	(SELECT ROUND((soal29 / jmlKelas) * 100)) AS h29,	
	(SELECT ROUND((soal30 / jmlKelas) * 100)) AS h30,
	(SELECT ROUND((soal31 / jmlKelas) * 100)) AS h31,	
	(SELECT ROUND((soal32 / jmlKelas) * 100)) AS h32,	
	(SELECT ROUND((soal33 / jmlKelas) * 100)) AS h33,
	(SELECT ROUND((soal34 / jmlKelas) * 100)) AS h34,	
	(SELECT ROUND((soal35 / jmlKelas) * 100)) AS h35,	
	(SELECT ROUND((soal36 / jmlKelas) * 100)) AS h36,
	
	(SELECT ROUND((soal37 / jmlKelas) * 100)) AS h37,	
	(SELECT ROUND((soal38 / jmlKelas) * 100)) AS h38,	
	(SELECT ROUND((soal39 / jmlKelas) * 100)) AS h39,
	(SELECT ROUND((soal40 / jmlKelas) * 100)) AS h40,	
	(SELECT ROUND((soal41 / jmlKelas) * 100)) AS h41,	
	(SELECT ROUND((soal42 / jmlKelas) * 100)) AS h42,
	(SELECT ROUND((soal43 / jmlKelas) * 100)) AS h43,	
	(SELECT ROUND((soal44 / jmlKelas) * 100)) AS h44,	
	(SELECT ROUND((soal45 / jmlKelas) * 100)) AS h45,
	
	(SELECT ROUND((soal46 / jmlKelas) * 100)) AS h46,	
	(SELECT ROUND((soal47 / jmlKelas) * 100)) AS h47,	
	(SELECT ROUND((soal48 / jmlKelas) * 100)) AS h48,
	(SELECT ROUND((soal49 / jmlKelas) * 100)) AS h49,	
	(SELECT ROUND((soal50 / jmlKelas) * 100)) AS h50,	
	(SELECT ROUND((soal51 / jmlKelas) * 100)) AS h51,
	(SELECT ROUND((soal52 / jmlKelas) * 100)) AS h52,	
	(SELECT ROUND((soal53 / jmlKelas) * 100)) AS h53,	
	(SELECT ROUND((soal54 / jmlKelas) * 100)) AS h54,
	
	(SELECT ROUND((soal55 / jmlKelas) * 100)) AS h55,	
	(SELECT ROUND((soal56 / jmlKelas) * 100)) AS h56,	
	(SELECT ROUND((soal57 / jmlKelas) * 100)) AS h57,
	(SELECT ROUND((soal58 / jmlKelas) * 100)) AS h58,	
	(SELECT ROUND((soal59 / jmlKelas) * 100)) AS h59,	
	(SELECT ROUND((soal60 / jmlKelas) * 100)) AS h60,
	(SELECT ROUND((soal61 / jmlKelas) * 100)) AS h61,	
	(SELECT ROUND((soal62 / jmlKelas) * 100)) AS h62,	
	(SELECT ROUND((soal63 / jmlKelas) * 100)) AS h63,
	
	(SELECT ROUND((soal64 / jmlKelas) * 100)) AS h64,	
	(SELECT ROUND((soal65 / jmlKelas) * 100)) AS h65,	
	(SELECT ROUND((soal66 / jmlKelas) * 100)) AS h66,
	(SELECT ROUND((soal67 / jmlKelas) * 100)) AS h67,	
	(SELECT ROUND((soal68 / jmlKelas) * 100)) AS h68,	
	(SELECT ROUND((soal69 / jmlKelas) * 100)) AS h69,
	(SELECT ROUND((soal70 / jmlKelas) * 100)) AS h70,	
	(SELECT ROUND((soal71 / jmlKelas) * 100)) AS h71,	
	(SELECT ROUND((soal72 / jmlKelas) * 100)) AS h72,
	
	(SELECT ROUND((soal73 / jmlKelas) * 100)) AS h73,	
	(SELECT ROUND((soal74 / jmlKelas) * 100)) AS h74,	
	(SELECT ROUND((soal75 / jmlKelas) * 100)) AS h75,
	(SELECT ROUND((soal76 / jmlKelas) * 100)) AS h76,	
	(SELECT ROUND((soal77 / jmlKelas) * 100)) AS h77,	
	(SELECT ROUND((soal78 / jmlKelas) * 100)) AS h78,
	(SELECT ROUND((soal79 / jmlKelas) * 100)) AS h79,	
	(SELECT ROUND((soal80 / jmlKelas) * 100)) AS h80,	
	(SELECT ROUND((soal81 / jmlKelas) * 100)) AS h81,
	
	(SELECT ROUND((soal82 / jmlKelas) * 100)) AS h82,	
	(SELECT ROUND((soal83 / jmlKelas) * 100)) AS h83,	
	(SELECT ROUND((soal84 / jmlKelas) * 100)) AS h84,
	(SELECT ROUND((soal85 / jmlKelas) * 100)) AS h85,	
	(SELECT ROUND((soal86 / jmlKelas) * 100)) AS h86,	
	(SELECT ROUND((soal87 / jmlKelas) * 100)) AS h87,
	(SELECT ROUND((soal88 / jmlKelas) * 100)) AS h88,	
	(SELECT ROUND((soal89 / jmlKelas) * 100)) AS h89,	
	(SELECT ROUND((soal90 / jmlKelas) * 100)) AS h90,
	
	(SELECT ROUND((soal91 / jmlKelas) * 100)) AS h91,	
	(SELECT ROUND((soal92 / jmlKelas) * 100)) AS h92,	
	(SELECT ROUND((soal93 / jmlKelas) * 100)) AS h93,
	(SELECT ROUND((soal94 / jmlKelas) * 100)) AS h94,	
	(SELECT ROUND((soal95 / jmlKelas) * 100)) AS h95,	
	(SELECT ROUND((soal96 / jmlKelas) * 100)) AS h96,
	(SELECT ROUND((soal97 / jmlKelas) * 100)) AS h97,	
	(SELECT ROUND((soal98 / jmlKelas) * 100)) AS h98,	
	(SELECT ROUND((soal99 / jmlKelas) * 100)) AS h99,
	
	(SELECT ROUND((soal100 / jmlKelas) * 100)) AS h100,	
	(SELECT ROUND((soal101 / jmlKelas) * 100)) AS h101,	
	(SELECT ROUND((soal102 / jmlKelas) * 100)) AS h102,
	(SELECT ROUND((soal103 / jmlKelas) * 100)) AS h103,	
	(SELECT ROUND((soal104 / jmlKelas) * 100)) AS h104,	
	(SELECT ROUND((soal105 / jmlKelas) * 100)) AS h105,
	(SELECT ROUND((soal106 / jmlKelas) * 100)) AS h106,	
	(SELECT ROUND((soal107 / jmlKelas) * 100)) AS h107,	
	(SELECT ROUND((soal108 / jmlKelas) * 100)) AS h108,
	
	(SELECT ROUND((soal109 / jmlKelas) * 100)) AS h109,	
	(SELECT ROUND((soal110 / jmlKelas) * 100)) AS h110,	
	(SELECT ROUND((soal111 / jmlKelas) * 100)) AS h111,
	(SELECT ROUND((soal112 / jmlKelas) * 100)) AS h112,	
	(SELECT ROUND((soal113 / jmlKelas) * 100)) AS h113,	
	(SELECT ROUND((soal114 / jmlKelas) * 100)) AS h114,
	(SELECT ROUND((soal115 / jmlKelas) * 100)) AS h115,	
	(SELECT ROUND((soal116 / jmlKelas) * 100)) AS h116,	
	(SELECT ROUND((soal117 / jmlKelas) * 100)) AS h117,
	
	(SELECT ROUND((soal118 / jmlKelas) * 100)) AS h118,	
	(SELECT ROUND((soal119 / jmlKelas) * 100)) AS h119,	
	(SELECT ROUND((soal120 / jmlKelas) * 100)) AS h120,
	(SELECT ROUND((soal121 / jmlKelas) * 100)) AS h121,	
	(SELECT ROUND((soal122 / jmlKelas) * 100)) AS h122,	
	(SELECT ROUND((soal123 / jmlKelas) * 100)) AS h123,
	(SELECT ROUND((soal124 / jmlKelas) * 100)) AS h124,	
	(SELECT ROUND((soal125 / jmlKelas) * 100)) AS h125,	
	(SELECT ROUND((soal126 / jmlKelas) * 100)) AS h126,
	
	(SELECT ROUND((soal127 / jmlKelas) * 100)) AS h127,	
	(SELECT ROUND((soal128 / jmlKelas) * 100)) AS h128,	
	(SELECT ROUND((soal129 / jmlKelas) * 100)) AS h129,
	(SELECT ROUND((soal130 / jmlKelas) * 100)) AS h130,	
	(SELECT ROUND((soal131 / jmlKelas) * 100)) AS h131,	
	(SELECT ROUND((soal132 / jmlKelas) * 100)) AS h132,
	(SELECT ROUND((soal133 / jmlKelas) * 100)) AS h133,	
	(SELECT ROUND((soal134 / jmlKelas) * 100)) AS h134,	
	(SELECT ROUND((soal135 / jmlKelas) * 100)) AS h135,
	
	(SELECT ROUND((soal136 / jmlKelas) * 100)) AS h136,	
	(SELECT ROUND((soal137 / jmlKelas) * 100)) AS h137,	
	(SELECT ROUND((soal138 / jmlKelas) * 100)) AS h138,
	(SELECT ROUND((soal139 / jmlKelas) * 100)) AS h139,	
	(SELECT ROUND((soal140 / jmlKelas) * 100)) AS h140,	
	(SELECT ROUND((soal141 / jmlKelas) * 100)) AS h141,
	(SELECT ROUND((soal142 / jmlKelas) * 100)) AS h142,	
	(SELECT ROUND((soal143 / jmlKelas) * 100)) AS h143,	
	(SELECT ROUND((soal144 / jmlKelas) * 100)) AS h144,
	
	(SELECT ROUND((soal145 / jmlKelas) * 100)) AS h145,	
	(SELECT ROUND((soal146 / jmlKelas) * 100)) AS h146,	
	(SELECT ROUND((soal147 / jmlKelas) * 100)) AS h147,
	(SELECT ROUND((soal148 / jmlKelas) * 100)) AS h148,	
	(SELECT ROUND((soal149 / jmlKelas) * 100)) AS h149,	
	(SELECT ROUND((soal150 / jmlKelas) * 100)) AS h150,
	(SELECT ROUND((soal151 / jmlKelas) * 100)) AS h151,	
	(SELECT ROUND((soal152 / jmlKelas) * 100)) AS h152,	
	(SELECT ROUND((soal153 / jmlKelas) * 100)) AS h153,
	
	(SELECT ROUND((soal154 / jmlKelas) * 100)) AS h154,	
	(SELECT ROUND((soal155 / jmlKelas) * 100)) AS h155,	
	(SELECT ROUND((soal156 / jmlKelas) * 100)) AS h156,
	(SELECT ROUND((soal157 / jmlKelas) * 100)) AS h157,	
	(SELECT ROUND((soal158 / jmlKelas) * 100)) AS h158,	
	(SELECT ROUND((soal159 / jmlKelas) * 100)) AS h159,
	(SELECT ROUND((soal160 / jmlKelas) * 100)) AS h160,	
	(SELECT ROUND((soal161 / jmlKelas) * 100)) AS h161,	
	(SELECT ROUND((soal162 / jmlKelas) * 100)) AS h162,
	
	(SELECT ROUND((soal163 / jmlKelas) * 100)) AS h163,	
	(SELECT ROUND((soal164 / jmlKelas) * 100)) AS h164,	
	(SELECT ROUND((soal165 / jmlKelas) * 100)) AS h165,
	(SELECT ROUND((soal166 / jmlKelas) * 100)) AS h166,	
	(SELECT ROUND((soal167 / jmlKelas) * 100)) AS h167,	
	(SELECT ROUND((soal168 / jmlKelas) * 100)) AS h168,
	(SELECT ROUND((soal169 / jmlKelas) * 100)) AS h169,	
	(SELECT ROUND((soal170 / jmlKelas) * 100)) AS h170,	
	(SELECT ROUND((soal171 / jmlKelas) * 100)) AS h171,
	
	(SELECT ROUND((soal172 / jmlKelas) * 100)) AS h172,	
	(SELECT ROUND((soal173 / jmlKelas) * 100)) AS h173,	
	(SELECT ROUND((soal174 / jmlKelas) * 100)) AS h174,
	(SELECT ROUND((soal175 / jmlKelas) * 100)) AS h175,	
	(SELECT ROUND((soal176 / jmlKelas) * 100)) AS h176,	
	(SELECT ROUND((soal177 / jmlKelas) * 100)) AS h177,
	(SELECT ROUND((soal178 / jmlKelas) * 100)) AS h178,	
	(SELECT ROUND((soal179 / jmlKelas) * 100)) AS h179,	
	(SELECT ROUND((soal180 / jmlKelas) * 100)) AS h180,
	
	(SELECT ROUND((soal181 / jmlKelas) * 100)) AS h181,	
	(SELECT ROUND((soal182 / jmlKelas) * 100)) AS h182,	
	(SELECT ROUND((soal183 / jmlKelas) * 100)) AS h183,
	(SELECT ROUND((soal184 / jmlKelas) * 100)) AS h184,	
	(SELECT ROUND((soal185 / jmlKelas) * 100)) AS h185,	
	(SELECT ROUND((soal186 / jmlKelas) * 100)) AS h186,
	(SELECT ROUND((soal187 / jmlKelas) * 100)) AS h187,	
	(SELECT ROUND((soal188 / jmlKelas) * 100)) AS h188,	
	(SELECT ROUND((soal189 / jmlKelas) * 100)) AS h189,
	
	(SELECT ROUND((soal190 / jmlKelas) * 100)) AS h190,	
	(SELECT ROUND((soal191 / jmlKelas) * 100)) AS h191,	
	(SELECT ROUND((soal192 / jmlKelas) * 100)) AS h192,
	(SELECT ROUND((soal193 / jmlKelas) * 100)) AS h193,	
	(SELECT ROUND((soal194 / jmlKelas) * 100)) AS h194,	
	(SELECT ROUND((soal195 / jmlKelas) * 100)) AS h195,
	(SELECT ROUND((soal196 / jmlKelas) * 100)) AS h196,	
	(SELECT ROUND((soal197 / jmlKelas) * 100)) AS h197,	
	(SELECT ROUND((soal198 / jmlKelas) * 100)) AS h198,
	
	(SELECT ROUND((soal199 / jmlKelas) * 100)) AS h199,	
	(SELECT ROUND((soal200 / jmlKelas) * 100)) AS h200,	
	(SELECT ROUND((soal201 / jmlKelas) * 100)) AS h201,
	(SELECT ROUND((soal202 / jmlKelas) * 100)) AS h202,	
	(SELECT ROUND((soal203 / jmlKelas) * 100)) AS h203,	
	(SELECT ROUND((soal204 / jmlKelas) * 100)) AS h204,
	(SELECT ROUND((soal205 / jmlKelas) * 100)) AS h205,	
	(SELECT ROUND((soal206 / jmlKelas) * 100)) AS h206,	
	(SELECT ROUND((soal207 / jmlKelas) * 100)) AS h207,
	
	(SELECT ROUND((soal208 / jmlKelas) * 100)) AS h208,	
	(SELECT ROUND((soal209 / jmlKelas) * 100)) AS h209,	
	(SELECT ROUND((soal210 / jmlKelas) * 100)) AS h210,
	(SELECT ROUND((soal211 / jmlKelas) * 100)) AS h211,	
	(SELECT ROUND((soal212 / jmlKelas) * 100)) AS h212,	
	(SELECT ROUND((soal213 / jmlKelas) * 100)) AS h213,
	(SELECT ROUND((soal214 / jmlKelas) * 100)) AS h214,	
	(SELECT ROUND((soal215 / jmlKelas) * 100)) AS h215,	
	(SELECT ROUND((soal216 / jmlKelas) * 100)) AS h216,
	/* */
	(SELECT ROUND((soal217 / jmlKelas) * 100)) AS h217,	
	(SELECT ROUND((soal218 / jmlKelas) * 100)) AS h218,	
	(SELECT ROUND((soal219 / jmlKelas) * 100)) AS h219,
	(SELECT ROUND((soal220 / jmlKelas) * 100)) AS h220,	
	(SELECT ROUND((soal221 / jmlKelas) * 100)) AS h221,	
	(SELECT ROUND((soal222 / jmlKelas) * 100)) AS h222,
	(SELECT ROUND((soal223 / jmlKelas) * 100)) AS h223,	
	(SELECT ROUND((soal224 / jmlKelas) * 100)) AS h224,	
	(SELECT ROUND((soal225 / jmlKelas) * 100)) AS h225,
	
	(SELECT ROUND((soal226 / jmlKelas) * 100)) AS h226,	
	(SELECT ROUND((soal227 / jmlKelas) * 100)) AS h227,	
	(SELECT ROUND((soal228 / jmlKelas) * 100)) AS h228,
	(SELECT ROUND((soal229 / jmlKelas) * 100)) AS h229,	
	(SELECT ROUND((soal230 / jmlKelas) * 100)) AS h230,	
	(SELECT ROUND((soal231 / jmlKelas) * 100)) AS h231,
	

	(SELECT CASE 
		WHEN ROUND((soal1 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal1 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal1 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal1 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal1 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score1,
	(SELECT CASE 
		WHEN ROUND((soal2 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal2 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal2 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal2 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal2 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score2,
	(SELECT CASE 
		WHEN ROUND((soal3 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal3 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal3 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal3 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal3 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score3,
	(SELECT CASE 
		WHEN ROUND((soal4 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal4 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal4 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal4 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal4 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score4,
	(SELECT CASE 
		WHEN ROUND((soal5 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal5 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal5 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal5 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal5 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score5,

	(SELECT CASE 
		WHEN ROUND((soal6 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal6 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal6 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal6 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal6 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score6,
	(SELECT CASE 
		WHEN ROUND((soal7 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal7 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal7 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal7 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal7 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score7,
	(SELECT CASE 
		WHEN ROUND((soal8 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal8 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal8 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal8 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal8 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score8,
	(SELECT CASE 
		WHEN ROUND((soal9 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal9 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal9 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal9 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal9 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score9,
	(SELECT CASE 
		WHEN ROUND((soal10 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal10 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal10 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal10 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal10 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score10,
	(SELECT CASE 
		WHEN ROUND((soal11 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal11 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal11 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal11 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal11 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score11,
	(SELECT CASE 
		WHEN ROUND((soal12 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score12,
	(SELECT CASE 
		WHEN ROUND((soal12 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal12 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score12,
	(SELECT CASE 
		WHEN ROUND((soal13 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal13 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal13 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal13 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal13 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score13,
	(SELECT CASE 
		WHEN ROUND((soal14 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal14 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal14 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal14 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal14 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score14,
	(SELECT CASE 
		WHEN ROUND((soal15 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal15 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal15 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal15 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal15 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score15,
	(SELECT CASE 
		WHEN ROUND((soal16 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score16,
	(SELECT CASE 
		WHEN ROUND((soal16 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal16 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score16,
	(SELECT CASE 
		WHEN ROUND((soal17 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal17 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal17 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal17 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal17 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score17,
	(SELECT CASE 
		WHEN ROUND((soal18 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal18 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal18 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal18 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal18 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score18,
	(SELECT CASE 
		WHEN ROUND((soal19 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal19 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal19 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal19 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal19 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score19,
	(SELECT CASE 
		WHEN ROUND((soal20 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal20 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal20 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal20 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal20 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score20,
	(SELECT CASE 
		WHEN ROUND((soal21 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal21 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal21 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal21 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal21 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score21,

	(SELECT CASE 
		WHEN ROUND((soal22 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal22 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal22 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal22 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal22 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score22,
	(SELECT CASE 
		WHEN ROUND((soal23 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal23 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal23 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal23 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal23 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score23,
	(SELECT CASE 
		WHEN ROUND((soal24 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal24 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal24 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal24 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal24 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score24,
	(SELECT CASE 
		WHEN ROUND((soal25 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal25 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal25 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal25 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal25 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score25,

	(SELECT CASE 
		WHEN ROUND((soal26 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal26 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal26 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal26 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal26 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score26,
	(SELECT CASE 
		WHEN ROUND((soal27 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal27 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal27 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal27 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal27 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score27,
	(SELECT CASE 
		WHEN ROUND((soal28 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal28 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal28 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal28 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal28 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score28,
	(SELECT CASE 
		WHEN ROUND((soal29 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal29 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal29 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal29 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal29 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score29,
	(SELECT CASE 
		WHEN ROUND((soal30 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal30 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal30 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal30 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal30 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score30,
	(SELECT CASE 
		WHEN ROUND((soal31 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal31 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal31 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal31 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal31 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score31,
	(SELECT CASE 
		WHEN ROUND((soal32 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal32 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal32 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal32 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal32 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score32,
	(SELECT CASE 
		WHEN ROUND((soal33 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal33 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal33 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal33 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal33 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score33,
	(SELECT CASE 
		WHEN ROUND((soal34 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal34 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal34 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal34 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal34 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score34,
	(SELECT CASE 
		WHEN ROUND((soal35 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal35 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal35 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal35 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal35 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score35,
	(SELECT CASE 
		WHEN ROUND((soal36 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal36 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal36 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal36 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal36 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score36,
	(SELECT CASE 
		WHEN ROUND((soal37 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal37 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal37 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal37 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal37 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score37,
	(SELECT CASE 
		WHEN ROUND((soal38 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal38 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal38 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal38 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal38 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score38,
	(SELECT CASE 
		WHEN ROUND((soal39 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal39 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal39 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal39 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal39 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score39,
	(SELECT CASE 
		WHEN ROUND((soal40 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal40 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal40 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal40 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal40 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score40,
	(SELECT CASE 
		WHEN ROUND((soal41 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal41 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal41 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal41 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal41 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score41,
	(SELECT CASE 
		WHEN ROUND((soal42 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal42 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal42 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal42 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal42 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score42,
	(SELECT CASE 
		WHEN ROUND((soal43 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal43 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal43 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal43 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal43 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score43,
	(SELECT CASE 
		WHEN ROUND((soal44 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal44 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal44 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal44 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal44 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score44,
	(SELECT CASE 
		WHEN ROUND((soal45 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal45 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal45 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal45 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal45 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score45,
	(SELECT CASE 
		WHEN ROUND((soal46 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal46 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal46 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal46 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal46 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score46,
	(SELECT CASE 
		WHEN ROUND((soal47 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal47 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal47 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal47 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal47 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score47,
	(SELECT CASE 
		WHEN ROUND((soal48 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal48 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal48 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal48 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal48 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score48,
	(SELECT CASE 
		WHEN ROUND((soal49 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal49 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal49 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal49 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal49 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score49,
	/* */
	
	(SELECT CASE 
		WHEN ROUND((soal50 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal50 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal50 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal50 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal50 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score50,
	(SELECT CASE 
		WHEN ROUND((soal51 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal51 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal51 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal51 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal51 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score51,
	(SELECT CASE 
		WHEN ROUND((soal52 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal52 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal52 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal52 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal52 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score52,
	(SELECT CASE 
		WHEN ROUND((soal53 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal53 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal53 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal53 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal53 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score53,
	(SELECT CASE 
		WHEN ROUND((soal54 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal54 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal54 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal54 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal54 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score54,
	(SELECT CASE 
		WHEN ROUND((soal55 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal55 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal55 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal55 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal55 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score55,
	(SELECT CASE 
		WHEN ROUND((soal56 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal56 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal56 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal56 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal56 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score56,
	(SELECT CASE 
		WHEN ROUND((soal57 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal57 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal57 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal57 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal57 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score57,
	(SELECT CASE 
		WHEN ROUND((soal58 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal58 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal58 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal58 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal58 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score58,
	
	(SELECT CASE 
		WHEN ROUND((soal59 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal59 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal59 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal59 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal59 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score59,
	(SELECT CASE 
		WHEN ROUND((soal60 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal60 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal60 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal60 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal60 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score60,
	(SELECT CASE 
		WHEN ROUND((soal61 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal61 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal61 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal61 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal61 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score61,
	(SELECT CASE 
		WHEN ROUND((soal62 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal62 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal62 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal62 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal62 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score62,
	(SELECT CASE 
		WHEN ROUND((soal63 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal63 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal63 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal63 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal63 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score63,
	(SELECT CASE 
		WHEN ROUND((soal64 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal64 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal64 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal64 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal64 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score64,
	/* ================================================== */
	(SELECT CASE 
		WHEN ROUND((soal65 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal65 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal65 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal65 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal65 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score65,
	(SELECT CASE 
		WHEN ROUND((soal66 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal66 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal66 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal66 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal66 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score66,
	(SELECT CASE 
		WHEN ROUND((soal67 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal67 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal67 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal67 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal67 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score67,
	(SELECT CASE 
		WHEN ROUND((soal68 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal68 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal68 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal68 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal68 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score68,
	(SELECT CASE 
		WHEN ROUND((soal69 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal69 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal69 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal69 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal69 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score69,
	(SELECT CASE 
		WHEN ROUND((soal70 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal70 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal70 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal70 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal70 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score70,
	(SELECT CASE 
		WHEN ROUND((soal71 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal71 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal71 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal71 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal71 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score71,
	(SELECT CASE 
		WHEN ROUND((soal72 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score72,
	(SELECT CASE 
		WHEN ROUND((soal72 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal72 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score72,
	
	(SELECT CASE 
		WHEN ROUND((soal73 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score73,
	(SELECT CASE 
		WHEN ROUND((soal73 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal73 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score74,
	(SELECT CASE 
		WHEN ROUND((soal74 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal74 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal74 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal74 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal74 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score74,
	(SELECT CASE 
		WHEN ROUND((soal75 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal75 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal75 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal75 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal75 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score75,
	(SELECT CASE 
		WHEN ROUND((soal76 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal76 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal76 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal76 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal76 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score76,
	(SELECT CASE 
		WHEN ROUND((soal77 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal77 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal77 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal77 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal77 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score77,
	(SELECT CASE 
		WHEN ROUND((soal78 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal78 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal78 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal78 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal78 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score78,
	(SELECT CASE 
		WHEN ROUND((soal79 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal79 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal79 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal79 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal79 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score79,
	(SELECT CASE 
		WHEN ROUND((soal80 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal80 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal80 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal80 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal80 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score80,
	
	(SELECT CASE 
		WHEN ROUND((soal81 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score81,
	(SELECT CASE 
		WHEN ROUND((soal82 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score82,
	(SELECT CASE 
		WHEN ROUND((soal83 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score83,
	(SELECT CASE 
		WHEN ROUND((soal84 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score84,
	(SELECT CASE 
		WHEN ROUND((soal85 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score85,
	(SELECT CASE 
		WHEN ROUND((soal86 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score86,
	(SELECT CASE 
		WHEN ROUND((soal87 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score87,
	(SELECT CASE 
		WHEN ROUND((soal88 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score88,	
	(SELECT CASE 
		WHEN ROUND((soal81 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal81 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score81,
	(SELECT CASE 
		WHEN ROUND((soal82 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal82 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score82,
	(SELECT CASE 
		WHEN ROUND((soal83 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal83 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score83,
	(SELECT CASE 
		WHEN ROUND((soal84 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal84 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score84,
	(SELECT CASE 
		WHEN ROUND((soal85 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal85 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score85,
	(SELECT CASE 
		WHEN ROUND((soal86 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal86 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score86,
	(SELECT CASE 
		WHEN ROUND((soal87 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal87 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score87,
	(SELECT CASE 
		WHEN ROUND((soal88 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal88 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score88,

	(SELECT CASE 
		WHEN ROUND((soal89 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal89 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal89 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal89 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal89 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score89,
	(SELECT CASE 
		WHEN ROUND((soal90 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal90 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal90 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal90 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal90 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score90,
	(SELECT CASE 
		WHEN ROUND((soal91 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal91 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal91 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal91 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal91 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score91,
	(SELECT CASE 
		WHEN ROUND((soal92 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal92 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal92 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal92 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal92 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score92,
	(SELECT CASE 
		WHEN ROUND((soal93 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal93 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal93 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal93 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal93 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score93,
	(SELECT CASE 
		WHEN ROUND((soal94 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal94 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal94 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal94 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal94 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score94,
	(SELECT CASE 
		WHEN ROUND((soal95 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal95 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal95 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal95 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal95 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score95,
	(SELECT CASE 
		WHEN ROUND((soal96 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal96 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal96 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal96 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal96 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score96,
	
	(SELECT CASE 
		WHEN ROUND((soal97 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal97 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal97 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal97 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal97 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score97,
	(SELECT CASE 
		WHEN ROUND((soal98 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal98 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal98 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal98 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal98 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score98,
	(SELECT CASE 
		WHEN ROUND((soal99 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal99 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal99 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal99 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal99 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score99,
	(SELECT CASE 
		WHEN ROUND((soal100 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal100 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal100 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal100 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal100 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score100,
	(SELECT CASE 
		WHEN ROUND((soal101 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal101 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal101 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal101 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal101 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score101,
	(SELECT CASE 
		WHEN ROUND((soal102 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal102 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal102 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal102 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal102 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score102,
	(SELECT CASE 
		WHEN ROUND((soal103 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal103 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal103 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal103 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal103 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score103,
	(SELECT CASE 
		WHEN ROUND((soal104 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal104 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal104 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal104 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal104 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score104,
	
	(SELECT CASE 
		WHEN ROUND((soal105 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal105 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal105 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal105 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal105 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score105,
	(SELECT CASE 
		WHEN ROUND((soal106 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal106 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal106 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal106 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal106 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score106,
	(SELECT CASE 
		WHEN ROUND((soal107 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal107 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal107 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal107 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal107 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score107,
	(SELECT CASE 
		WHEN ROUND((soal108 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal108 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal108 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal108 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal108 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score108,
	(SELECT CASE 
		WHEN ROUND((soal109 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal109 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal109 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal109 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal109 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score109,
	(SELECT CASE 
		WHEN ROUND((soal110 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal110 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal110 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal110 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal110 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score110,
	(SELECT CASE 
		WHEN ROUND((soal111 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal111 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal111 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal111 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal111 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score111,
	(SELECT CASE 
		WHEN ROUND((soal112 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal112 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal112 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal112 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal112 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score112,
	
	(SELECT CASE 
		WHEN ROUND((soal113 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal113 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal113 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal113 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal113 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score113,
	(SELECT CASE 
		WHEN ROUND((soal114 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal114 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal114 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal114 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal114 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score114,
	(SELECT CASE 
		WHEN ROUND((soal115 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal115 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal115 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal115 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal115 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score115,
	(SELECT CASE 
		WHEN ROUND((soal116 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal116 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal116 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal116 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal116 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score116,
	(SELECT CASE 
		WHEN ROUND((soal117 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal117 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal117 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal117 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal117 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score117,
	(SELECT CASE 
		WHEN ROUND((soal118 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal118 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal118 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal118 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal118 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score118,
	(SELECT CASE 
		WHEN ROUND((soal119 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal119 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal119 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal119 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal119 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score119,
	(SELECT CASE 
		WHEN ROUND((soal120 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal120 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal120 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal120 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal120 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score120,
	
	(SELECT CASE 
		WHEN ROUND((soal121 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal121 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal121 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal121 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal121 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score121,
	(SELECT CASE 
		WHEN ROUND((soal122 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal122 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal122 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal122 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal122 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score122,
	(SELECT CASE 
		WHEN ROUND((soal123 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal123 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal123 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal123 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal123 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score123,
	(SELECT CASE 
		WHEN ROUND((soal124 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal124 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal124 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal124 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal124 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score124,
	(SELECT CASE 
		WHEN ROUND((soal125 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal125 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal125 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal125 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal125 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score125,
	(SELECT CASE 
		WHEN ROUND((soal126 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal126 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal126 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal126 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal126 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score126,
	(SELECT CASE 
		WHEN ROUND((soal127 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal127 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal127 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal127 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal127 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score127,
	(SELECT CASE 
		WHEN ROUND((soal128 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal128 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal128 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal128 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal128 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score128,
	
	(SELECT CASE 
		WHEN ROUND((soal129 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal129 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal129 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal129 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal129 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score129,
	(SELECT CASE 
		WHEN ROUND((soal130 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal130 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal130 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal130 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal130 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score130,
	(SELECT CASE 
		WHEN ROUND((soal131 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal131 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal131 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal131 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal131 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score131,
	(SELECT CASE 
		WHEN ROUND((soal132 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal132 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal132 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal132 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal132 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score132,
	(SELECT CASE 
		WHEN ROUND((soal133 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal133 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal133 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal133 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal133 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score133,
	(SELECT CASE 
		WHEN ROUND((soal134 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal134 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal134 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal134 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal134 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score134,
	(SELECT CASE 
		WHEN ROUND((soal135 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal135 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal135 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal135 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal135 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score135,
	(SELECT CASE 
		WHEN ROUND((soal136 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal136 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal136 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal136 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal136 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score136,
	
	(SELECT CASE 
		WHEN ROUND((soal137 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal137 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal137 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal137 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal137 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score137,
	(SELECT CASE 
		WHEN ROUND((soal138 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal138 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal138 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal138 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal138 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score138,
	(SELECT CASE 
		WHEN ROUND((soal139 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal139 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal139 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal139 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal139 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score139,
	(SELECT CASE 
		WHEN ROUND((soal140 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal140 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal140 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal140 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal140 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score140,
	(SELECT CASE 
		WHEN ROUND((soal141 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal141 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal141 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal141 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal141 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score141,
	(SELECT CASE 
		WHEN ROUND((soal142 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal142 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal142 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal142 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal142 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score142,
	(SELECT CASE 
		WHEN ROUND((soal143 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal143 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal143 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal143 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal143 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score143,
	(SELECT CASE 
		WHEN ROUND((soal144 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal144 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal144 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal144 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal144 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score144,
	
	(SELECT CASE 
		WHEN ROUND((soal145 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal145 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal145 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal145 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal145 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score145,
	(SELECT CASE 
		WHEN ROUND((soal146 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal146 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal146 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal146 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal146 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score146,
	(SELECT CASE 
		WHEN ROUND((soal147 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal147 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal147 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal147 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal147 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score147,
	(SELECT CASE 
		WHEN ROUND((soal148 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal148 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal148 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal148 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal148 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score148,
	(SELECT CASE 
		WHEN ROUND((soal149 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal149 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal149 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal149 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal149 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score149,
	(SELECT CASE 
		WHEN ROUND((soal150 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal150 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal150 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal150 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal150 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score150,
	(SELECT CASE 
		WHEN ROUND((soal151 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal151 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal151 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal151 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal151 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score151,
	(SELECT CASE 
		WHEN ROUND((soal152 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal152 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal152 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal152 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal152 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score152,
	
	(SELECT CASE 
		WHEN ROUND((soal153 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal153 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal153 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal153 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal153 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score153,
	(SELECT CASE 
		WHEN ROUND((soal154 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal154 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal154 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal154 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal154 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score154,
	(SELECT CASE 
		WHEN ROUND((soal155 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal155 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal155 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal155 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal155 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score155,
	(SELECT CASE 
		WHEN ROUND((soal156 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal156 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal156 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal156 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal156 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score156,
	(SELECT CASE 
		WHEN ROUND((soal157 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal157 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal157 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal157 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal157 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score157,
	(SELECT CASE 
		WHEN ROUND((soal158 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal158 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal158 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal158 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal158 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score158,
	(SELECT CASE 
		WHEN ROUND((soal159 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal159 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal159 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal159 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal159 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score159,
	(SELECT CASE 
		WHEN ROUND((soal160 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal160 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal160 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal160 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal160 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score160,
	
	(SELECT CASE 
		WHEN ROUND((soal161 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal161 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal161 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal161 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal161 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score161,
	(SELECT CASE 
		WHEN ROUND((soal162 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal162 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal162 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal162 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal162 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score162,
	(SELECT CASE 
		WHEN ROUND((soal163 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal163 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal163 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal163 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal163 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score163,
	(SELECT CASE 
		WHEN ROUND((soal164 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal164 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal164 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal164 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal164 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score164,
	(SELECT CASE 
		WHEN ROUND((soal165 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal165 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal165 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal165 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal165 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score165,
	(SELECT CASE 
		WHEN ROUND((soal166 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal166 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal166 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal166 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal166 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score166,
	(SELECT CASE 
		WHEN ROUND((soal167 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal167 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal167 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal167 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal167 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score167,
	(SELECT CASE 
		WHEN ROUND((soal168 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal168 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal168 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal168 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal168 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score168,
	
	(SELECT CASE 
		WHEN ROUND((soal169 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal169 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal169 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal169 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal169 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score169,
	(SELECT CASE 
		WHEN ROUND((soal170 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal170 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal170 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal170 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal170 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score170,
	(SELECT CASE 
		WHEN ROUND((soal171 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal171 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal171 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal171 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal171 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score171,
	(SELECT CASE 
		WHEN ROUND((soal172 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal172 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal172 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal172 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal172 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score172,
	(SELECT CASE 
		WHEN ROUND((soal173 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal173 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal173 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal173 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal173 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score173,
	(SELECT CASE 
		WHEN ROUND((soal174 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal174 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal174 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal174 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal174 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score174,
	(SELECT CASE 
		WHEN ROUND((soal175 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal175 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal175 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal175 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal175 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score175,
	(SELECT CASE 
		WHEN ROUND((soal176 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal176 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal176 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal176 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal176 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score176,
	
	(SELECT CASE 
		WHEN ROUND((soal177 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal177 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal177 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal177 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal177 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score177,
	(SELECT CASE 
		WHEN ROUND((soal178 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal178 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal178 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal178 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal178 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score178,
	(SELECT CASE 
		WHEN ROUND((soal179 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal179 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal179 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal179 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal179 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score179,
	(SELECT CASE 
		WHEN ROUND((soal180 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal180 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal180 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal180 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal180 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score180,
	(SELECT CASE 
		WHEN ROUND((soal181 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal181 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal181 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal181 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal181 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score181,
	(SELECT CASE 
		WHEN ROUND((soal182 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal182 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal182 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal182 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal182 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score182,
	(SELECT CASE 
		WHEN ROUND((soal183 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal183 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal183 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal183 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal183 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score183,
	(SELECT CASE 
		WHEN ROUND((soal184 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal184 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal184 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal184 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal184 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score184,
	(SELECT CASE 
		WHEN ROUND((soal185 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal185 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal185 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal185 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal185 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score185,
	(SELECT CASE 
		WHEN ROUND((soal186 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal186 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal186 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal186 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal186 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score186,
	(SELECT CASE 
		WHEN ROUND((soal187 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal187 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal187 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal187 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal187 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score187,
	(SELECT CASE 
		WHEN ROUND((soal188 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal188 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal188 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal188 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal188 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score188,
	(SELECT CASE 
		WHEN ROUND((soal189 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal189 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal189 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal189 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal189 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score189,
	(SELECT CASE 
		WHEN ROUND((soal190 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal190 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal190 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal190 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal190 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score190,
	(SELECT CASE 
		WHEN ROUND((soal191 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal191 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal191 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal191 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal191 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score191,
	(SELECT CASE 
		WHEN ROUND((soal192 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal192 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal192 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal192 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal192 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score192,
	
	(SELECT CASE 
		WHEN ROUND((soal193 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal193 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal193 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal193 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal193 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score193,
	(SELECT CASE 
		WHEN ROUND((soal194 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal194 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal194 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal194 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal194 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score194,
	(SELECT CASE 
		WHEN ROUND((soal195 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal195 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal195 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal195 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal195 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score195,
	(SELECT CASE 
		WHEN ROUND((soal196 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal196 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal196 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal196 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal196 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score196,
	(SELECT CASE 
		WHEN ROUND((soal197 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal197 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal197 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal197 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal197 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score197,
	(SELECT CASE 
		WHEN ROUND((soal198 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal198 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal198 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal198 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal198 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score198,
	(SELECT CASE 
		WHEN ROUND((soal199 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal199 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal199 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal199 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal199 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score199,
	(SELECT CASE 
		WHEN ROUND((soal200 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal200 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal200 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal200 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal200 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score200,
	(SELECT CASE 
		WHEN ROUND((soal201 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal201 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal201 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal201 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal201 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score201,
	(SELECT CASE 
		WHEN ROUND((soal202 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal202 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal202 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal202 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal202 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score202,
	(SELECT CASE 
		WHEN ROUND((soal203 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal203 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal203 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal203 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal203 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score203,
	(SELECT CASE 
		WHEN ROUND((soal204 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal204 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal204 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal204 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal204 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score204,
	(SELECT CASE 
		WHEN ROUND((soal205 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal205 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal205 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal205 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal205 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score205,
	(SELECT CASE 
		WHEN ROUND((soal206 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal206 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal206 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal206 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal206 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score206,
	(SELECT CASE 
		WHEN ROUND((soal207 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal207 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal207 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal207 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal207 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score207,
	(SELECT CASE 
		WHEN ROUND((soal208 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal208 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal208 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal208 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal208 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score208,
	
	(SELECT CASE 
		WHEN ROUND((soal209 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal209 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal209 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal209 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal209 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score209,
	(SELECT CASE 
		WHEN ROUND((soal210 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal210 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal210 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal210 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal210 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score210,
	(SELECT CASE 
		WHEN ROUND((soal211 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal211 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal211 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal211 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal211 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score211,
	(SELECT CASE 
		WHEN ROUND((soal212 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal212 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal212 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal212 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal212 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score212,
	(SELECT CASE 
		WHEN ROUND((soal213 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal213 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal213 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal213 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal213 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score213,
	(SELECT CASE 
		WHEN ROUND((soal214 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal214 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal214 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal214 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal214 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score214,
	(SELECT CASE 
		WHEN ROUND((soal215 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal215 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal215 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal215 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal215 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score215,
	(SELECT CASE 
		WHEN ROUND((soal216 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal216 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal216 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal216 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal216 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score216,
	
	(SELECT CASE 
		WHEN ROUND((soal217 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal217 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal217 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal217 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal217 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score217,
	(SELECT CASE 
		WHEN ROUND((soal218 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal218 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal218 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal218 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal218 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score218,
	(SELECT CASE 
		WHEN ROUND((soal219 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal219 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal219 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal219 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal219 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score219,
	(SELECT CASE 
		WHEN ROUND((soal220 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal220 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal220 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal220 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal220 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score220,
	(SELECT CASE 
		WHEN ROUND((soal221 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal221 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal221 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal221 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal221 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score221,
	(SELECT CASE 
		WHEN ROUND((soal222 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal222 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal222 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal222 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal222 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score222,
	(SELECT CASE 
		WHEN ROUND((soal223 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal223 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal223 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal223 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal223 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score223,
	(SELECT CASE 
		WHEN ROUND((soal224 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal224 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal224 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal224 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal224 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score224,
	
	(SELECT CASE 
		WHEN ROUND((soal225 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal225 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal225 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal225 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal225 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score225,
	(SELECT CASE 
		WHEN ROUND((soal226 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal226 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal226 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal226 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal226 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score226,
	(SELECT CASE 
		WHEN ROUND((soal227 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal227 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal227 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal227 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal227 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score227,
	(SELECT CASE 
		WHEN ROUND((soal228 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal228 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal228 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal228 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal228 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score228,
	(SELECT CASE 
		WHEN ROUND((soal229 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal229 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal229 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal229 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal229 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score229,
	(SELECT CASE 
		WHEN ROUND((soal230 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal230 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal230 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal230 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal230 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score230,
	(SELECT CASE 
		WHEN ROUND((soal231 / jmlKelas) * 100) > 100 THEN 'F'
		WHEN ROUND((soal231 / jmlKelas) * 100) > 50 THEN 'E'
		WHEN ROUND((soal231 / jmlKelas) * 100) > 26 THEN 'D'
		WHEN ROUND((soal231 / jmlKelas) * 100) > 11 THEN 'C'
		WHEN ROUND((soal231 / jmlKelas) * 100) > 0 THEN 'B'				
		ELSE 'A'
	END ) AS score231
	
	"); return $this->db->query($sql);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */