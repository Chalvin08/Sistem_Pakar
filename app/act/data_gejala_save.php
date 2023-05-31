<?php
include "../../config/koneksi.php";

mysqli_query($con, "INSERT INTO tb_gejala_1 (gejala, kode) VALUES ('$_POST[gejala]', '$_POST[kode]')");
header("location:../datagejala?alert=tambah");

?>
