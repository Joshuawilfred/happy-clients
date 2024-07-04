<?php

use App\Http\Controllers\ClientController;
use App\Mail\BirthdayEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/clients', 'index');
    Route::get('/clients/create', 'create');
    Route::get('/clients/{client}', 'show');

    //protected routes if you may
    Route::post('/clients', 'store');
    Route::get('/clients/{client}/edit', 'edit')->can('edit', 'client');
    Route::patch('/clients/{client}', 'update');
    Route::delete('/clients/{client}', 'destroy');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

