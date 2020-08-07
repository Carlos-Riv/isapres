<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Joinform;

class NewJoin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $joinform;

    public function __construct(Joinform $joinform)
    {
        $this->joinform = $joinform; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('stevenbot@mg.isapreschileasesores.cl')
        ->subject('Nuevo contacto trabajo. Isapre Chile Asesores')
        ->view('emails.join');
    }
}
