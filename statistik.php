<?php include "header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2" data-aos="fade-down">
        <div class="col-md-8">
          <h4 class="m-0"> <?php echo "$nama"; ?> <code><?php echo "$judul"; ?></code></h4>
        </div><!-- /.col -->
        <div class="col-md-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="breadcrumb-item active">Detail Penyakit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <?php 
  $id = $_GET['idp'];
  $idp = encrypt_decrypt('decrypt', $id);
  $rp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM penyakit WHERE id_penyakit ='$idp'")); ?>
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-aos="zoom-out-up">
         <div class="card card-primary card-outline">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
           <script src="https://code.highcharts.com/highcharts.js"></script>
           <script src="https://code.highcharts.com/modules/exporting.js"></script>
           <script src="https://code.highcharts.com/modules/export-data.js"></script>

           <div id="grafik_pie" style="min-width: 100%; height: 450px; max-width: 600px; margin: 0 auto"></div>
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
      </div>
    </div>


  </div>

</div>
<!-- /.col-md-6 -->

</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php include "footer.php"; ?>