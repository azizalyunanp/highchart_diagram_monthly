<div class="main-content">
<div class="page-content">
	<div class="page-header">
		<h1>
		DIAGRAM
		</h1>
	</div><!-- /.page-header -->
<!--CONTENT-->
	<div class="row">
	<div id="report">
   </div>
   <script type="text/javascript">
        $(function () {
        var chart;
        $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
               renderTo: 'report',
               type: 'lin'e,
               marginRight: 130,
               marginBottom: 25
            },
            title: {
               text: 'Penjualan Barang',
               x: -20 //center
            },
            subtitle: {
               text: 'Makanan',
               x: -20
            },
            xAxis: {
               categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yAxis: {
               title: {
                  text: 'Angka penjualan ( x 1000 )'
               },
            },
           	plotOptions: {
			    lin:e {
			        dataLabels: {
			            enabled: true,
			            allowOverlap: true
			        }
			     }
				},
            tooltip: {
               formatter: function() {
                  return '<b>'+ this.series.name +'</b><br/>'+
                  this.x +': '+ this.y +' penjualan (dalam ribuan)';
               }
            },
            legend: {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'top',
               x: -10,
               y: 100,
               borderWidth: 0
            },
            series:             
            [
            <?php
            $query = $this->M_diagram->barang()->result();
            foreach($query as $q) {
                $nId = $q->id;
                $nama_brg = $q->nama_brg;
                $sql_   = $this->M_diagram->laporan($nId)->result();
                  $data = "";
                  $bulan = "";
                 foreach($sql_ as $s) {
                    $kel  = $s->totals;
                    $data = $data . "," . $kel;
                }
                  $data = substr( $data , 1 , strlen( $data ) );
                  ?>
                  {
                      name: '<?php echo $q->nama_brg; ?>',
                      data: [<?php echo $data; ?>]
                  },
                  <?php } ?>
            ],

        });
      });
   });
        </script>
	</div>
<!--END CONTENT-->
</div>
</div>