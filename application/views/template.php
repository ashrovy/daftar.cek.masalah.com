<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap.min.css'; ?>");</style>	
    <style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap-theme.css'; ?>");</style> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <link rel="stylesheet" href="<?php echo base_url() . $css;?>" type="text/css"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body background="<?php echo base_url() . $bg;?>">
  <!-- [COVER] -->
    <?php $this->load->view($cover); ?>
  <!-- [/COVER] -->
  <!-- [SLIDER] -->
    <?php $this->load->view($carousel); ?>
  <!-- [/SLIDER] -->
  <div class="container">
  <!-- [NAVIGATION] -->
  	<?php $this->load->view($navigation); ?> 
  <!-- [/NAVIGAtion] -->
  
  

  <!-- [BODY] -->
    <?php $this->load->view($body); ?>
  <!-- [/BODY] -->

  <!-- [PHOTO] -->
    <?php $this->load->view($thumbnail); ?>
  <!-- [/PHOTO] -->

  <!-- [FOOTER] -->
    <?php $this->load->view($footer); ?>
  <!-- [/FOOTER] -->
  </div>

    <script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/jquery.min.js';?>"></script>	        
    <script src="<?php echo base_url() .'js/bootstrap.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url() .'js/addons/addon.js';?>"></script> <!-- untuk saat ini mungkin addons nya akan jadi satu -->

  </body>
</html>
