<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Administrator'
        ];
        return view('login/index', $data);
    }
}
