<?php
session_start();
include "../config/koneksi.php";

$id_hasil = $_POST['id_hasil']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM  hasil INNER JOIN user ON user.id_user = hasil.id_user WHERE id_hasil = '$id_hasil'"));
$p = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM  penyakit WHERE kd_penyakit = '$r[id_penyakit]'"));
$tgl_lhr = date("d-m-Y", strtotime($r['tgl_lahir']));
?>

<div class="table-responsive">
	<center>
		<b>DETAIL DATA HASIL DIAGNOSA PENYAKIT</b>
		<br/>
		<img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 80px; height: 80px;' class='img-thumbnail' src='../assets/dist/img/<?php echo "$p[gambar]";?>'>
	</center>
	<table class="table table-striped small">
		<tr>
			<td>Kode - Nama Penyakit</td>
			<td>: <b><?php echo $p['kd_penyakit'];?> - <?php echo $p['nm_penyakit'];?></b></td>
		</tr>
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
			<td>Penyebab</td>
			<td>: <b><?php echo $p['penyebab'];?></b></td>
		</tr>
		<tr>
			<td>Pencegahan</td>
			<td>: <b><?php echo $p['pencegahan'];?></b></td>
		</tr>
		<tr>
			<td>Penanganan</td>
			<td>: <b><?php echo $p['penanganan'];?></b></td>
		</tr>
	</table>
</div>