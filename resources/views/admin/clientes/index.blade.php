@extends('admin.adminlayout')

@section('css')
  <style>
  table.table .actions {
      width: 100px;
      text-align: center;
  }
  </style>
@stop

@section('page-header')
    Trabajador <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.clientes.create') }}"  title="Add Item">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Tipo identificacion</th>
                    <th>Numero Identificacion</th>
                    <th>Fecha expedicion</th>
                    <th>Lugar expedicion</th>
                    <th>Primer nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Fecha nacimiento</th>
                    <th>Sexo</th>
                    <th>Grupo Sanguineo</th>
                    <th>Estado civil</th>
                    <th>Num Hijos</th>
                    <th>Lugar residencia</th>
                    <th>Direccion</th>
                    <th>Zona</th>
                    <th>Telefono 1</th>
                    <th>Telefono 2</th>
                    <th>Usuario Sistema</th>
                    <th>Empresa</th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="actions"></th>
                </tr>
            </tfoot>
            <tbody>
      					@foreach ($items as $item)
      						<tr>
                      <td><a>{{ $item->tipo_identificacion }}</a></td>
                      <td><a>{{ $item->id }}</a></td>
                      <td><a>{{ $item->fecha_expedicion }}</a></td>
                      <td><a>{{ $item->lugar_expedicion }}</a></td>
                      <td><a>{{ $item->primer_nombre }}</a></td>
                      <td><a>{{ $item->segundo_nombre }}</a></td>
                      <td><a>{{ $item->primer_apellido }}</a></td>
                      <td><a>{{ $item->segundo_apellido }}</a></td>
                      <td><a>{{ $item->fecha_nacimiento }}</a></td>
                      <td><a>{{ $item->sexo }}</a></td>
                      <td><a>{{ $item->grupo_sanguineo }}</a></td>
                      <td><a>{{ $item->estado_civil }}</a></td>
                      <td><a>{{ $item->numero_hijos }}</a></td>
                      <td><a>{{ $item->lugar_residencia }}</a></td>
                      <td><a>{{ $item->direccion_residencia }}</a></td>
                      <td><a>{{ $item->zona }}</a></td>
                      <td><a>{{ $item->telefono1 }}</a></td>
                      <td><a>{{ $item->telefono2 }}</a></td>
                      <td><a>{{ $item->usuario_sistema }}</a></td>
                      <td><a>{{ $item->idempresa }}</a></td>

                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.clientes.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.clientes.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}
                                    <button class="btn btn-danger btn-xs" title="{{ trans('app.delete_title') }}"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
      						</tr>
      					@endforeach
            </tbody>
          </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	</div>
@stop

@section('js')
  <script>

    (function($) {

      var table = $('.data-tables').DataTable({
          "columnDefs": [{
                 "targets": 'no-sort',
                 "orderable": false,
           }],
      });

    })(jQuery);
  </script>
@stop
