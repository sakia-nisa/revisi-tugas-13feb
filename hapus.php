<?php
include("koneksi.php");
$id = $_GET['id_toko'];

mysqli_query($koneksi, "DELETE FROM tb_toko WHERE id_toko='$id'");
mysqli_query($koneksi, "DELETE FROM tb_bahan WHERE id_bahan='$id'");

header("location:tampil.php");

?>