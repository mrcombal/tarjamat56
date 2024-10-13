<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email from Tarjamat Contact Us')
            ->from(env('MAIL_FROM_ADDRESS', 'info@arabictarjamat.com'), env('MAIL_FROM_NAME', 'Tarjamat'))
            ->view('emails.contact_us')
            ->with([
                'data' => $this->data
            ]);
    }
}
