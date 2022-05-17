<?php

require_once __DIR__.'/vendor/autoload.php';
use App\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return 'Hello Submarine';
});

$app->router->get('/contact', function () {
    return 'Contact';
});
$app->run();
