<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservaFailed extends Mailable
{
    use Queueable, SerializesModels;

    public $folio;
    public $hotel_name;
    public $lang;
    public $msg;
    public $msg_2;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($folio, $hotel_name, $lang = 'es', $info = null)
    {
        //$this->action = $action;
        $this->folio = $folio;
        $this->hotel_name = $hotel_name;
        $this->lang = $lang;
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $this->msg = 'Esta reservación esta fallida';
        $this->msg_2 = 'Contacta al cliente para ver como lo podemos apoyar para terminar la reserva';

        return $this->subject('Rserva Fallida')->view('Mails.es.reserva');

    }
}
