<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'id', 'id', ['required']) !!}
{!! Form::myInput('number', 'idempresa', 'idempresa', ['required']) !!}
{!! Form::myInput('number', 'idcodigo', 'idcodigo', ['required']) !!}
{!! Form::myInput('text', 'Descripcion', 'Descripcion', ['required']) !!}
{!! Form::myInput('text', 'Usuariosistemas', 'Usuariosistemas', ['required']) !!}
{!! Form::myInput('date', 'FechaSistema', 'FechaSistema', ['required']) !!}

