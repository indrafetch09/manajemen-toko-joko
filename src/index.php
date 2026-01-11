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

    // admin
    case '/admin';
        require __DIR__ . $page . '/admin/dashboard.php';
        break;
    case '/admin/produk';
        require __DIR__ . $page . '/admin/produks/tampilan_produk.php';
        break;
    case '/admin/input';
        require __DIR__ . $page . '/admin/produks/input_produk.php';
        break;
    case '/admin/edit';
        require __DIR__ . $page . '/admin/produks/edit_produk.php';
        break;
    case '/admin/update';
        require __DIR__ . $page . '/admin/produks/update_produk.php';
        break;
    case '/admin/save';
        require __DIR__ . $page . '/admin/produks/simpan_produk.php';
        break;
    case '/admin/delete';
        require __DIR__ . $page . '/admin/produks/hapus_produk.php';
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