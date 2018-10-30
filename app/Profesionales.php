<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesionales extends Model
{
    protected $fillable = ['idempresa', 'tipoidentificacion','numeroidentificacion','primerapellido','segundoapellido','primernombre','segundonombre','fechanacimiento','sexo','idespecialidad','usuariosistema','fechasistema'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Profesionales::class);
    }

    public function empresasF()
    {
        return $this->belongsTo('App\Empresa','idempresa');
    }

    public function users()
    {
        return $this->belongsTo('App\User','usuariosistema');
    }
}
