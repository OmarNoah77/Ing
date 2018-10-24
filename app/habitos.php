<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class habitos extends Model
{
    protected $fillable = ['id', 'idempresa','idcodigo','Descripcion','Usuariosistemas','FechaSistema' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(habitos::class);
    }
}
