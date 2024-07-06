<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HolidayEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    public $holidayName;
    public $emailContent;

    /**
     * Create a new message instance.
     */
    public function __construct($client, $holidayName, $emailContent)
    {
        $this->client = $client;
        $this->holidayName = $holidayName;
        $this->emailContent = $emailContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emailContent['title'] . " " . $this->client->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.holiday',
            with: [
                'client_name' => $this->client->name,
                'holiday_name' => $this->holidayName,
                'email_body' => $this->emailContent['body'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
