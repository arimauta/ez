<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIHAT DATA</title>
</head>

<body>
	<center>
	<h1>Aplikasi Pengadaan Barang Koperasi</h1>
	<table border="1" cellpadding="5" cellspacing="0">
		<form method="POST" action="proses.php">
			<tr>
				<th>Nomor</th>
				<th>Nama</th>
				<th>Item</th>
				<th>Nama Barang</th>
				<th>OPSI</th>
			</tr>
			<?php
			$no = 1;
			$lihat = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
			foreach ($lihat as $g) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $g['nama']; ?></td>
					<td><?= $g['item']; ?></td>
					<td><?= $g['nama_barang']; ?></td>
					<td>
						<a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data?')" href="proses.php?id=<?= $g['id_daftar'] ?>"><input type="button" name="delete" value="Hapus"></a>
						<a href="edit.php?id=<?= $g['id_daftar'] ?>"> <input type="button" name="hapus" value="edit"> </a>
					</td>
				</tr>
			<?php } ?>

		</form>
	</table>
	<div>
		<a href="javascript:history.back();"><input type="button" value="Kembali"></a>
	</div>
	</center>
</body>

</html>