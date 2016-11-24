<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/jquery.min.js';?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/highcharts.js';?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/exporting.js';?>"></script>

<style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap.min.css'; ?>");</style>  
<style type="text/css">@import url("<?php echo base_url() . 'css/bootstrap-theme.css'; ?>");</style> 
<style type="text/css">
    body {
        background: none;
    }
</style>
<body background="<? echo $bg; ?>">

        <!-- <div id="charting" style="min-width: 310px; height: 400px; margin: 0 auto"></div> -->
        <!-- <div class="row"> <div class="col-md-9"> -->
        <div style="width: 710px; height: 500px; margin: 0 auto">
        <div id="charting" style="width: 710px; height: 500px; margin: 0 auto"></div>
        <a href="<? echo site_url('siswa/dataTable'); ?>" class="btn btn-info">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>
        kembali
        </a>
        <a id="charting_download" class="btn btn-info pull-right">
            <span class="glyphicon glyphicon-circle-arrow-down"></span>
        Download 
        </a>
        </div>
        <!-- </div> </div> -->
        
        <!-- script for create chart -->
        
        <script type="text/javascript">
        $(function () {
        $('#charting').highcharts({
        //chart type :availabe;bar,line,pie, column
        chart: {
            type: 'column',
            borderWidth: 2,
            borderRadius: 5
        },
        
        
        legend:{ //legend setup
            borderRadius: 5,
            borderWidth: 2,
            // //align: 'left', //position legend, left, right, or center
            // //floating: true, //agar posisi legend menindih chart
            // verticalAlign: 'down',
            // x: -125, //horizontalisasi position legend
            // y: 350,//tinggi legend axis y position
            // layout: 'vertical',//tampilan per nama legend
            // itemMarginTop: 5, //margin top legend
            // itemMarginBottom: 5, //margin bottom legend
            // //itemDistance: 10 jarak masing" antar nama legend
            // //itemWidth: 80 mengatur lebar legend
        },
        
        tooltip: {
            crosshairs: [true,true],
            formatter: function() {
                return '' + this.series.name + ' Bagian (' + this.x + ')' + '<br/>' + 'Tingkat Masalah: <b>' +this.y + '%</b>';
            } //show x and y focus line when hover
        },
        
        title: {
            <?  foreach($ket as $nama): ?>
            text: '<b>Grafik Masalah Individu</b> <br/> <b><? echo $nama->nama; ?></b>'
            <?  endforeach;   ?>
        },
        
        subtitle: {
            text: '<i>Source: Sistem Informasi Daftar Cek Masalah Siswa</i>'
        },
            
        
        xAxis: {
            title:{
                text:'Topik Masalah'
            },
        
            categories: [<?php foreach ($cat as $key => $val) { echo "'$val', "; }?>]
        },

            
        yAxis: {
            title: {
                text: 'Tingkat Masalah'
                }
        },

        
        plotOptions: {
            line: {
            dataLabels: {
                //enabled: true
                //show label data per dot
            },
                // enableMouseTracking: true
                //show anda hide tooltip information data
            }
        },
                    
            //render data
        series: [{
            name: 'Masalah siswa',
            data: [<?php foreach ($series as $key => $val) { echo "$val, "; }?>]
                }],
        exporting: {
            enabled: true
        }
            });
        
        $("#charting_download").click(function(){
        var chart = $('#charting').highcharts();
            chart.exportChart({
                type: 'application/pdf',
                filename: 'my-pdf'
            });
        });

        });
        </script>
        

</body>