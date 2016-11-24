<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Guru_model');
		$this->load->model('Tahun_ajaran_model');
		$this->load->model('Kelas_model');
		$this->load->model('Perbagian_model');
		$this->load->model('Siswa_model');
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
	public function dataGuru()
	{
		$data['css'] 		= "css/carousel/carousel.css";
		$data['title']		= "Account Setting";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "navigation";
		$data['carousel']	= "carousel";  
		$data['thumbnail']	= "thumbnail";
		$data['footer']		= "footer";		
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		$data['badge_siswa']= $this->Siswa_model->get_all_siswa()->result(); // Get data tambahan
		$data['badge_tahun']= $this->Tahun_ajaran_model->get_active_nama_tahun_ajaran()->result();
		$data['badge_kelas']= $this->Kelas_model->get_all_kelas()->result(); 	
		$data['badge_jt']	= $this->Tahun_ajaran_model->get_all_tahun_ajaran()->result();

		$data['body']		= 'account/dataGuru';
		$this->load->view('template', $data);
	}

	public function index(){
		$data['css'] 		= "";
		$data['title']		= "Account Setting";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";		
			$data['bg']		= "img/bg/wood_pattern.jpg";

		$username			= $this->session->userdata('username');		
		$data['account']	= $this->Guru_model->getUser($username)->result();
		$data['body']		= 'account/index';
		$this->load->view('template', $data);
	}

	public function edit(){
	    $data['css']        = "css/login/signin.css";
        $data['title']      = "";
        $data['cover']      = "rubbish/kosong"; 
        $data['navigation'] = "rubbish/kosong"; 
        $data['carousel']   = "rubbish/kosong"; 
        $data['thumbnail']  = "rubbish/kosong"; 
        $data['footer']     = "rubbish/kosong"; 
            $data['bg']     = "img/bg/wood_pattern.jpg";
        $data['link']       = site_url('account/index');
        $data['form_action'] = site_url('account/edit_process');

        //$username = $this->session->userdata('username');
        //$user = $this->Guru_model->select_nik($username); //something wrong
        $nik = $this->uri->segment(3);
        $user = $this->Guru_model->get_user_by_id($nik);

        $this->session->set_userdata('nik', $user->nik);
        $this->session->set_userdata('username', $user->username);

        $data['default']['username']      = $user->username;     
        $data['default']['password']      = $user->password;

        $data['body']   = "account/edit";
        $this->load->view('template',$data);
	}

	public function edit_process(){
	    $data['css']        = "css/login/signin.css";
        $data['title']      = "";
        $data['cover']      = "rubbish/kosong"; 
        $data['navigation'] = "rubbish/kosong"; 
        $data['carousel']   = "rubbish/kosong"; 
        $data['thumbnail']  = "rubbish/kosong"; 
        $data['footer']     = "rubbish/kosong"; 
            $data['bg']     = "img/bg/wood_pattern.jpg";
        $data['link']       = site_url('account/index');
        $data['form_action']= site_url('account/edit_process');

        $message_required = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Warning!</strong> Harus di isi!
                            </div>';
        $message_numeric  = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Warning!</strong> Wajib angka!
                            </div>';
        $message_max      = '<div class="alert alert-danger alert-dismissable"><!-- bisa dihilangkan -->
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Warning!</strong> Maximal character <b>10</b> digit
                            </div>';

        $this->form_validation->set_message('required',$message_required);  
        $this->form_validation->set_message('numeric', $message_numeric);
        $this->form_validation->set_message('max_length', $message_max);
        $this->form_validation->set_rules('username', 'username' , 'required|callback_valid_id2'); //PENGEDITAN MASIH GAGAL
        $this->form_validation->set_rules('password', 'password', 'requried');

        if ($this->form_validation->run() == TRUE){
            $user = array('username' => $this->input->post('username'),
                          'password' => $this->input->post('password')
                           ); 
            $this->Guru_model->edit($this->session->userdata('nik'), $user);         
            $flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
                      <button type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Satu data account berhasil di edit!
                      </div>';
            $this->session->set_flashdata('message',$flash);
            $this->session->set_userdata('username',$this->input->post('username'));
            redirect('account/index');
        } 
        else{
            $data['body']   = "account/edit";
            $this->load->view('template',$data);
        }
	}

	function valid_id($username)
    {
        if ($this->Guru_model->valid_id($username) == TRUE)
        {
            $this->form_validation->set_message('valid_id', "user dengan nama $username sudah ada");
            return FALSE;
        }
        else
        {           
            return TRUE;
        }
    }
    
    /**
     * Cek apakah $id_kelas valid, agar tidak ganda. Hanya untuk proses update data kelas
     */
    function valid_id2()
    {
        // cek apakah data tanggal pada session sama dengan isi field
        // tidak mungkin seorang siswa diabsen 2 kali pada tanggal yang sama
        $current_id     = $this->session->userdata('username');
        $new_id         = $this->input->post('username');
                
        if ($new_id === $current_id)
        { return TRUE; }
        else{
            if($this->Guru_model->valid_id($new_id) === TRUE) // cek database untuk entry yang sama memakai valid_entry()
            {   $this->form_validation->set_message('valid_id2', "user dengan nama $new_id sudah ada");
                return FALSE;
            } else{
                return TRUE;    
            }
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */