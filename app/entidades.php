<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entidades extends Model
{
     protected $fillable = ['tipo_documento','numerodocumento','nombrenetidad','tienesucursales','numerosucrsales','identidadpadre','actividadeconomica','codigoactividadecono','claseriesgo','dirfeccion','telefono','fax','correoelectronico','municipio','departamento','numtrabadoresdependi','arlanscritadependi','numtrabajadoresindepen','arlanscritaindependi','fechacreacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(entidades::class);
    }

    public function municipio()
    {
        return $this->belongsTo('App\Empresa','municipio');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Empresa','departamento');
    }

    public function empresasF()
    {
        return $this->belongsTo('App\Empresa','id_empresa');
    }
}

