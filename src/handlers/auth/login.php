<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    exit('Method tidak diizinkan');

$email = trim($_POST['email'] ?? '');
$pass = $POST['password'] ?? '';

$hash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $pdo->prepare('SELECT id, password FROM users WHERE email = :email LIMIT 1');
$stmt->execute([':email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($pass, $user['password'])) {
    http_response_code(400);
    exit('Data tidak boleh kosong');
}

$token = jwt_sign((int)$userId, (string)$role);
setcookie('token', $token, time() + ($_ENV['JWT_EXP_SECONDS'] ?? 3600), '/', '', true, true);
echo json_encode(['status' => 'ok']);
