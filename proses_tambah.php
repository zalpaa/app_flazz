<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$nama_produk = $_GET['nama_produk'];
$deskripsi = $_GET['deskripsi'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];

$sql = "INSERT INTO produk (nama_produk,deskripsi,harga,stok) VALUES
('$nama_produk','$deskripsi','$harga','$stok')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
header("location:index.php?simpan=sukses");
exit;
} else {
header("location:index.php?simpan=gagal");
exit;
}
?>
<h1>bot

</h1>