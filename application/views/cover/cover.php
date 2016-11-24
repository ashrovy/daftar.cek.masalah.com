<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner"><font color="black">
              <h3 class="masthead-brand">Selamat Datang</h3></font>
            </div>
          </div>

          <div class="inner cover"><font color="Black">
            <h1 class="cover-heading">Sistem Informasi Daftar Cek Masalah</h1>
            <p class="lead">Selamat Datang di Sistem Informasi Daftar Cek Masalah Siswa. Aplikasi khusus untuk para murid dan guru Bimbingan dan Konseling di sekolah, login sebagai <i>siswa</i> untuk <u>responden</u> dan login sebagai <i>guru</i> untuk menganalisis masalah siswa.</p></font>
            <p class="lead">
              <a href="<? echo site_url('registrasi'); ?>" class="btn btn-lg btn-success">Login Siswa</a>
              <a href="<? echo site_url('login');?>" class="btn btn-lg btn-primary">Login Guru</a> 
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner"><font color="black">
              <p>&copy; 2014 Ashrovy Company, Inc. &middot; <a href="http://www.facebook.com/ashrovy">Contact Me</a> for <u>register</u> &middot; <a href="http://www.twitter.com/ashrovy">Follow Me</a></p>
              </font>
            </div>
          </div>

        </div>

      </div>

    </div>




<!-- Modal jangan dipakai dulu -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <iframe src="<? echo site_url('registrasi');?>" width="100%" height="800"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>
