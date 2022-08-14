<?php

namespace App\Controllers;

class RegisterController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('login/register', $data);
    }
}
