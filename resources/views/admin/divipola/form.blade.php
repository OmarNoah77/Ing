<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'id', 'id', ['required']) !!}
{!! Form::myInput('number', 'idcodigodivipola', 'idcodigodivipola', ['required']) !!}
{!! Form::myInput('number', 'departamento', 'departamento', ['required']) !!}
{!! Form::myInput('number', 'municipio', 'municipio', ['required']) !!}
{!! Form::myInput('text', 'nombredpto', 'nombredpto', ['required']) !!}
{!! Form::myInput('text', 'nombremunicipio', 'nombremunicipio', ['required']) !!}
{!! Form::myInput('date', 'FechaSistema', 'FechaSistema', ['required']) !!}

