<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Handling submitted data ';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }

    public function login(Request $request)
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
}