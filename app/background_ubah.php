<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<?php
if(isset($_GET['alert'])){
  if($_GET['alert']=="ubah"){

    ?>
    <script type="text/javascript">
      $(function() {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          title: 'SUKSES!',
          text: 'Anda Berhasil Mengubah Data',
          footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
        }).then(function() {
          window.location = "./background";
        });
      });
    </script>
    <?php
  } }
  ?>

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
              <li class="breadcrumb-item active">Ubah Data</li>
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
                <h3 class="card-title"><i class="fa fa-edit"></i> Form Ubah Data Background Aplikasi</h3>

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
                <?php
                $r=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM identitas WHERE id = '1'"));
                ?>
                <form class='form-horizontal' role='form' method=POST action='act/background_update.php' enctype='multipart/form-data'>
                  <input type="hidden" name="id" value="<?php echo "$r[id]"; ?>">
                  <div class="row">
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label>Image Ribbon <code>Aplikasi</code></label>
                        <input type="file" class="form-control form-control-border" placeholder="Pilih File" name="bg">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tampilan Mode <code>Aplikasi</code></label>
                        <select id="mode" name="mode" class="custom-select form-control-border">
                          <option id="mode" value="<?php echo "$r[mode]"; ?>" selected></option>
                          <option id='mode' value="dark" class="<?php echo "$r[mode]";?>">Dark</option>
                          <option id='mode' value="light" class="<?php echo "$r[mode]";?>">Light</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Simpan</button>
                    <button onclick="window.location.href='./'" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
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
    $("#mode").chained("#mode");
  </script>
  <?php include "footer.php"; ?>
