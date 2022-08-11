<?php

namespace App\Controllers;

class LoginS extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login Administrator'
        ];
        return view('login/index', $data);
    }
}
