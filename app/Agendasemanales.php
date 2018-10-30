<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendasemanales extends Model
{

    protected $fillable = ['idempresa','idprofesional','idespecialidad','idpaciente','idexaman','idconsultorio','fechahoracita','estadocita','usuariosistema','fechasistema'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Agendasemanales::class);
    }

    public function empresasF()
    {
        return $this->belongsTo('App\Empresa','idempresa');
    }

    public function profesional()
    {
    	return $this->belongsTo('App\Profesionales','idprofesional');
    }

    public function especialidad()
    {
    	return $this->belongsTo('App\especialidades','idespecialidad');
    }

    public function paciente()
    {
    	return $this->belongsTo('App\Cliente','idpaciente');
    }

    public function examen()
    {
    	return $this->belongsTo('App\tipoexamenes','idexaman');
    }


}

