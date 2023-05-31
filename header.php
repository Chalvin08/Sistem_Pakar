<?php
error_reporting(1);
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo "$nama"; ?> &trade;</title>
  <link rel="shortcut icon" href="assets/dist/img/<?php echo "$logo"; ?>">
  <meta name="description" content="Aplikasi <?php echo "$judul"; ?>">
  <meta name="author" content="<?php echo "$dev"; ?>">
  <meta name="generator" content="<?php echo "$dev"; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/font-awesome-4.7.0/css/font-awesome-animation.min.css">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="assets/plugins/js/jquery-2.2.1.min.js"></script>
  <!-- Navbar-->
  <link href="assets/dist/css/mystyle.css" rel="stylesheet">
  <!-- aos -->
  <link href="assets/dist/aos/aos.css" rel="stylesheet">
  <script src="assets/dist/aos/aos.js"></script>
</head>
<body class="hold-transition <?php echo "$mode"; ?>-mode layout-top-nav layout-navbar-fixed">
  <div class="wrapper">
    <?php
    if(isset($_GET['alert'])){
      if ($_GET['alert']=="gagal") {
        ?>
        <script type="text/javascript">
          $(function() {
            Swal.fire({
              icon: 'error',
              showConfirmButton: true,
              timerProgressBar: true,
              title: 'GAGAL!',
              text: 'Username atau password yang anda masukan salah!',
              footer: '<center><?php echo "$i[nama]"; ?> <br/> <?php echo "$i[judul]"; ?></center>'
            }).then(function() {
              window.location = "./";
            });
          });
        </script>
        <?php
      }             
    }
    ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-<?php echo "$mode"; ?>">
      <div class="container">
        <a href="./" class="navbar-brand">
          <img src="assets/dist/img/<?php echo "$logo"; ?>" alt="Logo" class="brand-image img-circle elevation-3" style="">
          <span class="brand-text font-weight-light"><?php echo "$nama"; ?></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav nav-links">
            <li class="nav-item">
              <a href="./" class="nav-link"><i class="fa fa-home faa-tada animated-hover"></i> Beranda</a>
            </li>
            <?php
            $id1 = '1';
            $id2 = '2';
            $id3 = '3';
            $id4 = '4';
            $id5 = '5';
            $idp1 = encrypt_decrypt('encrypt', $id1);
            $idp2 = encrypt_decrypt('encrypt', $id2);
            $idp3 = encrypt_decrypt('encrypt', $id3);
            $idp4 = encrypt_decrypt('encrypt', $id4);
            $idp5 = encrypt_decrypt('encrypt', $id5);
            ?>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-list-ol faa-tada animated-hover"></i> Data Penyakit Anak</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="detailpenyakit?idp=<?php echo "$idp1"; ?>" class="dropdown-item"><i class="fa fa-angle-double-right"></i> Demam Berdarah Dengue (DBD)</a></li>
                <li><a href="detailpenyakit?idp=<?php echo "$idp2"; ?>" class="dropdown-item"><i class="fa fa-angle-double-right"></i> Diare</a></li>
                <li><a href="detailpenyakit?idp=<?php echo "$idp3"; ?>" class="dropdown-item"><i class="fa fa-angle-double-right"></i> Asma</a></li>
                <li><a href="detailpenyakit?idp=<?php echo "$idp4"; ?>" class="dropdown-item"><i class="fa fa-angle-double-right"></i> Cacingan</a></li>
                <li><a href="detailpenyakit?idp=<?php echo "$idp5"; ?>" class="dropdown-item"><i class="fa fa-angle-double-right"></i> Malaria</a></li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="statistik" class="nav-link"><i class="fa fa-pie-chart faa-tada animated-hover"></i> Statistik</a>
            </li> 
            <li class="nav-item">
              <a href="./tentang" class="nav-link tentang"><i class="fa fa-info-circle faa-tada animated-hover"></i> Tentang</a>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          <form target='blank' action="https://www.google.co.id/search" method="get" class="sidebar-form" class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input name="q" class="form-control" type="search" placeholder="Google Search..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit" name="search">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>

          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto nav-links">
            <li class="nav-item">
              <a href="daftar" class="nav-link"><i class="fa fa-user-plus faa-vertical animated"></i> Pendaftaran</a>
            </li>
            <li class="nav-item pull-right">
              <a class="nav-link masuk pull-right" href="#masuk" role="button">
                <label class="btn badge badge-primary"><i class="fa fa-sign-in faa-horizontal animated"></i> Masuk</label>
              </a>
            </li>
          </ul>
        </div>

        <!-- Right navbar links -->

      </div>
    </nav>
    <!-- /.navbar -->
    <form role="form" action="ceklogin" method="post" autocomplete="on">
      <div class="modal fade" id="masukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-<?php echo "$mode";?>">
              <h5 class="modal-title text-uppercase small" id="exampleModalLabel1"><img src="assets/dist/img/<?php echo "$logo";?>" width="30"> Aplikasi <?php echo "$nama";?> - <?php echo "$judul";?></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
              <button type="submit" name="login" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Masuk</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <script>
      $(function()
      {
        $(document).on('click','.tentang',function(e)
        {
          e.preventDefault();
          $("#tentangModal").modal('show');
          $.post('tentang.php',
            {id_user:$(this).attr('data-id')},
            function(html)
            {
              $(".modal-body").html(html);
            });
        });
      });
    </script>
    <form action="# method="POST" class="form-horizontal" enctype="multipart/form-data">
      <div class="modal fade" id="tentangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-<?php echo "$mode";?>">
              <h5 class="modal-title text-uppercase small" id="exampleModalLabel1"><img src="assets/dist/img/<?php echo "$logo";?>" width="30"> Aplikasi <?php echo "$nama";?> - <?php echo "$judul";?></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </form>