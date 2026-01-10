<?php
include "database.php";

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$query = mysqli_query($koneksi, "UPDATE menus SET
        nama_produk ='$nama_produk'
        stok ='$stok'
        harga='$harga'
        WHERE id_produk='$id_produk'");

header('location:')
?>