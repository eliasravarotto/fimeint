@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Curso</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('cursos.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('admin.cursos.form')
			<div class="row mt-4">
				<div class="col-12">
					<a href="{{ URL::previous() }}" class="btn btn-secondary">
					  Cancelar
					</a>
					<button type="submit" class="btn btn-success">
					  Guardar
					</button>
				</div>
			</div>
      	</form>
    </div>
</div>
@stop

