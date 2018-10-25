<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expuestoas extends Model
{
    protected $fillable = ['descripcion','usuariosistema','FechaSistema' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(expuestoas::class);
    }
}