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
    $authHeader = null;
    if (function_exists('apache_request_headers')) {
        $h = apache_request_headers();
        $authHeader = $h['Authorization'] ?? ($h['authorization'] ?? null);
    }
    $authHeader = $authHeader ?? ($_SERVER['HTTP_AUTHORIZATION'] ?? null);

    if ($authHeader && preg_match('/Bearer\s(\S+)/', $authHeader, $m)) return $m[1];
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

    return $decoded;
}

// non-fatal helper: return decoded payload object or null
function current_token_payload()
{
    $token = get_bearer_token();
    if (!$token) return null;
    return jwt_decode_token($token);
}

// require admin role; exits with 403 if not admin, returns decoded payload on success
function require_admin()
{
    $decoded = require_auth();
    $role = $decoded->role ?? null;
    if ($role !== 'admin') {
        http_response_code(403);
        exit('Forbidden');
    }
    return $decoded;
}
