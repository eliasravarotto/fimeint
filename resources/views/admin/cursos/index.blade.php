@extends('admin.layout')

@section('content')
<div class="card">
  <div class="card-body">
  	<div class="d-flex justify-content-end mb-2">
	  	<a class="btn btn-primary" href="{{ route('cursos.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
  	</div>
    <table class="table table-sm table-hover">
	    <thead>
		    <tr>
		      <th class="w-20">Título</th>
		      <th class="w-20">Categoría</th>
		      <th class="w-30">Descripción</th>
		      <th class="w-10">Creado</th>
		      <th class="w-10">Actualizado</th>
		      <th class="text-right"></th>
		    </tr>
	    </thead>
	    <tbody>
	    @foreach($cursos as $curso)
		    <tr>
		      <td>{{$curso->titulo}}</td>
		      <td>{{$curso->categoria->nombre}}</td>
		      <td>{{substr($curso->descripcion, 0, 110)}} ...</td>
		      <td>{{$curso->created_at->format('d-m-Y')}}</td>
		      <td>{{$curso->updated_at->format('d-m-Y')}}</td>
		      <td class="text-right">
		        <form action="{{ url('cursos', ['id' => $curso->id]) }}" method="post">
	            <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
		            {!! method_field('delete') !!}
		            {!! csrf_field() !!}
		            <button type="submit" onclick="return confirm('Desea eliminar el curso seleccionado?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
		        </form>
		      </td>
		      @endforeach
		    </tr>
	    </tbody>
    </table>
  </div>
</div>

@stop