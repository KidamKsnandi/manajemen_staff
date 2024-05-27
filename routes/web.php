<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('departement', DepartementController::class);
Route::resource('staff', StaffController::class);
