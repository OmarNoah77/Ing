<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class divipola extends Model
{
    protected $fillable = ['idcodigodivipola', 'departamento','municipio','nombredpto','nombremunicipio','FechaSistema' ];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(divipola::class);
    }
}
