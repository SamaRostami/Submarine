<?php

namespace App\core;

use JetBrains\PhpStorm\Pure;

class Application
{
    public Router $router;
    public Request $request;
    #[Pure] public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}