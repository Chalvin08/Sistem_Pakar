<?php include "header.php"; ?>
<?php
if(isset($_GET['alert'])){
  if($_GET['alert']=="tambah"){
    ?>
    <script type="text/javascript">
      $(function() {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          title: 'SUKSES!',
          text: 'Anda Berhasil Mendaftar',
          footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
        }).then(function() {
          window.location = "./";
        });
      });
    </script>
    <?php
  } }
  ?>
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
              <li class="breadcrumb-item active">Daftar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">

      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-user-plus"></i> Form Tambah Data User/Pasien</h3>

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
                <form class='form-horizontal' role='form' method=POST action='daftar_save.php' enctype='multipart/form-data'>
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
                          <option value="3" selected>Pasien (Pengguna)</option>
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
                    <button onclick="window.location.href='./'"" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
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
  <script src="assets/dist/js/jquery-1.10.2.min.js"></script>
  <script src="assets/dist/js/jquery.chained.min.js"></script>
  <script>
    $("#jk").chained("#jk");
  </script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include "footer.php"; ?>
