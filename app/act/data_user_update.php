<?php
include "../../config/koneksi.php";
$pass=md5($_POST['hp']);
$nama = addslashes($_POST['nama']);
$alamat = addslashes($_POST['alamat']);
if ($_FILES['gambar']['size'] != 0)
{
    $fileName = $_FILES['gambar']['name'];
    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], "../../assets/dist/img/".$_FILES['gambar']['name']);
    if($move)
    {
        mysqli_query($con, "UPDATE user SET 
            gambar = '$fileName', 
            nama = '$nama', 
            jk = '$_POST[jk]', 
            tmp_lahir= '$_POST[tmp_lahir]', 
            tgl_lahir = '$_POST[tgl_lahir]', 
            alamat = '$_POST[alamat]', 
            hp = '$_POST[hp]', 
            username = '$_POST[username]',  
            password = '$pass' 
            WHERE id_user = '$_POST[id_user]'");
        header("location:../datauser?alert=ubah");
    }
}


else
{
    mysqli_query($con, "UPDATE user SET 
        nama = '$nama', 
        jk = '$_POST[jk]', 
        tmp_lahir= '$_POST[tmp_lahir]', 
        tgl_lahir = '$_POST[tgl_lahir]', 
        alamat = '$_POST[alamat]', 
        hp = '$_POST[hp]', 
        username = '$_POST[username]',  
        password = '$pass' 
        WHERE id_user = '$_POST[id_user]'");
    header("location:../datauser?alert=ubah");
}

?>
