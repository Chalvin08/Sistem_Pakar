<?php
session_start();
include '../../config/koneksi.php'; 
  mysqli_query($con, "DELETE FROM penyakit WHERE id_penyakit ='$_GET[id_penyakit]'");
header("location:../datapenyakit?alert=hapus"); 

?>
