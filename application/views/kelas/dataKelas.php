	
	<div class="row">

		<div class="col-xs-5 col-md-3">
			
			

			<div class="list-group">
            <a data-toggle="modal" data-target="#myModal" href="#myModal" class="list-group-item">
              <h4 class="list-group-item-heading">Tips Tambah Data Kelas</h4>
              <p class="list-group-item-text">Saat anda menambah data kelas yang harus anda perhatikan adalah <b>ID Kelas</b> jangan sampai <b>sama</b></p>
            </a>
            <a  class="list-group-item active">
              <h4 class="list-group-item-heading">Integrasi Data</h4>
              <p class="list-group-item-text"><b>Ingat!</b> analisis dan grafik hasilnya dipengaruhi oleh <b>Tahun Ajaran</b> yang <b>aktif</b> saat ini</p>
            </a>
            <a href="#collapseThree" data-toggle="collapse" class="list-group-item">
              <h4 class="list-group-item-heading">Daftar Soal</h4>
              <p class="list-group-item-text">Berikut dibawah ini adalah daftar bagian yang berisi pertanyaan:</p>              
            </a>
          </div>

              	<ul class="list-group"> <!-- list group -->
              		<li  class="list-group-item">
              			<a href="#collapse1" data-toggle="collapse">Bagian Kesehatan</a>
              			<div id="collapse1" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_1 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse2" data-toggle="collapse">Bagian Ekonomi</a>
              			<div id="collapse2" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_2 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse3" data-toggle="collapse">Bagian Keluarga</a>              			
              			<div id="collapse3" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_3 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse4" data-toggle="collapse">Bagian Agama</a>              			
              			<div id="collapse4" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_4 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse5" data-toggle="collapse">Bagian Pribadi</a>              			
              			<div id="collapse5" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_5 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse6" data-toggle="collapse">Bagian Sosial</a>              			
              			<div id="collapse6" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_6 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse7" data-toggle="collapse">Bagian Hobi</a>              			
              			<div id="collapse7" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_7 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse8" data-toggle="collapse">Bagian Lingkungan</a>              			
              			<div id="collapse8" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_8 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse9" data-toggle="collapse">Bagian Kurikulum</a>              			
              			<div id="collapse9" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_9 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse10" data-toggle="collapse">Bagian Masa Depan</a>              			
              			<div id="collapse10" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_10 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse11" data-toggle="collapse">Bagian Belajar</a>              			
              			<div id="collapse11" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_11 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              		<li  class="list-group-item">
              			<a href="#collapse12" data-toggle="collapse">Bagian Asmara</a>              			
              			<div id="collapse12" class="panel-collapse collapse">
              				<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>							  	
							  </tr>
							  <?php foreach ($bagian_12 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
              			</div>
              		</li>
              	</ul>
              

          <!-- <div class="well">
			<p><i>Hasil dari analisis kelas dapat langsung di export menjadi sebuah file cetak dalam bentuk PDF</i></p>
		  </div> -->

		  <ul class="list-group"> <!-- list group -->		  
	  		<li class="list-group-item ">
	  			<?php foreach($badge_tahun as $bt):?>
	  			<span class="badge"><? echo $bt->thn_active; ?></span><? endforeach; ?>
	  			Tahun Ajaran Active</li>
	  		<li class="list-group-item">
	  			<?php foreach($badge_siswa as $bs):?>
	  			<span class="badge"><? echo $bs->nis; ?></span><? endforeach; ?>
	  			 Jumlah Seluruh Siswa</li> <!-- perlu ada tooltip pengisi DCM-->
	  		<li class="list-group-item active">
	  			<?php foreach($badge_kelas as $bk):?>
	  			<span class="badge"><? echo $bk->kelas; ?></span><? endforeach; ?>
	  			<font color="white">Jumlah Seluruh Kelas</font></li>
	  		<li class="list-group-item">
	  			<?php foreach($badge_jt as $bj):?>
	  			<span class="badge"><? echo $bj->tajaran; ?></span><? endforeach; ?>
	  			Jumlah Tahun Ajaran</li>	  		
		  </ul>

		</div>

		<div class="col-xs-11 col-md-9">
			
			<?php foreach($badge_tahun as $nama_tahun): ?>
			<div class="alert alert-info">Info: Untuk tahun ajaran yang aktif pada sistem saat ini adalah <b><? echo $nama_tahun->thn_active; ?></b>.		
			</div><? endforeach; ?>
			<?php echo $this->session->flashdata('message');; ?>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			<span class="glyphicon glyphicon-plus-sign"></span>
			Tambah Data Kelas</button>
			<a class="btn btn-primary pull-right" href="<? echo site_url('kelas/dataKelas');?>">
				<span class="glyphicon glyphicon-refresh"></span>
				Refresh Data Kelas</a>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
			      </div>
			      <div class="modal-body">
			        <iframe  frameborder="0" width="100%" height="400" src="<?php  echo site_url('kelas/tambah_data');?>" >    </iframe>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
			        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			      </div>
			    </div>
			  </div>
			</div>
			<iframe width="100%" height="875" src="<?php  echo site_url('kelas/dataTable');?>"  frameborder="0">    </iframe>

		</div>

	</div>