
<form class="form-signin" method="post" action="<?php echo $form_action; ?>" role="form" >
  <h2 class="form-signin-heading"></h2>
  <div class="form-group">
  <label for="status">Input Data</label>  
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('ID_kelas'); ?>
  <input type="text" class="form-control" name="ID_kelas" placeholder="ID Kelas" data-toggle="tooltip" title="Contoh ID : 01, 02, 03" required autofocus>
  <?php echo form_error('nama_kelas'); ?>
  <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" required>
  </div>  
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-plus-sign"></span>
  Tambah</button>
</form>      

<? //echo $flashmessage; ?>
   