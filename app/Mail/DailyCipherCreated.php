<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DailyCipherCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $cipher; // Cipher data to be passed to the email view

    /**
     * Create a new message instance.
     *
     * @param array $cipher
     */
    public function __construct($cipher)
    {
        $this->cipher = $cipher;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Daily Cipher Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.daily_cipher', // Reference the Blade view for the email
            with: ['cipher' => $this->cipher],  // Pass cipher data to the view
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
