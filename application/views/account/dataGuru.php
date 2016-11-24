	
	<div class="row">

		<div class="col-xs-5 col-md-3">
			<div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">Tahun Ajaran Aktif</h4>
              <p class="list-group-item-text">Data yang tampil didalam tabel akan di load sesuai dengan tahun ajaran yang sedang aktif saat ini.</p>
            </a>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="list-group-item">
              <h4 class="list-group-item-heading">Bagian Masalah Siswa</h4>
              <p class="list-group-item-text">Terdapat 12 bagian masalah siswa yang telah teranalisis berikut listnya:</p>
              	<div id="collapseTwo" class="panel-collapse collapse">
              	<ul class="list-group"> <!-- list group -->
              	<? foreach($bagian as $part): ?>
				  	<li class="list-group-item"><font size=""><?php echo $part->bagian; ?></font></li>				  	
				<? endforeach; ?>
				</ul>
              	</div>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">Analisis & Grafik</h4>
              <p class="list-group-item-text">Analisis merupakan hasil analisis terhadap siswa dan grafik merupakan tampilan grafiknya.</p>
            </a>
          </div>

          <div class="well">
			<p><i>Untuk mengubah tahun ajaran silakan langsung masuk ke menu tahun ajaran atau klik link ini</i></p>
		  </div>

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
			<?php foreach($badge_tahun as $nama_tahun): ?>
			<div class="alert alert-info">Info: Untuk tahun ajaran yang aktif pada sistem saat ini adalah <b><? echo $nama_tahun->thn_active; ?></b>.		
			</div><? endforeach; ?>
		
			<iframe width="100%" height="565" src="<?php  echo site_url('account/index');?>"  frameborder="0">    </iframe>

		</div>	

	</div>