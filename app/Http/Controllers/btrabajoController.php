<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;
use Illuminate\Support\Facades\DB;

class btrabajoController extends Controller
{
    public function index(){

        //$Vacantes = Vacante::all();
        $Vacantes = DB::select('SELECT * FROM vacante WHERE activa =1 ');
        return view('paginas.bolsaTrabajo', compact('Vacantes'));
    
      
    }
}
