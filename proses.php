<?php

include "koneksi.php";

$nama=$_POST['nama'];
$item=$_POST['item'];
$nama_barang=$_POST['nama_barang'];

if(isset($_POST['simpan'])){
	$simpan=mysqli_query($koneksi,"INSERT into tb_daftar  VALUES(null, '$nama', '$item', '$nama_barang')");
	if($simpan){
		echo "<script>alert('berhasil');window.location='lihat.php'</script>";
	}
	else{
		echo "<script>alert('gagal');window.location='dashboard.php'</script>";
	}
}elseif (isset($_POST['update'])) {
	$edit=mysqli_query($koneksi,"UPDATE tb_daftar set nama='$nama', item='$item', nama_barang='$nama_barang' where id_daftar=$_POST[id]");
	if($edit){
		echo "<script>alert('berhasil update');window.location='lihat.php'</script>";
	}
	else{
		echo "<script>alert('gagal');window.location='dashboard.php'</script>";
	}
}
else{
	
	$hapus=mysqli_query($koneksi,"DELETE FROM tb_daftar where id_daftar=$_GET[id]");
	if($hapus){
		echo "<script>alert('berhasil Hapus');window.location='lihat.php'</script>";
	}
	else{
		echo "<script>alert('gagal Hapus');window.location='lihat.php'</script>";
	}
}
?>