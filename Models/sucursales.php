<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    use HasFactory;

    protected $table = "sucursales";

    protected $fillable = [
        'clavesucursal',
        'nombresucursal',
        'cliente_id'
    ];

    public function cvsucursales(){
        return $this->hasMany(cvsucursales::class, 'sucursale_id');
    }

}
