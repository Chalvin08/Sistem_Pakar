<?php
include "../../config/koneksi.php";
$nm_penyakit = addslashes($_POST['nm_penyakit']);
$penyebab = addslashes($_POST['penyebab']);
$pencegahan = addslashes($_POST['pencegahan']);
if ($_FILES['gambar']['size'] != 0)
{
    $fileName = $_FILES['gambar']['name'];
    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../assets/dist/img/".$_FILES['gambar']['name']);
    if($move)
    {
        mysqli_query($con, "UPDATE penyakit SET 
            gambar = '$fileName', 
            nm_penyakit = '$nm_penyakit', 
            penyebab = '$penyebab', 
            pencegahan = '$pencegahan', 
            kd_penyakit = '$_POST[kd_penyakit]', 
            penanganan = '$_POST[penanganan]'
            WHERE id_penyakit = '$_POST[id_penyakit]'");
        header("location:../datapenyakit?alert=ubah");
    }
}


else
{
    mysqli_query($con, "UPDATE penyakit SET 
     nm_penyakit = '$nm_penyakit', 
     penyebab = '$penyebab', 
     pencegahan = '$pencegahan', 
     kd_penyakit = '$_POST[kd_penyakit]', 
     penanganan = '$_POST[penanganan]'
     WHERE id_penyakit = '$_POST[id_penyakit]'");
    header("location:../datapenyakit?alert=ubah");
}

?>
