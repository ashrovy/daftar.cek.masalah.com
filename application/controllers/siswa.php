<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Siswa_model');
	$this->load->model('Tahun_ajaran_model');
	$this->load->model('Kelas_model');
	$this->load->model('Perbagian_model');
	$this->load->helper(array('dompdf', 'file'));
	}

	public function dataSiswa()
	{
		$data['css'] 		= "css/carousel/carousel.css";
		$data['title']		= "Olah Data Siswa";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "navigation"; 
		$data['carousel']	= "construct/carousel"; 
		$data['thumbnail']	= "construct/thumbnail"; 
		$data['footer']		= "footer";	
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		
		$data['bagian']		= $this->Perbagian_model->get_all_bagian()->result();
		$ID_tahun_ajaran 	= $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); //bismillah	
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] 		= $this->Siswa_model->dataSiswa($tahun)->result();	// Get data Siswa	
		}
		$data['badge_siswa']= $this->Siswa_model->get_all_siswa()->result(); // Get data tambahan
		$data['badge_tahun']= $this->Tahun_ajaran_model->get_active_nama_tahun_ajaran()->result();
		$data['badge_kelas']= $this->Kelas_model->get_all_kelas()->result(); 	
		$data['badge_jt']	= $this->Tahun_ajaran_model->get_all_tahun_ajaran()->result();
		$data['body'] 		= "siswa/dataSiswa";
		$this->load->view('template',$data);
	}

	public function dataTable(){
		$ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); //bismillah	
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] = $this->Siswa_model->dataSiswa($tahun)->result();	// $ID_tahun_ajaran	
		}
		$this->load->view('siswa/dataTable', $data);
	}

	public function dcmSiswa($nis){
		$data['css'] 		= "";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "rubbish/kosong"; 
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong"; 
		$data['footer']		= "rubbish/kosong";	
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('siswa/dataTable');

		
		$siswa 			= $this->Siswa_model->get_siswa_by_id($nis);
		$ID_tahun_ajaran= $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 

		$this->session->set_userdata('nis', $nis);
		
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] = $this->Siswa_model->dcmSiswa($nis, $tahun)->result();	// $ID_tahun_ajaran	
		}

		$data['body'] 		= "siswa/dcmSiswa";
		$this->load->view('template',$data);
	}

	public function dcmChart(){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('siswa/dataTable');

		$nis = $this->uri->segment(3); 
		//$nis = $this->session->userdata('nis');

        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun = $thn->thn;
        $dt 			= $this->Siswa_model->dcmSiswa($nis, $tahun)->result(); 
        $data['ket']  	= $this->Siswa_model->dcmSiswa($nis, $tahun)->result(); 
        }
        $category = array(
        	'<a class="tooltips" data-toggle="tooltip" data-placement="top" data-original-title="Nomor">1</a>',
        	'2','3','4','5','6','7','8','9','10','11','12');          
        $series = array(
            $dt[0]->h1,
            $dt[0]->h2,
            $dt[0]->h3,
            $dt[0]->h4,
            $dt[0]->h5,
            $dt[0]->h6,
            $dt[0]->h7,
            $dt[0]->h8,
            $dt[0]->h9,
            $dt[0]->h10,
            $dt[0]->h11,
            $dt[0]->h12
            ); 
        //print_r($series);
        $data['cat'] = $category;
        $data['series'] = $series;

        $this->load->view('siswa/dcmChart', $data);
	}	 

	public function dopeChart(){ // untuk modal
		$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('siswa/dataTable');

		//$nis = $this->uri->segment(3); 
		$nis = $this->session->userdata('nis');

        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun = $thn->thn;
        $dt = $this->Siswa_model->dcmSiswa($nis, $tahun)->result();       
        }
        $category = array('1','2','3','4','5','6','7','8','9','10','11','12');          
        $series = array(
            $dt[0]->h1,
            $dt[0]->h2,
            $dt[0]->h3,
            $dt[0]->h4,
            $dt[0]->h5,
            $dt[0]->h6,
            $dt[0]->h7,
            $dt[0]->h8,
            $dt[0]->h9,
            $dt[0]->h10,
            $dt[0]->h11,
            $dt[0]->h12
            ); 
        //print_r($series);
        $data['cat'] = $category;
        $data['series'] = $series;

        $this->load->view('siswa/dopeChart', $data);
	}	

	function delete($nis)
	{
		$this->Siswa_model->delete($nis);
		$this->session->set_flashdata('message', '<font color="red">1 data kelas berhasil dihapus</font>');			
		redirect('siswa/dataTable');
	}

	public function edit(){
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Edit Data Siswa";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "rubbish/kosong"; 
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong"; 
		$data['footer']		= "rubbish/kosong";	
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('siswa/dataTable');
		$data['form_action'] = site_url('siswa/edit_process');
		
		$nis = $this->uri->segment(3);
		$siswa = $this->Siswa_model->get_siswa_by_id($nis);

		$this->session->set_userdata('nis', $siswa->nis);
		$data['default']['nis'] 		= $siswa->nis;		
		$data['default']['fnama_siswa'] = $siswa->fnama_siswa;
		$data['default']['nama_siswa']	= $siswa->nama_siswa;
		$data['default']['pnama_siswa']	= $siswa->pnama_siswa;
		$data['default']['umur']		= $siswa->umur;
		//$data['default']['kelas']		= $siswa->ID_kelas;

		$data['body'] = "siswa/edit";
	 	$this->load->view('template',$data);
	}

	function edit_process(){
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Edit Data Siswa";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "rubbish/kosong"; 
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong"; 
		$data['footer']		= "rubbish/kosong";	
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('siswa/dataTable');
		$data['form_action'] = site_url('siswa/edit_process');

		$message_required = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
   							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   							<strong>Warning!</strong> Harus di isi!
	 						</div>';
		$message_numeric  = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
  							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  							<strong>Warning!</strong> Wajib angka!
							</div>';
		$message_max	  = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
  							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  							<strong>Warning!</strong> Maximal character <b>10</b> digit
							</div>';

		$this->form_validation->set_message('required',$message_required);	
		$this->form_validation->set_message('numeric', $message_numeric);
		$this->form_validation->set_message('max_length', $message_max);							

		$this->form_validation->set_rules('nis', 'nis' , 'required|numeric|max_length[10]|callback_valid_id2'); //PENGEDITAN MASIH GAGAL	

		if ($this->form_validation->run() == TRUE){
		$siswa = array('nis'  		=> $this->input->post('nis'),
					  'nama_siswa'	=> $this->input->post('nama_siswa'),
					  'fnama_siswa' => $this->input->post('fnama_siswa'),
					  'pnama_siswa' => $this->input->post('pnama_siswa'),
					  'umur'		=> $this->input->post('umur')

					   );
		$siswa_kelas = array('nis'	=> $this->input->post('nis')); // siswa kelas
		$siswa_jawab = array('nis'	=> $this->input->post('nis')); // nis pada tabel jawab

		$this->Siswa_model->edit($this->session->userdata('nis'), $siswa); // untuk tabel siswa
		$this->Siswa_model->edit_siswa_kelas($this->session->userdata('nis'), $siswa_kelas); // untuk tabel siswa kelas
		$this->Siswa_model->edit_siswa_jawab($this->session->userdata('nis'), $siswa_jawab); // untuk tabel jawab khusus pada nis
		$flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
    				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    				 <strong>Proses Berhasil!</strong> Data ditambah!
  					 </div>';
		$this->session->set_flashdata('message',$flash);
		redirect('siswa/dataTable');}
		else{
		$data['body'] = "siswa/edit";
		$this->load->view('template',$data);
		}	
	}
	
		
	function valid_id($nis){ // [WARNING] BELUM di check!!!
	if ($this->Siswa_model->valid_id($nis) == TRUE){
	$message_valid = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
  						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  						Siswa dengan <u>nis</u> <b> $nis </b> sudah ada
						</div>';
	$this->form_validation->set_message('valid_id',$message_valid);
	return FALSE;
	} else {
	return TRUE;}
	}
	function valid_id2($nis) //masih gagal
	{
		// cek apakah data tanggal pada session sama dengan isi field
		// tidak mungkin seorang siswa diabsen 2 kali pada tanggal yang sama
		$current_id 	= $this->session->userdata('nis');
		$new_id			= $this->input->post('nis');
				
		if ($new_id === $current_id)
		{
			return TRUE;
		}
		else
		{
			if($this->Siswa_model->valid_id($new_id) === TRUE) // cek database untuk entry yang sama memakai valid_entry()
			{
				$message_valid = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
		  							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  							Siswa dengan kode $new_id sudah ada
									</div>';
				$this->form_validation->set_message('valid_id2', $message_valid);
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
	}

	function download($nis){
		$filename= "Hasil Analisis DCM " . $nis;
		
		$siswa 				= $this->Siswa_model->get_siswa_by_id($nis);
		$ID_tahun_ajaran 	= $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun 				= $thn->thn;
		$data['query'] 		= $this->Siswa_model->dcmSiswa($nis, $tahun)->result();	
		}
		
		$html = $this->load->view('siswa/download', $data, true);
	    pdf_create($html, $filename);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */