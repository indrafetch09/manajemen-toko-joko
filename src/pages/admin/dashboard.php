<?php
// Simple admin dashboard example — protected by JWT role check
require_once __DIR__ . '/../../handlers/auth/auth.php';

$decoded = require_admin(); // exits 401/403 if not allowed

// decoded contains token claims, e.g. $decoded->sub and $decoded->role
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <p>Welcome, admin user ID: <?php echo htmlspecialchars($decoded->sub); ?></p>
    <p>Role from token: <?php echo htmlspecialchars($decoded->role ?? ''); ?></p>
    <p>Token issued at: <?php echo htmlspecialchars(date('Y-m-d H:i:s', $decoded->iat ?? 0)); ?></p>
    <p>Token expires at: <?php echo htmlspecialchars(date('Y-m-d H:i:s', $decoded->exp ?? 0)); ?></p>
</body>

</html>