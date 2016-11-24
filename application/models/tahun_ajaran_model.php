<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tahun_ajaran_model extends CI_Model {

	function __construct(){
	parent::__construct();
	$this->load->database();
	}

	var $table = "tahun_ajaran";
	
	function dataTahun_ajaran(){
	$sql = ('
	SELECT nama_tahun_ajaran, ID_tahun_ajaran, status
	FROM tahun_ajaran
	'); return $this->db->query($sql);
	}
	
	function tambah_data($ID_tahun_ajaran,$nama_tahun_ajaran,$status){
	$data = array(
		'ID_tahun_ajaran' => $ID_tahun_ajaran,
		'nama_tahun_ajaran' => $nama_tahun_ajaran,
		'status' => 0 //sementara
		); $this->db->insert('tahun_ajaran',$data);
	}

	function valid_id($ID_tahun_ajaran){ // [CONTINUE-CONTROLLLER] valid_id validasi
	$query = $this->db->get_where($this->table, array('ID_tahun_ajaran' => $ID_tahun_ajaran));
		if($query->num_rows() > 0){
		return TRUE;
		} else{
		return FALSE;
		}
	}

	/**
	 * Mengaktifkan sebuah tahun_ajaran dan menonaktifkan lainnya, menggunakan transaksi
	 */
	function aktif($ID_tahun_ajaran)
	{	$sql1 = "UPDATE tahun_ajaran
				SET tahun_ajaran.status = '1'
				WHERE tahun_ajaran.ID_tahun_ajaran = '$ID_tahun_ajaran';
				";
		$sql2 = "UPDATE tahun_ajaran
				SET tahun_ajaran.status = '0'
				WHERE tahun_ajaran.ID_tahun_ajaran != '$ID_tahun_ajaran';
				";
		$this->db->trans_start();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === TRUE)
		{	return TRUE;	}
		else
		{	return FALSE;	}
	}
	
	/**
	 * Menonaktifkan sebuah tahun_ajaran dan mengaktifkan lainnya, menggunakan transaksi
	 */
	 
	 function nonaktif($ID_tahun_ajaran)
	{	$sql1 = "UPDATE tahun_ajaran
				SET tahun_ajaran.status = '0'
				WHERE tahun_ajaran.ID_tahun_ajaran = '$ID_tahun_ajaran';
				";
		$sql2 = "UPDATE tahun_ajaran
				SET tahun_ajaran.status = '1'
				WHERE tahun_ajaran.ID_tahun_ajaran != '$ID_tahun_ajaran';
				";
		$this->db->trans_start();
		$this->db->query($sql1);
		$this->db->query($sql2);
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === TRUE)
		{	return TRUE;	}
		else
		{	return FALSE;	}
	}

	/**
	 * Mendapatkan semester yang aktif
	 */
	function get_active_tahun_ajaran()
	{	/* * /
		$this->db->select('ID_tahun_ajaran');
		$this->db->where('status', 1);
		return $this->db->get($this->table);
		/* */
		$sql = "SELECT tahun_ajaran.ID_tahun_ajaran as thn
				FROM tahun_ajaran
				WHERE tahun_ajaran.status = 1;
				" ; return $this->db->query($sql);
	}

	function get_active_nama_tahun_ajaran(){
		$sql = "SELECT nama_tahun_ajaran as thn_active
				FROM tahun_ajaran
				WHERE tahun_ajaran.status = 1;"
				; return $this->db->query($sql);
	}

	function get_all_tahun_ajaran(){
		$sql = "SELECT COUNT(ID_tahun_ajaran) as tajaran FROM tahun_ajaran;"
				; return $this->db->query($sql);
	}

	function delete($ID_tahun_ajaran){
		$this->db->delete($this->table, array('ID_tahun_ajaran' => $ID_tahun_ajaran));
	}

	function get_tahun_ajaran_by_id($ID_tahun_ajaran){
	return $this->db->get_where($this->table, array('ID_tahun_ajaran' => $ID_tahun_ajaran), 1)->row();
	}

	function edit($ID_tahun_ajaran, $tahun_ajaran){
		$this->db->where('ID_tahun_ajaran', $ID_tahun_ajaran);
		$this->db->update($this->table, $tahun_ajaran);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */