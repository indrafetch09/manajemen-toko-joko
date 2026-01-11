<?php
include __DIR__ . "/../../../config/database.php";

$nama_produk = $_POST['nama_produk'] ?? '';
$stok = $_POST['stok'] ?? '';
$harga = $_POST['harga'] ?? '';

if ($nama_produk === '') {
    die('Data nama tidak boleh kosong');
} else if ($stok === '') {
    die('Data Stok tidak boleh kosong');
} elseif ($harga === '') {
    die('Data Harga tidak boleh kosong');
}

try {
    $stmt = $pdo->prepare("INSERT INTO produks (nama_produk, stok, harga) VALUES (:nama_produk, :stok, :harga)");
    $stmt->bindParam(':nama_produk', $nama_produk);
    $stmt->bindParam(':harga', $harga);
    $stmt->bindParam(':stok', $stok);
    $stmt->execute();
} catch (PDOException $e) {
    die('Failed ' . $e->getMessage());
    exit;
}

header('Location: produk');
exit;
