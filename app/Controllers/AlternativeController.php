<?php

namespace App\Controllers;

class AlternativeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Alternative'
        ];
        return view('alternative/index', $data);
    }
}
