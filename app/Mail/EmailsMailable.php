<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EmailsMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $email;
    public $button = false;
   
    public function __construct(Request $request)
    {
        if (Arr::exists($request, 'button')){
            $this->button = $request->button;
        }
       
        $this->data = $request;
        $this->email= [
            'title' => $request->title,
            'body' => $request->message,
        ];
    }

  
    public function build()
    {
        return $this->markdown('emails.emails')
                ->from($this->data->email, $this->data->name)
                ->to(env('MAIL_FROM_CITAS'), 'OPTICENTER')
                ->subject($this->data->subject);
    }
}
