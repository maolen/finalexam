<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\WeightController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view(
            'index',
            [
                'title' => 'Добро пожаловать на сайт контроля веса'
            ]
        );
    }
);

Auth::routes(
    [
        'verify' => true
    ]
);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/weights', WeightController::class);


//Route::get('/weights', [WeightController::class, 'create']);

Route::get('users/{user}/stat', [WeightController::class, 'byUser'])
    ->name('weights.by-user');
Route::get('users/{user}/chart', ChartController::class)
    ->name('weights.chart');
