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
            <li class="breadcrumb-item active">Hasil Diagnosa</li>
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
              <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form Hasil Diganosa Penyakit</h3>

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
               <?php
               if(isset($_POST['submit'])){
                $qry='select id from tb_gejala where ';
                array_pop($_POST);
                $rule_input=array();
                foreach ($_POST as $where) {
                  $qry.=$where."=1 and ";
                  array_push($rule_input,$where);
                }
                $qry.="1=1";
                $data=mysqli_query($con,$qry);
                $id='';
                $rule=array(
                      array("G01","G02","G03","G05","G06","G08","G11","G12","G29"), #DBD
                      array("G01","G03","G04","G12","G14","G21","G22","G25","G30"), #Diare 
                      array("G01","G02","G03","G09","G10","G11","G18","G27","G29"), #Asma
                      array("G02","G03","G04","G06","G12","G13","G14","G21"), #Cacingan
                      array("G01","G02","G03","G06","G08","G09","G10","G11","G12","G25","G31")); #&Belum Didefinisikan

                $status=false;
                for ($i=0; $i <5 ; $i++) {
                  $result=($rule_input==$rule[$i]);
                  if ($result) {
                    $status=true;
                  }
                }

                if($status==true){
                  while ($d=mysqli_fetch_assoc($data)) {
                    $id=$d['id'];
                  }
                  $cari_penyakit="select * from penyakit where id_penyakit=$id";
                  $db=mysqli_query($con,$cari_penyakit);
                  while ($d=mysqli_fetch_assoc($db)) {
                    $kdpenyakit=$d['kd_penyakit'];
                    $penyakit=$d['nm_penyakit'];
                    $info=$d['penyebab'];
                    $solusi=$d['penanganan'];
                    include 'user_hasil.php';
                  }

                }else{
                  include 'user_error.php';
                }
              }
              ?>

            </center>

          </div>
        </div>

        <!-- /.card-body -->
        <div class="card-footer small">
          <small><i class="fa fa-info-circle"></i> Jika hasil diagnosa penyakti tidak disimpan maka data tidak akan direkam ke dalam database</small>
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
