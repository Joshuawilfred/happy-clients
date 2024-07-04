<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());->dailyAt('07:00');
// })->purpose('Display an inspiring quote')->everyMinute();

Schedule::command('app:send-birthday-emails')->dailyAt('07:00');