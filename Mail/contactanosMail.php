<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactanosMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "informacion de contacto";
    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from($this->contacto['email'], $this->contacto['nombre'])->view('email.contacto');
    }
}
