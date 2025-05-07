<?php
include "koneksi.php";

$id_produk = $_GET['id_produk'];
$nama_produk = $_GET['nama_produk'];
$deskripsi = $_GET['deskripsi'];
$harga = $_GET['harga'];
$stok = $_GET['stok'];

$sql = "UPDATE produk SET
nama_produk = '$nama_produk',
deskripsi = '$deskripsi',
harga = '$harga',
stok = '$stok'
WHERE id_produk = '$id_produk' ";

$query = mysqli_query($koneksi,$sql);
if ($query) {
header("location:index.php?edit=sukses");
exit;
} else {
header("location:index.php?edit=gagal");
exit;
}
?>