<?php
session_start();
include "../config/koneksi.php";

$id_penyakit = $_POST['id_penyakit']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM penyakit WHERE id_penyakit = '$id_penyakit'"));
?>

<div class="table-responsive">
	<center>
		<b>DETAIL PENYAKIT</b>
		<br/>
		<img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 80px; height: 80px;' class='img-thumbnail' src='../assets/dist/img/<?php echo "$r[gambar]";?>'>
	</center>
	<table class="table table-striped small">
		<tr>
			<td>Kode Penyakit</td>
			<td>: <b><?php echo $r['kd_penyakit'];?></b></td>
		</tr>
		<tr>
			<td>Nama Penyakit</td>
			<td>: <b><?php echo $r['nm_penyakit'];?></b></td>
		</tr>
		<tr>
			<td>Penyebab Penyakit</td>
			<td>: <b><?php echo $r['penyebab'];?></b></td>
		</tr>
		<tr>
			<td>Pencegahan Penyakit</td>
			<td>: <b><?php echo $r['pencegahan'];?></b></td>
		</tr>
		<tr>
			<td>Penanganan Penyakit</td>
			<td>: <b><?php echo $r['penanganan'];?></b></td>
		</tr>
	</table>
</div>