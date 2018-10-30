<?php $title = isset($item) ? $item->name: "Agregar Nueva Entidad" ?>
{!! Form::mySelect('tipo_documento', 'Tipo Identificacion: ', config('variables.tipoid')) !!}
{!! Form::myInput('number', 'numerodocumento', 'Numero identificación: ', ['required']) !!}
{!! Form::myInput('text', 'nombrenetidad', 'Nombre Entidad: ', ['required']) !!}

{!! Form::mySelect('tienesucursales', 'Sucursales: ', config('variables.boolean')) !!}

{!! Form::myInput('number', 'numerosucrsales', 'Numero Sucursales: ', ['required']) !!}

{!! Form::mySelect('identidadpadre', 'Padre: ', App\entidades::pluck('nombrenetidad', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('text', 'actividadeconomica', 'Actividad economica: ', ['required']) !!}
{!! Form::myInput('number', 'codigoactividadecono', 'Cod Actividad economica: ', ['required']) !!}
{!! Form::mySelect('claseriesgo', 'Clase riesgo: ', config('variables.riesgo')) !!}

{!! Form::myInput('text', 'dirfeccion', 'Direccion: ', ['required']) !!}
{!! Form::myInput('number', 'telefono', 'Telefono: ', ['required']) !!}
{!! Form::myInput('number', 'fax', 'Fax: ', ['required']) !!}
{!! Form::myInput('email', 'correoelectronico', 'Correo Electronico: ', ['required']) !!}

{!! Form::mySelect('municipio', 'Municipio: ', App\divipola::pluck('nombremunicipio', 'idcodigodivipola')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('departamento', 'Departamento: ', App\divipola::pluck('nombredpto', 'idcodigodivipola')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('number', 'numtrabadoresdependi', 'Numero Trabajadores Dependientes: ', ['required']) !!}

{!! Form::myInput('number', 'arlanscritadependi', 'ARL dependientes: ', ['required']) !!}

{!! Form::myInput('number', 'numtrabajadoresindepen', 'Numero Trabajadores Independientes: ', ['required']) !!}
{!! Form::myInput('number', 'arlanscritaindependi', 'ARL independientes: ', ['required']) !!}

{!! Form::myInput('date', 'fechacreacion', 'Fecha Creacion: ', ['required']) !!}