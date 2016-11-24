<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
	parent::__construct();
	$this->load->model('Login_model');
	$this->load->helper('date');
	}

	public function index($msg = NULL)
	{
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Login Guru";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "login/login";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]		
		$data['form_action']= site_url('login/index');
		$data['link']		= site_url('registrasi/registrasi_guru'); // <== blum di link kan

		$username =	$this->input->post('username');
		$password = $this->input->post('password');

		$this->session->set_userdata('username', $this->input->post('username'));

		if($this->Login_model->user_check($username,$password) == TRUE)
		{
			$data = array('username' => $username, 'password' => $password);
			//$this->session->set_userdata($data); // belum berhasil
			redirect('home');
		}
		else {			
			$msg 	= '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
  					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  					Username atau password <b>salah!</b>
					</div>';
			$this->session->set_flashdata('message', $msg);
			$this->load->view('template',$data);
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome', 'refresh');
	}

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */