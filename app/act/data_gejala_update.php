<?php
include "../../config/koneksi.php";

    mysqli_query($con, "UPDATE tb_gejala_1 SET 
     kode = '$_POST[kode]', 
     gejala = '$_POST[gejala]'
     WHERE id = '$_POST[id]'");
    header("location:../datagejala?alert=ubah");


?>
