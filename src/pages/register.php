<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Joko Admin | Register</title>
    <!-- plugins:css -->
    <?php require_once __DIR__ . '/../config/paths.php'; ?>
    <link rel="stylesheet" href="<?php echo asset('vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo asset('images/favicon.ico'); ?>" />
</head>

<body>
    <?php
    include './src/config/database.php';
    ?>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?php echo asset('images/logo-black.svg'); ?>" alt="logo">
                            </div>
                            <h5>Hallo! Selamat Datang di Joko Admin</h5>
                            <h6 class="fw-light">Silahkan buat akun baru.</h6>
                            <form class="pt-3">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username (Joko)">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email (jokowee02@gmail.com)">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password (********)">
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <a class="btn btn-primary btn-lg fw-medium auth-form-btn" href="../../index.html">Daftar</a>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">Lupa password?</a>
                                </div>
                                <div class="text-center mt-4 fw-light">
                                    Sudah punya akun? <a href="/" class="text-primary">Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo asset('vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo asset('js/off-canvas.js'); ?>"></script>
    <script src="<?php echo asset('js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo asset('js/template.js'); ?>"></script>
    <script src="<?php echo asset('js/settings.js'); ?>"></script>
    <script src="<?php echo asset('js/todolist.js'); ?>"></script>
    <!-- endinject -->
</body>

</html>