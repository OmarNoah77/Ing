<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ocupaciones extends Model
{
    protected $fillable = ['idempresa','ClaseRiesgo','CodigoCiu_08','Descripcion','FechaSistemas' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(ocupaciones::class);
    }
}
