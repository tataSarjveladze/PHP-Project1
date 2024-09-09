<?php

// Start the session so that it can be used across the application.
session_start();

require_once 'vendor/autoload.php';

use Omedia\ConfigManager\Settings;
use Omedia\Router\Interfaces\RouterFromFileInterface;
use Omedia\Router\RouterManager;

// Display errors if the project is configured to do so.
$settings = new Settings(__DIR__ . '/config/settings.php');
if ($settings->get('display_errors')) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}


$router = RouterManager::create($settings, true, 'routes.yml');

if ($router instanceof RouterFromFileInterface) {
    $router->registerRoutesFromFile();
    $router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
}






