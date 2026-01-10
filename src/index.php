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
    case '/input';
        require __DIR__ . $page . '/admin/menus/input_produk.php';
    case '/edit';
        require __DIR__ . $page . '/admin/menus/edit_produk.php';
    case '/update';
        require __DIR__ . $page . '/admin/menus/update_produk.php';
    case '/simpan';
        require __DIR__ . $page . '/admin/menus/simpan_produk.php';
    case '/hapus';
        require __DIR__ . $page . '/admin/menus/hapus_produk.php';
}
