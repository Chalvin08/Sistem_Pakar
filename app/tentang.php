<?php
session_start();
include "../config/koneksi.php";
$i = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM identitas LIMIT 1"));
$logo = $i['gambar'];
$bg = $i['bg'];
$nama = $i['nama'];
$judul = $i['judul'];
$dev = $i['dev'];
$mode = $i['mode'];
$tentang = $i['tentang'];
?>
<center>
	<div class="row">
		<div class="col-md-12">
			<div class="info-box">
				<span class="info-box-icon bg-primary"> <img class="animation__shake" src="../assets/dist/img/<?php echo "$logo"; ?>" alt="AdminLTELogo" height="40" width="40"></span>

				<div class="info-box-content">
					<span class="info-box-text"><?php echo "$nama"; ?></span>
					<span class="small"><?php echo "$judul"; ?> <?php echo "$tentang"; ?></span>
				</div>
			</div>
		</div>
	</div>
</center>