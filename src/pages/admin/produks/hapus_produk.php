<?php
include __DIR__ . '/../../../config/database.php';

if (!isset($_GET['id_produk']) || $_GET['id_produk'] === '') {
    header('Location: /admin/produk?error=missing_data');
    exit;
}

$id = $_GET['id_produk'];

try {
    $stmt = $pdo->prepare('DELETE FROM produks WHERE id_produk = :id');
    $stmt->execute([
        ':id' => $id
    ]);

    if ($stmt->rowCount() === 0) {
        header('Location: /admin/produk?error=not_found');
        exit;
    }
} catch (PDOException $e) {
    header('Location: /admin/produk?error=delete_failed');
    exit;
}

header('Location: /admin/produk');
exit;
