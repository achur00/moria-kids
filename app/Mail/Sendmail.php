<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;
    public $contact;
    public function __construct($data, $contact)
    {
        $this->data = $data;
        $this->contact = $contact;
    }


    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Sendmail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('VISITORS\'S ENQUIRY')
        ->view('mail.quote')
        ->with(['data' => $this->data, 'contact' => $this->contact]);
    }
}
