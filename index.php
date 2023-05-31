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
            <li class="breadcrumb-item active"><a href="./"><i class="fa fa-home"></i> Beranda</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right">
            <div class="position-relative">
              <img src="assets/dist/img/<?php echo "$bg"; ?>" alt="Photo 2" class="img-thumbnail">
              <div class="ribbon-wrapper ribbon-xl">
                <div class="ribbon bg-primary text-xs">
                 <?php echo "$nama"; ?>
               </div>
             </div>
           </div>
         </div>

         <div class="col-lg-6"  data-aos="fade-left">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-bold"><i class="fa fa-flag"></i> Selamat Datang di Aplikasi <?php echo "$nama"; ?></h5>
              <p class="card-text">
                <?php echo "$judul"; ?> <?php echo "$tentang"; ?> Silahkan klik tombol <a href="daftar" class="card-link"><b><i class="fa fa-user-plus"></i> Daftar</b></a> untuk mendiagnosa penyakit pada anak.
              </p>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title text-bold"><i class="fa fa-info-circle"></i> Informasi Penyakit</h5>
              <p class="card-text">
               Untuk melihat Informasi jenis-jenis penyakit pada anak, silahkan klik link tautan di bawah ini:
             </p>
             <a href="detailpenyakit?idp=<?php echo "$idp1"; ?>" class="card-link small"><i class="fa fa-gg-circle"></i> Demam Berdarah Dengue(DBD)</a>
             <a href="detailpenyakit?idp=<?php echo "$idp2"; ?>" class="card-link small"><i class="fa fa-gg-circle"></i> Diare</a>
             <a href="detailpenyakit?idp=<?php echo "$idp3"; ?>" class="card-link small"><i class="fa fa-gg-circle"></i> Asma</a>
             <a href="detailpenyakit?idp=<?php echo "$idp4"; ?>" class="card-link small"><i class="fa fa-gg-circle"></i> Cacingan</a>
             <a href="detailpenyakit?idp=<?php echo "$idp5"; ?>" class="card-link small"><i class="fa fa-gg-circle"></i> Malaria</a>
           </div>
         </div><!-- /.card -->
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