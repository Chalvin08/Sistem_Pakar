<?php
session_start();
include "../../config/koneksi.php";

if ($_FILES['bg']['size'] != 0)
{
    $fileName = $_FILES['bg']['name'];
    $move = move_uploaded_file($_FILES['bg']['tmp_name'], "../../assets/dist/img/".$_FILES['bg']['name']);
    if($move)
    {
        mysqli_query($con, "UPDATE identitas SET 
            tentang = '$_POST[tentang]',
            bg = '$fileName' WHERE id = '$_POST[id]'");
        header("location:../background?alert=ubah"); 
    }
}
else
{
    mysqli_query($con, "UPDATE identitas SET 
        mode = '$_POST[mode]' WHERE id = '$_POST[id]'");
    header("location:../background?alert=ubah"); 
}


?>
