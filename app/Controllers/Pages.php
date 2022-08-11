<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home| Spk_promethee'
        ];

        return view('pages/home', $data);
    }
}
