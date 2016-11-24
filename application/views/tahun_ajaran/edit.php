

<form class="form-signin" role="form" method="post" action="<?php echo $form_action; ?>" >
  <h2 class="form-signin-heading">Edit Data
	  <a class="btn btn-primary pull-right" href="<? echo $link; ?>"> 
	  <span class="glyphicon glyphicon-circle-arrow-left"></span>	
	  Kembali</a>
  </h2><hr/>
  
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('ID_tahun_ajaran'); ?>
  <input class="form-control" type="text" name='ID_tahun_ajaran' value="<?php echo set_value('ID_tahun_ajaran', isset($default['ID_tahun_ajaran']) ? $default['ID_tahun_ajaran'] : ''); ?>" required autofocus>
  <input type="text" class="form-control" name='nama_tahun_ajaran' value="<?php echo set_value('nama_tahun_ajaran', isset($default['nama_tahun_ajaran']) ? $default['nama_tahun_ajaran'] : ''); ?>" required>
  <hr/>
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-edit"></span>
  Edit Data</button>
</form>      