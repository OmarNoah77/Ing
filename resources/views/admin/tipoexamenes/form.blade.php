<?php $title = isset($item) ? $item->id: "Agregar nueva categoria" ?>
{!! Form::myInput('number', 'idempresa', 'idempresa', ['required']) !!}
{!! Form::myInput('text', 'descripcion', 'descripcion', ['required']) !!}
{!! Form::myInput('text', 'usuariosistema', 'usuariosistema', ['required']) !!}
{!! Form::myInput('date', 'fechasistema', 'fechasistema', ['required']) !!}



