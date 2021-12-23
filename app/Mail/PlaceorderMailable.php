<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PlaceorderMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $order_data;
    public $items_in_cart;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order_data, $items_in_cart)
    {
        $this->order_data = $order_data;
        $this->items_in_cart = $items_in_cart;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        $from_name = "NewGreen";
        $from_email = "kevinmugiira@gmail.com";
        $subject = "NewGreen: Thank you for purchasing!";
        return $this->from($from_email,$from_name)
            ->view('emails.ordermail')
            ->subject($subject);
    }
}
