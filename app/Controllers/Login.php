<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Administrator'
        ];
        return view('login/index', $data);
    }
}
