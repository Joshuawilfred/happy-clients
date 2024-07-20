<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('app:send-emails')->dailyAt('22:55'); // edit this line to run scheduled commands i.e everyMinute() etc see https://laravel.com/docs/11.x/scheduling#schedule-frequency-options

Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('app:reset-email-statuses')
    ->yearly();
