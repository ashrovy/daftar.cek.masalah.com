
<form role="form" data-toggle="validator">
  
  <div class="form-group">
  	<label for="inputNik">NIK :</label>
  	<input type="text" id="inputNik" placeholder="Nomor Induk Karyawan" required autofocus>
  	<div class="help-block with-errors"></div>
  </div>

  <div class="form-group">
    <label for="inputEmail">Username:</label>
    <input type="text" id="inputEmail" placeholder="username" required>
    <div class="help-block with-errors"></div>
    <label for="inputPassword">Password:</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="password" data-minlength="6" data-error="minimal 6 " required>
    <input type="password" class="form-control" data-match="#inputPassword" placeholder="confirm password" data-match-error="Whoops, these don't match" required>
    <div class="help-block with-errors"></div>
  </div>

  <div class="form-group">
  	<label for="inputFNama">Nama:</label>
  	<input type="text" id="inputNama" placeholder="Nama Depan & Nama Tengah">
  	<input type="text" id="inputNama" placeholder="Nama Belakang" required autofocus>
  </div>

  <div class="form-group">
  	<label for="sex">Jenis Kelamin:</label>
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
  	<label for="umur">Umur:</label>
  	<input type="text" id="umur" placeholder="umur" />
  	<span class="input-group-addon">tahun</span>
  </div>

</form>