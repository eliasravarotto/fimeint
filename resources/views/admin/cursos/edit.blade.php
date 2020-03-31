@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Editar curso</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('cursos.update', $curso->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
			@include('admin.cursos.form')
			<div class="my-4">
				<h4>Archivos adjuntos</h4>
				<hr class="my-4">	
				<div class="row">
					<div class="col">
						<input multiple="multiple" name="files[]" type="file"> 
					</div>
				</div>
				<div class="mu-files my-3">
					<div class="row">
						@foreach($curso->files as $file)
					  		<div class="col-md-4 ">
					  			<div class="border d-flex file" download>
						  			<div class="w-25">
						  				@switch($file->extension)
								    		@case('pdf')
								        		<i class="far fa-file-pdf"></i>
							        		@break

										    @case('doc')
										        <i class="far fa-file-word"></i>
								        	@break

								        	@case('png' || 'jpg' || 'jpeg')
										        <i class="far fa-image"></i>
								        	@break

								    		@default
								        		<i class="fal fa-file"></i>
										@endswitch
						  			</div>
						  			<div class="w-50">
						  					{{$file->name}}
						  			</div>
						  			<div class="w-25 text-right">
						  				<a href="{{Storage::url($file->path)}}" download><i class="fas fa-download"></i></a>
						  				<a href="#"><i class="fas fa-times"></i></a>
						  			</div>
					  			</div>
					  		</div>
						@endforeach
					</div>
				</div>
			</div>

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


