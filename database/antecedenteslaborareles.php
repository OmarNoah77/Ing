<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedenteslaborareles extends Model
{
   protected $fillable = ['idempresa', 'idocupacion','idriesgo','tiempoenmeses','observaciones'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(antecedenteslaborareles::class);
    }

    public function empresas()
    {
        return $this->belongsTo('App\Empresa','idempresa');
    }

    public function ocupaciones()
    {
        return $this->belongsTo('App\ocupaciones','idocupacion');
    }

}
