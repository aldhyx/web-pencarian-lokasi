<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        return view('login/registrasi', $data);
    }
}
