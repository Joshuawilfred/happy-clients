<?php

use App\Mail\SendBirthDayEmails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/test', function () {
    Mail::to('joshuakaaya216@gmail.com')->send(
        new SendBirthDayEmails()
    );
    return 'Done';
});
