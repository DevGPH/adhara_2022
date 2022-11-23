<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationMail extends Mailable
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
 
        if ($this->lang == 'es') {

            $this->msg = 'Esta reservación esta confirmada ¡Los esperamos!';
            $this->msg_2 = 'Este es tu comprobante de reserva, deberás mostrarlo junto con una identificación oficial en el mostrador del Hotel.';
            if ($this->hotel_name == "Adhara Cancun") {
                return $this->subject('Confirmacion de Reserva')->view('Mails.es.reserva');
            }
            else {
                return $this->subject('Confirmacion de Reserva')->view('Mails.es.reserva_express');
            }
            
        }
        else {

            $this->msg = 'Esta reservación esta confirmada ¡Los esperamos!';
            $this->msg_2 = 'Este es tu comprobante de reserva, deberás mostrarlo junto con una identificación oficial en el mostrador del Hotel.';

            if ($this->hotel_name == "Adhara Cancun") {
                return $this->subject('Confirmacion de Reserva')->view('Mails.es.reserva');
            }
            else {
                return $this->subject('Confirmacion de Reserva')->view('Mails.es.reserva_express');
            }
        }        
    }
}
