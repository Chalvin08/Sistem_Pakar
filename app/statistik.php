<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <b class="text-secondary"><img class="animation__shake" src="../assets/dist/img/<?php echo "$logo"; ?>" alt="Logo" height="30" width="30"><?php echo "$nama"; ?></b>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./"><i class="fa fa-dashboard"></i></a></li>
            <li class="breadcrumb-item active">Statistik Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-pie-chart"></i> Statistik Data Hasil Diagnosa</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>

              <div id="grafik_pie" style="min-width: 100%; height: 400px; max-width: 600px; margin: 0 auto"></div>
              <?php

              $hasil1 = mysqli_query($con,"SELECT count(*) as jum FROM hasil WHERE id_penyakit='P1'");
              $data1 = mysqli_fetch_row($hasil1);
              $jumlah1 = $data1[0];

              $hasil2 = mysqli_query($con,"SELECT count(*) as jum FROM hasil WHERE id_penyakit='P2'");
              $data2 = mysqli_fetch_row($hasil2);
              $jumlah2 = $data2[0];

              $hasil3 = mysqli_query($con,"SELECT count(*) as jum FROM hasil WHERE id_penyakit='P3'");
              $data3 = mysqli_fetch_row($hasil3);
              $jumlah3 = $data3[0];

              $hasil4 = mysqli_query($con,"SELECT count(*) as jum FROM hasil WHERE id_penyakit='P4'");
              $data4 = mysqli_fetch_row($hasil4);
              $jumlah4 = $data4[0];

              $hasil5 = mysqli_query($con,"SELECT count(*) as jum FROM hasil WHERE id_penyakit='P5'");
              $data5 = mysqli_fetch_row($hasil5);
              $jumlah5 = $data5[0];

              ?>
              <script type="text/javascript">

                Highcharts.chart('grafik_pie', {
                  chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                  },
                  title: {
                    text: 'Grafik Pie Hasil Data Diagnosa Penyakit Anak Tahun <?php $tgl=date('Y'); echo $tgl; ?>'
                  },
                  tooltip: {
                    pointFormat: '{series.name}: <b>{point.y} ({point.percentage:.1f}%)</b>'
                  },
                  plotOptions: {
                    pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y} ',
                        style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                      }
                    }
                  },
                  series: [{
                    name: 'Jumlah',
                    colorByPoint: true,
                    data: [{
                      name: 'DBD',
                      y: <?php echo $jumlah1 = $data1[0]; ?>
                    }, 
                    {
                      name: 'Diare',
                      y: <?php echo $jumlah2 = $data2[0]; ?>
                    }, 
                    {
                      name: 'Asma',
                      y: <?php echo $jumlah3 = $data3[0]; ?>
                    }, 
                    {
                      name: 'Cacing',
                      y: <?php echo $jumlah4 = $data4[0]; ?>
                    }, 
                    {
                      name: 'Malaria',
                      y: <?php echo $jumlah5 = $data5[0]; ?>
                    }]
                  }]
                });
              </script>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="../assets/dist/js/jquery-1.10.2.min.js"></script>
  <script src="../assets/dist/js/jquery.chained.min.js"></script>
  <script>
    $("#jk").chained("#jk");
  </script>

  <?php include "footer.php"; ?>
