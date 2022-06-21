<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cvs extends Model
{
    use HasFactory;
    // protected $connection = 'mysql-ai'; no es necesario ya que depende de la plataforma
    protected $table = "cvs";

    // protected $appends = ['catalogo_estados_cv'];
    protected $fillable = [
        'nombrecv',
        'clientecv',
        'ordencompracv',
        'catalogorampa_id',
        'catalogotiposcv_id',
        'catalogoestadoscv_id',
        'clientesventa_id',
        'caso3caso4'
    ];


    public function getcv($idCV){
        return $this->firstWhere([
            ['cvs.activocv', '=', 1],
            ['cvs.id', '=', $idCV]
        ]);
    }

    public function rampa(){
        return $this->belongsTo(catalogorampas::class, 'catalogorampa_id');
    }

    public function catalogoestados(){
        return $this->belongsTo(catalogoestadoscvs::class,'catalogoestadoscv_id','id');
    }

    public function cvsucursales(){
        return $this->belongsToMany(sucursales::class, 'cvsucursales', 'cv_id', 'sucursale_id');
    }

    public function cvsucursalesCV(){
        return $this->hasMany(cvsucursales::class, 'cv_id');
    }

    public function auditores(){
        return $this->hasMany(auditores::class, 'cv_id')->where('auditores.activoauditor', 1);
    }

    public function getCatalogoEstadosCvAttribute()
    {
        return $this->catalogoestados->nombreestadocv;
    }

    public function tarimas(){
        return $this->hasMany(tarimas::class, 'cv_id')->where('tarimas.activotarima', 1);
    }

    public function cajas(){
        return $this->hasManyThrough(cajas::class, cvsucursales::class, 'cv_id', 'cvsucursale_id','id');
    }

    /**
     * Change connection
     * @param  string $conn  mysql-ai | mysql-we
     */
    public function changeConnection(String $conn){
        $this->connection = $conn;
    }
}
