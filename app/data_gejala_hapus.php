<?php
session_start();
include "../config/koneksi.php";

$id = $_POST['id']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_gejala_1 WHERE id = '$id'"));
?>
<center>
	<h3>
		<i class="fa fa-warning text-orange"></i> 
	</h3>
	<p>Anda akan menghapus data ini?</p>
	<input type="hidden" name="id" value="<?php echo "$r[id]";?>">
</center>