<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joko Admin | Input</title>
    <?php require_once __DIR__ . '/../../../config/paths.php'; ?>
    <link rel="stylesheet" href="<?php echo asset('vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo asset('images/favicon.ico'); ?>" />
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo asset('images/logo.svg'); ?>" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo asset('images/logo-mini.svg'); ?>"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item nav-search d-none d-md-flex" id="navbarSearch">
                        <a class="nav-link d-flex justify-content-center align-items-center" id="navbarSearchButton" href="#">
                            <i class="mdi mdi-magnify mx-0"></i>
                        </a>
                        <input type="text" class="form-control" placeholder="Search..." id="navbarSearchInput">
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link count_sql-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-email mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <p class="mb-0 fw-normal float-start dropdown-header">Messages</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis fw-normal">David Grey
                                    </h6>
                                    <p class="fw-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis fw-normal">Tim Cook
                                    </h6>
                                    <p class="fw-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis fw-normal"> Johnson
                                    </h6>
                                    <p class="fw-light small-text text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link count_sql-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                            id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 fw-normal float-start dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal">Application Error</h6>
                                    <p class="fw-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal">Settings</h6>
                                    <p class="fw-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal">New user registration</h6>
                                    <p class="fw-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown me-0 me-sm-2">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="https://placehold.co/36x36" alt="profile" />
                            <span class="nav-profile-name">Joko</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <!-- TODO: handle logout -->
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/produk">
                            <i class="mdi mdi-arrow-left menu-icon"></i>
                            <span class="menu-title">Kembali</span>
                        </a>
                    </li>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <form method="POST" action="save">
                        <table border="1">
                            <tr>
                                <td>Nama Produk</td>
                                <td><input type="text" class="form-control form-control-sm" name="nama_produk"></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><input type="text" class="form-control form-control-sm" name="stok"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><input type="text" class="form-control form-control-sm" name="harga"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="simpan"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php require __DIR__ . '/../../../layout/footer.php'; ?>


</html>