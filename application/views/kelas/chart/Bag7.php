<html>
<head>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script> -->
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/jquery.min.js';?>"></script>        
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/highcharts.js';?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/exporting.js';?>"></script>
<script type="text/javascript">
$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'column',
            borderWidth: 2,
            borderRadius: 5
        },
        title: {
            text: '<b>Grafik Masalah Kelompok</b>'
        },
        subtitle: {
            text: '<i>Masalah Rekreasi/Hobi dan Waktu Luang</i>'
        },
        xAxis: {
            categories:  [<?php foreach ($cat as $key => $val) { echo "'$val', "; }?>]
        },
        yAxis: {
            title: {
                text: 'Tingkat Masalah'
            }
        },
        tooltip: {
            crosshairs: [true,true],
            formatter: function() {
                return '' + this.series.name + ' Nomor (' + this.x + ')' + '<br/>' + 'Tingkat Masalah: <b>' +this.y + '%</b>';
        }},
               
        
        series: [{
            name: 'Item Masalah',
            data: [<?php foreach ($series as $key => $val) { echo "$val, "; }?>]
        }],
        exporting: {
            enabled: true
        }
    });
    $("#charting_download").click(function(){
        var chart = $('#container').highcharts();
            chart.exportChart({
                type: 'application/pdf',
                filename: 'Grafik Masalah Rekreasi/Hobi dan Waktu Luang'
            });
        });
});
</script>
<style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap.min.css'; ?>");</style>  
<style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap-theme.css'; ?>");</style> 
<style type="text/css">
body{
    background: none;
}
 </style>

</head>
<body background="<? echo $bg; ?>">
    <div id="container" style="width:100%; height:400px;"></div>    
    <? foreach($ket as $dat): ?>
    <a href="<? echo base_url('index.php/kelas/dcmKelas/' . $dat->kelas);?>" class="btn btn-info ">
    <span class="glyphicon glyphicon-circle-arrow-left"></span>
    Kembali Ke Analisis</a>
    <? endforeach;?>
    <a id="charting_download" class="btn btn-info pull-right">
    <span class="glyphicon glyphicon-circle-arrow-down"></span>
    Download</a>
</body>
</html>