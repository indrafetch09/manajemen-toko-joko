<?php
include_once __DIR__ . '/../../../config/database.php';

var_dump($_POST);
exit;

$id = $_POST['id_produk'] ?? null;
$nama = trim($_POST['nama_produk'] ?? '');
$stok = trim($_POST['stok'] ?? '');
$harga = trim($_POST['harga'] ?? '');

if (! $id || $nama === '') {
        header('Location: /admin/produk?error=missing_data');
        exit;
}

try {
        $stmt = $pdo->prepare(
                'UPDATE produks 
                SET nama_produk = :nama_produk, 
                stok = :stok, 
                harga = :harga
                WHERE id_produk = :id_produk'
        );

        $stmt->execute([
                'nama_produk' => $nama,
                'stok' => $stok,
                'harga' => $harga,
                'id_produk' => $id,
        ]);
} catch (PDOException $e) {
        die('Failed ' . $e->getMessage());
}

header('Location: /admin/produk');
exit;
