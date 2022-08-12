<?php

namespace App\Controllers;

class Alternatif extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Alternatif'
        ];
        return view('alternatif/index', $data);
    }
}
