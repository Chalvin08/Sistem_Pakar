<?php
session_start();
include "../config/koneksi.php";

$id_penyakit = $_POST['id_penyakit']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM penyakit WHERE id_penyakit = '$id_penyakit'"));
?>
<center>
	<h3>
		<i class="fa fa-warning text-orange"></i> 
	</h3>
	<p>Anda akan menghapus data ini?</p>
	<input type="hidden" name="id_penyakit" value="<?php echo "$r[id_penyakit]";?>">
</center>