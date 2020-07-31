<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransactionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data = [];
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $user_id = auth()->user()->id;
        // $transaction = Transaction::where('user_id',$user_id);
        // $this->data = [
        //     'transactions' => $data
        // ];
        return $this->view('mails.transaction')->with(
            ['data' => $this->data]);
    }
}
