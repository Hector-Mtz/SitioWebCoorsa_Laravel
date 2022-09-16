<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarimas extends Model
{
    use HasFactory;
    // protected $connection = 'mysql-ai'; genera un error ya que se cambia la conexion dinamicamente
    protected $table = "tarimas";

    protected $fillable = [
        'activotarima',
        'nombretarima',
        'cv_id',
        'cantidadcajastarimas',
        'catalogoestadostarima_id'
    ];

    public function cajas(){
        return $this->hasMany(cajas::class, 'tarima_id')->where('activocaja', 1);
    }
    /**
     * Change connection
     * @param  string $conn  mysql-ai | mysql-we
    */
    public function changeConnection(String $conn){
        $this->connection = $conn;
    }

}
