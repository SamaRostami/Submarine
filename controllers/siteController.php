<?php

namespace App\controllers;

use App\core\Application;
use App\core\Controller;

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
    public function handleContact(): string
    {
        return 'Handling submitted data ';
    }
}