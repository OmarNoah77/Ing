<?php $title = isset($item) ? $item->name: "Agregar agenda semanal" ?>
{!! Form::mySelect('idempresa', 'Empresa: ', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idprofesional', 'Profesional: ', App\Profesionales::pluck('numeroidentificacion', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idespecialidad', 'Especialidad: ', App\especialidades::pluck('descripcion', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idpaciente', 'Paciente: ', App\Clientes::pluck('id', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idexaman', 'Examen: ', App\tipoexamenes::pluck('descripcion', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('number', 'idconsultorio', 'Consultorio: ', ['required']) !!}

{!! Form::myInput('dateTime-local', 'fechahoracita', 'Fecha cita: ', ['required']) !!}
{!! Form::mySelect('estadocita', 'Estado cita: ', config('variables.boolean')) !!}
{!! Form::mySelect('usuariosistema', 'Usuario: ', App\User::pluck('name', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}
{!! Form::myInput('date', 'fechasistema', 'Fecha Sistema: ', ['required']) !!}
