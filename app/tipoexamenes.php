<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoexamenes extends Model
{
    protected $fillable = ['idempresa','descripcion','usuariosistema','fechasistema' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(tipoexamenes::class);
    }
}