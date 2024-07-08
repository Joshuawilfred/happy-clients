<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command('app:send-emails')->dailyAt('03:12');

Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('app:reset-email-statuses')
    ->yearly();
