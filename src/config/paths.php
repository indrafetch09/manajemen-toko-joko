<?php
// Helper for generating asset URLs.
// Adjust `WEB_ROOT` if your document root is not the `src/` directory.

// If you serve with `php -S localhost:8000 -t src/`, assets are available at `/assets/`.
if (!defined('WEB_ROOT')) {
    define('WEB_ROOT', '/');
}

if (!defined('ASSET_URL')) {
    define('ASSET_URL', rtrim(WEB_ROOT, '/') . '/assets/');
}

/**
 * Return a full asset URL for inclusion in templates.
 * Example: <link href="<?= asset('css/style.css') ?>">
 */
function asset(string $path): string
{
    return ASSET_URL . ltrim($path, '/');
}

return true;
