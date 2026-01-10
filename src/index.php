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
        require __DIR__ . $page . '/admin/menus/index.php';
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
}
?> 