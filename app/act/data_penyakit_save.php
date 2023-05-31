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
        mysqli_query($con, "INSERT INTO penyakit (gambar, nm_penyakit, penyebab, pencegahan, kd_penyakit, penanganan) VALUES ('$fileName', '$nm_penyakit', '$penyebab', '$pencegahan', '$_POST[kd_penyakit]', '$_POST[penanganan]')");
        header("location:../datapenyakit?alert=tambah");
    }
}
else
{  
    mysqli_query($con, "INSERT INTO penyakit (nm_penyakit, penyebab, pencegahan, kd_penyakit, penanganan) VALUES ('$nm_penyakit', '$penyebab', '$pencegahan', '$_POST[kd_penyakit]', '$_POST[penanganan]')");
        header("location:../datapenyakit?alert=tambah");
}
?>
