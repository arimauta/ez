<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "latihanujikom";

$koneksi = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);

if(!$koneksi){
die ("Koneksi Database gagal : ".mysqli_connect_errno()."-".mysqli_connect_error());
}
?>