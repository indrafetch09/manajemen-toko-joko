<?php
include "database.php";
echo "<CENTER>List Produk Toko Joko<CENTER><br>";
echo "<a href='input_produk.php'>INPUT DATA PRODUK</a><br><br>";
echo "<table border='1'>";
echo "<table id='order-listing' class='table'>";
echo "<thead><tr>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr></thead>";
$query = mysqli_query($koneksi, "select * from menus");
while ($row = mysqli_fetch_array($query)){
echo "<tr>";
echo "<td>$row[id_produk]</td>";
echo "<td>$row[nama_Produk]</td>";
echo "<td>$row[stok]</td>";
echo "<td>$row[harga]</td>";
echo "<td><a class='badge badge-warning' href='?page=edit_produk&id_produk=$row[id_produk]'> <i class='mdi mdi-pencil mx-0'></i>EDIT</a> | <a class='badge badge-danger' href='hapus_produk.php?id=$row[id_produk]'>  HAPUS</a></td>";
}
echo "</table>";

?>