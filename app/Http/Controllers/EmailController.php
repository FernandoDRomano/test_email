<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviar(Request $request){
        $msg = "Me llamo: " . $request->input("nombre") . ", tengo " . $request->input("edad") . " años de edad, y estoy " . $request->input("estado_civil");
        
        Mail::to("fernando.daniel.romano.2020@gmail.com")->send(new MessageRecieved($msg));
        
        return response()->json(["message" => "Email Enviado"]);
    }
}
