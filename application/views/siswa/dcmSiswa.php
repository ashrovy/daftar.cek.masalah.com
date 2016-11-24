
<?php if($query): foreach($query as $dcms): ?>
<div class-"row">

<!-- <div class="panel-group" id="accordion"> -->

  <div class="panel panel-info">
    <div class="panel-heading tooltips">
      <h4 class="panel-title tooltips">
      <a href="<? echo $link;?>" class="pull-right" data-toggle="tooltip" data-placement="bottom" data-original-title="Kembali ke tabel">
      <span class="glyphicon glyphicon-circle-arrow-left"></span>
      Kembali</a>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >
        <span class="glyphicon glyphicon-align-justify"></span>
          Identitas Siswa
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body" style="background:none;">
        
        <div class="col-xs-6 col-md-4">
          <ul class="list-group "> <!-- list group -->
            <li class="list-group-item" >
              <span class="badge"><? echo $dcms->nis; ?></span>
                <a class="tooltips" data-toggle="tooltip" data-placement="top" data-original-title="Nomor Induk Siswa">
                <font color="black">NIS:</font></a></li>
            <li class="list-group-item tooltips">              
              <span class="badge"><? echo $dcms->nama; ?></span>                                
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" data-toggle="tooltip" data-placement="top" data-original-title="Click to Open/Close">Nama:
                </li></a>
                <div id="collapseFive" class="panel-collapse collapse">
                  <li class="list-group-item ">Panggilan:
                  <span class="badge"><? echo $dcms->panggilan; ?></span><br/>                  
                  </li>
                </div>
            <li class="list-group-item ">
            <span class="badge"><? echo $dcms->kelas; ?></span>
              Kelas:</li>    
          </ul>
        </div>

        <div class="col-xs-6 col-md-4">
          <ul class="list-group"> <!-- list group -->
            <li class="list-group-item">
              <span class="badge"><? echo $dcms->umur; ?></span>
                Umur:</li>
            <li class="list-group-item">
              <span class="badge"><? $sex = $dcms->sex;
                                  if ($sex == 'L') { echo "Laki-Laki";} else { echo "Perempuan"; }
              ?></span>
                Jenis Kelamin:</li>
            <li class="list-group-item ">
              <span class="badge"><? echo $dcms->tgl; ?></span>
                Tanggal Pelaksanaan:</li>    
          </ul>
        </div>

      </div>
    </div>
  </div>

  
  
  <div class="panel panel-default">
    <div class="panel-heading active">
      <h4 class="panel-title">
        <!-- <a href="<? // echo $link; ?>" class="pull-right">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>
        Kembali</a> -->
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <span class="glyphicon glyphicon-align-justify"></span>
          Keterangan
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        
        <div class="col-xs-12 col-md-8">
        <table class="table table-condensed">
        <thead>
          <tr class="active">
            <th>No</th>
            <th>Prosentase</th>
            <th colspan="2">Kategori</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>1</td>
            <td>0%</td>
            <td>A (Baik) </td><td>Tidak Bermasalah</td>
          </tr>
          <tr class="success">
            <td>2</td>
            <td>1% - 10%</td>
            <td>B (Cukup Baik) </td><td> Tidak Bermasalah</td>
          </tr>
          <tr class="info">
            <td>3</td>
            <td>11% - 25%</td>
            <td>C (Cukup) </td><td> Agak Bermasalah</td>
          </tr>
          <tr class="warning">
            <td>4</td>
            <td>26% - 50%</td>
            <td>D (Kurang) </td><td> Bermasalah</td>
          </tr>
          <tr class="danger">
            <td>5</td>
            <td>51% - 100%</td>
            <td>E (Kurang Sekali) </td><td> Sangat Bermasalah</td>
          </tr>

        </tbody>
        </table>
        </div>

      </div>
    </div>
  </div>


  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title tooltips">
        <a class="pull-right" data-toggle="modal" data-target="#myModal" >
        <span class="glyphicon glyphicon-stats" data-toggle="tooltip" data-placement="left" data-original-title="Lihat Diagram/Grafik"></span>        
        Grafik</a>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
        <span class="glyphicon glyphicon-align-justify"></span>
          Profil Masalah Individu
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in">
      <div class="panel-body">
        
        <div class="col-xs-12 col-md-8">
        <table class="table table-hover table-bordered">
        <thead class="table success">
          <tr class="success tooltips">
            <th>
            <a data-toggle="collapse" data-parent="#accordion" title="Nomor">
            No</th></a>             
            </div>

            <th>Topik Masalah</th>
            <th><a data-toggle="tooltip" data-placement="top" data-original-title="Banyak responden yang bermasalah pada Item tertentu">nM</a></th>
            <th><a data-toggle="tooltip" data-placement="top" data-original-title="Banyak responden yang mengerjakan Daftar Cek Masalah">n</a></th>
            <th><a data-toggle="tooltip" data-placement="top" data-original-title="Hasil Analisis per Item soal">%</a></th>
            <th><a data-toggle="tooltip" data-placement="top" data-original-title="Keterangan hasil analisis">Ket</a></th>
          </tr>
        </thead>
        <tbody class="table default">
          <tr>
            <td>1</td>
            <th>Masalah Kesehatan</th>
            <td><?php echo $dcms->b1; ?></td>
            <td><?php echo $dcms->j1; ?></td>
            <td><?php echo $dcms->h1; ?></td>
            <td><?php echo $dcms->score1; ?></td>
          </tr>

          <tr>
            <td>2</td>
            <th>Masalah Keadaan Kehidupan Ekonomi</th>
            <td><?php echo $dcms->b2; ?></td>
            <td><?php echo $dcms->j2; ?></td>
            <td><?php echo $dcms->h2; ?></td>
            <td><?php echo $dcms->score2; ?></td>
          </tr>

          <tr>
            <td>3</td>
            <th>Masalah Keluarga</th>
            <td><?php echo $dcms->b3; ?></td>
            <td><?php echo $dcms->j3; ?></td>
            <td><?php echo $dcms->h3; ?></td>
            <td><?php echo $dcms->score3; ?></td>
          </tr>

          <tr>
            <td>4</td>
            <th>Masalah Agama dan Moral</th>
            <td><?php echo $dcms->b4; ?></td>
            <td><?php echo $dcms->j4; ?></td>
            <td><?php echo $dcms->h4; ?></td>
            <td><?php echo $dcms->score4; ?></td>
          </tr>

          <tr>
            <td>5</td>
            <th>Masalah Pribadi</th>
            <td><?php echo $dcms->b5; ?></td>
            <td><?php echo $dcms->j5; ?></td>
            <td><?php echo $dcms->h5; ?></td>
            <td><?php echo $dcms->score5; ?></td>
          </tr>

          <tr>
            <td>6</td>
            <th>Masalah Hubungan Sosial dan Berorganisasi</th>
            <td><?php echo $dcms->b6; ?></td>
            <td><?php echo $dcms->j6; ?></td>
            <td><?php echo $dcms->h6; ?></td>
            <td><?php echo $dcms->score6; ?></td>
          </tr>

          <tr>
            <td>7</td>
            <th>Masalah Rekreasi/Hobi dan Waktu Luang</th>
            <td><?php echo $dcms->b7; ?></td>
            <td><?php echo $dcms->j7; ?></td>
            <td><?php echo $dcms->h7; ?></td>
            <td><?php echo $dcms->score7; ?></td>
          </tr>

          <tr>
            <td>8</td>
            <th>Masalah Penyesuaian Terhadap Lingkungan Sekolah</th>
            <td><?php echo $dcms->b8; ?></td>
            <td><?php echo $dcms->j8; ?></td>
            <td><?php echo $dcms->h8; ?></td>
            <td><?php echo $dcms->score8; ?></td>
          </tr>

          <tr>
            <td>9</td>
            <th>Masalah Penyesuaian Terhadap Kurikulum</th>
            <td><?php echo $dcms->b9; ?></td>
            <td><?php echo $dcms->j9; ?></td>
            <td><?php echo $dcms->h9; ?></td>
            <td><?php echo $dcms->score9; ?></td>
          </tr>

          <tr>
            <td>10</td>
            <th>Masalah Masa Depan yang Berhubungan dengan Jabatan</th>
            <td><?php echo $dcms->b10; ?></td>
            <td><?php echo $dcms->j10; ?></td>
            <td><?php echo $dcms->h10; ?></td>
            <td><?php echo $dcms->score10; ?></td>
          </tr>

          <tr>
            <td>11</td>
            <th>Masalah Kebiasaan Belajar</th>
            <td><?php echo $dcms->b11; ?></td>
            <td><?php echo $dcms->j11; ?></td>
            <td><?php echo $dcms->h11; ?></td>
            <td><?php echo $dcms->score11; ?></td>
          </tr>

          <tr>
            <td>12</td>
            <th>Masalah Muda Mudi dan Asmara</th>
            <td><?php echo $dcms->b12; ?></td>
            <td><?php echo $dcms->j12; ?></td>
            <td><?php echo $dcms->h12; ?></td>
            <td><?php echo $dcms->score12; ?></td>
          </tr>
        </tbody>
        </table>
        
        </div>


        </div>
        <div class="panel-footer panel-info tooltips">
        <a class="pull-right" data-toggle="tooltip" data-placement="left" data-original-title="Download Hasil Analsis" href="<? echo base_url() . 'index.php/siswa/download/' . $dcms->nis; ?>">
        <span class="glyphicon glyphicon-download-alt"></span>
        Download</a>
        <br/>
        </div>
      </div>
  
  </div>  
<!-- </div> -->
<div class="col-md-4 col-md-offset-4">
 

  

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Grafik Masalah Individu</h4>
      </div>
      <div class="modal-body">        
        <iframe src="<? echo site_url('siswa/dopeChart'); ?>" width="100%" height="450"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>

<?php endforeach; endif; ?>