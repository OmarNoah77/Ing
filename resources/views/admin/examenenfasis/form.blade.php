<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idempresa', 'idempresa', ['required']) !!}
{!! Form::myInput('text', 'Descripcion', 'Descripcion', ['required']) !!}
{!! Form::myInput('text', 'Usuariosistemas', 'Usuariosistemas', ['required']) !!}
{!! Form::myInput('date', 'FechaSistema', 'Fecha Sistema: ', ['required']) !!}



