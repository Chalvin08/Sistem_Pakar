<?php include "user_header.php"; ?>
<?php include "user_navbar.php"; date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
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
            <li class="breadcrumb-item active">Diagnosa</li>
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
              <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form Pertanyaan Diganosa Penyakit</h3>

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
             $ru=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user WHERE username = '$_SESSION[username]'"));
             ?>
             <div class="row">
               <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pasien <code>Wajib diisi</code></label>
                  <input type="text" class="form-control form-control-border" value="<?php echo "$ru[nama]"; ?>" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal Pemeriksaan <code>Penyakit</code></label>
                  <input type="date" class="form-control form-control-border" value="<?php echo date('Y-m-d'); ?>" disabled>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <center>
                <h4 class="text-capitalize">Silahkan <i class="fa fa-check-square"></i> centang gejala-gejala yang anda alami di bawah ini!</h4>
                <form class="col-6" method="POST" action="prosesdiagnosa">
                <!-- <form class="col-6" method="POST" action="data_diagnosa_penyakit_proses.php"> -->
                  <div style="overflow: scroll; height: 100%;">
                    <?php
                    $qry="select * from tb_gejala_1";
                    $data=mysqli_query($con,$qry);
                    while ($d=mysqli_fetch_array($data)) {
                      ?>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input style="width: 20px;height: 100%;" type="checkbox" aria-label="Checkbox for following text input" value="<?=$d['kode']?>" name="<?=$d['id']?>">
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?=$d['gejala']?> - <?=$d['kode']?>">
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="submit"><i class="fa fa-search-plus faa-pulse animated"></i> Proses Diagnosa</button>
                </form>
              </center>

            </center>
          </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer small">
          <small><i class="fa fa-info-circle"></i> Harap menjawab pertanyaan-pertanyaan dengan benar untuk mendapatkan hasil diagnosa penyakit!</small>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>
<!-- /.content -->
</div>

<?php include "user_footer.php"; ?>
