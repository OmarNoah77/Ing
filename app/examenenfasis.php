<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examenenfasis extends Model
{
    protected $fillable = ['idempresa','Descripcion','Usuariosistemas','FechaSistema'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentExamen()
    {
        return $this->belongsTo(examenenfasis::class);
    }
}