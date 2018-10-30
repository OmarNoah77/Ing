<?php $title = isset($item) ? $item->name: "add new category" ?>
{!! Form::myInput('number', 'id', 'Numero identificación: ', ['required']) !!}
{!! Form::mySelect('tipo_identificacion', 'Tipo Identificacion: ', config('variables.tipoid')) !!}
{!! Form::myInput('date', 'fecha_expedicion', 'Fecha Expedicion: ', ['required']) !!}
{!! Form::myInput('text', 'lugar_expedicion', 'Lugar Expedicion: ', ['required']) !!}
{!! Form::myInput('text', 'primer_apellido', 'Primer Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'segundo_apellido', 'Segundo Apellido: ', ['required']) !!}
{!! Form::myInput('text', 'primer_nombre', 'Primer Nombre: ', ['required']) !!}
{!! Form::myInput('text', 'segundo_nombre', 'Segundo Nombre: ', ['required']) !!}
{!! Form::myInput('date', 'fecha_nacimiento', 'Fecha Nacimiento: ', ['required']) !!}
{!! Form::mySelect('sexo', 'Sexo: ', config('variables.sexo')) !!}
{!! Form::mySelect('grupo_sanguineo', 'Grupo Sanguineo: ', config('variables.gs')) !!}
{!! Form::mySelect('estado_civil', 'Estado Civil: ', config('variables.ec')) !!}
{!! Form::myInput('number', 'numero_hijos', 'Numero Hijos: ', ['required']) !!}
{!! Form::myInput('text', 'lugar_residencia', 'Lugar Residencia: ', ['required']) !!}
{!! Form::myInput('text', 'direccion_residencia', 'Direccion Residencia: ', ['required']) !!}
{!! Form::mySelect('zona', 'Zona: ', config('variables.zona')) !!}
{!! Form::myInput('text', 'telefono1', 'Telefono 1: ', ['required','min'=>'9999999','max'=>'3600000000']) !!}
{!! Form::myInput('text', 'telefono2', 'Telefono 2: ', ['required','min'=>'9999999','max'=>'3600000000']) !!}
{!! Form::myInput('text', 'usuario_sistema', 'Usuario sistema: ', ['required']) !!}
{!! Form::myInput('numeric', 'id_empresa', 'Id empresa: ', ['required']) !!}

