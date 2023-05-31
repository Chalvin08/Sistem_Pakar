<?php
session_start();
include "../config/koneksi.php";

$id_user = $_POST['id_user']; 
$r = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM user WHERE id_user = '$id_user'"));
?>
<center>
	<h3>
		<i class="fa fa-warning text-orange"></i> 
	</h3>
	<p>Anda akan menghapus data ini?</p>
	<input type="hidden" name="id_user" value="<?php echo "$r[id_user]";?>">
</center>