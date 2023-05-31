<?php
// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');
require_once('fungsi_ssl.php');

$db['host'] = "localhost"; //host
$db['user'] = "root"; //username database
$db['pass'] = ""; //password database
$db['name'] = "spd_penyakitanak"; //nama database

$con = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);
// buat variabel untuk validasi dari file fungsi_validasi.php
$val = new Bambangvalidasi;

function anti_injection($data){
  global $con;
  $filter = mysqli_real_escape_string($con, stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}


$i = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM identitas LIMIT 1"));
$logo = $i['gambar'];
$bg = $i['bg'];
$nama = $i['nama'];
$judul = $i['judul'];
$dev = $i['dev'];
$mode = $i['mode'];
$tentang = $i['tentang'];
