
	
	<div class="row">

		<div class="col-xs-5 col-md-3">
			

			<div class="list-group">
            <a  class="list-group-item ">
              <h4 class="list-group-item-heading">Tips Tambah Tahun Ajaran</h4>
              <p class="list-group-item-text">Saat anda menambah data Tahun Ajaran yang harus anda perhatikan adalah <b>ID Tahun Ajaran</b> jangan sampai <b>sama</b></p>
            </a>
            <a  class="list-group-item">
              <h4 class="list-group-item-heading">Searching Box</h4>
              <p class="list-group-item-text">Gunakan searching box yang terdapat dipojok kanan tabel untuk pencarian auto complete pada data tahun ajaran</p>
            </a>
            <a class="list-group-item active">
              <h4 class="list-group-item-heading">Status Aktif/Tidak Aktif</h4>
              <p class="list-group-item-text"><b>Perhatikan!</b> Status merupakan hal penting yang akan anda gunakan dalam melihat <b>hasil dari analisis data</b> yang akan tampil. Baik pada Hasil analisis <b>kelas</b> dan <b>siswa</b></p>
            </a>
          </div>

          <div class="well">
			<p><i>Hasil dari analisis kelas dapat langsung di export menjadi sebuah file cetak dalam bentuk PDF</i></p>
		  </div>

		  <ul class="list-group"> <!-- list group -->		  
	  		<li class="list-group-item ">
	  			<?php foreach($badge_tahun as $bt):?>
	  			<span class="badge"><? echo $bt->thn_active; ?></span><? endforeach; ?>
	  			Tahun Ajaran Active</li>
	  		<li class="list-group-item">
	  			<?php foreach($badge_siswa as $bs):?>
	  			<span class="badge"><? echo $bs->nis; ?></span><? endforeach; ?>
	  			 Jumlah Seluruh Siswa</li> <!-- perlu ada tooltip pengisi DCM-->
	  		<li class="list-group-item">
	  			<?php foreach($badge_kelas as $bk):?>
	  			<span class="badge"><? echo $bk->kelas; ?></span><? endforeach; ?>
	  			Jumlah Seluruh Kelas</li>
	  		<li class="list-group-item active">
	  			<?php foreach($badge_jt as $bj):?>
	  			<span class="badge"><? echo $bj->tajaran; ?></span><? endforeach; ?>
	  			<font color="white">Jumlah Tahun Ajaran</font></li>	  		
		  </ul>

		</div>

		<div class="col-xs-11 col-md-9">
			
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			<span class="glyphicon glyphicon-plus-sign"></span>
			Tambah Data Tahun Ajaran</button>
			<a href="<?php echo $reload; ?>"><button type="button" class="btn btn-primary pull-right">			
			<span class=" glyphicon glyphicon-refresh"></span>
			Refresh Tahun Ajaran		
			</button></a>

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel">Tambah Tahun Ajaran</h4>
			      </div>
			      <div class="modal-body">
			        <iframe width="100%" height="400" src="<?php  echo site_url('tahun_ajaran/tambah_data');?>"  frameborder="0">    </iframe>
			      </div>
			      <div class="modal-footer">
			        <a href="<?php echo $reload; ?>"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
			        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			      </div>
			    </div>
			  </div>
			</div>

			<iframe width="100%" height="500" src="<?php  echo site_url('tahun_ajaran/dataTable');?>"  frameborder="0">    </iframe>

		</div>

	</div>