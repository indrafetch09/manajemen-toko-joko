<?php
include "database.php";
$id_produk=$_POST['id_produk'];
$nama_produk=$_POST['nama_produk'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];

$query = mysqli_query($koneksi, "insert into menus
values('$id_produk','$nama_produk','$stok','$harga')");

header('location:index.php');
?>