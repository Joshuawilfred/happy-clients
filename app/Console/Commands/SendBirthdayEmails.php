<?php

namespace App\Console\Commands;

use App\Mail\BirthdayEmail;
use App\Models\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendBirthdayEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-birthday-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send birthday emails to clients';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $clients = Client::whereMonth('birthday', now()->month)
            ->whereDay('birthday', now()->day)
            ->get();
        Log::info(now());
        foreach ($clients as $client) {
            Mail::to($client)->send(new BirthdayEmail($client));
            $this->info("Sent birthday email to {$client->email}");
        }
    }
}
