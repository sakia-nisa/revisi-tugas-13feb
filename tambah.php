<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORUM TAMBAH DATA</title>
</head>
<body>
	<h3>Form Tambah Data Toko Bahan</h3>
	<table>
		<form action="proses-tambah.php" method="POST">
			
			<tr>
				<td><label for="nama_toko">Nama Toko</td>
				<td><input type="text" name="nama_toko"></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td><label for="no_siup">Nomor Surat Ijin Usaha Prusahaan</td>
				<td><input type="number" name="no_siup"></td>
			</tr>
			<tr>
				<td><label for="nama_pemilik">Nama Pemilik</td>
				<td><input type="text" name="nama_pemilik"></td>
			</tr>
			<tr>
				<td><label for="nama_bahan">Nama Bahan</td>
				<td><input type="text" name="nama_bahan"></td>
			</tr>
			<tr>
				<td><label for="satuan">Satuan</td>
				<td><input type="text" name="satuan"></td>
			</tr>
			<tr>
				<td><label for="harga">Harga Bahan</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<button type="submit" name="simpan">Simpan</button>
			</tr>
		</form>
	</table>
</body>
</html>