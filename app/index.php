<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<?php
if(isset($_GET['alert'])){
  if($_GET['alert']=="masuk"){

    ?>
    <script type="text/javascript">
      $(function() {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          title: 'SUKSES!',
          text: 'Anda Berhasil Masuk Aplikasi',
          footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
        }).then(function() {
          window.location = "./";
        });
      });
    </script>
    <?php
  } }
  ?>
  <?php
  if(isset($_GET['alert'])){
    if($_GET['alert']=="keluar"){

      ?>
      <script type="text/javascript">
        $(function() {
          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            title: 'SUKSES!',
            text: 'Anda Berhasil Keluar Dari Aplikasi',
            footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
          }).then(function() {
            window.location = "./logout";
          });
        });
      </script>
      <?php
    } }
    ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <span class="info-box-icon bg-primary"> <img class="animation__shake" src="../assets/dist/img/<?php echo "$logo"; ?>" alt="AdminLTELogo" height="40" width="40"></span>

                <div class="info-box-content">
                  <span class="info-box-text">Selamat datang di <?php echo "$nama"; ?> - <?php echo "$judul"; ?></span>
                  <span class="small"><?php echo "$judul"; ?> <?php echo "$tentang"; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="position-relative">
                <img src="../assets/dist/img/<?php echo "$bg"; ?>" alt="Photo 2" class="img-thumbnail">
                <div class="ribbon-wrapper ribbon-xl">
                  <div class="ribbon bg-primary text-xs">
                   <?php echo "$nama"; ?>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <h3 class="btn btn-sm btn-block btn-primary text-uppercase">
                  <marquee>
                    <i class="fa fa-info-circle"></i> INFORMASI UMUM <?php echo "$nama"; ?> - TANGGAL: 
                    <span><?php
                    $tanggal = date ("d");
                    $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
                    $bulan = $bulan[date("n")];
                    $tahun = date("Y");
                    echo $tanggal ." ". $bulan ." ". $tahun;
                    date_default_timezone_set('Asia/Singapore');
                    $jam=date("H:i");
                    echo " PUKUL: ". $jam." "."";
                    $a = date ("H");
                    if (($a>=1) && ($a<=10)){
                      echo " Selamat Pagi";
                    }
                    else if(($a>10) && ($a<=13))
                    {
                      echo " Selamat Siang";
                    }
                    else if (($a>13) && ($a<=15))
                    {
                      echo " Selamat Sore";
                    }
                    else if (($a>15) && ($a<=17))
                    {
                      echo " Selamat Petang";
                    }
                    else { echo " Selamat Malam";
                  }
                  ?>
                </span>
              </marquee>
            </h3>
          </div>
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php $rpenyakit = mysqli_num_rows(mysqli_query($con, "SELECT * FROM penyakit")); echo "$rpenyakit"; ?><sup style="font-size: 15px">Data</sup></h3>

                <p>Penyakit</p>
              </div>
              <div class="icon">
                <i class="fa fa-bug faa-spin animated"></i>
              </div>
              <a href="datapenyakit" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php $rgejala = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_gejala_1")); echo "$rgejala"; ?><sup style="font-size: 15px">Data</sup></h3>

                <p>Gejala</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-ol faa-pulse animated"></i>
              </div>
              <a href="datagelaja" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php $rhasil = mysqli_num_rows(mysqli_query($con, "SELECT * FROM hasil")); echo "$rhasil"; ?><sup style="font-size: 15px">Data</sup></h3>

                <p>Hasil Diagnosa</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-md faa-horizontal animated"></i>
              </div>
              <a href="datapengetahuan" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruser = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user")); echo "$ruser"; ?><sup style="font-size: 15px">Data</sup></h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users faa-flash animated"></i>
              </div>
              <a href="datausers" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include "footer.php"; ?>
