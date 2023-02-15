<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAMPIL DATA</title>
</head>
<body>
	<h3>TABEL DATA</h3>
	<h5><a href="tambah.php">Tambah Data</a></h5>
		<table border="1">
			<form>
				<tr>
					<th>No</th>
					<th>Nama Toko</th>
					<th>Alamat Toko</th>
					<th>NO. Siup</th>
					<th>Nama Pemilik Toko</th>
					<th>Nama Bahan</th>
					<th>Satuan</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>

				<?php

				include("koneksi.php");

				$sql = mysqli_query($koneksi, "SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan=tb_bahan.id_bahan");

				$no = 1;
				while($row = mysqli_fetch_array($sql)) {
				
				?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $row['nama_toko']; ?></td>
					<td><?= $row['alamat']; ?></td>
					<td><?= $row['no_siup']; ?></td>
					<td><?= $row['nama_pemilik']; ?></td>
					<td><?= $row['nama_bahan']; ?></td>
					<td><?= $row['satuan']; ?></td>
					<td><?= $row['harga']; ?></td>
					<td>
						<a href="edit.php?id_toko=<?= $row['id_toko']; ?>">EDIT</a>||
						<a href="hapus.php?id_toko=<?= $row['id_toko']; ?>">HAPUS</a>
					</td>

				</tr>

				<?php
			}
				?>
</form>
</table>
</body>
</html>