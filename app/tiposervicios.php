<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposervicios extends Model
{
    protected $fillable = ['descripcion' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(tiposervicios::class);
    }
}