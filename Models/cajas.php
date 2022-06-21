<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cajas extends Model
{
    use HasFactory;

    protected $table = "cajas";


    protected $fillable = [
        'nombrecaja',
        'nombrecajaexcel',
        'tarima_id',
        'cvsucursale_id',
        'catalogoestadoscaja_id'
    ];

    public function cajasproductos(){
        return $this->hasMany(cajasproductos::class, 'caja_id')->where('activocajaproducto', 1);
    }

    public function cajasproductosActivos(){
        return $this->hasMany(cajasproductos::class,
        'caja_id')->where('activocajaproducto', '=', 1);
    }

    public function incidenciascajas(){
        return $this->hasMany(incidenciascajas::class, 'caja_id')->where('activoincidenciascaja', 1);
    }

}
