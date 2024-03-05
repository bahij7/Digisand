<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('form');
});

Route::get('/products', function () {
    return view('products');
});

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('/products', [FormController::class, 'index']);