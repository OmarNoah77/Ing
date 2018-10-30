<?php $title = isset($item) ? $item->descripcion: "Agregar nuevo Antecedente" ?>
{!! Form::mySelect('idempresa', 'Empresa: ', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idocupacion', 'Ocupacion: ', App\ocupaciones::pluck('Descripcion', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('idriesgo', 'Riesgo: ', config('variables.riesgo')) !!}

{!! Form::myInput('number', 'tiempoenmeses', 'Tiempo (Meses): ', ['required']) !!}

{!! Form::myInput('text', 'observaciones', 'Observaciones: ', ['required']) !!}



