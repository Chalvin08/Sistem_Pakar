<?php
session_start();
include '../../config/koneksi.php'; 
  mysqli_query($con, "DELETE FROM tb_gejala_1 WHERE id ='$_GET[id]'");
header("location:../datagejala?alert=hapus"); 

?>
