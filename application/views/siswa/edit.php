

<form class="form-signin" role="form" method="post" action="<?php echo $form_action; ?>" >
  <h2 class="form-signin-heading">Edit Data
	  <a class="btn btn-primary pull-right" href="<? echo $link; ?>"> 
	  <span class="glyphicon glyphicon-circle-arrow-left"></span>	
	  Kembali</a>
  </h2><hr/>
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('nis'); ?>
  <label >Nomor Induk Siswa:</label>
  <input class="form-control" type="text" name='nis' value="<?php echo set_value('nis', isset($default['nis']) ? $default['nis'] : ''); ?>" required autofocus>
  <label >Nama Siswa:</label>
  <input type="text" class="form-control" name='fnama_siswa' value="<?php echo set_value('fnama_siswa', isset($default['fnama_siswa']) ? $default['fnama_siswa'] : ''); ?>" >
  <input type="text" class="form-control" name='nama_siswa' value="<?php echo set_value('nama_siswa', isset($default['nama_siswa']) ? $default['nama_siswa'] : ''); ?>" required>
  <label >Panggilan Siswa:</label>
  <input type="text" class="form-control" name='pnama_siswa' value="<?php echo set_value('pnama_siswa', isset($default['pnama_siswa']) ? $default['pnama_siswa'] : ''); ?>" required>
  <label >Umur:</label>
  <input type="text" class="form-control" name='umur' value="<?php echo set_value('umur', isset($default['umur']) ? $default['umur'] : ''); ?>" required>
  <hr/>
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-edit"></span>
  Edit Data</button>
</form>      