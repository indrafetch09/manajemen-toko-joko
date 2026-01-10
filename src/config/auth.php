<?php

use Dotenv\Dotenv;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

function jwt_sign(int $userId, string $role)
{
    $now = time();
    $exp = $now + ($_ENV['JWT_EXP_SECONDS'] ?? 3600);
    $payload = [
        'iss' => $_ENV['JWT_ISSUER'] ?? '',
        'aud' => $_ENV['JWT_AUD'] ?? '',
        'iat' => $now,
        'exp' => $exp,
        'sub' => $userId,
        'role' => $role
    ];
    return JWT::encode($payload, $_ENV['JWT_SECRET'], 'HS256');
}

function jwt_decode_token(string $token)
{
    try {
        return JWT::decode($token, new Key($_ENV['JWT_SECRET'], 'HS256'));
    } catch (Exception $e) {
        return null;
    }
}

function get_bearer_token()
{
    if (!empty($_COOKIE['token'])) return $_COOKIE['token'];
    $h = apache_request_headers() ?: [];
    $auth = $h['Authorization'] ?? ($h['authorization'] ?? null);

    if ($auth && preg_match('/Bearer\s(\S+)/', $auth, $m)) return $m[1];
    return null;
}

function require_auth()
{
    $token = get_bearer_token();
    if (!$token) {
        http_response_code(401);
        exit('Unauthorized');
    }

    $decoded = jwt_decode_token($token);
    if (!$decoded) {
        http_response_code(401);
        exit('Invalid Token');
    }

    return $decoded->sub;
}
