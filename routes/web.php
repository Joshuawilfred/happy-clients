<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HolidayController;
use App\Models\Client;
use App\Models\Holiday;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $clients = Client::whereMonth('birthday', now()->month)
        ->latest()
        ->get();

    $holidays = Holiday::whereMonth('date', now()->month)
        ->latest()
        ->get();

    $sortedClients = $clients->sortBy(function ($client) {
        return Carbon::parse($client->birthday)->day;
    });

    $sortedHolidays = $holidays->sortBy(function ($holiday) {
        return Carbon::parse($holiday->date)->day;
    });

    return view('app', [
        'clients' =>  $sortedClients->map(function ($client) {
            return (object) [
                'id' => $client->id,
                'name' => $client->name,
                'email' => $client->email,
                'birthday' =>  Carbon::parse($client->birthday)->format('F, d'),
                'email_sent' => $client->email_sent,
            ];
        }),
        'holidays' => $sortedHolidays->map(function ($holiday) {
            return (object) [
                'id' => $holiday->id,
                'name' => $holiday->name,
                'date' => $holiday->date,
                'emails_sent' => $holiday->emails_sent,
                'recipients_count' => $holiday->recipients_count,
            ];
        })
    ]);
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/clients', 'index')->name('clients.index');
    Route::get('/clients/create', 'create');
    Route::get('/clients/{client}', 'show');

    //protected routes if you may
    Route::post('/clients', 'store');
    Route::get('/clients/{client}/edit', 'edit')->name('clients.edit');
    Route::patch('/clients/{client}', 'update');
    Route::delete('/clients/{client}', 'destroy')->name('clients.destroy');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::resource('holidays', HolidayController::class);
