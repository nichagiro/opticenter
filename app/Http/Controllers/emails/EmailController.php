<?php

namespace App\Http\Controllers\emails;

use App\Http\Controllers\Controller;
use App\Mail\EmailsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public $validate = true;

    public function index (Request $request){
        foreach ($request->all() as $data) {
            if($data == ''){
                $this->validate = false;
            }
        }
        if($this->validate){
            Mail::send(new EmailsMailable($request));    
        }
        else{
            return response('Falta llenar los campos obligatorios', 400);
        }
    }
}
