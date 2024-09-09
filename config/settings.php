<?php

$config['display_errors'] = FALSE;

// Caching.
$config['cache'] = [
    'enabled' => false,
    'path' =>  dirname(__DIR__) . '/cache',
];

// Database connection.
$config['database'] = [
    'hostname' => '',
    'name' => 'gff',
    'username' => 'db',
    'password' => '',
];

// If settings.local.php exists, include it as an override.
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

return $config;