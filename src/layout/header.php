<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Joko Admin</title>
    <!-- plugins:css -->
    <?php require_once __DIR__ . '/../../../config/paths.php'; ?>
    <link rel="stylesheet" href="<?php echo asset('vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo asset('css/vertical-layout-light/style.css'); ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo asset('images/favicon.ico'); ?>" />
    <?php
    $gmaps_key = '';
    $autoload = __DIR__ . '/../vendor/autoload.php';
    if (file_exists($autoload)) {
        require_once $autoload;
        try {
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->safeLoad();
        } catch (Exception $e) {
        }
        $gmaps_key = getenv('GMAPS_API_KEY') ?: '';
    } else {
        $gmaps_key = getenv('GMAPS_API_KEY') ?: '';
    }
    ?>
    <script>
        window.GMAPS_API_KEY = '<?php echo htmlspecialchars($gmaps_key, ENT_QUOTES); ?>';
    </script>
</head>