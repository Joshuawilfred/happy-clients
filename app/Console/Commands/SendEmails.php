<?php

namespace App\Console\Commands;

use App\Mail\BirthdayEmail;
use App\Models\Client;
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
    }

    private function sendBirthdayEmails(Carbon $date)
    {
        $clients = Client::whereMonth('birthday', $date->month)
            ->whereDay('birthday', $date->day)
            ->where('email_sent', false)
            ->get();

        foreach ($clients as $client) {
            Mail::to($client)->send(new BirthdayEmail($client));
            $client->email_sent = true;
            $client->save();
            $this->info("Sent birthday email to {$client->email}");
        }
    }
}
