<?php

namespace App\Mail;

use App\Models\order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The order instance.
     *
     * @var \App\Models\order
     */
    public $order;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\order $order
     * @return void
     */
    public function __construct(order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order');
        return $this->from('example@example.com', 'Example')
                ->view('emails.order');
    }
}
