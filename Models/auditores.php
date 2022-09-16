<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auditores extends Model
{
    use HasFactory;

    protected $table = "auditores";


    protected $fillable = [
        'cv_id',
        'user_id',
        'catalogorolesauditore_id'
    ];

    public function cv(){
        return $this->belongsTo(cvs::class, 'cv_id');
    }

    public function getauditoresmultitable($idUsuario, $idRol, $idCV){
        return auditores::firstWhere([
            ['auditores.activoauditor', '=', 1],
            ['auditores.user_id', '=', $idUsuario],
            ['auditores.catalogorolesauditore_id', '=', $idRol],
            ['auditores.cv_id', '=', $idCV]
        ]);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id')->where('activousuario', 1);
    }

}
