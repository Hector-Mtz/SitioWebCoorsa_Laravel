<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\contactanosMail;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'email'=>'required|email',
            'cuidad'=>'required',
            'telefono'=>'required',
            'mensaje'=>'required'
        ]);

        $correo =new ContactanosMail($request->all());
    	Mail::to('vania.jimenez@coorsamexico.com')->send($correo);
    	return "Enviado..";
    }
}
