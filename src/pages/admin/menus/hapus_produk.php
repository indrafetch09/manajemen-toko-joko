<?php
include "database.php";

$query = mysqli_query($koneksi, "DELETE FROM menus
where id_produk='$_GET[id]'");

header('location:main.php?page=');
?>