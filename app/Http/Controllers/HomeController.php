<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'weights.index',
            [
                'title' => 'Добро пожаловать на сайт контроля веса'
            ]
        );
    }
}
