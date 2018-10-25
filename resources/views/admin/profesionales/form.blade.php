<?php $title = isset($item) ? $item->name: "Agregar Nuevo Profesional" ?>
{!! Form::mySelect('idempresa', 'Empresa: ', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción', 'required']) !!}
{!! Form::myInput('number', 'id', 'Numero identificación: ', ['required']) !!}
{!! Form::myInput('text', 'primer_apellido', 'Primer Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'segundo_apellido', 'Segundo Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'primer_nombre', 'Primer Nombre: ', ['required']) !!}
{!! Form::myInput('text', 'segundo_nombre', 'Segundo Nombre: ', ['required']) !!}
{!! Form::myInput('date', 'fecha_nacimiento', 'Fecha Nacimiento: ', ['required']) !!}
{!! Form::mySelect('sexo', 'Sexo: ', config('variables.sexo')) !!}

{!! Form::mySelect('idempresa', 'Empresa: ', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('usuariosistema', 'Usuario: ', App\User::pluck('name', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('date', 'fechasistema', 'Fecha Sistema: ', ['required']) !!}