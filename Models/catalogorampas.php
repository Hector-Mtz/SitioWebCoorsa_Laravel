<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogorampas extends Model
{
    use HasFactory;

    protected $table = "catalogorampas";

    protected $fillable = [
        'nombrerampa'
    ];

    public function controlesvehiculares(){
        return $this->hasMany(cvs::class, 'catalogorampa_id');
    }

    public function getrampasidcliente($idCliente){
        return $this->where([
            ['catalogorampas.activorampa', '=', 1],
            ['catalogorampas.clientesventa_id', '=', $idCliente]
        ])->get();
    }

    public function generararreglogetrampas($cantidadConsulta, $arregloRampas){
        $arregloDatosFinales = [];
        if($cantidadConsulta > 0){
            foreach($arregloRampas as $itemRampa){
                $arregloDatosFinales[] = array(
                    'idRampa' => $itemRampa->id,
                    'nombreRampa' => $itemRampa->nombrerampa
                );
            }
        }
        return $arregloDatosFinales;
    }

}
