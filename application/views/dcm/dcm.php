

<div class="jumbotron">
      <div class="container">
        <h1>Selamat Datang <?php ?> </h1> 
        <hr size="4"/> 
        <div class="well well-sm">           
          <p>Silakan isikan pertanyaan - pertanyaan dibawah ini sesuai dengan apa yang <b>anda rasakan</b> kemudian isilah hingga <b>selesai</b>, jika tidak mengerti silakan hubungi guru atau pengawas dikelas atau lab</p>
          <footer>Jawablah pertanyaan pertanyaan dibawah dengan jujur </footer>          
        </div>
      </div>
      <small class="pull-right"><i><?php echo $page; ?></i></small>
</div>

<ul class="pagination pull-right" >
  
  <li <? echo $a; ?>><a >1</a></li>
  <li <? echo $b; ?>><a >2</a></li>
  <li <? echo $c; ?>><a >3</a></li>
  <li <? echo $d; ?>><a >4</a></li>
  <li <? echo $e; ?>><a >5</a></li>
  <li <? echo $f; ?>><a >6</a></li>
  <li <? echo $g; ?>><a >7</a></li>
  <li <? echo $h; ?>><a >8</a></li>
  <li <? echo $i; ?>><a >9</a></li>
  <li <? echo $j; ?>><a >10</a></li>
  <li <? echo $k; ?>><a >11</a></li>
  <li <? echo $l; ?>><a >12</a></li>
  
</ul>

<div class="panel panel-default">
  <div class="panel-heading"><h3><?php echo $subtitle; ?></h3></div>
    <div class="panel-body">    
      <div class="table-responsive">
        <table class="table table-hover">
        
        <thead>
          <tr>
            <th>NO</th>
            <th>DAFTAR PERTANYAAN</th>
            <th>JAWABAN ANDA</th>
          </tr>
        </thead>
        
        <form method="post" action="<?php echo $form_action; ?>" >  
        <?php $i = 0; //untuk penamaan pada soal?>
        <?php foreach($soals as $soal): ?>
        <tbody>
          <tr >
            
            <td>
            <?php echo $soal['ID_soal']; ?>
            <input name="ID_soal[]" type="hidden" value="<?php echo $soal['ID_soal'] ?>" />
            </td>

            <td> 
            <?php echo $soal['Soal'];?>
            </td>
            <td class="">
              <div><!-- class="btn-group" data-toggle="buttons" -->              
              <label class="btn btn-primary">
              <input type="radio" name="jawaban[<?php echo $i ?>]" value="1" id="radio1<? echo $i; ?>" > 
                <span class="glyphicon glyphicon-ok"></span>
              Benar 
              </label>
              <label class="btn btn-primary">
              <input type="radio" name="jawaban[<?php echo $i ?>]" value="0" checked id="radio2<? echo $i; ?>"> 
                <span class="glyphicon glyphicon-remove"></span>
              Tidak
              </label>              
              </div>
            </td>
            
            <?php $i++; ?>
          </tr>
        <?php endforeach; ?>
        </tbody>      
        </table>                  
      </div>            
    </div>
    <div class="panel-footer"><br/></div>
</div>

<div class="progress">
  <div class="progress-bar <? echo $bar; ?>" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress; ?>">
    <span class="sr-only"><?php echo $progress; ?> Complete</span> <?php echo $progress; ?> Complete
  </div>
</div>

<ul class="list-group">
  <li class="list-group-item">    
    <button type="submit" name="submit" class="btn <? echo $button; ?> btn-block pull-right"><?php echo $next; ?></button>
    <br/><br/>
  </li>
</ul>

</form>

<script type="text/javascript">
// $("#radio1").click(function() {
//     $(this).css('background-image','none')
//     .css('background-color','#FF0000') //red
// });

// $('input span').parent().click(function () {
// if($('input span').hasClass('glyphicon glyphicon-ok'))
// {
//    $('input').html('<span class="glyphicon glyphicon-ok"></span> Benar'); 
// }
// else
// {      
//     $('input').html('<span class="glyphicon glyphicon-chevron-down"></span> Tidak'); 
// }
// }); 

// function changeColor() {
//      var radio = document.getElementsByClassName('BenarRadio');
//      radio[0].style.backgroundColor = 'red';

//     }

</script>