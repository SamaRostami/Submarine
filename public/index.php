<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\controllers\AuthController;
use App\controllers\siteController;
use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/contact', 'contact');
$app->router->post('/contact', [siteController::class, 'handleContact']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->run();
