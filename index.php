<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$sql = "SELECT * FROM produk";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            echo "Selamat datang, " . $_SESSION['username'] . "!";
        } else {
            echo "Anda belum login.";
        }
    ?>

    <div>
        <a href="./logout.php"><button>Logout</button></a>
    </div>
    <h1>produk</h1>

    <a href = "tambah.php">Tambah</a><br><br>

    <table border = "1">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
</tr>
<?php while ($produk = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?=$produk['id_produk']?></td>
        <td><?=$produk['nama_produk']?></td>
        <td><?=$produk['deskripsi']?></td>
        <td><?=$produk['harga']?></td>
        <td><?=$produk['stok']?></td>
        <td>
            <a href="edit.php?id_produk=<?=$produk['id_produk']?>">Edit</a>
            <a href="hapus.php?id_produk=<?=$produk['id_produk']?>">Hapus</a>
</td>
</tr>
    <?php } ?>
</table>


</body>
</html>