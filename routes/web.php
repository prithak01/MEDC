<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recController;

Route::get('/', function () {
    return view('reclogin');
});

Route::post('/login', [recController::class, 'login']);