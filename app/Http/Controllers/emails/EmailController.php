<?php

namespace App\Http\Controllers\emails;

use App\Http\Controllers\Controller;
use App\Mail\CitasMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public $validate = true;

    public function citas (Request $request){

        try {
            // DATA REQUIRED ALL
            foreach ($request->all() as $data) {
                if($data == ''){
                    $this->validate = false;
                }
            }
            if($this->validate){               
                Mail::send(new CitasMailable($request));    
                return response($request->all(), 200);
            } else{
                return response('LLENAR TODOS LOS CAMPOS', 400);
            }
            
        } catch (\Throwable $th) {
            return response('HA OCURRIDO UN ERROR', 500);
        }
               
    }
}
