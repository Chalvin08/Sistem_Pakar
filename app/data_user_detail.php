<?php
session_start();
include "../config/koneksi.php";

$id_user = $_POST['id_user']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user
	WHERE id_user = '$id_user'"));

$tgl_lhr = date("d-m-Y", strtotime($r['tgl_lahir']));
?>

<div class="table-responsive">
	<center>
		<b>DETAIL USER</b>
		<br>
		<img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 80px; height: 80px;' class='img-thumbnail' src='../assets/dist/img/<?php echo "$r[gambar]";?>'>
	</center>
	<table class="table table-striped small">
		<tr>
			<td>Nama</td>
			<td>: <b><?php echo $r['nama'];?></b></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: <b><?php echo $r['jk'];?></b></td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>: <b><?php echo $r['tmp_lahir'];?>, <?php echo $tgl_lhr;?></b></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>: <b><?php
			$tgl_lhr = date("Y-m-d", strtotime($r['tgl_lahir']));
			$tanggal = new DateTime($tgl_lhr);
			$today = new DateTime('today');
			$y = $today->diff($tanggal)->y;
			$m = $today->diff($tanggal)->m;
			$d = $today->diff($tanggal)->d;
			echo "" . $y . " tahun " . $m . " bulan " . $d . " hari";
			?></b></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <b><?php echo $r['alamat'];?></b></td>
		</tr>
		<tr>
			<td>Handphone</td>
			<td>: <b><?php echo $r['hp'];?></b></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>: <b><?php echo $r['username'];?></b></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <b>******</b></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>: <b> <?php 
			if ($r['id_level']=='1')
				{ echo ""?>Pakar<?php } ?><?php 
			if ($r['id_level']=='2')
				{ echo ""?>Pengguna<?php } ?></b></td>
		</tr>
	</table>
</div>