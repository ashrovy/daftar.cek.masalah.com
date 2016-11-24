

<form class="form-signin" role="form" method="post" action="<?php echo $form_action; ?>" >
  <h2 class="form-signin-heading">Edit Data
	  <a class="btn btn-primary pull-right" href="<? echo $link; ?>"> 
	  <span class="glyphicon glyphicon-circle-arrow-left"></span>	
	  Kembali</a>
  </h2><hr/>
  
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('ID_kelas'); ?>
  <input class="form-control" type="text" name='ID_kelas' value="<?php echo set_value('ID_kelas', isset($default['ID_kelas']) ? $default['ID_kelas'] : ''); ?>" required autofocus>
  <input type="text" class="form-control" name='nama_kelas' value="<?php echo set_value('nama_kelas', isset($default['nama_kelas']) ? $default['nama_kelas'] : ''); ?>" required>
  <hr/>
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-edit"></span>
  Edit Data</button>
</form>      