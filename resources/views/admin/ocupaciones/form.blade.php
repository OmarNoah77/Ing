<?php $title = isset($item) ? $item->Idempresa: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'Idempresa', 'idempresa', ['required']) !!}
{!! Form::myInput('number', 'ClaseRiesgo', 'ClaseRiesgo', ['required']) !!}
{!! Form::myInput('number', 'CodigoCiu_08', 'CodigoCiu_08', ['required']) !!}
{!! Form::myInput('text', 'Descripcion', 'Descripcion', ['required']) !!}
{!! Form::myInput('date', 'FechaSistemas', 'FechaSistemas', ['required']) !!}

