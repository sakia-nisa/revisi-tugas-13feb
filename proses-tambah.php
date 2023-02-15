<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $nama_toko = $_POST['nama_toko'];
    $alamat = $_POST['alamat'];
    $no_siup = $_POST['no_siup'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $nama_bahan = $_POST['nama_bahan'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tb_bahan (nama_bahan, satuan, harga) VALUES ('$nama_bahan','$satuan','$harga')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT max(id_bahan) AS id_bahan FROM tb_bahan LIMIT 1";
    $query = mysqli_query($koneksi , $sql);

    $data = mysqli_fetch_array($query);
    $id_bahan = $data['id_bahan'];

    $sql = "INSERT INTO tb_toko (id_bahan, nama_toko, alamat, no_siup, nama_pemilik) VALUES 
    ('$id_bahan', '$nama_toko','$alamat','$no_siup','$nama_pemilik')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location: tampil.php?status=gagal');
    }
}

?>