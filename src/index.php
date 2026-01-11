<!-- Routing -->
<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$page = '/pages';

switch ($path) {
    case '';
    case '/';
        require __DIR__ . $page . '/login.php';
        break;
    case '/register';
        require __DIR__ . $page . '/register.php';
        break;
    case '/admin';
        require __DIR__ . $page . '/admin/menus/dashboard.php';
        break;
    case '/admin/input';
        require __DIR__ . $page . '/admin/menus/input_produk.php';
        break;
    case '/admin/edit';
        require __DIR__ . $page . '/admin/menus/edit_produk.php';
        break;
    case '/admin/update';
        require __DIR__ . $page . '/admin/menus/update_produk.php';
        break;
    case '/admin/simpan';
        require __DIR__ . $page . '/admin/menus/simpan_produk.php';
        break;
    case '/admin/hapus';
        require __DIR__ . $page . '/admin/menus/hapus_produk.php';
        break;
    default:
        header("HTTP 404 NOT FOUND");
        break;
}

// DEV ONLY ROUTES
$devPage = '/components';
switch ($path) {
    case '/dev/buttons':
        require __DIR__ . $devPage . '/buttons.php';
        break;
    case '/dev/tables':
        require __DIR__ . $devPage . '/data-table.php';
        break;
    case '/dev/icons':
        require __DIR__ . $devPage . '/mdi.php';
        break;

    default:
        header("HTTP 404 NOT FOUND");
        break;
}
?>