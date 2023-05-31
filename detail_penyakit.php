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
        <div class="col-md-5" data-aos="zoom-out-right">
          <div class="position-relative">
            <img src="assets/dist/img/<?php echo "$rp[gambar]"; ?>" alt="Photo 2" class="img-thumbnail">
            <div class="ribbon-wrapper ribbon-xl">
              <div class="ribbon bg-primary text-sm">
               <?php echo "$nama"; ?>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-7" data-aos="zoom-in-left">
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3"><i class="fa fa-bug"></i> <?php echo "$rp[kd_penyakit]"; ?> - <?php echo "$rp[nm_penyakit]"; ?></h3>
            <ul class="nav nav-pills ml-auto p-2 small">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Penyebab</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Pencegahan</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Penanganan</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <h3>Penyebab Penyakit <?php echo "$rp[nm_penyakit]"; ?></h3>
                <?php echo "$rp[penyebab]"; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <h3>Pencegahan Penyakit <?php echo "$rp[nm_penyakit]"; ?></h3>
                <?php echo "$rp[pencegahan]"; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <h3>Penanganan Penyakit <?php echo "$rp[nm_penyakit]"; ?></h3>
                <?php echo "$rp[penanganan]"; ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
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