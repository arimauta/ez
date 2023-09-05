<?php
include 'koneksi.php';
$username = $_POST ['username'];
$password = $_POST ['password'];

$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");
$ceklogin = mysqli_num_rows($login);

if($ceklogin>0){
    echo"<script>alert('Login Berhasil');window.location='dashboard.php'</script>";
}
else{
    echo"<script>alert('Gagal Login');window.location='index.php'</script>";
}

?>

