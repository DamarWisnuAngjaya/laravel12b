<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserClientController::class);
