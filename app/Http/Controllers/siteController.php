<?php

namespace App\Http\Controllers;

use App\Mail\sendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class siteController extends Controller
{
    public function contact(Request $request){
        $data = $request->validate([
            "nombre" => "required|string|min:3|max:255",
            "empresa" => "required|string|min:3|max:255",
            "tel" => "required",
            "email" => "required|email",
            "mensaje" => "required|string|min:3|max:500",
        ]);
        Mail::to('marianamunoz@mudisa.com.mx')->bcc('monitoreo@glucosacomunicacion.com')->send(new sendContact($data));
        
        
        return ["result" => "success","message"=>"Mensaje ha sido enviado con éxito"];   
    }
}
