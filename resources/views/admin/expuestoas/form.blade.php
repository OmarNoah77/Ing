<?php $title = isset($item) ? $item->descripcion: "Agregar nueva categoria" ?>
{!! Form::myInput('text', 'descripcion', 'descripcion', ['required']) !!}
{!! Form::myInput('text', 'usuariosistema', 'usuariosistema', ['required']) !!}
{!! Form::myInput('date', 'FechaSistema', 'FechaSistema', ['required']) !!}



