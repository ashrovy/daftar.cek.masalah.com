<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Siswa_model');
	$this->load->model('Tahun_ajaran_model');
	$this->load->model('Kelas_model');
	$this->load->model('Soal_model');
	$this->load->model('Perbagian_model');
	}

	public function index()
	{
		$data['css'] 		= "css/carousel/carousel.css"; // <== data tambahan untuk css
		$data['title']		= "Daftar Soal";
		$data['cover']		= "rubbish/kosong"; // <== khusus halaman cover
		$data['navigation'] = "navigation"; // <== data tambahan untuk navigasi
		$data['carousel']	= "carousel"; // <== slide show
		$data['thumbnail']	= "thumbnail"; // <== untuk foto - foto
		$data['footer']		= "footer";		
		$data['body'] 		= "soal/index";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // <== background

		$data['bagian_1']	= $this->Soal_model->get_all_soal_bagian1()->result();
		$data['bagian_2']	= $this->Soal_model->get_all_soal_bagian2()->result();
		$data['bagian_3']	= $this->Soal_model->get_all_soal_bagian3()->result();
		$data['bagian_4']	= $this->Soal_model->get_all_soal_bagian4()->result();
		$data['bagian_5']	= $this->Soal_model->get_all_soal_bagian5()->result();
		$data['bagian_6']	= $this->Soal_model->get_all_soal_bagian6()->result();
		$data['bagian_7']	= $this->Soal_model->get_all_soal_bagian7()->result();
		$data['bagian_8']	= $this->Soal_model->get_all_soal_bagian8()->result();
		$data['bagian_9']	= $this->Soal_model->get_all_soal_bagian9()->result();
		$data['bagian_10']	= $this->Soal_model->get_all_soal_bagian10()->result();
		$data['bagian_11']	= $this->Soal_model->get_all_soal_bagian11()->result();
		$data['bagian_12']	= $this->Soal_model->get_all_soal_bagian12()->result();

		$data['bagian']		= $this->Perbagian_model->get_all_bagian()->result();
		$data['badge_siswa']= $this->Siswa_model->get_all_siswa()->result(); 
		$data['badge_tahun']= $this->Tahun_ajaran_model->get_active_nama_tahun_ajaran()->result();
		$data['badge_kelas']= $this->Kelas_model->get_all_kelas()->result(); 	
		$data['badge_jt']	= $this->Tahun_ajaran_model->get_all_tahun_ajaran()->result();

		$data['badge_soal']	= $this->Soal_model->count_soal()->result();
		$data['badge_bag'] 	= $this->Soal_model->count_bagian()->result();

		$this->load->view('template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */