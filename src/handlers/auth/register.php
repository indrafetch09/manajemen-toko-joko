<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    exit('Method tidak diizinkan');

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$pass = $POST['password'] ?? '';

if (!$name || !$email || !$pass) {
    http_response_code(400);
    exit('Data tidak boleh kosong');
}

$hash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
$stmt->execute([':name' => $name, ':email' => $email, ':password' => $hash]);
$userId = $pdo->lastInsertId();

$token = jwt_sign((int)$userId, (string)$role);
setcookie('token', $token, time() + ($_ENV['JWT_EXP_SECONDS'] ?? 3600), '/', '', true, true);
echo json_encode(['status' => 'ok']);
