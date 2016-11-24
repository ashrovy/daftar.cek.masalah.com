<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Siswa_model');
	$this->load->model('Tahun_ajaran_model');
	$this->load->model('Kelas_model');
	}

	public function index()
	{
		$data['css'] 		= "css/carousel/carousel.css";
		$data['title']		= "Olah Data Tahun Ajaran";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "navigation"; 
		$data['carousel']	= "construct/carousel"; 
		$data['thumbnail']	= "construct/thumbnail"; 
		$data['footer']		= "footer";			
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		$data['reload'] 	= site_url('tahun_ajaran');
		$data['badge_siswa']= $this->Siswa_model->get_all_siswa()->result(); // Get data tambahan
		$data['badge_tahun']= $this->Tahun_ajaran_model->get_active_nama_tahun_ajaran()->result();
		$data['badge_kelas']= $this->Kelas_model->get_all_kelas()->result(); 	
		$data['badge_jt']	= $this->Tahun_ajaran_model->get_all_tahun_ajaran()->result();
		
		$data['link_tambahKelas'] 	= site_url('kelas/tambah');
		$data['body']				= "tahun_ajaran/dataTahun";
		$this->load->view('template',$data);
	}

	public function dataTable(){
		$data['query'] = $this->Tahun_ajaran_model->dataTahun_ajaran()->result();
		$this->load->view('tahun_ajaran/dataTable', $data);
	}

	public function tambah_data(){ //pemberitahuan data sukses masih gagal
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Tambah Data Tahun Ajaran";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		


		$data['link_kembali'] = site_url('tahun_ajaran');
		$data['form_action']= site_url('tahun_ajaran/tambah_data');
			$data['bg']		= ""; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

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

		$this->form_validation->set_rules('ID_tahun_ajaran','ID_tahun_ajaran','required|numeric|max_length[10]|callback_valid_id');
		$this->form_validation->set_rules('nama_tahun_ajaran','nama_tahun_ajaran','required|max_length[9]|callback_valid_name');

		$ID_tahun_ajaran 	= $this->input->post('ID_tahun_ajaran');
		$nama_tahun_ajaran 	= $this->input->post('nama_tahun_ajaran');
		$status				= $this->input->post('status');

		if ($this->form_validation->run() == FALSE){
			$data['body'] 		= "tahun_ajaran/tambah";
			$this->load->view('template',$data);
		} else {
			$this->Tahun_ajaran_model->tambah_data($ID_tahun_ajaran,$nama_tahun_ajaran,$status);
			$flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
    				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    				 <strong>Proses Berhasil!</strong> Data ditambah!
  					 </div>';
			$this->session->set_flashdata('message', $flash);
			redirect('tahun_ajaran/tambah_data');
		}		
	}

	function edit(){
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "rubbish/kosong"; 
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong"; 
		$data['footer']		= "rubbish/kosong";	
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('tahun_ajaran/dataTable');
		$data['form_action'] = site_url('tahun_ajaran/edit_process');

		$ID_tahun_ajaran = $this->uri->segment(3);
		$tahun_ajaran = $this->Tahun_ajaran_model->get_tahun_ajaran_by_id($ID_tahun_ajaran);

		$this->session->set_userdata('ID_tahun_ajaran', $tahun_ajaran->ID_tahun_ajaran);

		$data['default']['ID_tahun_ajaran'] 		= $tahun_ajaran->ID_tahun_ajaran;		
		$data['default']['nama_tahun_ajaran']		= $tahun_ajaran->nama_tahun_ajaran;

		$data['body']	= "tahun_ajaran/edit";
		$this->load->view('template',$data);
	}

	function edit_process(){
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "rubbish/kosong"; 
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong"; 
		$data['footer']		= "rubbish/kosong";	
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('tahun_ajaran/dataTable');
		$data['form_action'] = site_url('tahun_ajaran/edit_process');

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
		$this->form_validation->set_rules('ID_tahun_ajaran', 'ID_tahun_ajaran' , 'required|numeric|max_length[10]|callback_valid_id2'); //PENGEDITAN MASIH GAGAL
		$this->form_validation->set_rules('nama_tahun_ajaran', 'nama_tahun_ajaran', 'requried|max_length[20]');

		if ($this->form_validation->run() == TRUE){
			$tahun_ajaran = array('ID_tahun_ajaran'  => $this->input->post('ID_tahun_ajaran'),
						   		'nama_tahun_ajaran'  => $this->input->post('nama_tahun_ajaran')
						   );

			$this->Tahun_ajaran_model->edit($this->session->userdata('ID_tahun_ajaran'), $tahun_ajaran);

			$flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
	    				 <button type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">&times;</button>
	    				 Satu data tahun ajaran berhasil di edit!
	  					 </div>';
			$this->session->set_flashdata('message',$flash);
			redirect('tahun_ajaran/dataTable');
		}
		else{
			$data['body']	= "tahun_ajaran/edit";
			$this->load->view('template',$data);
		}
	}



	function valid_id($ID_tahun_ajaran){ // BELUM JALAN
		if ($this->Tahun_ajaran_model->valid_id($ID_tahun_ajaran) == TRUE){
		$this->form_validation->set_message('valid_id',"Tahun ajaran dengan <u>ID Tahun Ajaran</u> <b> $ID_tahun_ajaran </b> sudah terdaftar");
		return FALSE;
		} else {
		return TRUE;
		}
	}

	function valid_name($nama_tahun_ajaran = null){
    // Regex patterns for year and forward slash
    $year  = '((?:(?:[1]{1}\\d{1}\\d{1}\\d{1})|(?:[2]{1}\\d{3})))(?![\\d])';
    $slash = '(\\/)';
    // See if the inputed value matches the regex
    // Ensures it's in the form 'year/year'. E.g. '2010/2012'.
    if (preg_match_all("/".$year.$slash.$year."/is", $nama_tahun_ajaran, $matches))
    {
        // Get the years from the string
        $first_year  = $matches[1][0];
        $second_year = $matches[3][0];
        // Ensure the first year is one less than the second year
        if (($first_year + 1) == $second_year)
        {
            return TRUE;
        }               
    } $this->form_validation->set_message('valid_name',"Penulisan harus seperti ini: 2004/2005");
    return FALSE;
	}

	function aktif($ID_tahun_ajaran)
	{
		$aktif = $this->Tahun_ajaran_model->aktif($ID_tahun_ajaran);
		if($aktif == TRUE)
		{	$this->session->set_flashdata('message', 'Proses berhasil...');
			redirect('tahun_ajaran/dataTable');	}
		else
		{	$this->session->set_flashdata('message', 'Proses gagal...');
			redirect('tahun_ajaran/dataTable');	}
	}
	
	/**
	 * menonaktifkan sebuah Tahun ajaran
	 */	
	function nonaktif($ID_tahun_ajaran)
	{
		$nonaktif = $this->Tahun_ajaran_model->nonaktif($ID_tahun_ajaran);
		if($nonaktif == TRUE)
		{	$this->session->set_flashdata('message', 'Proses berhasil...');
			redirect('tahun_ajaran/dataTable');				
		}
		else
		{	$this->session->set_flashdata('message', 'Proses gagal...');
			redirect('tahun_ajaran/dataTable');	}
	}

	function delete($ID_tahun_ajaran){
		$this->Tahun_ajaran_model->delete($ID_tahun_ajaran);
		$this->session->set_flashdata('message', '<font color="red">1 Tahun ajaran berhasil dihapus</font>'); // belum jalan
		redirect('tahun_ajaran/dataTable');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */