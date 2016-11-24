

<form class="form-signin" role="form" method="post" action="<?php echo $form_action; ?>" >
  <h2 class="form-signin-heading">Edit Data
	  <a class="btn btn-primary pull-right" href="<? echo $link; ?>"> 
	  <span class="glyphicon glyphicon-circle-arrow-left"></span>	
	  Kembali</a>
  </h2><hr/>
  
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('username'); ?>
  <input class="form-control" type="text" name='username' value="<?php echo set_value('username', isset($default['username']) ? $default['username'] : ''); ?>" required autofocus>
  <input type="text" class="form-control" name='password' value="<?php echo set_value('password', isset($default['password']) ? $default['password'] : ''); ?>" required>
  <hr/>
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-edit"></span>
  Edit Data</button>
</form>      