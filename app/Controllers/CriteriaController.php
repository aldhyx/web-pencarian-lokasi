<?php

namespace App\Controllers;

class CriteriaController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Criteria'
        ];
        return view('criteria/index', $data);
    }
}
