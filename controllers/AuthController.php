<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Request;
use App\models\RegisterModel;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }
            var_dump($registerModel->errors);
            return $this->render('register', [
                'model' => $registerModel
            ]);
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