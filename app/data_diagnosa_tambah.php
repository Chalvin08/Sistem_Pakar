<?php include "header.php"; ?>
<?php include "navbar.php"; date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
echo date('h:i:s'); // menampilkan jam sekarang?>
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
            <li class="breadcrumb-item active">Tambah Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form Tambah Data User Pasien Diganosa Penyakit</h3>

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
             <form class='form-horizontal' role='form' method='GET' action='diagnosapenyakit' enctype='multipart/form-data'>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Pasien <code>Wajib diisi</code></label>
                    <select class="custom-select form-control-border" name='ids' required>
                      <option value="" selected>Pilih ID - Nama Pengguna</option>
                      <?php
                      $tampil = mysqli_query($con, "SELECT * FROM user ");
                      while($row=mysqli_fetch_array($tampil)) {
                        ?>
                        <option value="<?php echo $row['id_user']; ?>"><?php echo $row['nama']; ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Pemeriksaan <code>Penyakit</code></label>
                    <input type="date" class="form-control form-control-border" value="<?php echo date('Y-m-d'); ?>" disabled>
                  </div>
                </div>
              </div>
              <small class="text-danger"><i class="fa fa-info-circle"></i> Silahkan klik simpan untuk melanjutkan ke pemeriksaan penyakit!</small> 
            </div>

            <!-- /.card-body -->
            <div class="card-footer small">
              <center>
                <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i> Simpan</button>
                <button onclick="window.location.href='./datadiagnosa'" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
              </center>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>

<?php include "footer.php"; ?>
