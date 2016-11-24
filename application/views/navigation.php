<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
              <span class="glyphicon glyphicon-home"></span>
                HOME
              <!-- <span class="glyphicon glyphicon-home"></span> -->
              </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
              
              <!-- [RENCANA] dapat melakukan searching ke seluruh [WEBSITE] -->
              <!-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form> -->

              
              <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-wrench"></span>
                  Setting <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">

                    <li><a href="<?php echo site_url('account/dataGuru'); ?>">
                    <span class="glyphicon glyphicon-user"></span>
                    Account Setting</a></li>
                    
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('login/logout'); ?>">
                    <span class="glyphicon glyphicon-log-out"></span>
                    Log out</a></li>
                  </ul>
                </li>
              </ul>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav navbar-right">
                
                <li role="presentation" class="divider"></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-tasks"></span>
                   Olah Data<b class="caret"></b>
                   </a>
                  <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('siswa/dataSiswa'); ?>">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    Olah Data Siswa</a></li>
                    <li><a href="<?php echo site_url('kelas/dataKelas'); ?>">
                    <span class="glyphicon glyphicon-briefcase"></span>
                    Olah Data Kelas</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('tahun_ajaran'); ?>">
                    <span class="glyphicon glyphicon-calendar"></span>
                    Olah Data Tahun Ajaran</a></li>                    
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="<? echo site_url('soal'); ?>" class="">
                  <span class="glyphicon glyphicon-align-justify"></span>
                  Daftar Pertanyaan
                  </a>
                </li>
              </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
</div>