<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/jquery.min.js';?>"></script>        
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/highcharts.js';?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/highcharts/exporting.js';?>"></script>

<body background="<? echo $bg; ?>">

        <!-- <div id="charting" style="min-width: 310px; height: 400px; margin: 0 auto"></div> -->
        <div id="charting" style="width: 510px; height: 400px; margin: 0 auto"></div>

        <!-- script for create chart -->
        <script type="text/javascript">
        $(function () {
        $('#charting').highcharts({
        //chart type :availabe;bar,line,pie, column
            chart: {
                type: 'column',
                borderWidth: 0,
                borderRadius: 0
            },
            //legend setup
            legend:{
                // borderRadius: 5,
                // borderWidth: 2,
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
            }
            //show x and y focus line when hover
            },
            //tooltip: {
            //    crosshairs: [false, true] //just show y-axis line only when hover
            //},
            //title
            title: {
                text: '<b>Grafik Masalah Individu</b>'
            },
            //subtitle
            subtitle: {
                // text: '<i>Source: Sistem Informasi Daftar Cek Masalah Siswa</i>'
            },
            
            //horizontal title x axis
            xAxis: {
            title:{
                // x: -125, //horizontalisasi position legend
                // y: 350,//tinggi legend axis y position
                // text:'Topik Masalah'
            },
            categories: [<?php foreach ($cat as $key => $val) { echo "'$val', "; }?>]
            },

            //vertical title y axis
            yAxis: {
            title: {
                text: 'Tingkat Masalah'
                }
            },

            //plot option chart
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
        });
        </script>
</body>