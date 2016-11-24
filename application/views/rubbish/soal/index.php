	
	<div class="row">

		<div class="col-xs-5 col-md-3">
			<div class="list-group">
            <a  class="list-group-item active">
              <h4 class="list-group-item-heading">Absolute</h4>
              <p class="list-group-item-text">Soal yang ditampilkan di siswa bersifat mutlak dan tidak dapat diedit.</p>
            </a>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="list-group-item">
              <h4 class="list-group-item-heading"><strike>Tambah</strike> / <strike>Edit</strike> / <strike>Delete</strike>  </h4>
              <p class="list-group-item-text">Data soal tidak dapat di edit delete dan ditambah</p>
              	<div id="collapseTwo" class="panel-collapse collapse">
              	<ul class="list-group"> <!-- list group -->
              		<li class="list-group-item"><font size="">Penambahan data harus melalui tahap verifikasi para ahli dan orang-orang yang berkompeten di bidang nya sehingga tidak sembarang orang bisa menambahkannya.</font></li>				  	
				</ul>
              	</div>
            </a>
            <a data-toggle="collapse" href="#collapseThree" class="list-group-item">
              <h4 class="list-group-item-heading">12 Bagian DCM</h4>
              <p class="list-group-item-text">Berikut list 12 bagian Daftar Cek Masalah Siswa:</p>
              	<div id="collapseThree" class="panel-collapse collapse">
              	<ul class="list-group"> <!-- list group -->
              		<ul class="list-group"> <!-- list group -->
              		<? foreach($bagian as $part): ?>
				  	<li class="list-group-item"><font size=""><?php echo $part->bagian; ?></font></li>				  	
					<? endforeach; ?>
				</ul>
				</div>
            </a>
          </div>

          <ul class="list-group">
          	<font color="white">
          	<li class="list-group-item active">
	          	<?php foreach ($badge_bag as $key => $value) { ?>
	          	<span class="badge"><? echo $value->bagian; ?></span>	
	          	<?php } ?>          	
	          	Jumlah Bagian
          	</li>
          	<li class="list-group-item active">
          		<?php foreach ($badge_soal as $key => $value) { ?>
          		<span class="badge"><? echo $value->soal; ?></span>
          		<?php } ?>          	
          		Jumlah soal
          	</li>
          </font>
          </ul>


		  <ul class="list-group"> <!-- list group -->		  
	  		<li class="list-group-item ">
	  			<?php foreach($badge_tahun as $bt):?>
	  			<span class="badge"><? echo $bt->thn_active; ?></span><? endforeach; ?>
	  			Tahun Ajaran Active</li>
	  		<li class="list-group-item active">
	  			<?php foreach($badge_siswa as $bs):?>
	  			<span class="badge"><? echo $bs->nis; ?></span><? endforeach; ?>
	  			<font color="white"> Jumlah Seluruh Siswa</font></li> <!-- perlu ada tooltip pengisi DCM-->
	  		<li class="list-group-item">
	  			<?php foreach($badge_kelas as $bk):?>
	  			<span class="badge"><? echo $bk->kelas; ?></span><? endforeach; ?>
	  			Jumlah Seluruh Kelas</li>
	  		<li class="list-group-item">
	  			<?php foreach($badge_jt as $bj):?>
	  			<span class="badge"><? echo $bj->tajaran; ?></span><? endforeach; ?>
	  			Jumlah Tahun Ajaran</li>	  		
		  </ul>

		</div>

		<div class="col-xs-11 col-md-9">
			<div class="panel panel-primary">
				<div class="panel-heading">
    			<h3 class="panel-title">List Pertanyaan Siswa</h3>
  				</div>

  				<div class="panel-body">    							
			
					<ul class="nav nav-tabs tooltips" role="tablist">
					  <li class="active"><a href="#1" role="tab" data-toggle="tab" title="Bagian Masalah Kesehatan">1</a></li>
					  <li><a href="#2" role="tab" data-toggle="tab" title="Bagian Masalah Keadaan Kehidupan Ekonomi">2</a></li>
					  <li><a href="#3" role="tab" data-toggle="tab" title="Bagian Masalah Keluarga">3</a></li>
					  <li><a href="#4" role="tab" data-toggle="tab" title="Bagian Masalah Agama dan Moral">4</a></li>
					  <li><a href="#5" role="tab" data-toggle="tab" title="Bagian Masalah Pribadi">5</a></li>
					  <li><a href="#6" role="tab" data-toggle="tab" title="Bagian Masalah Hubungan Sosial dan Berorganisasi">6</a></li>
					  <li><a href="#7" role="tab" data-toggle="tab" title="Bagian Masalah Rekreasi/Hobi dan Waktu Luang">7</a></li>
					  <li><a href="#8" role="tab" data-toggle="tab" title="Bagian Masalah Penyesuaian Terhadap Lingkungan Sekolah">8</a></li>
					  <li><a href="#9" role="tab" data-toggle="tab" title="Bagian Masalah Penyesuaian Terhadap Kurikulum">9</a></li>
					  <li><a href="#10" role="tab" data-toggle="tab" title="Bagian Masalah Masa Depan yang Berhubungan dengan Jabatan">10</a></li>
					  <li><a href="#11" role="tab" data-toggle="tab" title="Bagian Masalah Kebiasaan Belajar">11</a></li>
					  <li><a href="#12" role="tab" data-toggle="tab" title="Bagian Masalah Muda Mudi dan Asmara">12</a></li>
					</ul>

					<div class="tab-content">
					  <div class="tab-pane fade in active" id="1">					  	
					  		<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_1 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>					  	
					  </div>
					  <div class="tab-pane fade" id="2">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_2 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="3">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_3 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="4">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_4 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="5">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_5 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="6">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_6 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="7">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_7 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="8">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_8 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="9">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_9 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="10">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_10 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="11">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_11 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>
					  <div class="tab-pane fade" id="12">
					  	<table class="table table-bordered table-hover">
							  <tr>
							  	<th>No</th>
							  	<th>Soal</th>
							  	<!-- <th>Edit</th> -->
							  	<!-- <th>Hapus</th> -->
							  </tr>
							  <?php foreach ($bagian_12 as $key => $value) { ?>
							  <tr>
							  	<td><? echo $value->ID_soal; ?></td>
							  	<td><? echo $value->soal; ?></td>
							  </tr>
							  <?php } ?>
							</table>
					  </div>			  
					</div>

				</div>

			</div>
		</div>	

	</div>