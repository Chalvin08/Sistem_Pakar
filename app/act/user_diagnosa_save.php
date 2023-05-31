<?php
include "../../config/koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$tanggal = date('Y-m-d H:i:s');
mysqli_query($con, "INSERT INTO hasil (id_user, id_penyakit, tanggal) VALUES ('$_POST[id_user]', '$_POST[id_penyakit]', '$tanggal')");
header("location:../hasildiagnosa?alert=tambah");

?>
