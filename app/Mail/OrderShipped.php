<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $date)
    {
        $this->order = $order;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped', ['order' => $this->order, 'date' => $this->date]);
    }
}


// vim: set ts=4 sw=4 :
