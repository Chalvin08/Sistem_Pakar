<?php
session_start();
include "../config/koneksi.php";

$id = $_POST['id']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '$id'"));
?>

<div class="table-responsive">
	<center>
		<b>DETAIL GEJALA</b>
		
	</center>
	<table class="table table-striped small">
		<tr>
			<td>Kode gejala</td>
			<td>: <b><?php echo $r['kode'];?></b></td>
		</tr>
		<tr>
			<td>Nama gejala</td>
			<td>: <b><?php echo $r['gejala'];?></b></td>
		</tr>
	</table>
</div>