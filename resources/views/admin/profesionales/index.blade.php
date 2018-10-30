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
    Profesional <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.profesionales.create') }}"  title="Add Item">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id Empresa</th>
                    <th>Tipo identificacion</th>
                    <th>Numero Identificacion</th>
                    <th>Primer nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Fecha nacimiento</th>
                    <th>Sexo</th>
                    <th>Especialidad</th>
                    <th>Usuario Sistema</th>
                    <th>Fecha Sistema</th>
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
                    <th class="actions"></th>
                </tr>
            </tfoot>
            <tbody>
      					@foreach ($items as $item)
      						<tr>
                      <td><a>{{ $item->idempresa }}</a></td>
                      <td><a>{{ $item->tipoidentificacion }}</a></td>
                      <td><a>{{ $item->numeroidentificacion }}</a></td>
                      <td><a>{{ $item->primerapellido }}</a></td>
                      <td><a>{{ $item->segundoapellido }}</a></td>
                      <td><a>{{ $item->primernombre }}</a></td>
                      <td><a>{{ $item->segundonombre }}</a></td>
                      <td><a>{{ $item->fechanacimiento }}</a></td>
                      <td><a>{{ $item->sexo }}</a></td>
                      <td><a>{{ $item->idespecialidad }}</a></td>
                      <td><a>{{ $item->usuariosistema }}</a></td>
                      <td><a>{{ $item->fechasistema }}</a></td>

                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.profesionales.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.profesionales.destroy', $item->id),
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
