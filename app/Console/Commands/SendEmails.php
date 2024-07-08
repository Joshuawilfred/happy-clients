<?php

namespace App\Console\Commands;

use App\Mail\BirthdayEmail;
use App\Mail\HolidayEmail;
use App\Models\Client;
use App\Models\Holiday;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send scheduled and holiday emails to clients';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now();
        $this->sendBirthdayEmails($today);
        $this->sendHolidayEmails($today);
    }

    private function sendBirthdayEmails(Carbon $date)
    {
        $clients = Client::whereMonth('birthday', $date->month)
            ->whereDay('birthday', $date->day)
            ->where('email_sent', false)
            ->get();

        $perMinute = 10; // Number of emails per minute
        $sleepTime = 60000000 / $perMinute; // microseconds per email

        foreach ($clients as $client) {
            Mail::to($client)->queue(new BirthdayEmail($client));
            $client->email_sent = true;
            $client->save();
            $this->info("Sent birthday email to {$client->email}");
            usleep($sleepTime);
        }
    }

    private function sendHolidayEmails(Carbon $date)
    {
        $holidays = Holiday::whereMonth('date', $date->month)
            ->whereDay('date', $date->day)
            ->where('emails_sent', false)
            ->get();

        $perMinute = 10; // Number of emails per minute
        $sleepTime = 60000000 / $perMinute; // microseconds per email

        foreach ($holidays as $holiday) {
            $clients = Client::latest()->get();
            $recipientsCount = 0;
            foreach ($clients as $client) {
                Mail::to($client)->queue(new HolidayEmail($client, $holiday->name, $holiday->email_template));
                $this->info("Sent {$holiday->name} email to {$client->email}");
                usleep($sleepTime);
                $recipientsCount++;
            }
            $holiday->emails_sent = true;
            $holiday->recipients_count = $recipientsCount;
            $holiday->save();
        }
    }
}
