<?php
include "../../config/koneksi.php";

$nama = addslashes($_POST['nama']);
$alamat = addslashes($_POST['alamat']);
$pass=md5($_POST['hp']);
if ($_FILES['gambar']['size'] != 0)
{
    $fileName = $_FILES['gambar']['name'];
    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../assets/dist/img/".$_FILES['gambar']['name']);
    if($move)
    {
        mysqli_query($con, "INSERT INTO user (nama, jk, tmp_lahir, tgl_lahir, alamat, hp, username, password, gambar, id_level) VALUES ('$nama', '$_POST[jk]', '$_POST[tmp_lahir]', '$_POST[tgl_lahir]', '$alamat', '$_POST[hp]', '$_POST[username]', '$pass', '$fileName', '$_POST[id_level]')");
        header("location:../../?alert=tambah");
    }
}
else
{  
    mysqli_query($con, "INSERT INTO user (nama, jk, tmp_lahir, tgl_lahir, alamat, hp, username, password, id_level) VALUES ('$nama', '$_POST[jk]', '$_POST[tmp_lahir]', '$_POST[tgl_lahir]', '$alamat', '$_POST[hp]', '$_POST[username]', '$pass', '$_POST[id_level]')");
        header("location:../../?alert=tambah");
}
?>
