<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Guru_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    var $table = 'user';
	
	function inputKelas($kelas,$sekolah){
	$data = array(
	// perlu di ingat 'NAMA FIELD' => VARIABLE	
	'nama' => $kelas,	'id_sekolah' => $sekolah
	); $this->db->insert('kelas',$data);
	}
	
	function getSekolah(){
	$query = $this->db->get('sekolah');
	if ($query->num_rows >= 1){
		foreach($query->result_array() as $row){
			$data[$row['id_sekolah']]= $row['nama'];
			}return $data;
		}	
	}
	
	function getKelas(){
	$kelas = $this->db->get('kelas');
	return $kelas->result();	
	}
	function tampilSekolah(){
		$kuer = $this->db->get('sekolah');
		return $kuer->result();
	}
	/* BATAS UNTUK HOME */
	
	/* --- SISWA ---- */
	
	function tablePag(){
	$query = $this->db->get('siswa');
	return $query->result();
	} //
	
	function dataSiswa(){
	$sql = ('
	SELECT DISTINCT siswa.nis, siswa.nama, siswa.sex, siswa.umur, siswa.tgl_pelaksanaan,kelas.nama AS kelas, sekolah.nama AS sekolah
	FROM siswa, kelas, sekolah
	GROUP BY siswa.nis
	'); return $this->db->query($sql);
	}
	
	function dcmSiswa(){
	$sql =('
	SELECT DISTINCT dcm_peserta.nis, siswa.nama, kelas.nama AS kelas, siswa.sex, siswa.umur, siswa.tgl_pelaksanaan,
		dcm_peserta.nm1 AS C1, dcm_peserta.nm2 AS C2, dcm_peserta.nm3 AS C3,
		dcm_peserta.nm4 AS C4, dcm_peserta.NM5 AS C5, dcm_peserta.nm6 AS C6,
		dcm_peserta.nm7 AS C7, dcm_peserta.nm8 AS C8, dcm_peserta.nm9 AS C9,
		dcm_peserta.nm10 AS C10, dcm_peserta.nm11 AS C11, dcm_peserta.nm12 AS C12
	FROM siswa, dcm_peserta, kelas
	WHERE dcm_peserta.nis = siswa.nis
	AND dcm_peserta.id_kelas = kelas.id_kelas
	GROUP BY dcm_peserta.nis 
	');
	return $this->db->query($sql);
	}
	
	function reportSiswa($nis){
	$sql = ("
	SELECT DISTINCT dcm_peserta.nis, siswa.nama, kelas.nama as kelas, sekolah.nama as sekolah,
		siswa.sex, siswa.umur,siswa.tgl_pelaksanaan,
		dcm_peserta.nm1 as bag1, dcm_peserta.nm2 as bag2, dcm_peserta.nm3 as bag3,
		dcm_peserta.nm4 as bag4, dcm_peserta.nm5 as bag5, dcm_peserta.nm6 as bag6,
		dcm_peserta.nm7 as bag7, dcm_peserta.nm8 as bag8, dcm_peserta.nm9 as bag9,
		dcm_peserta.nm10 as bag10, dcm_peserta.nm11 as bag11, dcm_peserta.nm12 as bag12,
			(SELECT ROUND((dcm_peserta.nm1 / 25) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P1,
			(SELECT ROUND((dcm_peserta.nm2 / 20) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P2,
			(SELECT ROUND((dcm_peserta.nm3 / 20) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P3,
			(SELECT ROUND((dcm_peserta.nm4 / 24) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P4,
			(SELECT ROUND((dcm_peserta.nm5 / 14) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P5,
			(SELECT ROUND((dcm_peserta.nm6 / 26) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P6,
			(SELECT ROUND((dcm_peserta.nm7 / 19) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P7,
			(SELECT ROUND((dcm_peserta.nm8 / 21) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P8,
			(SELECT ROUND((dcm_peserta.nm9 / 15) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P9,
			(SELECT ROUND((dcm_peserta.nm10/ 11) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P10,
			(SELECT ROUND((dcm_peserta.nm11/ 15) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P11,
			(SELECT ROUND((dcm_peserta.nm12/ 21) * 100) from dcm_peserta where dcm_peserta.nis = '$nis') AS P12,
/* scoring */	(SELECT CASE 
				 WHEN ROUND((dcm_peserta.nm12 / 21) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm12 / 21) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm12 / 21) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm12 / 21) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm12 / 21) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score12,		
			(SELECT CASE WHEN ROUND((dcm_peserta.nm11 / 15) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm11 / 15) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm11 / 15) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm11 / 15) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm11 / 15) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score11,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm10 / 11) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm10 / 11) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm10 / 11) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm10 / 11) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm10 / 11) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score10,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm9 / 15) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm9 / 15) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm9 / 15) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm9 / 15) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm9 / 15) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score9,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm8 / 21) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm8 / 21) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm8 / 21) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm8 / 21) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm8 / 21) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score8,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm7 / 19) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm7 / 19) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm7 / 19) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm7 / 19) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm7 / 19) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score7,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm6 / 26) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm6 / 26) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm6 / 26) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm6 / 26) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm6 / 26) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score6,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm5 / 14) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm5 / 14) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm5 / 14) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm5 / 14) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm5 / 14) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score5,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm4 / 24) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm4 / 24) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm4 / 24) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm4 / 24) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm4 / 24) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score4,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm3 / 20) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm3 / 20) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm3 / 20) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm3 / 20) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm3 / 20) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score3,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm2 / 20) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm2 / 20) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm2 / 20) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm2 / 20) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm2 / 20) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score2,
			(SELECT CASE WHEN ROUND((dcm_peserta.nm1 / 25) * 100) > 100 THEN 'F'
				 WHEN ROUND((dcm_peserta.nm1 / 25) * 100) > 50 THEN 'E'
				 WHEN ROUND((dcm_peserta.nm1 / 25) * 100) > 26 THEN 'D'
				 WHEN ROUND((dcm_peserta.nm1 / 25) * 100) > 11 THEN 'C'
				 WHEN ROUND((dcm_peserta.nm1 / 25) * 100) > 0 THEN 'B'
				ELSE 'A'
				END ) AS score1,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 1) AS S1,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 2) AS S2,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 3) AS S3,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 4) AS S4,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 5) AS S5,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 6) AS S6,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 7) AS S7,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 8) AS S8,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 9) AS S9,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 10) AS S10,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 11) AS S11,
	(SELECT COUNT(soal.id_bagian) FROM soal WHERE	soal.id_bagian = 12) AS S12
	FROM dcm_peserta, siswa, kelas,sekolah
	WHERE dcm_peserta.nis = siswa.nis
	AND dcm_peserta.id_kelas = kelas.id_kelas
	AND kelas.id_sekolah = sekolah.id_sekolah
	AND siswa.nis = '$nis'
	GROUP BY siswa.nis
	"); return $this->db->query($sql);				
	}
	
	function getNis(){
		$query = $this->db->get('dcm_peserta');
		if ($query->num_rows >= 1){
			foreach($query->result_array() as $row){
			$data[$row['nis']] = $row['nis']; 
			} return $data;
		} 
	}
	function getBagian(){
		$bagian = $this->db->get('bagian');
		return $bagian->result();
	}
	/* --- SISWA ---- */
	
	/* --- ACCOUNT ---- */
	function getAccount(){
	$query = $this->db->get('guru');
	return $query->result();
	}

	function getUser($username){
		$sql = "SELECT user.nik,  
			guru.sex, guru.umur, user.username, user.password,
			guru.photo,
			CONCAT(guru.fnama_guru, ' ' , guru.nama_guru) as nama
			FROM guru, user
			WHERE user.nik = guru.nik
			AND user.username = '$username'
			GROUP BY user.nik";
	return $this->db->query($sql);	
	}
	
	/* --- REPORT ---- */
	function reportKesehatan(){
	$sql =("
		SELECT dcm_peserta.nm1, COUNT(siswa.nis) as jml, ROUND(dcm_peserta.nm1 / COUNT(dcm_peserta.nis) * 100) as percent	
		FROM dcm_peserta, siswa
		WHERE siswa.id_kelas = dcm_peserta.id_kelas AND dcm_peserta.id_kelas = '$id_kelas'
		GROUP BY dcm_peserta.nis
	"); return $this->db->query($sql);
	}

	function edit($nik, $user){
		$this->db->where('nik', $nik);
		$this->db->update($this->table, $user);
	}

	function valid_id($nik){ // [CONTINUE-CONTROLLLER] valid_id validasi
	$query = $this->db->get_where($this->table, array('nik' => $nik));
		if($query->num_rows() > 0){
		return TRUE;
		} else{
		return FALSE;
		}
	}

	function select_nik($username){
	$sql = "SELECT nik FROM user WHERE username = '$username'"; return $this->db->query($sql);
	}

	function get_user_by_id($nik){
	return $this->db->get_where($this->table, array('nik' => $nik), 1)->row();
	}

}