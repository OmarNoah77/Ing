<?php $title = isset($item) ? $item->name: "Agregar Nuevo Profesional" ?>
{!! Form::mySelect('idempresa', 'Empresa: ', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción', 'required']) !!}
{!! Form::myInput('number', 'tipoidentificacion', 'tipo identificación: ', ['required']) !!}
{!! Form::myInput('number', 'numeroidentificacion', 'Numero identificación: ', ['required']) !!}
{!! Form::myInput('text', 'primerapellido', 'Primer Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'segundoapellido', 'Segundo Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'primernombre', 'Primer Nombre: ', ['required']) !!}
{!! Form::myInput('text', 'segundonombre', 'Segundo Nombre: ', ['required']) !!}
{!! Form::myInput('date', 'fechanacimiento', 'Fecha Nacimiento: ', ['required']) !!}
{!! Form::mySelect('sexo', 'Sexo: ', config('variables.sexo')) !!}

{!! Form::myInput('number', 'idespecialidad','Especialidad' ) !!}
{!! Form::mySelect('usuariosistema', 'Usuario: ', App\User::pluck('name', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('date', 'fechasistema', 'Fecha Sistema: ', ['required']) !!}