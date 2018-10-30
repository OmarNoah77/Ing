<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id', 'tipo_identificacion','fecha_expedicion','lugar_expedicion','primer_apellido','segundo_apellido','primer_nombre','segundo_nombre','fecha_nacimiento','sexo','grupo_sanguineo','estado_civil','numero_hijos','lugar_residencia','direccion_residencia','zona','telefono1','telefono2','usuario_sistema','id_empresa'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Clientes::class);
    }

    public function empresasF()
    {
        return $this->belongsTo('App\Clientes','id_empresa');
    }


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $commun = [
            'telefono1' => 'required|max:10',
            'telefono2' => 'required|max:10',

        ];

        if ($update) {
            return $commun;
        }

    }
}
