<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Registrasi_model');
	$this->load->helper('date');
	}

	function index()
	{
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Registrasi Peserta";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";		
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		$data['form_action']= site_url('registrasi/index');

		$this->form_validation->set_message('required','*harus di isi*');
		$this->form_validation->set_rules('nis','nis', 'required|max_length[10]|callback_valid_nis');	
		$this->form_validation->set_rules('nama_siswa','nama_siswa','required');
		$this->form_validation->set_rules('umur', 'umur','required|exact_length[2]');

		$nis		= $this->input->post('nis');
		$fnama_siswa= $this->input->post('fnama_siswa');
		$pnama_siswa= $this->input->post('pnama_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$sex		= $this->input->post('sex');
		$umur		= $this->input->post('umur');
		$kelas		= $this->input->post('kelas'); // belum di tentukan mau jadi 'nama_kelas' atau 'kelas' aja
		$sekolah	= $this->input->post('sekolah'); // sama seperti diatas
		$Tgl_pelaksanaan = date('Y-m-d');
		$tahun_ajaran = $this->input->post('tahun_ajaran'); // ket sama seperti diatas

		$this->session->set_userdata('nama_siswa', $this->input->post('nama_siswa'));
		$this->session->set_userdata('fnama_siswa', $this->input->post('fnama_siswa'));
		$this->session->set_userdata('kelas', $this->input->post('kelas'));
		$this->session->set_userdata('sekolah', $this->input->post('sekolah'));
		$this->session->set_userdata('Tgl_pelaksanaan', $this->input->post('Tgl_pelaksanaan'));
		$this->session->set_userdata('nis', $this->input->post('nis'));
		$this->session->set_userdata('sex', $this->input->post('sex'));
		$this->session->set_userdata('umur', $this->input->post('umur'));

		$selected_kelas 		= $kelas['ID_kelas'];
		$selected_sekolah		= $sekolah['ID_sekolah'];
		$selected_tahun_ajaran 	= $tahun_ajaran['ID_tahun_ajaran'];
		$data['kelas'] 			= $this->Registrasi_model->getKelas();
		$data['sekolah']		= $this->Registrasi_model->getSekolah();
		$data['tahun_ajaran']	= $this->Registrasi_model->getTahunAjaran();

		if ($this->form_validation->run() == FALSE)	{ 
			$data['body'] 		= "registrasi/registrasi";			
		} else { 		
			$this->Registrasi_model->daftarPeserta($nis, $fnama_siswa, $pnama_siswa, $nama_siswa, $sex, $umur, $kelas, $sekolah, $Tgl_pelaksanaan, $tahun_ajaran);		
		redirect('dcm/soalBag1'); 
		}
		$this->load->view('template',$data);		
	}
	

	function valid_nis($nis){ // [WARNING] BELUM di check!!!
		if ($this->Registrasi_model->valid_nis($nis) == TRUE){
		$message = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  		Siswa dengan <u>NIS</u> <b> $nis </b> sudah terdaftar
  		</div>';
		$this->form_validation->set_message('valid_nis', $message);
		return FALSE;
		} else {
		return TRUE;
		}
	}

	function guru(){
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Registrasi Peserta";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";		
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		$data['form_action']= site_url('registrasi/guru');

		$this->form_validation->set_message('required','*harus di isi*');
		$this->form_validation->set_rules('nik','nik', 'required|max_length[15]');	
		$this->form_validation->set_rules('nama_guru','nama_guru','required');
		$this->form_validation->set_rules('umur', 'umur','required|exact_length[2]');

		$username	= $this->input->post('username');
		$password	= $this->input->post('password');	
		$nik		= $this->input->post('nik');
		$fnama_guru	= $this->input->post('fnama_guru'); // [nama panjang guru]
		$nama_guru	= $this->input->post('nama_guru'); // [nama belakang]		
		$sex		= $this->input->post('sex');
		$umur		= $this->input->post('umur');
		// $sekolah 	= $this->input->post('sekolah'); // [sekolah] << ke depannya akan ada
		// $photo		= $this->input->post('photo'); // [photo profil] << kedepannya akan ada

		if ($this->form_validation->run() == FALSE)	{ 
		$data['body'] 		= "registrasi/registrasi_guru";			
		} else { 		
		$this->Registrasi_model->daftarGuru($username, $password, $fnama_guru, $nama_guru, $sex, $umur, $nik);		// << $sekolah, $photo
		redirect('home'); 
		}
		$this->load->view('template',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */