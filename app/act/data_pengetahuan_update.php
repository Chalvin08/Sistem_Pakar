<?php
include "../../config/koneksi.php";

    mysqli_query($con, "UPDATE tb_gejala SET 
     G01 = '$_POST[G01]', 
     G02 = '$_POST[G02]', 
     G03 = '$_POST[G03]', 
     G04 = '$_POST[G04]', 
     G05 = '$_POST[G05]', 
     G06 = '$_POST[G06]', 
     G07 = '$_POST[G07]', 
     G08 = '$_POST[G08]', 
     G09 = '$_POST[G09]', 
     G10 = '$_POST[G10]', 
     G11 = '$_POST[G11]', 
     G12 = '$_POST[G12]', 
     G13 = '$_POST[G13]', 
     G14 = '$_POST[G14]', 
     G15 = '$_POST[G15]', 
     G16 = '$_POST[G16]', 
     G17 = '$_POST[G17]', 
     G18 = '$_POST[G18]', 
     G19 = '$_POST[G19]', 
     G20 = '$_POST[G20]', 
     G21 = '$_POST[G21]', 
     G22 = '$_POST[G22]', 
     G23 = '$_POST[G23]', 
     G24 = '$_POST[G24]', 
     G25 = '$_POST[G25]', 
     G26 = '$_POST[G26]', 
     G27 = '$_POST[G27]', 
     G28 = '$_POST[G28]', 
     G29 = '$_POST[G29]', 
     G30 = '$_POST[G30]', 
     G31 = '$_POST[G31]', 
     G32 = '$_POST[G32]'
     WHERE id = '$_POST[id]'");
    header("location:../datapengetahuan?alert=ubah");


?>
