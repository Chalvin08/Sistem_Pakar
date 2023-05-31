<?php
session_start();
include "../config/koneksi.php";
$ide = $_GET['id_hasil'];
$idh = encrypt_decrypt('decrypt', $ide);

$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM  hasil INNER JOIN user ON user.id_user = hasil.id_user WHERE id_hasil = '$idh'"));
$p = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM  penyakit WHERE kd_penyakit = '$r[id_penyakit]'"));
$tgl_lhr = date("d-m-Y", strtotime($r['tgl_lahir']));
?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset='UTF-8'>
	<title>
		CETAK HASIL DIAGNOSA
	</title>
	<link rel="shortcut icon" href="../assets/img/logo.png">
	<style>
	img{
		width: 100%;
		height: auto;
	}
</style>
<script type="text/javascript">
	setTimeout
	(function()
	{
		window.location = "hasildiagnosa" 
	},
	3000); 
</script>
</head>
<body onload='window.print()' style="font-family: arial;font-size: 12px;color: #222222;">
	<div class="table-responsive">
		<center>
			<b>DETAIL DATA HASIL DIAGNOSA PENYAKIT</b>
			<br/>
			<img style='background-size: cover; object-fit: cover;overflow: hidden;  z-index: 1; width: 80px; height: 80px;' class='img-thumbnail' src='../assets/dist/img/<?php echo "$p[gambar]";?>'>
		</center>
		<table class="table table-striped small">
			<tr>
				<td style="width: 200px;border-bottom:1px solid #eee;vertical-align: baseline;">Kode - Nama Penyakit</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;font-size: 14px;'><b><?php echo $p['kd_penyakit'];?> - <?php echo $p['nm_penyakit'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Nama</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'> <b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;font-size: 14px;'><b><?php echo $r['nama'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Jenis Kelamin</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $r['jk'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Tempat, Tanggal Lahir</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'> <b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $r['tmp_lahir'];?>, <?php echo $tgl_lhr;?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Umur</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'> <b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php
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
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Alamat</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $r['alamat'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Handphone</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;'><b><?php echo $r['hp'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Penyebab</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $p['penyebab'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Pencegahan</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $p['pencegahan'];?></b></td>
			</tr>
			<tr>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'>Penanganan</td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b>:</b></td>
				<td style='border-bottom:1px solid #eee;vertical-align: baseline;'><b><?php echo $p['penanganan'];?></b></td>
			</tr>
		</table>
	</div>
</body>
</html>