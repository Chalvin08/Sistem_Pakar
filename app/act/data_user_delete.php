<?php
session_start();
include '../../config/koneksi.php'; 
  mysqli_query($con, "DELETE FROM user WHERE id_user ='$_GET[id_user]'");
header("location:../datauser?alert=hapus"); 

?>
