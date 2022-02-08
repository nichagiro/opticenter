<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CitasMailable extends Mailable 
{
    use Queueable, SerializesModels;
    public $data;
    public $url;
    public $button = false;
   
    public function __construct(Request $request)
    {
        if($request->phone > 3100000000){
           $this->button = true;
           $this->url = env("WHATSAPP_API").$request->phone;
        }                
        $this->data = $request;
    }

  
    public function build()
    {
        return $this->markdown('emails.citas')
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_NAME'))
            ->to(env('MAIL_FROM_CITAS'), 'OPTICENTER')
            ->subject($this->data->subject);
    }
}
