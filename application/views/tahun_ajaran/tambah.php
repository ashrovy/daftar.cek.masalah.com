
<form class="form-signin" method="post" action="<?php echo $form_action; ?>" role="form" >
  <h2 class="form-signin-heading"></h2>
  <div class="form-group">
  <label for="status">Input Data</label>  
  <? echo $this->session->flashdata('message');?>
  <?php echo form_error('ID_tahun_ajaran'); ?>
  <input type="text" class="form-control" name="ID_tahun_ajaran" placeholder="ID Tahun Ajaran" data-toggle="tooltip" title="Contoh ID : 01, 02, 03" required autofocus>
  <?php echo form_error('nama_tahun_ajaran'); ?>
  <input type="text" class="form-control" name="nama_tahun_ajaran" placeholder="Nama Tahun Ajaran" required>
  </div>
  <!-- <div class="form-group pull-right">
  	  <label for="status">Pilih Status</label><br/>
	  <div class="btn-group" data-toggle="buttons">
  		<label class="btn btn-primary btn-lg">
    	<input type="radio" name="status" value="1" id="option1"> Aktif
  		</label>
  		<label class="btn btn-danger btn-lg">
    	<input type="radio" name="status" value="0" id="option2"> <strike>Aktif</strike>
  		</label>  
	  </div>
  </div> -->
  <button class="btn btn-lg btn-success btn-block" type="submit">
  <span class="glyphicon glyphicon-plus-sign"></span>
  Tambah</button>
</form>      

<? //echo $flashmessage; ?>
   