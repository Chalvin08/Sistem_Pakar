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
              <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form Tambah Data Penyakit</h3>

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
              <form class='form-horizontal' role='form' method=POST action='act/data_penyakit_save.php' enctype='multipart/form-data'>
                <div class="row">
                  <div class="col-md-6"> 
                    <div class="form-group">
                      <label>Ganti Photo </label>
                      <input type="file" class="form-control form-control-border" placeholder="Pilih File" name="gambar" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Penyakit</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Nama Penyakit" name="nm_penyakit" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Penyebab <code>Peyakit</code></label>
                      <textarea id="content2" name="penyebab" rows="10" placeholder="Tuliskan Penyebab Penyakit" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Pencegahan <code>Peyakit</code></label>
                      <textarea id="content1" name="pencegahan" rows="10" placeholder="Tuliskan Cara Pencegahan Penyakit" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kode Penyakit</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Kode Penyakit" name="kd_penyakit" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Penanganan Penyakit</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Penanganan Penyakit" name="penanganan" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Simpan</button>
                  <button onclick="window.location.href='./datapenyakit'" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
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
<!-- /.content-wrapper -->
<script src="../assets/dist/js/jquery-1.10.2.min.js"></script>
<script src="../assets/dist/js/jquery.chained.min.js"></script>
<script>
  $("#jk").chained("#jk");
</script>

<?php include "footer.php"; ?>
