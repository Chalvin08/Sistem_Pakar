<?php
session_start();
include "../config/koneksi.php";

$id_hasil = $_POST['id_hasil']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM hasil WHERE id_hasil = '$id_hasil'"));
?>
<center>
	<h3>
		<i class="fa fa-warning text-orange"></i> 
	</h3>
	<p>Anda akan menghapus data ini?</p>
	<input type="hidden" name="id_hasil" value="<?php echo "$r[id_hasil]";?>">
</center>