<?php

// Create writable /tmp directories Laravel expects to exist
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];
foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Force runtime env vars (vercel.json `env` is unreliable with `builds:` legacy config)
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
