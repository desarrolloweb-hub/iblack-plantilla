<?php

// Create writable /tmp directories Laravel expects to exist
$tmpDirs = [
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
];
foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Point Laravel's storage_path() at /tmp/storage (writable) instead of /var/task/... (read-only)
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
$_SERVER['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');

// Runtime env defaults — vercel.json's `env` section isn't always honored by the
// vercel-php builder, so we set them here as well. Only fills in if not already set.
$runtimeEnv = [
    'APP_ENV'              => 'production',
    'APP_DEBUG'            => 'false',
    'LOG_CHANNEL'          => 'stderr',
    'LOG_STACK'            => 'stderr',
    'CACHE_STORE'          => 'array',
    'CACHE_DRIVER'         => 'array',
    'SESSION_DRIVER'       => 'cookie',
    'QUEUE_CONNECTION'     => 'sync',
    'VIEW_COMPILED_PATH'   => '/tmp/storage/framework/views',
];
foreach ($runtimeEnv as $k => $v) {
    if (getenv($k) === false || getenv($k) === '') {
        putenv("{$k}={$v}");
        $_ENV[$k] = $v;
        $_SERVER[$k] = $v;
    }
}

require __DIR__ . '/../public/index.php';
