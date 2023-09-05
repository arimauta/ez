<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Halaman</title>
</head>
<body>
	<center>
		<h1>Aplikasi Pengadaan Barang Koperasi</h1>
		<center>
		<table>
			<form method="POST" action="proses.php">
			<tr>
				<td> Nama </td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td> Jumlah Item </td>
				<td>:</td>
				<td><input type="text" name="item"></td>
			</tr>
			<tr>
				<td> Nama Barang </td>
				<td>:</td>
				<td><input type="text" name="nama barang"></td>
			</tr>
			<tr>
				<td colspan="3">
					<center>
					<input type="submit" name="simpan" value="Simpan">
					<a href="lihat.php"> <input type="button" name="lihat" value="Lihat Data"></a>
					<br><br>
					<a href="index.php"> <input type="button"  value="Logout"></a></center>

				</td>
			</tr>
				
		</form>
		</table>
	</center>

</body>
</html>