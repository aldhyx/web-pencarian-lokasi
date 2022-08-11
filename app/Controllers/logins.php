<?php

namespace App\Controllers;

class logins extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'form login'
        ];
        return view('/login/index', $data);
    }
}
