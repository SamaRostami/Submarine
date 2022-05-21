<?php

namespace App\controllers;

use App\core\Application;
use App\core\Controller;
use App\core\Request;

class siteController extends Controller
{
    public function home(): string
    {
        $params = [
            'name' => 'Submarine'
        ];
        return $this->render('home', $params);
    }
    public function contact(): string
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        return 'Handling submitted data ';
    }
}