<?php
session_start();
include '../../config/koneksi.php'; 
  mysqli_query($con, "DELETE FROM hasil WHERE id_hasil ='$_GET[id_hasil]'");
header("location:../datadiagnosa?alert=hapus"); 

?>
