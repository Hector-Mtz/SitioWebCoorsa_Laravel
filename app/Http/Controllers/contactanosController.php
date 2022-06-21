<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMail;
use Illuminate\Support\Facades\Mail;

class contactanosController extends Controller
{
    public function index(){
        return view('paginas.contactanos');

    }

    public function store(Request $request){

        $request->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'telefono'=>'required',
            'email'=>'required|email',
            'mensaje'=>'required'
        ]);

        $correo =new ContactanosMail($request->all());
    Mail::to('contacto@coorsamexico.com')->send($correo);
    return redirect()->route('contactanos.index')->with('info','mensaje enviado');
    }
}
