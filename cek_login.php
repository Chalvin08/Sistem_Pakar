<?php
session_start();
error_reporting(1);
include 'config/koneksi.php';

if(isset($_POST['login'])){
 if ($_POST['id_level']=='1'){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $id_level   = $_POST['id_level'];
  $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' AND id_level='$id_level'");

  if(mysqli_num_rows($query) == 0){
   header("location:./?alert=gagal");
 }else{
  $row = mysqli_fetch_array($query);
  session_start();
  if($row['id_level'] == 1 && $id_level == 1){
   $_SESSION['username']=$username;
   $_SESSION['nama']     = $row['nama'];
   $_SESSION['gambar']     = $row['gambar'];
   $_SESSION['id_level']=$row['id_level'];
   header("Location: app?alert=masuk");
 }else{
   header("location:./?alert=gagal");
 }
}
}
if ($_POST['id_level']=='3'){
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $id_level   = $_POST['id_level'];
  $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' AND id_level='$id_level'");

  if(mysqli_num_rows($query) == 0){
   header("location:./?alert=gagal");
 }else{
  $row = mysqli_fetch_array($query);
  session_start();
  if($row['id_level'] == 3 && $id_level == 3){
   $_SESSION['username']=$username;
   $_SESSION['nama']     = $row['nama'];
   $_SESSION['gambar']     = $row['gambar'];
   $_SESSION['id_level']=$row['id_level'];
   $_SESSION['id_user']=$row['id_user'];
   header("Location: app/user?alert=masuk");
 }else{
   header("location:./?alert=gagal");
 }
}
}

}
?>