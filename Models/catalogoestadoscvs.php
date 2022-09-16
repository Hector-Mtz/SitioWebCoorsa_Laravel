<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogoestadoscvs extends Model
{
    use HasFactory;

    protected $table = "catalogoestadoscvs";

    protected $fillable = [
        'nombreestadocv'
    ];

    public function controlesvehiculares(){
        return $this->hasMany(cvs::class, 'catalogoestadoscv_id');
    }

}
