<?php if($account):foreach($account as $user): ?>

<div class="row">
  <div class="col-sm-6 col-md-offset-3">
    <div class="thumbnail">
    <center>
      <img src="<? echo base_url()  . $user->photo; ?>" alt="" class="img-thumbnail" style=" margin:10px; padding:20px; max-height: 140px;  max-width: 150px;">
   	</center>
      <div class="caption">
        
	        <form role="form">
				<div class="form-group">
					<label for="account">Account</label>
						<ul class="list-group"> <!-- list group -->
						  	<li class="list-group-item">
						  		<span class="badge"><? echo $user->username; ?></span>
						  		Username: </li>
						  	<li class="list-group-item">
						  		<span class="badge"><? echo $user->password; ?></span>
						  		Password: </li>		  	
						</ul>
				</div>		
				<div class="form-group">
					<label for="identitas">Identitas</label>
					<ul class="list-group"> <!-- list group -->
					  	<li class="list-group-item">
					  		<span class="badge"><? echo $user->nama; ?></span>
					  		Nama: </li>
					  	<li class="list-group-item">
					  		<span class="badge"><? echo $user->umur; ?></span>
					  		Umur: </li>
					  	<li class="list-group-item">
					  		<span class="badge"><? 
					  		$sex = $user->sex;
							if ($sex == 'L') { echo "Laki-Laki";} else { echo "Perempuan"; }
					  		?></span>
					  		Jenis Kelamin</li>	  	
					</ul>
				</div>
			</form>
        <p><a href="<? echo site_url('account/edit/'.$user->nik); ?>" class="btn btn-primary" role="button">Change</a></p>
      </div>
    </div>
  </div>
</div>

	

<?php endforeach; endif;?>