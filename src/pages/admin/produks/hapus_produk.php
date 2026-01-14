<?php
include_once __DIR__ . '/../../../config/database.php';

// var_dump($_GET);
// exit;

$id = $_GET['id_produk'] ?? null;

if (!$id || $id === '') {
    header('Location: /admin/produk?error=missing_data');
    exit;
}

try {
    $stmt = $pdo->prepare(
        'DELETE FROM produks 
        WHERE id_produk = :id_produk'
    );
    $stmt->execute([
        'id_produk' => $id
    ]);

    if ($stmt->rowCount() === 0) {
        header('Location: /admin/produk?error=not_found');
        exit;
    }
} catch (PDOException $e) {
    die('Gagal menghapus produk ' . $e->getMessage());
    exit;
}

header('Location: /admin/produk');
exit;
