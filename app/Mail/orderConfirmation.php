<?php

namespace App\Mail;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class orderConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $order_data;

    public function __construct($order_data)
    {
        $this->order_data = $order_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['cartItems'] = Cart::where('user_id',Auth::user()->id)->get();
        $data['all']=Cart::where('user_id',Auth::user()->id)->delete();
        $from_email = "youremail@gmail.com";
        $subject = "Order Placement";
        return $this->from($from_email)
            ->view('frontend.pages.mail',compact('data'))
            ->subject($subject);
        }
}
