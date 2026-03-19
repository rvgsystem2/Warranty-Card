<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WarntyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $warentycardData;

    public function __construct($warentycardData)
    {
        $this->warentycardData = $warentycardData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Warranty Card Confirmation',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.warenty',
            with: [
                'data' => $this->warentycardData,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}