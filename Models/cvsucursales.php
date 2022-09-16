<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cvsucursales extends Model
{
    use HasFactory;

    protected $table = "cvsucursales";

    protected $fillable = [
        'cv_id',
        'sucursale_id',
        'user_id',
        'activocvsucursal'
    ];

    public function sucursal(){
        return $this->belongsTo(sucursales::class, 'sucursale_id');
    }

    public function cv(){

        return $this->belongsTo(cvs::class, 'cv_id');
    }
    public function cajas()
    {
        return cajas::select('cajas.id', 'cajas.nombrecaja', 'cate_caja.nombreestadocaja')
        ->selectRaw('sum(c_p.piezascajasproducto) as totalPiezas, sum(c_p.advance) as totalAuditadas')
        ->join('catalogoestadoscajas as cate_caja',
             'cate_caja.id','=','cajas.catalogoestadoscaja_id')
        ->join('cajasproductos as c_p', 'c_p.caja_id', '=', 'cajas.id')
        ->where('cvsucursale_id', '=', $this->cvsucursale);
    }

    public function cajasCV(){
        return $this->hasMany(cajas::class, 'cvsucursale_id')->where('activocaja', 1);
    }

    public function cantidadcajas(){
        return cajas::where('cajas.activocaja', 1)->whereIn('cvsucursale.id', function($query){
            $query->select('cvsucurales.id')->from(with(new cvsucursales())->getTable())
            ->where([
                ['cvsucursales.activocvsucursal', '=', 1],
                ['cvsucursales.id', '=', $this->id]
            ]);
        });
    }

}
