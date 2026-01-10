<?php

use Dotenv\Dotenv;

// --- PERBAIKAN SAKIKO ---
// Kita tentukan root folder (mundur 2 langkah dari src/config atau sejenisnya)
// Jika file ini ada di 'src/config/', maka '/../../' akan membawanya ke root project.
$root = __DIR__ . '/../../';

// Load Autoload dari root
require_once $root . 'vendor/autoload.php';

// Load .env file validation
try {
    // PENTING: Beri tahu Dotenv bahwa file .env ada di folder $root, bukan di sini.
    $dotenv = Dotenv::createImmutable($root);
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    // Tampilkan pesan error lengkap biar gampang debugging
    die("Gawat! File .env tidak ditemukan di jalur ini: " . realpath($root) . ". Error: " . $e->getMessage());
}

// setting .env (Menggunakan null coalescing operator '??' biar gak error kalau kosong)
$dbhost = $_ENV["DB_HOST"] ?? '127.0.0.1';
$dbname = $_ENV["DB_NAME"] ?? 'toko_joko';
$dbuser = $_ENV["DB_USER"] ?? 'root';
$dbpass = $_ENV["DB_PASS"] ?? '';
$dbport = $_ENV["DB_PORT"] ?? '3306';

$dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// validate the conn with PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
    // Baris di bawah ini bisa dikomentari/hapus nanti kalau sudah sukses, biar gak mengganggu tampilan JSON/HTML
    // echo "database connected successfull"; 
} catch (\PDOException $e) {
    // Jangan tampilkan error asli ke user publik di production, tapi untuk dev oke.
    die("Koneksi Database Gagal: " . $e->getMessage());
}