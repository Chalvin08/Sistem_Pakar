<?php
$r=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user WHERE username = '$_SESSION[username]'"));
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-<?php echo "$mode"; ?>">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block text-uppercase active">
      <a href="./user" class="nav-link text-bold"><i class="fa fa-user-md"></i> <?php echo "$judul"; ?></a>
    </li>
    <li class="nav-item d-xl-none d-lg-none d-md-none d-sm-inline-block d-xs-inline-block text-uppercase active">
      <a href="./user" class="nav-link text-bold"><i class="fa fa-user-md"></i> <?php echo "$nama"; ?></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->

    <li class="nav-item">
      <a href="#keluar" class="nav-link keluar bg-danger">
        <i class="text-active fa fa-power-off faa-pulse faa-shake animated"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-<?php echo "$mode"; ?>-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./user" class="brand-link">
    <img src="../assets/dist/img/<?php echo "$logo"; ?>" alt="Logo" class="brand-image img-circle elevation-3" style="">
    <span class="brand-text font-weight-light"><b><?php echo "$nama"; ?></b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 40px; height: 40px;' src="../assets/dist/img/<?php echo $r['gambar']; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info small">
        <a href="#" class="d-block text-bold"><i class="fa fa-user"></i> <?php echo $r['nama']; ?></a>
        <a href="#" class="d-block"><i class="fa  fa-share-square-o"></i> <?php 
        if ($r['id_level']=='1')
          { echo ""?>Pakar<?php } ?><?php 
        if ($r['id_level']=='3')
          { echo ""?>Pengguna<?php } ?></a>
        <a><i class="fa fa-dot-circle-o text-red faa-pulse animated"></i> Online</a>
      </div>
    </div>

    
    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <form target='blank' action="https://www.google.co.id/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input name="q" class="form-control" type="search" placeholder="Google Search..." aria-label="Search">
          <div class="input-group-append">
            <button type="submit" name="search" id="search-btn" class="btn btn-sidebar">
              <i class="fa fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </form>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column small" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item menu-open">
        <a href="./user" class="nav-link active">
          <i class="nav-icon fa fa-dashboard faa-ring animated"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-user-md faa-tada animated-hover"></i>
          <p>
            Diagnosa Penyakit
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="diagnosa" class="nav-link">
              <i class="fa fa-dot-circle-o nav-icon"></i>
              <p>Tambah Diagnosa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="hasildiagnosa" class="nav-link">
              <i class="fa fa-dot-circle-o nav-icon"></i>
              <p>Data Hasil Diagnosa</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <?php
        $id = $r['id_user'];
        $idu = encrypt_decrypt('encrypt', $id);
        ?>
        <a href="ubahprofil?id=<?php echo "$idu"; ?>" class="nav-link">
          <i class="nav-icon fa fa-user faa-tada animated-hover"></i>
          <p>
            Profil Saya
          </p>
        </a>
      </li> 

      <li class="nav-item">
        <a href="#tentang" class="nav-link tentang">
          <i class="nav-icon fa fa-info-circle faa-tada animated-hover"></i>
          <p>
            Tentang
            <span class="badge badge-info right">Aplikasi</span>
          </p>
        </a>
      </li> 

      <li class="nav-item menu-open">
        <a href="#keluar" class="nav-link active bg-danger keluar">
          <i class="nav-icon fa fa-power-off faa-pulse faa-shake animated"></i>
          <p>
            Keluar
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<script>
  $(function()
  {
    $(document).on('click','.tentang',function(e)
    {
      e.preventDefault();
      $("#tentangModal").modal('show');
      $.post('tentang.php',
        {id_user:$(this).attr('data-id')},
        function(html)
        {
          $(".modal-body").html(html);
        });
    });
  });
</script>
<form action="# method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="modal fade" id="tentangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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

<script>
  $(function()
  {
    $(document).on('click','.keluar',function(e)
    {
      e.preventDefault();
      $("#keluarModal").modal('show');
      $.post('keluar.php',
        {id_user:$(this).attr('data-id')},
        function(html)
        {
          $(".modal-body").html(html);
        });
    });
  });
</script>
<form action="./user?alert=keluar" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="modal fade" id="keluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-times-circle faa-tada animated-hover"></i> Tidak</button>
          <button type="submit" class="btn btn-primary btn-sm" style="width:100px; border-radius: 20px;border: 2px solid #EFE4E4;"><i class="fa fa-check-circle faa-tada animated-hover"></i>  Ya, Keluar</button>
        </div>
      </div>
    </div>
  </div>
</form>