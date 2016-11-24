<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}
	
	var $table = "siswa";

	function dataSiswa($tahun){
	$sql = "
	SELECT *
	FROM siswa, kelas, siswa_kelas, tahun_ajaran
	WHERE siswa.ID_kelas = kelas.ID_kelas
	AND siswa_kelas.ID_tahun_ajaran = tahun_ajaran.ID_tahun_ajaran
	AND siswa.nis = siswa_kelas.NIS
	AND tahun_ajaran.ID_tahun_ajaran = '$tahun'
	"; return $this->db->query($sql);
	}

	function get_all_siswa(){
	$sql = "SELECT COUNT(nis) as nis FROM siswa"; return $this->db->query($sql);
	}

	function get_siswa_by_id($nis){
	return $this->db->get_where($this->table, array('nis' => $nis), 1)->row();
	}

	function edit($nis, $siswa){
		$this->db->where('nis', $nis);
		$this->db->update($this->table, $siswa);
	}

	function edit_siswa_kelas($nis, $siswa_kelas){
		$tabel = 'siswa_kelas';
		$this->db->where('nis',$nis);
		$this->db->update($tabel, $siswa_kelas);
	}

	function edit_siswa_jawab($nis, $siswa_jawab){
		$tabel = 'jawab';
		$this->db->where('nis', $nis);
		$this->db->update($tabel, $siswa_jawab);
	}


	function delete($nis){
		$this->db->delete($this->table, array('nis' => $nis));
	}

	function valid_id($nis){ // [CONTINUE-CONTROLLLER] valid_id validasi
	$query = $this->db->get_where($this->table, array('nis' => $nis));
		if($query->num_rows() > 0){
		return TRUE;
		} else{
		return FALSE;
		}
	}
	
	function dcmSiswa($nis, $tahun){ //$nis // $ID_tahun_ajaran
	$sql= ("
	SELECT  CONCAT(siswa.fnama_siswa, ' ' , siswa.nama_siswa) as nama, siswa.pnama_siswa as panggilan, 
			siswa.sex as sex, siswa.umur as umur, kelas.nama_kelas as kelas, sekolah.nama_sekolah,
			jawab.nis as nis, siswa_kelas.Tgl_pelaksanaan as tgl,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 1 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b1,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 2 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b2,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 3 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b3,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 4 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b4,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 5 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b5,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 6 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b6,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 7 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b7,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 8 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b8,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 9 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b9,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 10 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b10,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 11 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b11,
			(SELECT COUNT(jawab.jawaban) FROM jawab, soal WHERE soal.ID_soal = jawab.ID_soal AND soal.ID_bagian = 12 AND jawab.jawaban = 1 AND jawab.nis = '$nis') AS b12,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 1) AS j1,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 2) AS j2,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 3) AS j3,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 4) AS j4,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 5) AS j5,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 6) AS j6,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 7) AS j7,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 8) AS j8,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 9) AS j9,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 10) AS j10,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 11) AS j11,
			(SELECT COUNT(soal.ID_soal) FROM soal WHERE soal.ID_bagian = 12) AS j12,
			(SELECT ROUND((b1 / j1) * 100)) as h1,
			(SELECT ROUND((b2 / j2) * 100)) as h2,
			(SELECT ROUND((b2 / j3) * 100)) as h3,
			(SELECT ROUND((b4 / j4) * 100)) as h4,
			(SELECT ROUND((b5 / j5) * 100)) as h5,
			(SELECT ROUND((b6 / j6) * 100)) as h6,
			(SELECT ROUND((b7 / j7) * 100)) as h7,
			(SELECT ROUND((b8 / j8) * 100)) as h8,
			(SELECT ROUND((b9 / j9) * 100)) as h9,
			(SELECT ROUND((b10 / j10) * 100)) as h10,
			(SELECT ROUND((b11 / j11) * 100)) as h11,
			(SELECT ROUND((b12 / j12) * 100)) as h12,
			/* scoring */
			(SELECT CASE 
				 WHEN ROUND((b12 / j12) * 100) > 100 THEN 'F'
				 WHEN ROUND((b12 / j12) * 100) > 50 THEN 'E'
				 WHEN ROUND((b12 / j12) * 100) > 26 THEN 'D'
				 WHEN ROUND((b12 / j12) * 100) > 11 THEN 'C'
				 WHEN ROUND((b12 / j12) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score12,
			(SELECT CASE 
				 WHEN ROUND((b11 / j11) * 100) > 100 THEN 'F'
				 WHEN ROUND((b11 / j11) * 100) > 50 THEN 'E'
				 WHEN ROUND((b11 / j11) * 100) > 26 THEN 'D'
				 WHEN ROUND((b11 / j11) * 100) > 11 THEN 'C'
				 WHEN ROUND((b11 / j11) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score11,
			(SELECT CASE 
				 WHEN ROUND((b10 / j10) * 100) > 100 THEN 'F'
				 WHEN ROUND((b10 / j10) * 100) > 50 THEN 'E'
				 WHEN ROUND((b10 / j10) * 100) > 26 THEN 'D'
				 WHEN ROUND((b10 / j10) * 100) > 11 THEN 'C'
				 WHEN ROUND((b10 / j10) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score10,
			(SELECT CASE 
				 WHEN ROUND((b9 / j9) * 100) > 100 THEN 'F'
				 WHEN ROUND((b9 / j9) * 100) > 50 THEN 'E'
				 WHEN ROUND((b9 / j9) * 100) > 26 THEN 'D'
				 WHEN ROUND((b9 / j9) * 100) > 11 THEN 'C'
				 WHEN ROUND((b9 / j9) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score9,
			(SELECT CASE 
				 WHEN ROUND((b8 / j8) * 100) > 100 THEN 'F'
				 WHEN ROUND((b8 / j8) * 100) > 50 THEN 'E'
				 WHEN ROUND((b8 / j8) * 100) > 26 THEN 'D'
				 WHEN ROUND((b8 / j8) * 100) > 11 THEN 'C'
				 WHEN ROUND((b8 / j8) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score8,
			(SELECT CASE 
				 WHEN ROUND((b7 / j7) * 100) > 100 THEN 'F'
				 WHEN ROUND((b7 / j7) * 100) > 50 THEN 'E'
				 WHEN ROUND((b7 / j7) * 100) > 26 THEN 'D'
				 WHEN ROUND((b7 / j7) * 100) > 11 THEN 'C'
				 WHEN ROUND((b7 / j7) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score7,
			(SELECT CASE 
				 WHEN ROUND((b6 / j6) * 100) > 100 THEN 'F'
				 WHEN ROUND((b6 / j6) * 100) > 50 THEN 'E'
				 WHEN ROUND((b6 / j6) * 100) > 26 THEN 'D'
				 WHEN ROUND((b6 / j6) * 100) > 11 THEN 'C'
				 WHEN ROUND((b6 / j6) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score6,
			(SELECT CASE 
				 WHEN ROUND((b5 / j5) * 100) > 100 THEN 'F'
				 WHEN ROUND((b5 / j5) * 100) > 50 THEN 'E'
				 WHEN ROUND((b5 / j5) * 100) > 26 THEN 'D'
				 WHEN ROUND((b5 / j5) * 100) > 11 THEN 'C'
				 WHEN ROUND((b5 / j5) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score5,
			(SELECT CASE 
				 WHEN ROUND((b4 / j4) * 100) > 100 THEN 'F'
				 WHEN ROUND((b4 / j4) * 100) > 50 THEN 'E'
				 WHEN ROUND((b4 / j4) * 100) > 26 THEN 'D'
				 WHEN ROUND((b4 / j4) * 100) > 11 THEN 'C'
				 WHEN ROUND((b4 / j4) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score4,
			(SELECT CASE 
				 WHEN ROUND((b3 / j3) * 100) > 100 THEN 'F'
				 WHEN ROUND((b3 / j3) * 100) > 50 THEN 'E'
				 WHEN ROUND((b3 / j3) * 100) > 26 THEN 'D'
				 WHEN ROUND((b3 / j3) * 100) > 11 THEN 'C'
				 WHEN ROUND((b3 / j3) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score3,
			(SELECT CASE 
				 WHEN ROUND((b2 / j2) * 100) > 100 THEN 'F'
				 WHEN ROUND((b2 / j2) * 100) > 50 THEN 'E'
				 WHEN ROUND((b2 / j2) * 100) > 26 THEN 'D'
				 WHEN ROUND((b2 / j2) * 100) > 11 THEN 'C'
				 WHEN ROUND((b2 / j2) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score2,
			(SELECT CASE 
				 WHEN ROUND((b1 / j1) * 100) > 100 THEN 'F'
				 WHEN ROUND((b1 / j1) * 100) > 50 THEN 'E'
				 WHEN ROUND((b1 / j1) * 100) > 26 THEN 'D'
				 WHEN ROUND((b1 / j1) * 100) > 11 THEN 'C'
				 WHEN ROUND((b1 / j1) * 100) > 0 THEN 'B'				
				 ELSE 'A'
				END ) AS score1
	FROM 	siswa, kelas, jawab, sekolah, siswa_kelas
	WHERE 	jawab.nis = siswa.nis
	AND	siswa.nis = siswa_kelas.NIS
	AND	kelas.ID_kelas = siswa.ID_kelas
	AND	sekolah.ID_sekolah = siswa.ID_sekolah
	AND	siswa.nis = '$nis' /* nanti di ganti $nis  */
	AND	siswa_kelas.ID_tahun_ajaran = '$tahun' 
	GROUP BY siswa.nis;
	");  //$query = $this->db->query($sql);
	return $this->db->query($sql);
	}

	function getNis(){
		$query = $this->db->get('jawab');
		if ($query->num_rows >= 1){
			foreach($query->result_array() as $row){
			$data[$row['nis']] = $row['nis']; 
			} return $data;
		} 
	}
}