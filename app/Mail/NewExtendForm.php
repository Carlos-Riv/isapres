<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ExtendForm;
use App\Isapre;

class NewExtendForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $extendform;
    public $isapre;

    public function __construct(ExtendForm  $extendform)
    {
        $this->extendform = $extendform;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->isapre = Isapre::where('id', $this->extendform['isapre_id'])->first();
        return $this->from($_ENV['EMAIL_SENDER'])
        ->subject('Nuevo contacto. Isapre Chile Asesores')
        ->view('emails.extendform');
    }
}
