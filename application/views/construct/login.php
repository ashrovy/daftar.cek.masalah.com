<div class="page-header">
  <h1>Sistem Informasi Daftar Cek Masalah Siswa<small></small></h1>
</div>
  
<form class="form-signin" role="form" method="post" action="<?php echo $form_action; ?>" >
  <h2 class="form-signin-heading">Please sign in</h2>
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('username'); ?>
  <input name="username" type="text" class="form-control" placeholder="Username"  required autofocus>
  <input name="password" type="password" class="form-control" placeholder="Password" required autofocus>
  <label class="checkbox">
  <input type="checkbox" value="remember-me"> Remember me
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>      
    

