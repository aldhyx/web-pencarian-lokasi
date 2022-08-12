<?php

namespace App\Controllers;

class Kriteria extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Kriteria'
        ];
        return view('Kriteria/index', $data);
    }
}
