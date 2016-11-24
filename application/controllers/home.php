<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Guru_model');
		$this->load->model('Tahun_ajaran_model');
		$this->load->model('Kelas_model');
		$this->load->model('Perbagian_model');
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		$data['css'] 		= "css/carousel/carousel.css"; // <== data tambahan untuk css
		$data['title']		= "Home";
		$data['cover']		= "rubbish/kosong"; // <== khusus halaman cover
		$data['navigation'] = "navigation"; // <== data tambahan untuk navigasi
		$data['carousel']	= "construct/carousel"; // <== slide show
		$data['thumbnail']	= "construct/thumbnail"; // <== untuk foto - foto
		$data['footer']		= "footer";		
		$data['body'] 		= "home/home";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // <== background
		$this->load->view('template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */