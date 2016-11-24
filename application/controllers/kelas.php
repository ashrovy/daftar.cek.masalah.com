<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->model('Siswa_model');
	$this->load->model('Tahun_ajaran_model');
	$this->load->model('Kelas_model');
    $this->load->model('Soal_model');
    $this->load->model('Perbagian_model');
    $this->load->helper(array('dompdf', 'file'));
	}

	public function dataKelas()
	{
		$data['css'] 		= "css/carousel/carousel.css";
		$data['title']		= "Olah Data Kelas";
		$data['cover']		= "rubbish/kosong"; 
		$data['navigation'] = "navigation"; 
		$data['carousel']	= "construct/carousel"; 
		$data['thumbnail']	= "construct/thumbnail"; 
		$data['footer']		= "footer";	
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]
		
		$data['link_tambahKelas'] 	= site_url('kelas/tambah'); // <== belum ada

		$data['badge_siswa']= $this->Siswa_model->get_all_siswa()->result(); // Get data tambahan
		$data['badge_tahun']= $this->Tahun_ajaran_model->get_active_nama_tahun_ajaran()->result();
		$data['badge_kelas']= $this->Kelas_model->get_all_kelas()->result(); 	
		$data['badge_jt']	= $this->Tahun_ajaran_model->get_all_tahun_ajaran()->result();
		
        $data['bagian_1']   = $this->Soal_model->get_all_soal_bagian1()->result();
        $data['bagian_2']   = $this->Soal_model->get_all_soal_bagian2()->result();
        $data['bagian_3']   = $this->Soal_model->get_all_soal_bagian3()->result();
        $data['bagian_4']   = $this->Soal_model->get_all_soal_bagian4()->result();
        $data['bagian_5']   = $this->Soal_model->get_all_soal_bagian5()->result();
        $data['bagian_6']   = $this->Soal_model->get_all_soal_bagian6()->result();
        $data['bagian_7']   = $this->Soal_model->get_all_soal_bagian7()->result();
        $data['bagian_8']   = $this->Soal_model->get_all_soal_bagian8()->result();
        $data['bagian_9']   = $this->Soal_model->get_all_soal_bagian9()->result();
        $data['bagian_10']  = $this->Soal_model->get_all_soal_bagian10()->result();
        $data['bagian_11']  = $this->Soal_model->get_all_soal_bagian11()->result();
        $data['bagian_12']  = $this->Soal_model->get_all_soal_bagian12()->result();
        
		$data['body'] 		= "kelas/dataKelas";
		$this->load->view('template',$data);
	}

	public function dataTable(){
		$data['query'] 				= $this->Kelas_model->dataKelas()->result();
		$this->load->view('kelas/dataTable', $data);
	}

	public function tambah_data(){ //pemberitahuan data sukses masih gagal
		$data['css'] 		= "css/login/signin.css";
		$data['title']		= "Tambah Data Kelas";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		


		$data['link_kembali'] = site_url('kelas/dataKelas');
		$data['form_action']= site_url('kelas/tambah_data');
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

		$this->form_validation->set_rules('ID_kelas','ID_kelas','required|numeric|max_length[10]|callback_valid_id');
		$this->form_validation->set_rules('nama_kelas','nama_kelas','required');

		$ID_kelas 	= $this->input->post('ID_kelas');
		$nama_kelas = $this->input->post('nama_kelas');

		if ($this->form_validation->run() == FALSE){
			$data['body'] 		= "kelas/tambah";
			$this->load->view('template',$data);
		} else {
			$this->Kelas_model->tambah_data($ID_kelas,$nama_kelas);
			$flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
    				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    				 <strong>Proses Berhasil!</strong> Data ditambah!
  					 </div>';
			$this->session->set_flashdata('message', $flash);
			redirect('kelas/tambah_data');
		}		
	}

	function delete($ID_kelas)
	{
		$this->Kelas_model->delete($ID_kelas);
		$this->session->set_flashdata('message', '<font color="red">1 data kelas berhasil dihapus</font>');
		$flash = '<div class="alert alert-success alert-danger"><!-- bisa dihilangkan -->
    			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    			  <strong>Proses Berhasil!</strong> Data <b>didelete!</b>
  				  </div>';
  		$this->session->set_flashdata('message', $flash);
		redirect('kelas/dataTable');
	}

	public function dcmKelas($ID_kelas){
		$data['css'] 		= "";
		$data['title']		= "";
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
			$data['bg']		= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dataTable');

		// $ID_kelas = $this->uri->segment(3); // belum kelihatan gunanya
		$kelas = $this->Kelas_model->get_kelas_by_id($ID_kelas);
		//$this->session->set_userdata('ID_kelas', $ID_kelas);

		$ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); //bismillah	
		foreach ($ID_tahun_ajaran as $thn) {
		$tahun = $thn->thn;
		$data['query'] = $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();
		$data['queri'] = $this->Kelas_model->identitasKelas($ID_kelas, $tahun)->result();
		}
		$data['body']		= "kelas/dcmKelas";
		$this->load->view('template',$data);
	}

    function download($ID_kelas){
        $filename= "Hasil Analisis DCM Kelompok " ;
        
        $kelas = $this->Kelas_model->get_kelas_by_id($ID_kelas);
        $ID_tahun_ajaran    = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun              = $thn->thn;
        $data['query'] = $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();
        $data['queri'] = $this->Kelas_model->identitasKelas($ID_kelas, $tahun)->result();
        }
        
        $html = $this->load->view('kelas/download', $data, true);
        pdf_create($html, $filename);
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
        $data['link']       = site_url('kelas/dataTable');
        $data['form_action'] = site_url('kelas/edit_process');

        $ID_kelas = $this->uri->segment(3);
        $kelas = $this->Kelas_model->get_kelas_by_id($ID_kelas);

        $this->session->set_userdata('ID_kelas', $kelas->ID_kelas);

        $data['default']['ID_kelas']        = $kelas->ID_kelas;     
        $data['default']['nama_kelas']      = $kelas->nama_kelas;

        $data['body']   = "kelas/edit";
        $this->load->view('template',$data);
    }

    function edit_process(){
        $data['css']        = "css/login/signin.css";
        $data['title']      = "";
        $data['cover']      = "rubbish/kosong"; 
        $data['navigation'] = "rubbish/kosong"; 
        $data['carousel']   = "rubbish/kosong"; 
        $data['thumbnail']  = "rubbish/kosong"; 
        $data['footer']     = "rubbish/kosong"; 
            $data['bg']     = "img/bg/wood_pattern.jpg";
        $data['link']       = site_url('kelas/dataTable');
        $data['form_action']= site_url('kelas/edit_process');

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
        $this->form_validation->set_rules('ID_kelas', 'ID_kelas' , 'required|numeric|max_length[10]|callback_valid_id2'); //PENGEDITAN MASIH GAGAL
        $this->form_validation->set_rules('kelas', 'nama_kelas', 'requried|max_length[20]');

        if ($this->form_validation->run() == TRUE){
            $kelas = array('ID_kelas'  => $this->input->post('ID_kelas'),
                           'nama_kelas'=> $this->input->post('nama_kelas')
                           ); 
            $this->Kelas_model->edit($this->session->userdata('ID_kelas'), $kelas);         
            $flash = '<div class="alert alert-success alert-dismissable"><!-- bisa dihilangkan -->
                      <button type="button" class="close pull-right" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Satu data kelas berhasil di edit!
                      </div>';
            $this->session->set_flashdata('message',$flash);
            redirect('kelas/dataTable');
        } 
        else{
            $data['body']   = "kelas/edit";
            $this->load->view('template',$data);
        }
    }    

    function valid_id($id_kelas)
    {
        if ($this->Kelas_model->valid_id($id_kelas) == TRUE)
        {
            $this->form_validation->set_message('valid_id', "kelas dengan Kode $id_kelas sudah terdaftar");
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
        $current_id     = $this->session->userdata('id_kelas');
        $new_id         = $this->input->post('id_kelas');
                
        if ($new_id === $current_id)
        { return TRUE; }
        else{
            if($this->Kelas_model->valid_id($new_id) === TRUE) // cek database untuk entry yang sama memakai valid_entry()
            {   $this->form_validation->set_message('valid_id2', "Kelas dengan kode $new_id sudah terdaftar");
                return FALSE;
            } else{
                return TRUE;    
            }
        }
    }

	// [CHART]
	public function chartBag1($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');
        $data['subtitle']   = 'Masalah Kesehatan';

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun = $thn->thn;
        $dt 			= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result(); 
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result(); 
        }
        $category = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20',
        					'21','22','23','24','25','26');          
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
            $dt[0]->h12,
            $dt[0]->h13,
            $dt[0]->h14,
            $dt[0]->h15,
            $dt[0]->h16,
            $dt[0]->h17,
            $dt[0]->h18,
            $dt[0]->h19,
            $dt[0]->h20,
            $dt[0]->h21,
            $dt[0]->h22,
            $dt[0]->h23,
            $dt[0]->h24,
            $dt[0]->h25,
            $dt[0]->h26
            ); 
        //print_r($series);
        $data['cat'] = $category;
        $data['series'] = $series;

        $this->load->view('kelas/chart/Bag1', $data);
        //$this->load->view('kelas/dcmChart', $data);
	}

	public function chartBag2($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();   
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();       
        }
        $category = array('27','28','29','30','31','32','33','34','35','36','37','38','39','40',
        					'41','42','43','44','45','46');          
        $series = array(           
            $dt[0]->h27,
            $dt[0]->h28,
            $dt[0]->h29,
            $dt[0]->h30,
            $dt[0]->h31,
            $dt[0]->h32,
            $dt[0]->h33,
            $dt[0]->h34,
            $dt[0]->h35,
            $dt[0]->h36,
            $dt[0]->h37,
            $dt[0]->h38,
            $dt[0]->h39,
            $dt[0]->h40,
            $dt[0]->h41,
            $dt[0]->h42,
            $dt[0]->h43,
            $dt[0]->h44,
            $dt[0]->h45,
            $dt[0]->h46
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag2', $data);
	}

	public function chartBag3($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        }
        $category = array('47','48','49','50','51','52','53','54','55','56','57','58','59','60',
        					'61','62','63','64','65','66');          
        $series = array(  
            $dt[0]->h47,
            $dt[0]->h48,
            $dt[0]->h49,
            $dt[0]->h50,
            $dt[0]->h51,
            $dt[0]->h52,
            $dt[0]->h53,
            $dt[0]->h54,
            $dt[0]->h55,
            $dt[0]->h56,
            $dt[0]->h57,
            $dt[0]->h58,
            $dt[0]->h59,
            $dt[0]->h60,
            $dt[0]->h61,
            $dt[0]->h62,
            $dt[0]->h63,
            $dt[0]->h64,
            $dt[0]->h65,
            $dt[0]->h66            
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag3', $data);
	}

	public function chartBag4($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();      
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();    
        }
        $category = array('67','68','69','70','71','72','73','74','75','76','77','78','79','80',
        					'81','82','83','84','85','86','87','88','89','90');          
        $series = array(  
            $dt[0]->h67,
            $dt[0]->h68,
            $dt[0]->h69,
            $dt[0]->h70,
            $dt[0]->h71,
            $dt[0]->h72,
            $dt[0]->h73, 
            $dt[0]->h74,
            $dt[0]->h75,
            $dt[0]->h76,
            $dt[0]->h77,
            $dt[0]->h78,
            $dt[0]->h79,
            $dt[0]->h80,
            $dt[0]->h81,
            $dt[0]->h82,
            $dt[0]->h83,
            $dt[0]->h84,
            $dt[0]->h85,
            $dt[0]->h86,
            $dt[0]->h87,
            $dt[0]->h88,
            $dt[0]->h89,
            $dt[0]->h90
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag4', $data);
	}

	public function chartBag5($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();       
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();   
        }
        $category = array('91','92','93','94','95','96','97','98','99','100',
        					'100','101','102','103','104');          
        $series = array(  
            $dt[0]->h91,
            $dt[0]->h92,
            $dt[0]->h93,
            $dt[0]->h94,
            $dt[0]->h95,
            $dt[0]->h96,
            $dt[0]->h97,
            $dt[0]->h98,
            $dt[0]->h99,
            $dt[0]->h100,
            $dt[0]->h101,
            $dt[0]->h102,
            $dt[0]->h103,
            $dt[0]->h104
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag5', $data);
	}

	public function chartBag6($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();       
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();   
        }
        $category = array('105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120',
        					'121','122','123','124','125','126','127','128','129','130');          
        $series = array(  
            $dt[0]->h105,
            $dt[0]->h106,
            $dt[0]->h107,
            $dt[0]->h108,
            $dt[0]->h109,
            $dt[0]->h110,
            $dt[0]->h111,
            $dt[0]->h112,
            $dt[0]->h113,
            $dt[0]->h114,
            $dt[0]->h115,
            $dt[0]->h116,
            $dt[0]->h117,
            $dt[0]->h118,
            $dt[0]->h119,
            $dt[0]->h120,
            $dt[0]->h121,
            $dt[0]->h122,
            $dt[0]->h123,
            $dt[0]->h124,
            $dt[0]->h125,
            $dt[0]->h126,
            $dt[0]->h127,
            $dt[0]->h128,
            $dt[0]->h129,
            $dt[0]->h130            
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag6', $data);
	}

	public function chartBag7($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        }
        $category = array('131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146',
        					'147','148','149');          
        $series = array(  
            $dt[0]->h131,
            $dt[0]->h132,
            $dt[0]->h133,
            $dt[0]->h134,
            $dt[0]->h135,
            $dt[0]->h136,
            $dt[0]->h137,
            $dt[0]->h138,
            $dt[0]->h139,
            $dt[0]->h140,
            $dt[0]->h141,
            $dt[0]->h142,
            $dt[0]->h143,
            $dt[0]->h145,
            $dt[0]->h146,
            $dt[0]->h147,
            $dt[0]->h148,
            $dt[0]->h149           
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag7', $data);
	}

	public function chartBag8($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        }
        $category = array('150','151','152','153','154','155','156','157','158','159','160','161','162','163','164','165',
        					'166','167','168','169','170');          
        $series = array(  
            $dt[0]->h150,
            $dt[0]->h151,
            $dt[0]->h152,
            $dt[0]->h153,
            $dt[0]->h154,
            $dt[0]->h155,
            $dt[0]->h156,
            $dt[0]->h157,
            $dt[0]->h158,
            $dt[0]->h159,
            $dt[0]->h160,
            $dt[0]->h161,
            $dt[0]->h162,
            $dt[0]->h163,
            $dt[0]->h164,
            $dt[0]->h165,
            $dt[0]->h166,
            $dt[0]->h167,
            $dt[0]->h168,
            $dt[0]->h169,
            $dt[0]->h170           
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag8', $data);
	}

	public function chartBag9($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        }
        $category = array('171','172','173','174','175','176','177','178','179','180','181','182','183','184','185');          
        $series = array(  
            $dt[0]->h171,
            $dt[0]->h172,
            $dt[0]->h173,
            $dt[0]->h174,
            $dt[0]->h175,
            $dt[0]->h176,
            $dt[0]->h177,
            $dt[0]->h178,
            $dt[0]->h179,
            $dt[0]->h180,
            $dt[0]->h181,
            $dt[0]->h182,
            $dt[0]->h183,
            $dt[0]->h184,
            $dt[0]->h185           
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag9', $data);
	}

	public function chartBag10($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();          
        }
        $category = array('186','187','188','189','190','191','192','193','194','195','196');          
        $series = array(  
            $dt[0]->h186,
            $dt[0]->h187,
            $dt[0]->h188,
            $dt[0]->h189,
            $dt[0]->h190,
            $dt[0]->h191,
            $dt[0]->h192,
            $dt[0]->h193,
            $dt[0]->h194,
            $dt[0]->h195,
            $dt[0]->h196            
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag10', $data);
	}

	public function chartBag11($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();    
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();      
        }
        $category = array('197','198','199','200','201','202','203','204','205','206','207','208','209','210','211');          
        $series = array(  
            $dt[0]->h197,
            $dt[0]->h198,
            $dt[0]->h199,
            $dt[0]->h200,
            $dt[0]->h201,
            $dt[0]->h202,
            $dt[0]->h203,
            $dt[0]->h204,
            $dt[0]->h205,
            $dt[0]->h206,
            $dt[0]->h207,
            $dt[0]->h208,
            $dt[0]->h209,
            $dt[0]->h210,
            $dt[0]->h211           
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag11', $data);
	}

	public function chartBag12($ID_kelas){
		$data['bg']			= "img/bg/wood_pattern.jpg";
		$data['link']		= site_url('kelas/dcmKelas');

		$ID_kelas = $this->uri->segment(3);
			
        $ID_tahun_ajaran = $this->Tahun_ajaran_model->get_active_tahun_ajaran()->result(); 
        foreach ($ID_tahun_ajaran as $thn) {
        $tahun 	= $thn->thn;
        $dt 	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        $data['ket']  	= $this->Kelas_model->dcmKelas($ID_kelas, $tahun)->result();     
        }
        $category = array('212','213','214','215','216','217','218','219','220','221','222','223','224','225','226','227',
        					'228','229','230','231');          
        $series = array(  
            $dt[0]->h212,
            $dt[0]->h213,
            $dt[0]->h214,
            $dt[0]->h215,
            $dt[0]->h216,
            $dt[0]->h217,
            $dt[0]->h218,
            $dt[0]->h219,
            $dt[0]->h220,
            $dt[0]->h221,
            $dt[0]->h222,
            $dt[0]->h223,
            $dt[0]->h224,
            $dt[0]->h225,
            $dt[0]->h226,
            $dt[0]->h227,
            $dt[0]->h228,
            $dt[0]->h229,
            $dt[0]->h230,
            $dt[0]->h231           
            ); 
        
        $data['cat'] = $category;
        $data['series'] = $series;
        $this->load->view('kelas/chart/Bag12', $data);
	}



}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */