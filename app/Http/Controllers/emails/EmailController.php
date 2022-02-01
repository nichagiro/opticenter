<?php

namespace App\Http\Controllers\emails;

use App\Http\Controllers\Controller;
use App\Mail\EmailsMailable; //plantilla general
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public $validate = true;

    public function citas (Request $request){
        foreach ($request->all() as $data) {
            if($data == ''){
                $this->validate = false;
            }
        }
        if($this->validate){
            Arr::add($request, 'title','Solicitud de cita'); //required params
            Arr::add($request, 'button', [
                'url' => env('WHATSAPP_API').'57'.$request->phone,
                'text' => 'Whatsapp'
            ]);
            Mail::send(new EmailsMailable($request));    
            return response($request->all(), 200);
        }
        else{
            return response(0, 400);
        }
    }
}
