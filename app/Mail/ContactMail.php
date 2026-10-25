<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMail extends Mailable
{
    public function __construct(
        public string $sujet,
        public string $contenu,
        public string $nom
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->sujet
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact'
        );
    }
}