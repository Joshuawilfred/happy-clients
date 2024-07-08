<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Holiday;
use Illuminate\Console\Command;

class ResetAnnualEmailStatuses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-email-statuses';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset email sent statuses for holidays and client birthdays';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $holidaysUpdated = Holiday::query()->update([
            'emails_sent' => false,
            'recipients_count' => 0
        ]);

        $clientsUpdated = Client::query()->update([
            'email_sent' => false
        ]);

        $this->info("Reset complete: {$holidaysUpdated} holidays and {$clientsUpdated} client birthday statuses updated.");
    }
}
