<?php

namespace App\Mail;

use App\Models\order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Mail;

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
        return $this->view('emails.viewmail');
        return $this->from('hello@example.com', 'Mailtrap test')
               ->replyTo('elys@example.com', 'elys')
                ->view('emails.order');
    }

    public function store(Request $request)
    {
        $order = order::findOrFail($request->order_id);

        Mail::to('emails.viewmail', $request->user())->send(new OrderShipped($order));
    }

    public function content()
    {
        return new Content(
            view: 'emails.viewmail',
            with: [
                'orderNom' => $this->order->nom,
                'orderEmail' => $this->order->email,
                'orderMessage' => $this->order->message,
            ],
        );
    }

    public function headers()
    {
        return new headers(
            messageId: 'custom-message-id@example.com',
            references: ['previous-message@example.com'],
            text: ['x-Custom-Header' => 'Custom-value'],
        );
    }

    public function envelope()
    {
        return new Envelope(
            to: ['elys@example.com'],
            replyTo: 'elys@example.com',
            subject: 'Email- Contact',
            metadata: [
                'order_id' => $this->order->id,
            ],

        );
    }
}
