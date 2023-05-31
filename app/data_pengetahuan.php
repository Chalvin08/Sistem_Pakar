<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
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
          text: 'Anda Berhasil Menambah Data',
          footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
        }).then(function() {
          window.location = "./datapengetahuan";
        });
      });
    </script>
    <?php
  } 
}
?>
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
          window.location = "./datapengetahuan";
        });
      });
    </script>
    <?php
  } 
}
?>
<?php
if(isset($_GET['alert'])){
  if($_GET['alert']=="hapus"){
    ?>
    <script type="text/javascript">
      $(function() {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          title: 'SUKSES!',
          text: 'Anda Berhasil Menghapus Data',
          footer: '<center><?php echo "$nama"; ?> <br/> <?php echo "$judul"; ?></center>'
        }).then(function() {
          window.location = "./datapengetahuan";
        });
      });
    </script>
    <?php
  } 
}
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
            <li class="breadcrumb-item active">Tabel Data</li>
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
              <h3 class="card-title"><i class="fa fa-list-ol"></i> Data Tabel Pengetahuan Pakar Gejala Penyakit</h3>

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
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped small">
                  <thead>
                    <tr>
                      <th width="10">NO.</th>
                      <th>KODE - NAMA PENYAKIT</th>
                      <th>KODE - GEJALA PENYAKIT</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $tampil = mysqli_query($con, "SELECT * FROM tb_gejala INNER JOIN penyakit ON tb_gejala.id = penyakit.id_penyakit");
                   $no=1;
                   while ($r=mysqli_fetch_array($tampil))
                   {
                    $id = $r['id'];
                    $ide = encrypt_decrypt('encrypt', $id);
                    $g1=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '1'"));
                    $g2=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '2'"));
                    $g3=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '3'"));
                    $g4=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '4'"));
                    $g5=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '5'"));
                    $g6=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '6'"));
                    $g7=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '7'"));
                    $g8=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '8'"));
                    $g9=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '9'"));
                    $g10=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '10'"));

                    $g11=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '11'"));
                    $g12=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '12'"));
                    $g13=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '13'"));
                    $g14=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '14'"));
                    $g15=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '15'"));
                    $g16=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '16'"));
                    $g17=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '17'"));
                    $g18=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '18'"));
                    $g19=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '19'"));
                    $g20=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '20'"));

                    $g21=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '21'"));
                    $g22=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '22'"));
                    $g23=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '23'"));
                    $g24=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '24'"));
                    $g25=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '25'"));
                    $g26=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '26'"));
                    $g27=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '27'"));
                    $g28=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '28'"));
                    $g29=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '29'"));
                    $g30=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '30'"));
                    ?>
                    <tr>
                      <td><center><?php echo "$no.";?></center></td>
                      <td><?php echo $r["kd_penyakit"];?> -  <?php echo $r["nm_penyakit"];?></td>
                      <td>
                        <?php if ($r['G01'] == 1)  { echo "$g1[kode] - $g1[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G02'] == 1)  { echo "$g2[kode] - $g2[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G03'] == 1)  { echo "$g3[kode] - $g3[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G04'] == 1)  { echo "$g4[kode] - $g4[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G05'] == 1)  { echo "$g5[kode] - $g5[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G06'] == 1)  { echo "$g6[kode] - $g6[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G07'] == 1)  { echo "$g7[kode] - $g7[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G08'] == 1)  { echo "$g8[kode] - $g8[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G09'] == 1)  { echo "$g9[kode] - $g9[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G10'] == 1)  { echo "$g10[kode] - $g10[gejala],"; }  else  { echo ""; }?>

                        <?php if ($r['G11'] == 1)  { echo "$g11[kode] - $g11[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G12'] == 1)  { echo "$g12[kode] - $g12[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G13'] == 1)  { echo "$g13[kode] - $g13[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G14'] == 1)  { echo "$g14[kode] - $g14[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G15'] == 1)  { echo "$g15[kode] - $g15[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G16'] == 1)  { echo "$g16[kode] - $g16[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G17'] == 1)  { echo "$g17[kode] - $g17[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G18'] == 1)  { echo "$g18[kode] - $g18[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G19'] == 1)  { echo "$g19[kode] - $g19[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G20'] == 1)  { echo "$g20[kode] - $g20[gejala],"; }  else  { echo ""; }?>

                        <?php if ($r['G21'] == 1)  { echo "$g21[kode] - $g21[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G22'] == 1)  { echo "$g22[kode] - $g22[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G23'] == 1)  { echo "$g23[kode] - $g23[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G24'] == 1)  { echo "$g24[kode] - $g24[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G25'] == 1)  { echo "$g25[kode] - $g25[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G26'] == 1)  { echo "$g26[kode] - $g26[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G27'] == 1)  { echo "$g27[kode] - $g27[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G28'] == 1)  { echo "$g28[kode] - $g28[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G29'] == 1)  { echo "$g29[kode] - $g29[gejala],"; }  else  { echo ""; }?>
                        <?php if ($r['G30'] == 1)  { echo "$g30[kode] - $g30[gejala]"; }  else  { echo ""; }?>
                      </td>

                      <td>
                       <div class="btn-group">
                        <button style="width: 25px;" type="button" class="btn btn-xs btn-warning detailgejala" data-id="<?php echo $r['id']; ?>"><i class="fa fa-list faa-tada animation-hover"></i></button>
                        <button style="width: 25px;" type="button" class="btn btn-xs btn-primary" onclick="window.location.href='ubahpengetahuan?id=<?php echo $ide;?>'"><i class="fa fa-edit faa-tada animation-hover"></i></button>
                      <!--   <button style="width: 25px;" type="button" class="btn btn-xs btn-danger hapuspengetahuan" data-id="<?php echo $r['id']; ?>"><i class="fa fa-trash faa-tada animation-hover"></i></button> -->
                      </div>
                    </td>
                    <?php  $no++; } ?>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th width="10">NO.</th>
                    <th width="200">KODE - NAMA PENYAKIT</th>
                    <th>KODE - GEJALA PENYAKIT</th>
                    <th>AKSI</th>
                  </tr>
                </tfoot>
              </table>
            </div>     
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include "footer.php"; ?>
<script type="text/javascript">
  $(function()
  {
    $(document).on('click','.detailgejala',function(e)
    {
      e.preventDefault();
      $("#detailModal").modal('show');
      $.post('data_pengetahuan_detail.php', 
        {id:$(this).attr('data-id')},
        function(html)
        {
          $(".modal-body").html(html);
        });
    });
  });
</script>
<!-- Modal -->
<form action="#" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-<?php echo "$mode";?>">
          <h5 class="modal-title text-uppercase small" id="exampleModalLabel1"><img src="../assets/dist/img/<?php echo "$logo";?>" width="30"> Aplikasi <?php echo "$nama";?> - <?php echo "$judul";?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Tutup</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- tolak -->
<script type="text/javascript">
  $(function()
  {
    $(document).on('click','.hapusgejala',function(e)
    {
      e.preventDefault();
      $("#hapusModal").modal('show');
      $.post('data_gejala_hapus.php', 
        {id:$(this).attr('data-id')},
        function(html)
        {
          $(".modal-body").html(html);
        });
    });
  });
</script>
<!-- Modal -->

<form action="act/data_gejala_delete.php" method="GET" class="form-horizontal" enctype="multipart/form-data">
  <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-<?php echo "$mode";?>">
          <h5 class="modal-title text-uppercase small" id="exampleModalLabel1"><img src="../assets/dist/img/<?php echo "$logo";?>" width="30"> Aplikasi <?php echo "$nama";?> - <?php echo "$judul";?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button  style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;" type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
          <button  style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check-circle"></i> Ya, Hapus</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>


