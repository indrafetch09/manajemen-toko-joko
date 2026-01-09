<?php

use Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';

// load .env file validation
try {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    die("Invalid load .env file " . $e->getMessage());
}

// setting .env
$dbhost = $_ENV["DB_HOST"];
$dbname = $_ENV["DB_NAME"];
$dbuser = $_ENV["DB_USER"];
$dbpass = $_ENV["DB_PASS"];
$dbport = $_ENV["DB_PORT"];

$dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// validate the conn with PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
