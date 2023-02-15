<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
    header('location:tampil.php');
}

$id = $_GET['id_toko'];
$sql = "SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan=tb_bahan.id_bahan WHERE tb_toko.id_toko='$id'";
$query = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
	die("data tidak di temukan");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
<h3>Form Edit Data Toko Bahan</h3>
	<table>
		<form action="proses-edit.php" method="POST">
			<input type="hidden" name="id_toko" value="<?php echo $row['id_toko']; ?>">
			<tr>
				<td><label for="nama_toko" value="<? $row['nama_toko']; ?>">Nama Toko</td>
				<td><input type="text" name="nama_toko"></td>
			</tr>
			<tr>
				<td><label for="alamat" value="<? $row['alamat'];?>">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td><label for="no_siup" value="<? $row['no_siup']; ?>">Nomor Surat Ijin Usaha Prusahaan</td>
				<td><input type="number" name="no_siup"></td>
			</tr>
			<tr>
				<td><label for="nama_pemilik" value="<? $row['nama_pemilik']; ?>">Nama Pemilik</td>
				<td><input type="text" name="nama_pemilik"></td>
			</tr>
			<tr>
				<td><label for="nama_bahan" value="<? $row['nama_bahan']; ?>">Nama Bahan</td>
				<td><input type="text" name="nama_bahan"></td>
			</tr>
			<tr>
				<td><label for="satuan" value="<? $row['satuan']; ?>">Satuan</td>
				<td><input type="text" name="satuan"></td>
			</tr>
			<tr>
				<td><label for="harga" value="<? $row['harga']; ?>">Harga Bahan</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<button type="submit" name="simpan">Simpan</button>
			</tr>
		</form>
	</table>
</body>
</html>