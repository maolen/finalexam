<?php

use App\Http\Controllers\WeightController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(
    [
        'verify' => true
    ]
);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('/weights', WeightController::class);
Route::redirect('/', 'weights');
Route::resource('/weights', WeightController::class);
