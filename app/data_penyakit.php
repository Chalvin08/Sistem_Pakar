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
          window.location = "./datapenyakit";
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
          window.location = "./datapenyakit";
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
          window.location = "./datapenyakit";
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
              <h3 class="card-title"><i class="fa fa-bug"></i> Data Tabel Penyakit</h3>

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
                      <th>KODE</th>
                      <th>NAMA</th>
                      <th>PENYEBAB</th>
                      <th>PENANGANAN</th>
                      <th>PHOTO</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $tampil = mysqli_query($con, "SELECT * FROM penyakit ORDER BY id_penyakit DESC");
                   $no=1;
                   while ($r=mysqli_fetch_array($tampil))
                   {
                    $id_penyakit = $r['id_penyakit'];
                    $ide = encrypt_decrypt('encrypt', $id_penyakit);
                    ?>
                    <tr>
                      <td><center><?php echo "$no.";?></center></td>
                      <td><?php echo $r["kd_penyakit"];?></td>
                      <td><?php echo $r["nm_penyakit"];?></td>
                      <td><?php $num_char = 60;$penyebab = $r['penyebab'];echo substr($penyebab, 0, $num_char) . '...';
                      ?></td>
                      <td><?php echo $r["penanganan"];?> <i class="fa fa-hospital-o"></i></td>
                      <?php if (empty($r['gambar'])){
                        echo "<td><center><img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 40px; height: 40px;' class='img-circle' src='../assets/dist/img/blank.png'></center></td>";
                      }else
                      {
                        echo "<td><center><img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 40px; height: 40px;' class='img-circle' src='../assets/dist/img/$r[gambar]'></td>";
                      } 
                      ?>
                      <td>
                       <div class="btn-group">
                        <button style="width: 25px;" type="button" class="btn btn-xs btn-warning detailpenyakit" data-id="<?php echo $r['id_penyakit']; ?>"><i class="fa fa-bug faa-tada animation-hover"></i></button>
                        <button style="width: 25px;" type="button" class="btn btn-xs btn-primary" onclick="window.location.href='ubahpenyakit?id_penyakit=<?php echo $ide;?>'"><i class="fa fa-edit faa-tada animation-hover"></i></button>
                        <button style="width: 25px;" type="button" class="btn btn-xs btn-danger hapuspenyakit" data-id="<?php echo $r['id_penyakit']; ?>"><i class="fa fa-trash faa-tada animation-hover"></i></button>
                      </div>
                    </td>
                    <?php  $no++; } ?>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th width="10">NO.</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>PENYEBAB</th>
                    <th>PENANGANAN</th>
                    <th>PHOTO</th>
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
    $(document).on('click','.detailpenyakit',function(e)
    {
      e.preventDefault();
      $("#detailModal").modal('show');
      $.post('data_penyakit_detail.php', 
        {id_penyakit:$(this).attr('data-id')},
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
    $(document).on('click','.hapuspenyakit',function(e)
    {
      e.preventDefault();
      $("#hapusModal").modal('show');
      $.post('data_penyakit_hapus.php', 
        {id_penyakit:$(this).attr('data-id')},
        function(html)
        {
          $(".modal-body").html(html);
        });
    });
  });
</script>
<!-- Modal -->

<form action="act/data_penyakit_delete.php" method="GET" class="form-horizontal" enctype="multipart/form-data">
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


