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
    Entidades <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.entidades.create') }}"  title="Add Item">
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
                    <th>Entidad</th>
                    <th>Sucursales</th>
                    <th>Numero Suc</th>
                    <th>Id Padre</th>
                    <th>Actividad Economica</th>
                    <th>Codigo</th>
                    <th>Clase Riesgo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fax</th>
                    <th>Correo</th>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    <th># Trabajadores Dep</th>
                    <th>Arl Dependientes</th>
                    <th># Trabajadores Ind</th>
                    <th>Arl Indepen</th>
                    <th>Fecha Creacion</th>
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
                      <td><a>{{ $item->tipo_documento }}</a></td>
                      <td><a>{{ $item->numerodocumento }}</a></td>
                      <td><a>{{ $item->nombrenetidad }}</a></td>
                      <td><a>{{ $item->tienesucursales }}</a></td>
                      <td><a>{{ $item->numerosucrsales }}</a></td>
                      <td><a>{{ $item->identidadpadre }}</a></td>
                      <td><a>{{ $item->actividadeconomica }}</a></td>
                      <td><a>{{ $item->codigoactividadecono }}</a></td>
                      <td><a>{{ $item->claseriesgo }}</a></td>
                      <td><a>{{ $item->dirfeccion }}</a></td>
                      <td><a>{{ $item->telefono }}</a></td>
                      <td><a>{{ $item->fax }}</a></td>
                      <td><a>{{ $item->correoelectronico }}</a></td>
                      <td><a>{{ $item->municipio }}</a></td>
                      <td><a>{{ $item->departamento }}</a></td>
                      <td><a>{{ $item->numtrabadoresdependi }}</a></td>
                      <td><a>{{ $item->arlanscritadependi }}</a></td>
                      <td><a>{{ $item->numtrabajadoresindepen }}</a></td>
                      <td><a>{{ $item->arlanscritaindependi }}</a></td>
                      <td><a>{{ $item->fechacreacion }}</a></td>

                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.entidades.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.entidades.destroy', $item->id),
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
