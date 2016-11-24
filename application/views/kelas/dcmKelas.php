<br/>

<? foreach($queri as $ket): ?>
  <div class="panel panel-info">
    <div class="panel-heading">
      <div class="tooltips">	
      <a href="<? echo $link; ?>" class="pull-right" data-toggle="tooltip" data-original-title="Kembali ke Tabel">
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
      Kembali</a></div>      
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        <span class="glyphicon glyphicon-align-justify"></span>
  		Identitas Kelas
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        
      	<div class="panel panel-default">
  		<div class="panel-heading">
    	<h3 class="panel-title">Analisis Kelompok Daftar Cek Masalah</h3>
  		</div>
	  	<div class="panel-body">
	    	<ul class="list-group"> <!-- list group -->
		  	<li class="list-group-item active">
		  		<span class="badge"><? echo $ket->kelas;?></span>
		  		Kelas:</li>
		  	<li class="list-group-item">
		  		<span class="badge"><? echo $ket->id; ?></span>
		  		ID Kelas:</li>	  	
		  	<li class="list-group-item">
		  		<span class="badge"><? echo $ket->jmlSiswa;?></span>
		  		Jumlah Siswa: </li>	  	
		</ul>
	  	</div>
		</div>

      </div>
    </div>
    <div class="panel-info panel-footer tooltips">
    	<a class="pull-right" data-placement="left" title="Download Hasil Analisis" href="<? echo base_url() . 'index.php/kelas/download/' . $ket->id; ?>">
    	<span class="glyphicon glyphicon-download-alt"></span>
    	Download</a><br/>
    </div>
  </div>	
<? endforeach; ?>

<?php foreach($query as $post): ?>

<div class="panel panel-success">
    <div class="panel-heading">
      <div class="tooltips">	
      <a href="<? echo $link; ?>" class="pull-right" data-toggle="tooltip" data-original-title="Kembali ke Tabel"> 
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
      Kembali</a></div>      
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#satu">
        <span class="glyphicon glyphicon-align-justify"></span>
          Bagian Masalah [1] - [7]
        </a>
      </h4>
    </div>
    <div id="satu" class="panel-collapse collapse">
      
      <div class="panel-body tooltips">
        <div class="panel panel-default">
	  		<div class="panel-heading">
	    		<h3 class="panel-title">
	    		<ul class="nav nav-tabs tooltips">
				  <li class="active"><a href="#b1" data-toggle="tab" title="Masalah Kesehatan">Kesehatan</a></li>
				  <li><a href="#b2" data-toggle="tab" title="Masalah Keadaan Kehidupan Ekonomi">Ekonomi</a></li>
				  <li><a href="#b3" data-toggle="tab" title="Masalah Keluarga">Keluarga</a></li>
				  <li><a href="#b4" data-toggle="tab" title="Masalah Agama dan Moral">Agama</a></li>
	  			  <li><a href="#b5" data-toggle="tab" title="Masalah Pribadi">Pribadi</a></li>
	  			  <li><a href="#b6" data-toggle="tab" title="Masalah Hubungan Sosial dan Berorganisasi">Sosial</a></li>
	  			  <li><a href="#b7" data-toggle="tab" title="Masalah Rekreasi/Hobi dan Waktu Luang">Hobi</a></li>
				</ul>	 
	    		</h3>
	  		</div>
	  		<div class="panel-body">  		
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="b1">
				  	<table class="table table-hover table-bordered">
					  <tr class="tooltips">
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Kesehatan
						    <a href="<?  echo base_url('index.php/kelas/chartBag1/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a> <!-- -->						    
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
  						<tr>    
						<td title=""><a title="Sering sakit ketika SD">1</a></td>    
						<td><? echo $post->soal1; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h1; ?></td>
						<td><? echo $post->score1;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering sakit sekarang">2</a></td>    
						<td><? echo $post->soal2; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h2; ?></td>
						<td><? echo $post->score2;?></td>
					  </tr>
					  <tr>    
						<td><a title="Jantung sering berdebar-debar">3</a></td>    
						<td><? echo $post->soal3; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h3; ?></td>
						<td><? echo $post->score3;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering keluar keringat dingin">4</a></td>    
						<td><? echo $post->soal4; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h4; ?></td>
						<td><? echo $post->score4;?></td>
					  </tr>
					  <tr>    
						<td><a title="Kesehatan saya sering terganggu">5</a></td>    
						<td><? echo $post->soal5; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h5; ?></td>
						<td><? echo $post->score5;?></td>
					  </tr>
					  <tr>    
						<td><a title="Pernah dioperasi">6</a></td>    
						<td><? echo $post->soal6; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h6; ?></td>
						<td><? echo $post->score6;?></td>
					  </tr>
					  <tr>    
						<td><a title="Merasa terlalu gemuk">7</a></td>    
						<td><? echo $post->soal7; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h7; ?></td>
						<td><? echo $post->score7;?></td>
					  </tr>
					  <tr>    
						<td><a title="Merasa terlalu kurus">8</a></td>    
						<td><? echo $post->soal8; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h8; ?></td>
						<td><? echo $post->score8;?></td>
					  </tr>
					  <tr>    
						<td><a title="Selalu kurang nafsu makan">9</a></td>    
						<td><? echo $post->soal9; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h9; ?></td>
						<td><? echo $post->score9;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering merasa mengantuk">10</a></td>    
						<td><? echo $post->soal10; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h10; ?></td>
						<td><? echo $post->score10;?></td>
					  </tr>
					  <tr>    
						<td><a title="Tidak bisa melihat jauh/dekat">11</a></td>    
						<td><? echo $post->soal11; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h11; ?></td>
						<td><? echo $post->score11;?></td>
					  </tr>
					  <tr>    
						<td><a title="Merasa kurang bahagia karena cacat">12</a></td>    
						<td><? echo $post->soal12; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h12; ?></td>
						<td><? echo $post->score12;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering kurang/tidak dapat tidur">13</a></td>    
						<td><? echo $post->soal13; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h13; ?></td>
						<td><? echo $post->score13;?></td>
					  </tr>
					  <tr>    
						<td><a title="Merasa lelah dan tidak bersemangat">14</a></td>    
						<td><? echo $post->soal14; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h14; ?></td>
						<td><? echo $post->score14;?></td>
					  </tr>
					  <tr>    
						<td><a title="Makanan kurang memenuhi syarat-syarat kesehatan">15</a></td>    
						<td><? echo $post->soal15; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h15; ?></td>
						<td><? echo $post->score15;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering merasa pusing">16</a></td>    
						<td><? echo $post->soal16; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h16; ?></td>
						<td><? echo $post->score16;?></td>
					  </tr>
					  <tr>    
						<td><a title="Pandangan saya kurang">17</a></td>    
						<td><? echo $post->soal17; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h17; ?></td>
						<td><? echo $post->score17;?></td>
					  </tr>
					  <tr>    
						<td><a title="Saya menderita gagap">18</a></td>    
						<td><? echo $post->soal18; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h18; ?></td>
						<td><? echo $post->score18;?></td>
					  </tr>
					  <tr>    
						<td><a title="Saya kurang mendapat hawa segar">19</a></td>    
						<td><? echo $post->soal19; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h19; ?></td>
						<td><? echo $post->score19;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering gemetar dan keluar keringat">20</a></td>    
						<td><? echo $post->soal20; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h20; ?></td>
						<td><? echo $post->score20;?></td>
					  </tr>
					  <tr>    
						<td><a title="Mudah kaget dan gugup">21</a></td>    
						<td><? echo $post->soal21; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h21; ?></td>
						<td><? echo $post->score21;?></td>
					  </tr>
					  <tr>    
						<td><a title="Sering pingsan">22</a></td>    
						<td><? echo $post->soal22; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h22; ?></td>
						<td><? echo $post->score22;?></td>
					  </tr>
					  <tr>    
						<td><a title="Tekanan darah terlalu rendah">23</a></td>    
						<td><? echo $post->soal23; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h23; ?></td>
						<td><? echo $post->score23;?></td>
					  </tr>
					  <tr>    
						<td><a title="Tekanan darah terlalu tinggi">24</a></td>    
						<td><? echo $post->soal24; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h24; ?></td>
						<td><? echo $post->score24;?></td>
					  </tr>
					  <tr>    
						<td><a title="Mempunyai penyakit menahun">25</a></td>    
						<td><? echo $post->soal25; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h25; ?></td>
						<td><? echo $post->score25;?></td>
					  </tr>
					  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b2">
				  	<table class="table table-hover table-bordered">
					  <tr class="tooltips">
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Keadaan Kehidupan Ekonomi
					    	<a href="<?  echo base_url('index.php/kelas/chartBag2/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
  					  <tr>    
  					  	<tr>    
						<td><a title="Uang saku saya tidak mencukupi">26</a></td>    
						<td><? echo $post->soal26; ?></td>
						<td><? echo $post->jmlKelas; ?></td>
						<td><? echo $post->h26; ?></td>
						<td><? echo $post->score26;?></td>
					  </tr>
	<td><a title="Kekurangan buku-buku karena tidak mampu membeli">27</a></td>    
	<td><? echo $post->soal27; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h27; ?></td>
	<td><? echo $post->score27;?></td>
  </tr>
  <tr>    
	<td><a title="Terpaksa sambil berkerja karena ekonomi tidak mencukupi">28</a></td>    
	<td><? echo $post->soal28; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h28; ?></td>
	<td><? echo $post->score28;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak tahu bagaimana caranya menambah biaya sekolah">29</a></td>    
	<td><? echo $post->soal29; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h29; ?></td>
	<td><? echo $post->score29;?></td>
  </tr>
  <tr>    
	<td><a title="Saya sering pinjam uang">30</a></td>    
	<td><? echo $post->soal30; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h30; ?></td>
	<td><? echo $post->score30;?></td>
  </tr>
  <tr>    
	<td><a title="Penerangan lampu di rumah kurang cukup">31</a></td>    
	<td><? echo $post->soal31; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h31; ?></td>
	<td><? echo $post->score31;?></td>
  </tr>
  <tr>    
	<td><a title="Sering berjalan kaki ke sekolah, padahal rumah jauh">32</a></td>    
	<td><? echo $post->soal32; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h32; ?></td>
	<td><? echo $post->score32;?></td>
  </tr>
  <tr>    
	<td><a title="Orang tua tidak mempunyai perkerjaan tetap">33</a></td>    
	<td><? echo $post->soal33; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h33; ?></td>
	<td><? echo $post->score33;?></td>
  </tr>
  <tr>    
	<td><a title="Uang sekolah saya terlalu tinggi">34</a></td>    
	<td><? echo $post->soal34; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h34; ?></td>
	<td><? echo $post->score34;?></td>
  </tr>
  <tr>    
	<td><a title="Terlalu banyak saudara yang harus dibiayai orang tua">35</a></td>    
	<td><? echo $post->soal35; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h35; ?></td>
	<td><? echo $post->score35;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak pernah mendapat uang saku">36</a></td>    
	<td><? echo $post->soal36; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h36; ?></td>
	<td><? echo $post->score36;?></td>
  </tr>
  <tr>    
	<td><a title="Ibu/saudara ikut membantu mencari penghasilan tambahan">37</a></td>    
	<td><? echo $post->soal37; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h37; ?></td>
	<td><? echo $post->score37;?></td>
  </tr>
  <tr>    
	<td><a title="Terpaksa sering menunggak SPP">38</a></td>    
	<td><? echo $post->soal38; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h38; ?></td>
	<td><? echo $post->score38;?></td>
  </tr>
  <tr>    
	<td><a title="Tamat sekolah terpaksa">39</a></td>    
	<td><? echo $post->soal39; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h39; ?></td>
	<td><? echo $post->score39;?></td>
  </tr>
  <tr>    
	<td><a title="Ayah dan Ibu tidak hidup bersama">40</a></td>    
	<td><? echo $post->soal40; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h40; ?></td>
	<td><? echo $post->score40;?></td>
  </tr>
  <tr>    
	<td><a title="Keluarga saya hidup berantakan">41</a></td>    
	<td><? echo $post->soal41; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h41; ?></td>
	<td><? echo $post->score41;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak puas dengan keadaan ekonomi keluarga">42</a></td>    
	<td><? echo $post->soal42; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h42; ?></td>
	<td><? echo $post->score42;?></td>
  </tr>
  <tr>    
	<td><a title="Saya ikut orang lain karena orang tua saya tidak mampu">43</a></td>    
	<td><? echo $post->soal43; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h43; ?></td>
	<td><? echo $post->score43;?></td>
  </tr>
  <tr>    
	<td><a title="Orang tua saya cukup mampu dan saya ingin segala keinginan saya dicukupi">44</a></td>    
	<td><? echo $post->soal44; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h44; ?></td>
	<td><? echo $post->score44;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak ingin orang tua terlalu mengekang">45</a></td>    
	<td><? echo $post->soal45; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h45; ?></td>
	<td><? echo $post->score45;?></td>
  </tr>
  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b3">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Keluarga
					    <a href="<?  echo base_url('index.php/kelas/chartBag3/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  	
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					  <tr>    
	<td><a title="Saya adalah anak tunggal">46</a></td>    
	<td><? echo $post->soal46; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h46; ?></td>
	<td><? echo $post->score46;?></td>
  </tr>
  						<tr>   						   
	<td><a title="Saya adalah anak sulung (pertama)">47</a></td>    
	<td><? echo $post->soal47; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h47; ?></td>
	<td><? echo $post->score47;?></td>
  </tr>
  <tr>    
	<td><a title="Saya adalah anak bungsu (terakhir)">48</a></td>    
	<td><? echo $post->soal48; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h48; ?></td>
	<td><? echo $post->score48;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak ber-Ayah">49</a></td>    
	<td><? echo $post->soal49; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h49; ?></td>
	<td><? echo $post->score49;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak ber-Ibu">50</a></td>    
	<td><? echo $post->soal50; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h50; ?></td>
	<td><? echo $post->score50;?></td>
  </tr>
  <tr>    
	<td><a title="Saya selalu dimanja orang tua/saudara">51</a></td>    
	<td><? echo $post->soal51; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h51; ?></td>
	<td><? echo $post->score51;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak hidup bersama orang tua">52</a></td>    
	<td><? echo $post->soal52; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h52; ?></td>
	<td><? echo $post->score52;?></td>
  </tr>
  <tr>    
	<td><a title="Selalu bertengkar dengan adik/kakak">53</a></td>    
	<td><? echo $post->soal53; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h53; ?></td>
	<td><? echo $post->score53;?></td>
  </tr>
  <tr>    
	<td><a title="Ayah ibu pulang kerja terlalu petang">54</a></td>    
	<td><? echo $post->soal54; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h54; ?></td>
	<td><? echo $post->score54;?></td>
  </tr>
  <tr>    
	<td><a title="Di rumah terlalu sibuk membantu tugas-tugas orang tua">55</a></td>    
	<td><? echo $post->soal55; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h55; ?></td>
	<td><? echo $post->score55;?></td>
  </tr>
  <tr>    
	<td><a title="Pertentangan ayah dan ibu mengganggu pikiran saya">56</a></td>    
	<td><? echo $post->soal56; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h56; ?></td>
	<td><? echo $post->score56;?></td>
  </tr>
  <tr>    
	<td><a title="Mata pencaharian orang tua mengganggu pikiran saya">57</a></td>    
	<td><? echo $post->soal57; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h57; ?></td>
	<td><? echo $post->score57;?></td>
  </tr>
  <tr>    
	<td><a title="Orang tua kurang memperhatikan saya">58</a></td>    
	<td><? echo $post->soal58; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h58; ?></td>
	<td><? echo $post->score58;?></td>
  </tr>
  <tr>    
	<td><a title="Orang tua mencampuri urusan saya">59</a></td>    
	<td><? echo $post->soal59; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h59; ?></td>
	<td><? echo $post->score59;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar menyesuaikan diri dengan ayah">60</a></td>    
	<td><? echo $post->soal60; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h60; ?></td>
	<td><? echo $post->score60;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar menyesuaikan diri dengan ibu">61</a></td>    
	<td><? echo $post->soal61; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h61; ?></td>
	<td><? echo $post->score61;?></td>
  </tr>
  <tr>    
	<td><a title="Di rumah saya merasa kurang senang">62</a></td>    
	<td><? echo $post->soal62; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h62; ?></td>
	<td><? echo $post->score62;?></td>
  </tr>
  <tr>    
	<td><a title="Kehidupan di rumah kurang teratur">63</a></td>    
	<td><? echo $post->soal63; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h63; ?></td>
	<td><? echo $post->score63;?></td>
  </tr>
  <tr>    
	<td><a title="Keluarga kami kurang tolong menolong">64</a></td>    
	<td><? echo $post->soal64; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h64; ?></td>
	<td><? echo $post->score64;?></td>
  </tr>
  <tr>    
	<td><a title="Keluarga kami kurang akrab">65</a></td>    
	<td><? echo $post->soal65; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h65; ?></td>
	<td><? echo $post->score65;?></td>
  </tr>
  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b4">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Agama dan Moral
					    <a href="<?  echo base_url('index.php/kelas/chartBag4/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
	<tr>    
	<td><a title="Tidak dapat bersungguh-sungguh menerima pelajaran agama">66</a></td>    
	<td><? echo $post->soal66; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h66; ?></td>
	<td><? echo $post->score66;?></td>
  </tr>
  						<tr>    
	<td><a title="Masih meragukan adanya tuhan">67</a></td>    
	<td><? echo $post->soal67; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h67; ?></td>
	<td><? echo $post->score67;?></td>
  </tr>
  <tr>    
	<td><a title="Sering timbul keinginan berganti agama">68</a></td>    
	<td><? echo $post->soal68; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h68; ?></td>
	<td><? echo $post->score68;?></td>
  </tr>
  <tr>    
	<td><a title="Malas sembahyang">69</a></td>    
	<td><? echo $post->soal69; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h69; ?></td>
	<td><? echo $post->score69;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak bersungguh-sungguh mengerjakan ibadah">70</a></td>    
	<td><? echo $post->soal70; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h70; ?></td>
	<td><? echo $post->score70;?></td>
  </tr>
  <tr>    
	<td><a title="Kurang merasakan manfaat agama">71</a></td>    
	<td><? echo $post->soal71; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h71; ?></td>
	<td><? echo $post->score71;?></td>
  </tr>
  <tr>    
	<td><a title="Sering berdusta">72</a></td>    
	<td><? echo $post->soal72; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h72; ?></td>
	<td><? echo $post->score72;?></td>
  </tr>
  <tr>    
	<td><a title="Sering mengingkari janji">73</a></td>    
	<td><? echo $post->soal73; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h73; ?></td>
	<td><? echo $post->score73;?></td>
  </tr>
  <tr>    
	<td><a title="Sering tidak mengakui kesalahan">74</a></td>    
	<td><? echo $post->soal74; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h74; ?></td>
	<td><? echo $post->score74;?></td>
  </tr>
  <tr>    
	<td><a title="Sering iri hati">75</a></td>    
	<td><? echo $post->soal75; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h75; ?></td>
	<td><? echo $post->score75;?></td>
  </tr>
  <tr>    
	<td><a title="Ucapan dan perbuatan sering tidak sesuai">76</a></td>    
	<td><? echo $post->soal76; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h76; ?></td>
	<td><? echo $post->score76;?></td>
  </tr>
  <tr>    
	<td><a title="Sering mengambil barang orang lain">77</a></td>    
	<td><? echo $post->soal77; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h77; ?></td>
	<td><? echo $post->score77;?></td>
  </tr>
  <tr>    
	<td><a title="Sering memepermainkan orang lain">78</a></td>    
	<td><? echo $post->soal78; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h78; ?></td>
	<td><? echo $post->score78;?></td>
  </tr>
  <tr>    
	<td><a title="Pernah melanggar kesusilaan">79</a></td>    
	<td><? echo $post->soal79; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h79; ?></td>
	<td><? echo $post->score79;?></td>
  </tr>
  <tr>    
	<td><a title="Kurang dapat bertoleransi dengan pemeluk agama lain">80</a></td>    
	<td><? echo $post->soal80; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h80; ?></td>
	<td><? echo $post->score80;?></td>
  </tr>
  <tr>    
	<td><a title="Mudah merasa iba terhadap penderitaan orang lain">81</a></td>    
	<td><? echo $post->soal81; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h81; ?></td>
	<td><? echo $post->score81;?></td>
  </tr>
  <tr>    
	<td><a title="Kurang adanya tenggang rasa dengan orang lain">82</a></td>    
	<td><? echo $post->soal82; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h82; ?></td>
	<td><? echo $post->score82;?></td>
  </tr>
  <tr>    
	<td><a title="Sering melupakan milik orang lain yang dipinjam">83</a></td>    
	<td><? echo $post->soal83; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h83; ?></td>
	<td><? echo $post->score83;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa hormat dengan orang yang lebih tua">84</a></td>    
	<td><? echo $post->soal84; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h84; ?></td>
	<td><? echo $post->score84;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa hormat dengan wanita">85</a></td>    
	<td><? echo $post->soal85; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h85; ?></td>
	<td><? echo $post->score85;?></td>
  </tr>
  <tr>    
	<td><a title="Membenci teman yang mempunyai kelebihan">86</a></td>    
	<td><? echo $post->soal86; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h86; ?></td>
	<td><? echo $post->score86;?></td>
  </tr>
  <tr>    
	<td><a title="Ada perasaan sering menceriakan hal-hal yang berbau porno">87</a></td>    
	<td><? echo $post->soal87; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h87; ?></td>
	<td><? echo $post->score87;?></td>
  </tr>
  <tr>    
	<td><a title="Sangat segan bergaul dengan wanita/pria yang agak ugal-ugalan">88</a></td>    
	<td><? echo $post->soal88; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h88; ?></td>
	<td><? echo $post->score88;?></td>
  </tr>
  <tr>    
	<td><a title="Kurang senang terhadap wanita/pria yang pendiam">89</a></td>    
	<td><? echo $post->soal89; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h89; ?></td>
	<td><? echo $post->score89;?></td>
  </tr>
  
					</table>
				  </div>
	  			  <div class="tab-pane fade" id="b5">
	  			  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Pribadi
					    <a href="<?  echo base_url('index.php/kelas/chartBag5/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>

					  <tr>    
	<td><a title="Tidak suka bergaul dengan orang yang kedudukannya lebih rendah">90</a></td>    
	<td><? echo $post->soal90; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h90; ?></td>
	<td><? echo $post->score90;?></td>
  </tr>
  						<tr>    
	<td><a title="Tidak suka bergaul dengan orang yang kedudukannya lebih tinggi">91</a></td>    
	<td><? echo $post->soal91; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h91; ?></td>
	<td><? echo $post->score91;?></td>
  </tr>
  <tr>    
	<td><a title="Sering merasa malu dengan kawan lawan jenis">92</a></td>    
	<td><? echo $post->soal92; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h92; ?></td>
	<td><? echo $post->score92;?></td>
  </tr>
  <tr>    
	<td><a title="Sering merasa iri hati">93</a></td>    
	<td><? echo $post->soal93; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h93; ?></td>
	<td><? echo $post->score93;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar mendapatkan kawan">94</a></td>    
	<td><? echo $post->soal94; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h94; ?></td>
	<td><? echo $post->score94;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak suka bertamu">95</a></td>    
	<td><? echo $post->soal95; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h95; ?></td>
	<td><? echo $post->score95;?></td>
  </tr>
  <tr>    
	<td><a title="Enggan menerima tamu">96</a></td>    
	<td><? echo $post->soal96; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h96; ?></td>
	<td><? echo $post->score96;?></td>
  </tr>
  <tr>    
	<td><a title="Sering merasa curiga terhadap orang lain">97</a></td>    
	<td><? echo $post->soal97; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h97; ?></td>
	<td><? echo $post->score97;?></td>
  </tr>
  <tr>    
	<td><a title="Bersikap kaku dan tidak toleran">98</a></td>    
	<td><? echo $post->soal98; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h98; ?></td>
	<td><? echo $post->score98;?></td>
  </tr>
  <tr>    
	<td><a title="Bersikap dingin dalam bergaul">99</a></td>    
	<td><? echo $post->soal99; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h99; ?></td>
	<td><? echo $post->score99;?></td>
  </tr>
  <tr>    
	<td><a title="Sering menyesali diri sendiri">100</a></td>    
	<td><? echo $post->soal100; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h100; ?></td>
	<td><? echo $post->score100;?></td>
  </tr>
  <tr>    
	<td><a title="Sering ingin bunuh diri">101</a></td>    
	<td><? echo $post->soal101; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h101; ?></td>
	<td><? echo $post->score101;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa pesimis (tidak punya harapan)">102</a></td>    
	<td><? echo $post->soal102; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h102; ?></td>
	<td><? echo $post->score102;?></td>
  </tr>
  <tr>    
	<td><a title="Saya ingin lebih menarik">103</a></td>    
	<td><? echo $post->soal103; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h103; ?></td>
	<td><? echo $post->score103;?></td>
  </tr>
  
					</table>
	  			  </div>
	  			  <div class="tab-pane fade" id="b6">
	  			  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Hubungan Sosial dan Berorganisasi
					    <a href="<?  echo base_url('index.php/kelas/chartBag6/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>

					  <tr>    
	<td><a title="Tidak senang bermain dalam kelompok">104</a></td>    
	<td><? echo $post->soal104; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h104; ?></td>
	<td><? echo $post->score104;?></td>
  </tr>
  						<tr>    
	<td><a title="Sering gagal dalam usaha mencari kawan">105</a></td>    
	<td><? echo $post->soal105; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h105; ?></td>
	<td><? echo $post->score105;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar bergaul">106</a></td>    
	<td><? echo $post->soal106; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h106; ?></td>
	<td><? echo $post->score106;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa tidak disenagi kawan-kawan diluar sekolah">107</a></td>    
	<td><? echo $post->soal107; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h107; ?></td>
	<td><? echo $post->score107;?></td>
  </tr>
  <tr>    
	<td><a title="Takut mengenal orang lain">108</a></td>    
	<td><? echo $post->soal108; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h108; ?></td>
	<td><? echo $post->score108;?></td>
  </tr>
  <tr>    
	<td><a title="Senang menjadi pusat perhatian">109</a></td>    
	<td><? echo $post->soal109; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h109; ?></td>
	<td><? echo $post->score109;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak berminat pada organisasi">110</a></td>    
	<td><? echo $post->soal110; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h110; ?></td>
	<td><? echo $post->score110;?></td>
  </tr>
  <tr>    
	<td><a title="Terlalu aktif dalam berorganisasi">111</a></td>    
	<td><? echo $post->soal111; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h111; ?></td>
	<td><? echo $post->score111;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar menyesuaikan diri dengan orang lain">112</a></td>    
	<td><? echo $post->soal112; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h112; ?></td>
	<td><? echo $post->score112;?></td>
  </tr>
  <tr>    
	<td><a title="Mudah tersinggung">113</a></td>    
	<td><? echo $post->soal113; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h113; ?></td>
	<td><? echo $post->score113;?></td>
  </tr>
  <tr>    
	<td><a title="Takut bergaul dengan atasan">114</a></td>    
	<td><? echo $post->soal114; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h114; ?></td>
	<td><? echo $post->score114;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak pernah menjadi pemimpin">115</a></td>    
	<td><? echo $post->soal115; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h115; ?></td>
	<td><? echo $post->score115;?></td>
  </tr>
  
  <tr>    
	<td><a title="Tidak pernah mengemukakan suatu pendapat">116</a></td>    
	<td><? echo $post->soal116; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h116; ?></td>
	<td><? echo $post->score116;?></td>
  </tr>
  <tr>    
	<td><a title="Sering bertentangan pendapat dengan orang lain">117</a></td>    
	<td><? echo $post->soal117; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h117; ?></td>
	<td><? echo $post->score117;?></td>
  </tr>  
  <tr>    
	<td><a title="Sukar menerima kekalahan">118</a></td>    
	<td><? echo $post->soal118; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h118; ?></td>
	<td><? echo $post->score118;?></td>
  </tr>
  <tr>    
	<td><a title="Selalu ingin berkuasa dalam pergaulan">119</a></td>    
	<td><? echo $post->soal119; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h119; ?></td>
	<td><? echo $post->score119;?></td>
  </tr>
  <tr>    
	<td><a title="Bingung bila berhadapan dengan orang banyak">120</a></td>    
	<td><? echo $post->soal120; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h120; ?></td>
	<td><? echo $post->score120;?></td>
  </tr>
  <tr>    
	<td><a title="Mudah merasa malu">121</a></td>    
	<td><? echo $post->soal121; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h121; ?></td>
	<td><? echo $post->score121;?></td>
  </tr>
  <tr>    
	<td><a title="Mudah marah">122</a></td>    
	<td><? echo $post->soal122; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h122; ?></td>
	<td><? echo $post->score122;?></td>
  </tr>
  <tr>    
	<td><a title="Sering tidak sabar">123</a></td>    
	<td><? echo $post->soal123; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h123; ?></td>
	<td><? echo $post->score123;?></td>
  </tr>
  <tr>    
	<td><a title="Sering tidak menepati janji">124</a></td>    
	<td><? echo $post->soal124; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h124; ?></td>
	<td><? echo $post->score124;?></td>
  </tr>  
  <tr>    
	<td><a title="Tidak dapat menerima kritikan">125</a></td>    
	<td><? echo $post->soal125; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h125; ?></td>
	<td><? echo $post->score125;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar berterus terang kepada orang lain">126</a></td>    
	<td><? echo $post->soal126; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h126; ?></td>
	<td><? echo $post->score126;?></td>
  </tr>
  <tr>    
	<td><a title="Lebih senang menjadi anggota daripada menjadi ketua">127</a></td>    
	<td><? echo $post->soal127; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h127; ?></td>
	<td><? echo $post->score127;?></td>
  </tr>
  <tr>    
	<td><a title="Jarang diajak bermain-main bersama teman-teman">128</a></td>    
	<td><? echo $post->soal128; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h128; ?></td>
	<td><? echo $post->score128;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa senang jika sendirian">129</a></td>    
	<td><? echo $post->soal129; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h129; ?></td>
	<td><? echo $post->score129;?></td>
  </tr>
  
					</table>
	  			  </div>
	  			  <div class="tab-pane fade" id="b7">
	  			  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Rekreasi/Hobi dan Waktu Luang
					    <a href="<?  echo base_url('index.php/kelas/chartBag7/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					  <tr>    
	<td><a title="Keinginan saya untuk rekreasi selalu terhalang">130</a></td>    
	<td><? echo $post->soal130; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h130; ?></td>
	<td><? echo $post->score130;?></td>
  </tr>
  					<tr>    
	<td><a title="Gemar melukis tetapi tidak punya alat">131</a></td>    
	<td><? echo $post->soal131; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h131; ?></td>
	<td><? echo $post->score131;?></td>
  </tr>
  <tr>    
	<td><a title="Waktu libur saya harus belajar">132</a></td>    
	<td><? echo $post->soal132; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h132; ?></td>
	<td><? echo $post->score132;?></td>
  </tr>
  <tr>    
	<td><a title="Suka olahraga tetap tidak ada kesempatan">133</a></td>    
	<td><? echo $post->soal133; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h133; ?></td>
	<td><? echo $post->score133;?></td>
  </tr>
  <tr>    
	<td><a title="Lebih suka buku-buku hiburan daripada buku pelajaran">134</a></td>    
	<td><? echo $post->soal134; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h134; ?></td>
	<td><? echo $post->score134;?></td>
  </tr>  
  <tr>    
	<td><a title="Setiap ada film baru saya nonton">135</a></td>    
	<td><? echo $post->soal135; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h135; ?></td>
	<td><? echo $post->score135;?></td>
  </tr>
  <tr>    
	<td><a title="Salah satu keluarga saya sering menghalangi hobi saya">136</a></td>    
	<td><? echo $post->soal136; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h136; ?></td>
	<td><? echo $post->score136;?></td>
  </tr>
  <tr>    
	<td><a title="Kesenangan membaca majalah/komik, sering menghabiskan waktu belajar">137</a></td>    
	<td><? echo $post->soal137; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h137; ?></td>
	<td><? echo $post->score137;?></td>
  </tr>
  <tr>    
	<td><a title="Habis waktu saya untuk nonton TV">138</a></td>    
	<td><? echo $post->soal138; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h138; ?></td>
	<td><? echo $post->score138;?></td>
  </tr>
  <tr>    
	<td><a title="Orang tua tidak pernah mengajak rekreasi">139</a></td>    
	<td><? echo $post->soal139; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h139; ?></td>
	<td><? echo $post->score139;?></td>
  </tr>
  <tr>    
	<td><a title="Terlalu sering rekreasi ke luar kota">140</a></td>    
	<td><? echo $post->soal140; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h140; ?></td>
	<td><? echo $post->score140;?></td>
  </tr>
  <tr>    
	<td><a title="Sebagian besar waktu saya pakai untuk belajar">141</a></td>    
	<td><? echo $post->soal141; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h141; ?></td>
	<td><? echo $post->score141;?></td>
  </tr>
  <tr>    
	<td><a title="Waktu saya banyak terpakai untuk membantu orang tua">142</a></td>    
	<td><? echo $post->soal142; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h142; ?></td>
	<td><? echo $post->score142;?></td>
  </tr>  
  <tr>    
	<td><a title="Saya tidak dapat menggunakan waktu luang saya">143</a></td>    
	<td><? echo $post->soal143; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h143; ?></td>
	<td><? echo $post->score143;?></td>
  </tr>
  <tr>    
	<td><a title="Waktu saya banyak terpakai untuk menuruti keinginan/hobi saya">144</a></td>    
	<td><? echo $post->soal144; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h144; ?></td>
	<td><? echo $post->score144;?></td>
  </tr>
  <tr>    
	<td><a title="Waktu saya habis untuk mengobrol">145</a></td>    
	<td><? echo $post->soal145; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h145; ?></td>
	<td><? echo $post->score145;?></td>
  </tr>
  <tr>    
	<td><a title="Waktu saya habis untuk latihan seni">146</a></td>    
	<td><? echo $post->soal146; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h146; ?></td>
	<td><? echo $post->score146;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak senang rekreasi">147</a></td>    
	<td><? echo $post->soal147; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h147; ?></td>
	<td><? echo $post->score147;?></td>
  </tr>
  <tr>    
	<td><a title="Lebih senang di rumah daripada menyalurkan hobi di luar rumah">148</a></td>    
	<td><? echo $post->soal148; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h148; ?></td>
	<td><? echo $post->score148;?></td>
  </tr>
 
					</table>
	  			  </div>
				</div>
	  		</div>
		</div>

      </div>
    </div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">
    <div class="tooltips">	
      <a href="<? echo $link; ?>" class="pull-right" data-toggle="tooltip" data-original-title="Kembali ke Tabel"> 
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
      Kembali</a></div>      
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <span class="glyphicon glyphicon-align-justify"></span>
          Bagian Masalah [8] - [12]
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body tooltips">
      	<div class="panel-body">
        <div class="panel panel-default">
	  		<div class="panel-heading">
	    		<h3 class="panel-title">
	    		<ul class="nav nav-tabs tooltips">	
				  <li class="active"><a href="#b8" data-toggle="tab" title="Masalah Penyesuaian Terhadap Lingkungan Sekolah">Lingkungan</a></li>
				  <li><a href="#b9" data-toggle="tab" title="Masalah Penyesuaian Terhadap Kurikulum">Kurikulum</a></li>
				  <li><a href="#b10" data-toggle="tab" title="Masalah Masa Depan yang Berhubungan dengan Jabatan">Masa Depan</a></li>
				  <li><a href="#b11" data-toggle="tab" title="Masalah Kebiasaan Belajar">Belajar</a></li>
				  <li><a href="#b12" data-toggle="tab" title="Masalah Muda Mudi dan Asmara">Asmara</a></li>	  			  
				</ul>	 	
	    		</h3>
	  		</div>
	  		<div class="panel-body">  		
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="b8">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Penyesuaian Terhadap Lingkungan Sekolah
					    <a href="<?  echo base_url('index.php/kelas/chartBag8/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					 <tr>    
	<td><a title="Sering merasa malas untuk masuk sekolah">149</a></td>    
	<td><? echo $post->soal149; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h149; ?></td>
	<td><? echo $post->score149;?></td>
  </tr>
  					<tr>    
	<td><a title="Sering meninggalkan pelajaran">150</a></td>    
	<td><? echo $post->soal150; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h150; ?></td>
	<td><? echo $post->score150;?></td>
  </tr>
  <tr>    
	<td><a title="Sering membolos">151</a></td>    
	<td><? echo $post->soal151; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h151; ?></td>
	<td><? echo $post->score151;?></td>
  </tr>
  <tr>    
	<td><a title="Ingin pindah ke kelas lain">152</a></td>    
	<td><? echo $post->soal152; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h152; ?></td>
	<td><? echo $post->score152;?></td>
  </tr>
  <tr>    
	<td><a title="Ingin pindah sekolah">153</a></td>    
	<td><? echo $post->soal153; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h153; ?></td>
	<td><? echo $post->score153;?></td>
  </tr>  
  <tr>    
	<td><a title="Sering merasa cemas bila ada ulangan">154</a></td>    
	<td><? echo $post->soal154; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h154; ?></td>
	<td><? echo $post->score154;?></td>
  </tr>
  <tr>    
	<td><a title="Bahan pelajaran sukar dikuasai">155</a></td>    
	<td><? echo $post->soal155; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h155; ?></td>
	<td><? echo $post->score155;?></td>
  </tr>
  <tr>    
	<td><a title="Ingin menjadi pengurus OSIS tetapi tidak terpilih">156</a></td>    
	<td><? echo $post->soal156; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h156; ?></td>
	<td><? echo $post->score156;?></td>
  </tr>
  <tr>    
	<td><a title="Ada beberapa pelajaran yang tidak saya senangi">157</a></td>    
	<td><? echo $post->soal157; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h157; ?></td>
	<td><? echo $post->score157;?></td>
  </tr>
  <tr>    
	<td><a title="Pelajaran di sekolah ini terlalu membosankan">158</a></td>    
	<td><? echo $post->soal158; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h158; ?></td>
	<td><? echo $post->score158;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa tidak diperhatikan guru">159</a></td>    
	<td><? echo $post->soal159; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h159; ?></td>
	<td><? echo $post->score159;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa kurang dimengerti guru">160</a></td>    
	<td><? echo $post->soal160; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h160; ?></td>
	<td><? echo $post->score160;?></td>
  </tr>
  <tr>    
	<td><a title="Peraturan sekolah terlalu menekan">161</a></td>    
	<td><? echo $post->soal161; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h161; ?></td>
	<td><? echo $post->score161;?></td>
  </tr>  
  <tr>    
	<td><a title="Pribadi salah seorang guru menyebabkan pelajarannya tidak saya perhatikan">162</a></td>    
	<td><? echo $post->soal162; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h162; ?></td>
	<td><? echo $post->score162;?></td>
  </tr>
  <tr>    
	<td><a title="Beberapa mata pelajaran kuanggap tidak perlu">163</a></td>    
	<td><? echo $post->soal163; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h163; ?></td>
	<td><? echo $post->score163;?></td>
  </tr>
  <tr>    
	<td><a title="Di dalam kelas tidak dapat memusatkan perhatian">164</a></td>    
	<td><? echo $post->soal164; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h164; ?></td>
	<td><? echo $post->score164;?></td>
  </tr>
  <tr>    
	<td><a title="Di dalam kelas saya sering melamun">165</a></td>    
	<td><? echo $post->soal165; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h165; ?></td>
	<td><? echo $post->score165;?></td>
  </tr>
  <tr>    
	<td><a title="Saya sering datang terlambat">166</a></td>    
	<td><? echo $post->soal166; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h166; ?></td>
	<td><? echo $post->score166;?></td>
  </tr>
  <tr>    
	<td><a title="Saya merasa dibenci oleh kawan-kawan di sekolah">167</a></td>    
	<td><? echo $post->soal167; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h167; ?></td>
	<td><? echo $post->score167;?></td>
  </tr>
  <tr>    
	<td><a title="Seorang kawan selalu menjengkelkan saya">168</a></td>    
	<td><? echo $post->soal168; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h168; ?></td>
	<td><? echo $post->score168;?></td>
  </tr>
  <tr>    
	<td><a title="Tidak ada teman yang saya suka untuk belajar bersama">169</a></td>    
	<td><? echo $post->soal169; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h169; ?></td>
	<td><? echo $post->score169;?></td>
  </tr>  
  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b9">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Penyesuaian Terhadap Kurikulum
					    <a href="<?  echo base_url('index.php/kelas/chartBag9/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					  <tr>    
	<td><a title="Pelajaran sekolah terlalu berat">170</a></td>    
	<td><? echo $post->soal170; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h170; ?></td>
	<td><? echo $post->score170;?></td>
  </tr>
  						<tr>    
	<td><a title="Pelajaran sekolah terlalu mudah">171</a></td>    
	<td><? echo $post->soal171; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h171; ?></td>
	<td><? echo $post->score171;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar mendapatkan buku-buku pelajaran">172</a></td>    
	<td><? echo $post->soal172; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h172; ?></td>
	<td><? echo $post->score172;?></td>
  </tr>
  <tr>    
	<td><a title="Sulit mengerti buku pelajaran">173</a></td>    
	<td><? echo $post->soal173; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h173; ?></td>
	<td><? echo $post->score173;?></td>
  </tr>
  <tr>    
	<td><a title="Saya takut terhadap ulangan">174</a></td>    
	<td><? echo $post->soal174; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h174; ?></td>
	<td><? echo $post->score174;?></td>
  </tr>  
  <tr>    
	<td><a title="Saya tidak suka belajar">175</a></td>    
	<td><? echo $post->soal175; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h175; ?></td>
	<td><? echo $post->score175;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak berminat terhadap buku">176</a></td>    
	<td><? echo $post->soal176; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h176; ?></td>
	<td><? echo $post->score176;?></td>
  </tr>
  <tr>    
	<td><a title="Saya sering mendapatkan angka rendah">177</a></td>    
	<td><? echo $post->soal177; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h177; ?></td>
	<td><? echo $post->score177;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak senang belajar bersama">178</a></td>    
	<td><? echo $post->soal178; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h178; ?></td>
	<td><? echo $post->score178;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar menangkap dan mengikuti pelajaran">179</a></td>    
	<td><? echo $post->soal179; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h179; ?></td>
	<td><? echo $post->score179;?></td>
  </tr>
  <tr>    
	<td><a title="Sering kuatir kalau mendapatkan giliran maju ke depan kelas">180</a></td>    
	<td><? echo $post->soal180; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h180; ?></td>
	<td><? echo $post->score180;?></td>
  </tr>
  <tr>    
	<td><a title="Sering mendapat kesukaran dalam menyelesaikan perkerjaan rumah">181</a></td>    
	<td><? echo $post->soal181; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h181; ?></td>
	<td><? echo $post->score181;?></td>
  </tr>
  <tr>    
	<td><a title="Perkerjaan yang bersifat hitungan sukar bagi saya">182</a></td>    
	<td><? echo $post->soal182; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h182; ?></td>
	<td><? echo $post->score182;?></td>
  </tr>  
  <tr>    
	<td><a title="Pelajaran yang bersifat hafalan sukar bagi saya">183</a></td>    
	<td><? echo $post->soal183; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h183; ?></td>
	<td><? echo $post->score183;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa segan membaca buku perpustakaan">184</a></td>    
	<td><? echo $post->soal184; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h184; ?></td>
	<td><? echo $post->score184;?></td>
  </tr>
  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b10">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Masa Depan yang Berhubungan dengan Jabatan
					    <a href="<?  echo base_url('index.php/kelas/chartBag10/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>

					  <tr>    
	<td><a title="Saya tidak tahu apa yang akan saya lakukan setelah tamat SMP">185</a></td>    
	<td><? echo $post->soal185; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h185; ?></td>
	<td><? echo $post->score185;?></td>
  </tr>
  					<tr>    
	<td><a title="Sukar/sulit menetapkan pilihan sekolah lanjutan">186</a></td>    
	<td><? echo $post->soal186; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h186; ?></td>
	<td><? echo $post->score186;?></td>
  </tr>
  <tr>    
	<td><a title="Kuatir tidak diterima di SMA Negeri">187</a></td>    
	<td><? echo $post->soal187; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h187; ?></td>
	<td><? echo $post->score187;?></td>
  </tr>
  <tr>    
	<td><a title="Ingin melanjutkan ke sekolah yang lebih tinggi tetapi tidak ada biaya">188</a></td>    
	<td><? echo $post->soal188; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h188; ?></td>
	<td><? echo $post->score188;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa pesimis (tidak ada harapan) terhadap hari depan berhubung sulitnya mencari perkerjaan">189</a></td>    
	<td><? echo $post->soal189; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h189; ?></td>
	<td><? echo $post->score189;?></td>
  </tr>
  <tr>    
	<td><a title="Kuatir nanti tidak dapat berdiri sendiri">190</a></td>    
	<td><? echo $post->soal190; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h190; ?></td>
	<td><? echo $post->score190;?></td>
  </tr>  
  <tr>    
	<td><a title="Ingin mengetahui bakat dan kemampuan saya">191</a></td>    
	<td><? echo $post->soal191; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h191; ?></td>
	<td><? echo $post->score191;?></td>
  </tr>
  <tr>    
	<td><a title="Cita-cita saya tidak sesuai dengan kemampuan">192</a></td>    
	<td><? echo $post->soal192; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h192; ?></td>
	<td><? echo $post->score192;?></td>
  </tr>
  <tr>    
	<td><a title="Bingung menentukan sikap setelah lulus SMP nanti">193</a></td>    
	<td><? echo $post->soal193; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h193; ?></td>
	<td><? echo $post->score193;?></td>
  </tr>
  <tr>    
	<td><a title="Selalu berdebar jika mengingat masa depan">194</a></td>    
	<td><? echo $post->soal194; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h194; ?></td>
	<td><? echo $post->score194;?></td>
  </tr>
  <tr>    
	<td><a title="Ayah/Ibu keras dalam mengarahkan cita-cita">195</a></td>    
	<td><? echo $post->soal195; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h195; ?></td>
	<td><? echo $post->score195;?></td>
  </tr>
  
					</table>
				  </div>
				  <div class="tab-pane fade" id="b11">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Kebiasaan Belajar
					    <a href="<?  echo base_url('index.php/kelas/chartBag11/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					  <tr>    
	<td><a title="Belajar kalau ada ulangan">196</a></td>    
	<td><? echo $post->soal196; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h196; ?></td>
	<td><? echo $post->score196;?></td>
  </tr>
  					<tr>    
	<td><a title="Waktu Belajar saya tidak teratur">197</a></td>    
	<td><? echo $post->soal197; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h197; ?></td>
	<td><? echo $post->score197;?></td>
  </tr>
  <tr>    
	<td><a title="Belajar hanya pada malam hari">198</a></td>    
	<td><? echo $post->soal198; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h198; ?></td>
	<td><? echo $post->score198;?></td>
  </tr>
  <tr>    
	<td><a title="Belajar hanya pada waktu siang hari">199</a></td>    
	<td><? echo $post->soal199; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h199; ?></td>
	<td><? echo $post->score199;?></td>
  </tr>
  <tr>    
	<td><a title="Sukar memusatkan perhatian pada waktu belajar">200</a></td>    
	<td><? echo $post->soal200; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h200; ?></td>
	<td><? echo $post->score200;?></td>
  </tr>  
  <tr>    
	<td><a title="Sulit mengingat pelajaran yang telah dihafalkan">201</a></td>    
	<td><? echo $post->soal201; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h201; ?></td>
	<td><? echo $post->score201;?></td>
  </tr>
  <tr>    
	<td><a title="Sulit untuk memulai belajar">202</a></td>    
	<td><? echo $post->soal202; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h202; ?></td>
	<td><? echo $post->score202;?></td>
  </tr>
  <tr>    
	<td><a title="Sering merasa malas belajar">203</a></td>    
	<td><? echo $post->soal203; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h203; ?></td>
	<td><? echo $post->score203;?></td>
  </tr>
  <tr>    
	<td><a title="Kalau belajar sering merasa mengantuk">204</a></td>    
	<td><? echo $post->soal204; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h204; ?></td>
	<td><? echo $post->score204;?></td>
  </tr>
  <tr>    
	<td><a title="Kalau sedang belajar sering merasa terganggu oleh saudara">205</a></td>    
	<td><? echo $post->soal205; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h205; ?></td>
	<td><? echo $post->score205;?></td>
  </tr>
  <tr>    
	<td><a title="Belajar dengan cara menghafal">206</a></td>    
	<td><? echo $post->soal206; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h206; ?></td>
	<td><? echo $post->score206;?></td>
  </tr>
  <tr>    
	<td><a title="Belajar dengan cara membayangkan">207</a></td>    
	<td><? echo $post->soal207; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h207; ?></td>
	<td><? echo $post->score207;?></td>
  </tr>
  <tr>    
	<td><a title="Belajar dengan cara membuat ringkasan/singkatan">208</a></td>    
	<td><? echo $post->soal208; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h208; ?></td>
	<td><? echo $post->score208;?></td>
  </tr>  
  <tr>    
	<td><a title="Tidak dapat menerapkan cara belajar yang baik">209</a></td>    
	<td><? echo $post->soal209; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h209; ?></td>
	<td><? echo $post->score209;?></td>
  </tr>
  <tr>    
	<td><a title="Sering menyalin perkerjaan teman">210</a></td>    
	<td><? echo $post->soal210; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h210; ?></td>
	<td><? echo $post->score210;?></td>
  </tr>
 
					</table>
				  </div>
				  <div class="tab-pane fade" id="b12">
				  	<table class="table table-hover table-bordered">
					  <tr>
					    <th rowspan="2"><a data-toggle="tooltip" data-original-title="Nomor Item Soal"><font size="" align="center">No</font></a></th>
					    <th colspan="4">Masalah Muda Mudi dan Asmara
					    <a href="<?  echo base_url('index.php/kelas/chartBag12/'. $post->kelas); ?>" class="pull-right" data-placement="left" data-toggle="tooltip" data-original-title="Lihat Grafik">
						    <span class="glyphicon glyphicon-stats"></span>
						    Grafik</a>
					    </th>
					  </tr>					  
					  <tr class="tooltips">
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang bermasalah untuk item tertentu">Mm</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Banyaknya responden yang mengerjakan Daftar Cek Masalah">m</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Hasil analisis per-item soal">%</a></th>
					    <th><a data-toggle="tooltip" data-original-title="Keterangan hasil analisis">KET</a></th>
					  </tr>
					   <tr>    
	<td><a title="Memikirkan masalah cinta adalah soal yang terlalu awal bagi saya">211</a></td>    
	<td><? echo $post->soal211; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h211; ?></td>
	<td><? echo $post->score211;?></td>
  </tr>  
  					<tr>    
	<td><a title="Bercinta adalah bagian dari hidup saya">212</a></td>    
	<td><? echo $post->soal212; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h212; ?></td>
	<td><? echo $post->score212;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa tabu (tidak pantas/jijik) membicarakan soal cinta">213</a></td>    
	<td><? echo $post->soal213; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h213; ?></td>
	<td><? echo $post->score213;?></td>
  </tr>
  <tr>    
	<td><a title="Bercinta dalam masa sekolah dapat menjadi dorongan/semangat untuk belajar">214</a></td>    
	<td><? echo $post->soal214; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h214; ?></td>
	<td><? echo $post->score214;?></td>
  </tr>
  <tr>    
	<td><a title="Bercinta dalam masa sekolah adalah menghancurkan semangat untuk sekolah">215</a></td>    
	<td><? echo $post->soal215; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h215; ?></td>
	<td><? echo $post->score215;?></td>
  </tr>
  <tr>    
	<td><a title="Saya mulai tertarik pada wanita/pria">216</a></td>    
	<td><? echo $post->soal216; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h216; ?></td>
	<td><? echo $post->score216;?></td>
  </tr>  
  <tr>    
	<td><a title="Saya lebih tertarik pada teman sejenis">217</a></td>    
	<td><? echo $post->soal217; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h217; ?></td>
	<td><? echo $post->score217;?></td>
  </tr>
  <tr>    
	<td><a title="Saya pernah patah hati ditinggal pacar">218</a></td>    
	<td><? echo $post->soal218; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h218; ?></td>
	<td><? echo $post->score218;?></td>
  </tr>
  <tr>    
	<td><a title="Sering membayangkan adegan cinta">219</a></td>    
	<td><? echo $post->soal219; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h219; ?></td>
	<td><? echo $post->score219;?></td>
  </tr>
  <tr>    
	<td><a title="Gemar melihat/menonton film bertemakan cinta">220</a></td>    
	<td><? echo $post->soal220; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h220; ?></td>
	<td><? echo $post->score220;?></td>
  </tr>
  <tr>    
	<td><a title="Terpaksa bercinta dengan sembunyi-sembunyi">221</a></td>    
	<td><? echo $post->soal221; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h221; ?></td>
	<td><? echo $post->score221;?></td>
  </tr>
  <tr>    
	<td><a title="Merasa jijik/muak jika ada orang yang membicarakan masalah cinta">222</a></td>    
	<td><? echo $post->soal222; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h222; ?></td>
	<td><? echo $post->score222;?></td>
  </tr>
  <tr>    
	<td><a title="Saya tidak dapat belajar bila pacar saya tidak berkirim surat">223</a></td>    
	<td><? echo $post->soal223; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h223; ?></td>
	<td><? echo $post->score223;?></td>
  </tr>
  <tr>    
	<td><a title="Sering melamun memikirkan pacar saya">224</a></td>    
	<td><? echo $post->soal224; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h224; ?></td>
	<td><? echo $post->score224;?></td>
  </tr>  
  <tr>    
	<td><a title="Orang tua melarang saya pacaran dulu">225</a></td>    
	<td><? echo $post->soal225; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h225; ?></td>
	<td><? echo $post->score225;?></td>
  </tr>
  <tr>    
	<td><a title="Pacar saya selalu mengajak ke luar rumah">226</a></td>    
	<td><? echo $post->soal226; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h226; ?></td>
	<td><? echo $post->score226;?></td>
  </tr>
  <tr>    
	<td><a title="Saya ragu-ragu terhadap pacar saya">227</a></td>    
	<td><? echo $post->soal227; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h227; ?></td>
	<td><? echo $post->score227;?></td>
  </tr>
  <tr>    
	<td><a title="Saya kesepian karena belum mempunyai pacar">228</a></td>    
	<td><? echo $post->soal228; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h228; ?></td>
	<td><? echo $post->score228;?></td>
  </tr>
  <tr>    
	<td><a title="Iri melihat kawan-kawan berpacaran">229</a></td>    
	<td><? echo $post->soal229; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h229; ?></td>
	<td><? echo $post->score229;?></td>
  </tr>
  <tr>    
	<td><a title="Memilih calon pacar adalah sukar bagi saya">230</a></td>    
	<td><? echo $post->soal230; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h230; ?></td>
	<td><? echo $post->score230;?></td>
  </tr>
  <tr>    
	<td><a title="Jodohku ditentukan oleh orang tuaku">231</a></td>    
	<td><? echo $post->soal231; ?></td>
	<td><? echo $post->jmlKelas; ?></td>
	<td><? echo $post->h231; ?></td>
	<td><? echo $post->score231;?></td>
  </tr>
					</table>
				  </div>				  			  
				</div>
	  		</div>
		</div>
      </div>
    </div>
</div>
<?php endforeach;?>	
</div>

  <div class="panel panel-warning">
    <div class="panel-heading">
    <div class="tooltips">	
      <a href="<? echo $link; ?>" class="pull-right" data-toggle="tooltip" data-original-title="Kembali ke Tabel"> 
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
      Kembali</a></div>      
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#delapan">
        <span class="glyphicon glyphicon-align-justify"></span>
          Keterangan
        </a>
      </h4>
    </div>
    <div id="delapan" class="panel-collapse collapse">
      <div class="panel-body">
        <table class="table table-condensed">
        <thead>
          <tr class="active">
            <th>No</th>
            <th>Prosentase</th>
            <th>Kategori</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>1</td>
            <td>0%</td>
            <td>A (Baik) Tidak Bermasalah</td>
          </tr>
          <tr class="success">
            <td>2</td>
            <td>1% - 10%</td>
            <td>B (Cukup Baik) Tidak Bermasalah</td>
          </tr>
          <tr class="info">
            <td>3</td>
            <td>11% - 25%</td>
            <td>C (Cukup) Agak Bermasalah</td>
          </tr>
          <tr class="warning">
            <td>4</td>
            <td>26% - 50%</td>
            <td>D (Kurang) Bermasalah</td>
          </tr>
          <tr class="danger">
            <td>5</td>
            <td>51% - 100%</td>
            <td>E (Kurang Sekali) Sangat Bermasalah</td>
          </tr>

        </tbody>
        </table>
      </div>
    </div>
  </div>