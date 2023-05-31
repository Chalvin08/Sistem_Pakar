<?php
session_start();
include "../../config/koneksi.php";

if ($_FILES['gambar']['size'] != 0)
{
    $fileName = $_FILES['gambar']['name'];
    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../assets/dist/img/".$_FILES['gambar']['name']);
    if($move)
    {
        mysqli_query($con, "UPDATE identitas SET 
            nama = '$_POST[nama]',
            judul = '$_POST[judul]',
            email = '$_POST[email]',
            hp = '$_POST[hp]',
            web = '$_POST[web]',
            tentang = '$_POST[tentang]',
            gambar = '$fileName' WHERE id = '$_POST[id]'");
        header("location:../identitas?alert=ubah"); 
    }
}
else
{
    mysqli_query($con, "UPDATE identitas SET 
        nama = '$_POST[nama]',
        judul = '$_POST[judul]',
        email = '$_POST[email]',
        hp = '$_POST[hp]',
        tentang = '$_POST[tentang]',
        web = '$_POST[web]' WHERE id = '$_POST[id]'");
    header("location:../identitas?alert=ubah"); 
}


?>
