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
          window.location = "./datauser";
        });
      });
    </script>
    <?php
  } }
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
            window.location = "./datauser";
          });
        });
      </script>
      <?php
    } }
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
              window.location = "./datauser";
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
                    <h3 class="card-title"><i class="fa fa-users"></i> Data Tabel Users</h3>

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
                            <th>NAMA</th>
                            <th>TMP LAHIR</th>
                            <th>TGL LAHIR</th>
                            <th>JK</th>
                            <th>HP</th>
                            <th>ALAMAT</th>
                            <th>INFO LOGIN</th>
                            <th>PHOTO</th>
                            <th>AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php
                         $tampil = mysqli_query($con, "SELECT * FROM user ORDER BY id_user DESC");
                         $no=1;
                         while ($r=mysqli_fetch_array($tampil))
                         {
                          $tgl_lahir = date("d - m - Y", strtotime($r['tgl_lahir']));
                          $id_user = $r['id_user'];
                          $ide = encrypt_decrypt('encrypt', $id_user);
                          ?>
                          <tr>
                            <td><center><?php echo "$no.";?></center></td>
                            <td><?php echo $r["nama"];?></td>
                            <td><?php echo $r["tmp_lahir"];?></td>
                            <td><?php echo "$tgl_lahir"; ?></td>
                            <td><?php echo $r["jk"];?></td>
                            <td><?php echo $r["hp"];?></td>
                            <td><?php echo $r["alamat"];?></td>
                            <td class="small"> Username<br>
                              <b><?php echo $r["username"];?></b>
                              <br>
                              Password
                              <br>
                              <b>******</b>
                              <br>
                              Level
                              <br>
                              <b>
                                <?php 
                                if ($r['id_level']=='1')
                                  { echo ""?>Pakar<?php } ?><?php 
                                if ($r['id_level']=='2')
                                  { echo ""?>Pengguna<?php } ?>
                              </b>
                            </td>
                            <?php if (empty($r['gambar'])){
                              echo "<td><center><img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 40px; height: 40px;' class='img-circle' src='../assets/dist/img/blank.png'></center></td>";
                            }else
                            {
                              echo "<td><center><img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 40px; height: 40px;' class='img-circle' src='../assets/dist/img/$r[gambar]'></td>";
                            } 
                            ?>
                            <td>
                             <div class="btn-group">
                              <button style="width: 25px;" type="button" class="btn btn-xs btn-warning detailuser" data-id="<?php echo $r['id_user']; ?>"><i class="fa fa-user faa-tada animation-hover"></i></button>
                              <button style="width: 25px;" type="button" class="btn btn-xs btn-primary" onclick="window.location.href='ubahuser?id_user=<?php echo $ide;?>'"><i class="fa fa-edit faa-tada animation-hover"></i></button>
                              <button style="width: 25px;" type="button" class="btn btn-xs btn-danger hapususer" data-id="<?php echo $r['id_user']; ?>"><i class="fa fa-trash faa-tada animation-hover"></i></button>
                            </div>
                          </td>
                          <?php  $no++; } ?>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th width="10">NO.</th>
                          <th>NAMA</th>
                          <th>TMP LAHIR</th>
                          <th>TGL LAHIR</th>
                          <th>JK</th>
                          <th>HP</th>
                          <th>ALAMAT</th>
                          <th>LEVEL</th>
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
          $(document).on('click','.detailuser',function(e)
          {
            e.preventDefault();
            $("#detailModal").modal('show');
            $.post('data_user_detail.php', 
              {id_user:$(this).attr('data-id')},
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
          $(document).on('click','.hapususer',function(e)
          {
            e.preventDefault();
            $("#hapusModal").modal('show');
            $.post('data_user_hapus.php', 
              {id_user:$(this).attr('data-id')},
              function(html)
              {
                $(".modal-body").html(html);
              });
          });
        });
      </script>
      <!-- Modal -->

      <form action="act/data_user_delete.php" method="GET" class="form-horizontal" enctype="multipart/form-data">
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


