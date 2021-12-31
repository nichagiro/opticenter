<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class EmailsMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
   
    public function __construct(Request $request)
    {
        $this->data = $request;
        return ($this->data);
    }

  
    public function build()
    {
        return $this->markdown('emails.emails')
                ->from($this->data->email, $this->data->name)
                ->to(env('MAIL_FROM_CITAS'), 'OPTICENTER')
                ->subject($this->data->subject);
    }
}
