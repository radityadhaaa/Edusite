<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_tubes_sbd";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
   die ("Koneksi dengan database gagal: ".mysqli_connect_error());
}
?>