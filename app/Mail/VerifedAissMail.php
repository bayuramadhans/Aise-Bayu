<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifedAissMail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code){
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->from('information@aise.himsiunair.com')
                    ->view('email.verifed_aiss')
                    ->subject('AISS:Tiket Pendaftaran')
                    ->with('code');
    }
}
