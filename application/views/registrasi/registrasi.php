<div class="page-header">
  <h1>Sistem Informasi Daftar Cek Masalah Siswa <small></small></h1>
</div>
  
<form class="form-signin" method="post" action="<?php echo $form_action; ?>" role="form" >
<div class="well" style="background:none;border-line:5;" >
  <h2 class="form-signin-heading">Input Your Data</h2><hr size="4" />
	<?php echo form_error('nis'); ?>
	<?php echo form_error('nama_siswa'); ?> 
  <div class="form-group">
	  <label for="nis">Nomor Induk Siswa</label>
	  <input type="text" name="nis" class="form-control" placeholder="Nomor Induk Siswa (Ex: 440426)" required autofocus>
  </div>
  <div class="form-group tooltips">
	  <label for="nama">Nama Anda</label>
	  <input type="text" name="fnama_siswa" class="form-control" placeholder="Nama Depan & Tengah" data-toggle="tooltip" data-placement="bottom" data-original-title="(Contoh: Lyla Ananda)" autofocus >
	  <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Belakang " data-toggle="tooltip" data-placement="bottom" data-original-title="(Contoh: Aditya)" required autofocus>
	  <input type="text" name="pnama_siswa" class="form-control" placeholder="Nama Panggilan" data-toggle="tooltip" data-placement="bottom" data-original-title="(Contoh: Nanda)" autofocus>
  </div>

  <div class="form-group">
	  <label for="sex">Jenis Kelamin</label>
	  <br/>
	  <div class="row">
	  	<div class="col-md-6">
		  <input type="radio" id="r1" name="sex" value="L">
		  <label for="r1">Laki - Laki</label>
		</div>
	  	<div class="col-md-6">
		  <input type="radio" id="r2" name="sex" value="P"/>
		  <label for="r2">Perempuan</label>      
		</div>
	  </div>
   </div>
  
  <div class="form-group">
	  <label for="umur">Umur</label>
	  <div class="input-group">
	  <input type="text" name="umur" class="form-control" placeholder="Maksimal 2 Digit" data-toggle="tooltip" data-placement="top" data-original-title="Harus Angka" required autofocus>
	  <span class="input-group-addon">tahun</span>
	  </div>
  </div>

  <div class="form-group">
	  	<label for="kelas">Pilih Kelas</label>
	  	<?php echo form_dropdown('kelas', $kelas); ?>	  	
  </div>

  <div class="form-group">
  		<label for="kelas">Pilih Sekolah</label>
  		<?php
  		$options = array(
  				  //'name'	=> 'sekolah',
                  'class'	=> 'dropdown-menu',
                  'role'	=> 'menu'
                );
  		 ?>
  		<?php echo form_dropdown('sekolah', $sekolah); ?>
  </div>
  
  <div class="form-group">
  		<label for="kelas">Tahun ajaran</label>
  		<?php echo form_dropdown('tahun_ajaran', $tahun_ajaran); ?>
  </div> 
  
  <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" >Register</button>
</div>    
</form>      


