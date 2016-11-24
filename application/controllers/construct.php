<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Construct extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Siswa_model');
	$this->load->model('Tahun_ajaran_model');
	$this->load->model('Kelas_model');
	$this->load->model('Construct_model');
	$this->load->helper(array('dompdf', 'file'));
	$this->load->database();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function sample()
	{
		$data['css'] 		= "css/carousel/carousel.css"; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong"; // <== khusus halaman cover
		$data['navigation'] = "navigation"; // <== data tambahan untuk navigasi
		$data['carousel']	= "construct/carousel"; // <== slide show
		$data['thumbnail']	= "construct/thumbnail"; // <== untuk foto - foto
		$data['footer']		= "footer";		
		$data['body'] 		= "construct/construct";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // <== background
		$this->load->view('template',$data);
	}

	public function cover(){
		$data['css'] 		= "css/cover/cover.css";
		$data['title']		= "";
		$data['cover']		= "construct/cover";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		$data['body'] 		= "rubbish/kosong";
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function login(){
		$data['css']		= "css/login/signin.css";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation']	= "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body']		= "construct/login";
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['form_action']= site_url('construct/login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->Construct_model->user_check($username,$password) == TRUE)
		{
			$data = array('username' => $username, 'password' => $password);
			redirect('home');
		}
		else {
			// redirect('construct/login');
			$this->load->view('template',$data);
		}

		//$this->load->view('template',$data);
	}

	function login_process(){
		$data['css']		= "css/login/signin.css";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation']	= "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong"; 
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body']		= "construct/login";
			$data['bg']		= "img/bg/wood_pattern.jpg";

		if($this->Construct_model->user_check($username,$password) == TRUE)
		{
			$data = array('username' => $username, 'password' => $password);
			redirect('home');
		}
		else {
			// redirect('construct/login');
			$this->load->view('template',$data);
		}


		
		
		
	}

	public function body(){
		$data['css'] 		= "css/construct/construct.css"; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "navigation"; // <== data tambahan untuk navigasi
		$data['carousel']	= "construct/carousel"; // <== slide show
		$data['thumbnail']	= "construct/thumbnail";
		$data['footer']		= "footer";
		$data['body'] 		= "construct/construct";
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function table(){
		// $data['css'] 		= ""; // <== data tambahan untuk css
		// $data['title']		= "";
		// $data['cover']		= "rubbish/kosong";
		// $data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		// $data['carousel']	= "rubbish/kosong"; // <== slide show
		// $data['thumbnail']	= "rubbish/kosong";
		// $data['footer']		= "rubbish/kosong";
		//  $data['body'] 		= "construct/table";
		//  	$data['bg']		= "img/bg/wood_pattern.jpg";
		
		$this->load->model('Siswa_model');
		$this->load->model('Tahun_ajaran_model');

		$ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); //bismillah	
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] = $this->Siswa_model->dataSiswa($tahun)->result();	// $ID_tahun_ajaran	
		}
		$this->load->view('construct/table',$data);
		 //$this->load->view('template',$data);
	}

	public function iframe(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		 $data['body'] 		= "construct/iframe";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function chart(){
		$this->load->view('construct/chart');
	}

	public function collapse(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		 $data['body'] 		= "construct/collapse";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function tooltip(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "Tooltip";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		 $data['body'] 		= "construct/tooltip";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function justOneButton(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		 $data['body'] 		= "construct/justOneButton";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);
	}

	public function validator(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		 $data['body'] 		= "construct/validator";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		$this->load->view('template',$data);	
	}

	public function pdf(){
		$data['css'] 		= ""; // <== data tambahan untuk css
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong"; // <== data tambahan untuk navigasi
		$data['carousel']	= "rubbish/kosong"; // <== slide show
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		
		$data['body'] 		= "construct/pdf";
		 	$data['bg']		= "img/bg/wood_pattern.jpg";
		
		$data['link']		= site_url('construct/pdf_bismillah');

		$ID_tahun_ajaran 	= $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] 		= $this->Siswa_model->dataSiswa($tahun)->result();			
		}
		$this->load->view('template',$data);
	}	

	function pdf_bismillah()
	{
	   	$filename = 'hasil';
		$data['bg']		= "img/bg/wood_pattern.jpg";    
	    $ID_tahun_ajaran 	= $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun 				= $thn->thn;
		$data['query']		= $this->Siswa_model->dataSiswa($tahun)->result();					
		}

	     $html = $this->load->view('construct/pdf_download', $data, true);
	     pdf_create($html, $filename);
	     // or
	     // $data = pdf_create($html, '', false);
	     // write_file('name', $data);
	     // //if you want to write it to disk and/or send it as an attachment    
	}

	function lihat(){ // untuk print out
		$this->load->view('construct/table');
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
		$data['form_action'] = site_url('construct/edit/');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nik	  = $this->input->post('nik');

		$user = $this->Construct_model->getID($nik);
		
		$data['default']['username'] 		= $user->username;		
		$data['default']['password']		= $user->password;


		// $ID

		// $this->Kelas_model->edit_data($ID_kelas, $kelas); 

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */