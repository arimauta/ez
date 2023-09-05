<?php 
include "koneksi.php";
$query=mysqli_query($koneksi,"SELECT * FROM tb_daftar where id_daftar='$_GET[id]'");
			foreach ($query as $g) 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Halaman</title>
</head>
<body>
	<center>
		<h1>Form Input</h1>
		<center>
		<table>
			<form method="POST" action="proses.php">
			<tr>
				<td> Nama </td>
				<td>:</td>
				<td><input type="hidden" name="id" value="<?=$g['id_daftar'] ?>"><input type="text" name="nama" value="<?=$g['nama'];?>"></td>
			</tr>
			<tr>
				<td> Item </td>
				<td>:</td>
				<td><input type="text" name="item" value="<?=$g['item'];?>"></td>
			</tr>
			<tr>
				<td> Nama Barang </td>
				<td>:</td>
				<td><input type="text" name="nama_barang" value="<?=$g['nama_barang'];?>"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="update" value="Update">
					<a href="javascript:history.back();" ><input type="button" value="Kembali"></a>
				</td>
			</tr>
	
		</form>
		</table>
	</center>

</body>
</html>