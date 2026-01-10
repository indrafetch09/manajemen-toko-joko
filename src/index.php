<!-- Routing -->
<?php
$request = $_SERVER['REQUEST_URI'];
$page = '/pages';

switch ($request) {
    case '';
    case '/';
        require __DIR__ . $page . '/login.php';
        break;
    case '/register';
        require __DIR__ . $page . '/register.php';
        break;
    case '/admin';
        require __DIR__ . $page . '/admin/menus/index.php';
        break;
}
