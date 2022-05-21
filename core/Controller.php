<?php

namespace App\core;

class Controller
{
    public string $layout = 'main';
    public function render($view, $params = []): bool|array|string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}