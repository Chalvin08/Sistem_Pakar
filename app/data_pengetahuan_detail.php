<?php
session_start();
include "../config/koneksi.php";

$id_penyakit = $_POST['id']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala INNER JOIN penyakit ON tb_gejala.id = penyakit.id_penyakit"));
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

<div class="table-responsive">
	<center>
		<b>DETAIL PENYAKIT DAN GEJALA</b>
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
			<td>Gelaja Penyakit</td>
			<td>: <b>
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
			</b></td>
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