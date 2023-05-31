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
              <h3 class="card-title"><i class="fa fa-edit"></i> Form Ubah Data Pengetahuan</h3>

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
              $ide = $_GET['id'];
              $idd = encrypt_decrypt('decrypt', $ide);
              $r=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala INNER JOIN penyakit ON tb_gejala.id = penyakit.id_penyakit WHERE id = '$idd'"));
              ?>
              <form class='form-horizontal' role='form' method=POST action='act/data_pengetahuan_update.php' enctype='multipart/form-data'>
                <input type="hidden" name="id" value="<?php echo "$r[id]"; ?>">
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kode dan Nama Penyakit</label>
                      <input type="text" class="form-control form-control-border" placeholder="Tuliskan Nama Penyakit" value="<?php echo "$r[kd_penyakit]"; ?> - <?php echo "$r[nm_penyakit]"; ?>" disabled>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO1</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G01]"; ?>" name="G01">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO2</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G02]"; ?>" name="G02">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO3</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G03]"; ?>" name="G03">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO4</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G04]"; ?>" name="G04">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO5</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G05]"; ?>" name="G05">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO6</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G06]"; ?>" name="G06">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO7</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G07]"; ?>" name="G07">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO8</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G08]"; ?>" name="G08">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>GO9</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G09]"; ?>" name="G09">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G10</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G10]"; ?>" name="G10">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G11</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G11]"; ?>" name="G11">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G12</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G12]"; ?>" name="G12">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G13</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G13]"; ?>" name="G13">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G14</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G14]"; ?>" name="G14">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G15</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G15]"; ?>" name="G15">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G16</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G16]"; ?>" name="G16">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G17</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G17]"; ?>" name="G17">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G18</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G18]"; ?>" name="G18">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G19</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G19]"; ?>" name="G19">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G20</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G20]"; ?>" name="G20">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G21</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G21]"; ?>" name="G21">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G22</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G22]"; ?>" name="G22">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G23</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G23]"; ?>" name="G23">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G24</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G24]"; ?>" name="G24">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G25</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G25]"; ?>" name="G25">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G26</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G26]"; ?>" name="G26">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G27</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G27]"; ?>" name="G27">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G28</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G28]"; ?>" name="G28">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G29</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G29]"; ?>" name="G29">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G30</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G30]"; ?>" name="G30">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G31</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G31]"; ?>" name="G31">
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Nilai <code>G32</code></label>
                     <input type="number" class="form-control form-control-border" placeholder="Nilai Gejala 1 Atau 0" value="<?php echo "$r[G32]"; ?>" name="G32">
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Simpan</button>
                  <button onclick="window.location.href='./datapengetahuan'" type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Batal</button>
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
