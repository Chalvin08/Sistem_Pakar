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
              <h3 class="card-title"><i class="fa fa-user-plus"></i> Form Tambah Data User</h3>

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
              <form class='form-horizontal' role='form' method=POST action='act/data_user_save.php' enctype='multipart/form-data'>
                <div class="row">
                  <div class="col-md-6"> 
                    <div class="form-group">
                      <label>Pas Photo </label>
                      <input type="file" class="form-control form-control-border" placeholder="Pilih File" name="gambar">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Nama Lengkap" name="nama" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Nama Tempat Lahir" name="tmp_lahir" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control form-control-border" placeholder="Tuliskan Tanggal Lahir" name="tgl_lahir" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select name="jk" class="custom-select form-control-border" required>
                        <option value="0" selected> Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan" >Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Alamat <code>Lengkap</code></label>
                      <textarea type="text" class="form-control form-control-border" style="height: 90px;" name="alamat" placeholder="Tuliskan Alamat Lengkap" required></textarea> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Level User</label>
                        <select name="id_level" class="custom-select form-control-border" required>
                          <option value="0" selected> Pilih Level User</option>
                          <option value="1">Pakar</option>
                          <option value="3" >Pengguna</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Username <code>Digunakan Sebagai Username Login/Masuk</code></label>
                        <input type="text" class="form-control form-control-border" placeholder="Tuliskan Username" name="username" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nomor Handphone <code>Digunakan Sebagai Password Login/Masuk</code></label>
                        <input type="number" class="form-control form-control-border" placeholder="Tuliskan Nomor Handphone" name="hp" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Simpan</button>
                    <button onclick="window.location.href='./datauser'"" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
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
