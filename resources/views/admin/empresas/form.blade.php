<?php $title = isset($item) ? $item->nombre: "Agregar nueva categoria" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
{!! Form::myInput('text', 'direccion', 'Dirección', ['required']) !!}
