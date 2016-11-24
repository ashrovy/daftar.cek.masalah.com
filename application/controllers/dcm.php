<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dcm extends CI_Controller {

	function __construct(){
	parent::__construct();	
	$this->load->model('dcm_model');
	$this->load->helper('url');
	}

	public function soalBag1(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Kesehatan";
		$data['page']		= "Page 1 of 12"; 
		$data['progress']	= "8%";
		$data['bar']		= "progress-bar-danger";		
			$data['button']	= "btn-danger"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= 'class="active"';	$data['b']	= ' ';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process1');
			$data['soals'] 			= $this->dcm_model->getSoalBag1()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process1(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag2');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag2(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Keadaan Kehidupan Ekonomi";
		$data['page']		= "Page 2 of 12"; 
		$data['progress']	= "17%";
		$data['bar']		= "progress-bar-danger";
			$data['button']	= "btn-danger"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= 'class="active"';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process2');
			$data['soals'] 			= $this->dcm_model->getSoalBag2()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process2(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag3');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag3(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Keluarga";
		$data['page']		= "Page 3 of 12"; 
		$data['progress']	= "25%";
		$data['bar']		= "progress-bar-warning";		
			$data['button']	= "btn-warning"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= 'class="active"';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process3');
			$data['soals'] 			= $this->dcm_model->getSoalBag3()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process3(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag4');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag4(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Agama dan Moral";
		$data['page']		= "Page 4 of 12"; 
		$data['progress']	= "33%";
		$data['bar']		= "progress-bar-warning";
		
			$data['button']	= "btn-warning"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= 'class="active"';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process4');
			$data['soals'] 			= $this->dcm_model->getSoalBag4()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process4(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag5');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag5(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Pribadi";
		$data['page']		= "Page 5 of 12"; 
		$data['progress']	= "41%";
		$data['bar']		= "progress-bar-info";		
			$data['button']	= "btn-info"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= 'class="active"';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process5');
			$data['soals'] 			= $this->dcm_model->getSoalBag5()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process5(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag6');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag6(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Hubungan Sosial dan Berorganisasi";
		$data['page']		= "Page 6 of 12"; 
		$data['progress']	= "50%";
		$data['bar']		= "progress-bar-info";		
			$data['button']	= "btn-info"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= 'class="active"';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process6');
			$data['soals'] 			= $this->dcm_model->getSoalBag6()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process6(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag7');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag7(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Rekreasi/Hobi dan Waktu Luang";
		$data['page']		= "Page 7 of 12"; 
		$data['progress']	= "59%";
		$data['bar']		= "progress-bar-primary";		
			$data['button']	= "btn-primary"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= 'class="active"';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process7');
			$data['soals'] 			= $this->dcm_model->getSoalBag7()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process7(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag8');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag8(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Penyesuaian Terhadap Lingkungan Sekolah";
		$data['page']		= "Page 8 of 12"; 
		$data['progress']	= "64%";
		$data['bar']		= "progress-bar-primary";		
			$data['button']	= "btn-primary"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= 'class="active"';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process8');
			$data['soals'] 			= $this->dcm_model->getSoalBag8()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process8(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag9');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag9(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Penyesuaian Terhadap Kurikulum";
		$data['page']		= "Page 9 of 12"; 
		$data['progress']	= "72%";
		$data['bar']		= "progress-bar-primary";		
			$data['button']	= "btn-primary"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= 'class="active"';	$data['j']	= '';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process9');
			$data['soals'] 			= $this->dcm_model->getSoalBag9()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process9(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag10');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag10(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Masa Depan yang Berhubungan dengan Jabatan";
		$data['page']		= "Page 10 of 12"; 
		$data['progress']	= "80%";
		$data['bar']		= "progress-bar-success";		
			$data['button']	= "btn-success"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= 'class="active"';	$data['k']	= '';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process10');
			$data['soals'] 			= $this->dcm_model->getSoalBag10()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process10(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag11');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag11(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Kebiasaan Belajar";
		$data['page']		= "Page 11 of 12"; 
		$data['progress']	= "89%";
		$data['bar']		= "progress-bar-success";		
			$data['button']	= "btn-success"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= 'class="active"';	$data['l']	= '';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "BERIKUTNYA";
			$data['form_action'] 	= site_url('dcm/process11');
			$data['soals'] 			= $this->dcm_model->getSoalBag11()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process11(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/soalBag12');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	public function soalBag12(){
		$data['css'] 		= "";
		$data['title']		= "Daftar Pertanyaan";
		$data['subtitle']	= "Bagian Masalah Muda Mudi dan Asmara";
		$data['page']		= "Page 12 of 12 COMPLETE"; 
		$data['progress']	= "100%";
		$data['bar']		= "progress-bar-success";		
			$data['button']	= "btn-success"; // <== untuk warna tombol nanti di bagian akhir di ganti menjadi btn-success
		$data['cover']		= "rubbish/kosong";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "footer";
		$data['body'] 		= "dcm/dcm";
			$data['bg']		= "img/bg/wood_pattern.jpg"; // << img/bg/wood_pattern.jpg >> [masih ragu mau dimasukin atau tidak]

		$data['a']	= '';	$data['b']	= '';	$data['c']	= '';	$data['d']	= '';
		$data['e']	= '';	$data['f']	= '';	$data['g']	= '';	$data['h']	= '';
		$data['i']	= '';	$data['j']	= '';	$data['k']	= '';	$data['l']	= 'class="active"';

		// [SESSION]
			$nama_siswa = $this->session->userdata('nama_siswa');
			$fnama_siswa = $this->session->userdata('fnama_siswa');
			$nis = $this->session->userdata('nis');
			$sex = $this->session->userdata('sex');
			$umur = $this->session->userdata('umur');
			$kelas = $this->session->userdata('kelas');
			$sekolah = $this->session->userdata('sekolah');
			$Tgl_pelaksanaan = $this->session->userdata('Tgl_pelaksanaan');
		// [/SESSION]

		// [VIEW]
			$data['next'] 			= "SELESAI";
			$data['form_action'] 	= site_url('dcm/process12');
			$data['soals'] 			= $this->dcm_model->getSoalBag12()->result_array();	
			$data['nama_siswa'] 	= "$nama_siswa"; 		$data['fnama_siswa'] = "$fnama_siswa";
			$data['nis'] 			= "$nis"; 				$data['kelas'] = "$kelas";
			$data['sex'] 			= "$sex"; 				$data['sekolah'] = "$sekolah";
			$data['umur'] 			= "$umur"; 				$data['Tgl_pelaksanaan'] = "$Tgl_pelaksanaan";
		// [/VIEW]
		$this->load->view('template',$data);
	}

	function process12(){		
	$nis = $this->session->userdata('nis');
	$soal = $this->input->post('ID_soal');
	$jawaban = $this->input->post('jawaban');			
	$temp = array();				
    if(!empty($jawaban) && !empty($soal)) {
    foreach ($soal as $key => $val){
    	$temp[$key]['soal'] = $val;}        
    foreach ($jawaban as $key => $val){
    	$temp[$key]['jawaban'] = $val;}
	foreach($temp as $key => $val) {
		$soal = $temp[$key]['soal'];
		$jawaban = $temp[$key]['jawaban'];
		$this->dcm_model->InputJawaban($nis, $soal, $jawaban);
		}  redirect('dcm/thanks');		       		
	    } else {
	    echo 'Maaf anda harus mengisikan semua jawaban tanpa terkecuali';
		}
	}

	function thanks(){
		$data['css'] 		= "css/cover/cover.css";
		$data['title']		= "";
		$data['cover']		= "cover/thanks";
		$data['navigation'] = "rubbish/kosong";
		$data['carousel']	= "rubbish/kosong";  
		$data['thumbnail']	= "rubbish/kosong";
		$data['footer']		= "rubbish/kosong";
		$data['body'] 		= "rubbish/kosong";
			$data['bg']		= "img/bg/wood_pattern.jpg";		//<< img/bg/wood_pattern.jpg >> masih bingung mau dipakai atau tidak
		$this->load->view('template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */