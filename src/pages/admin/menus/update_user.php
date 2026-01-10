<?php
include "database.php"; 


$id       = $_POST['id'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "UPDATE users SET
        name = '$nama',
        email = '$email',
        password = '$password'
        WHERE id = '$id'");

if (!$query) {
    die("Query Error: " . mysqli_error($koneksi));
}

header('location:')
?>