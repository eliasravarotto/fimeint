<div class="row">
	<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1">Titulo</label>
			<input name="titulo" type="text" class="form-control @if ($errors->first('titulo')) is-invalid @endif" value="{{ $curso->titulo or old('titulo') }}">
			<div class="invalid-feedback">{{ $errors->first('titulo') }}</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="form-group requerido">
			<label class="control-label mb-1">Portada</label>
			<input name="foto" type="file" class="form-control @if ($errors->first('foto')) is-invalid @endif">
			<div class="invalid-feedback">{{ $errors->first('foto') }}</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group requerido">
			<label class="control-label mb-1">Categoría</label>
			<select name="categoria_id" id="select-categoria" class="form-control">
				@foreach($categorias as $c)
				<option value="{{$c->id}}" @if($curso->categoria_id == $c->id) selected @endif>{{$c->nombre}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group form-group-lugar requerido">
			<label class="control-label mb-1">Lugar</label>
			<input name="lugar" type="text" class="form-control @if ($errors->first('lugar')) is-invalid @endif" value="{{ $curso->lugar or old('lugar') }}">
			<div class="invalid-feedback">{{ $errors->first('lugar') }}</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group form-group-link-pago requerido">
			<label class="control-label mb-1">Link de pago</label>
			<textarea name="link_mp" type="text" class="form-control @if ($errors->first('link_mp')) is-invalid @endif">{{ $curso->link_mp or old('link_mp') }}</textarea>
			<div class="invalid-feedback">{{ $errors->first('link_mp') }}</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1">Descripción</label>
			<textarea name="descripcion" type="text" class="form-control @if ($errors->first('descripcion')) is-invalid @endif">{{ $curso->descripcion or old('descripcion') }}</textarea>
			<div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1">Etiquetas</label>
			<select class="tags-select form-control"  multiple="multiple" name="tags[]">
		 	@foreach( $tags as $tag )
			  	<option value="{{$tag->nombre}}" @if($curso->tags->contains('id', $tag->id)) selected @endif >{{$tag->nombre}}</option>
			@endforeach
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1">Contenido</label>
			<textarea name="contenido" class="form-control" id="editor1">
				{{ $curso->contenido or old('contenido') }}
			</textarea>
			<div class="invalid-feedback">{{ $errors->first('contenido') }}</div>
		</div>
	</div>
</div>

@section('script')
<script type="text/javascript">
	$(".tags-select").select2({
	  tags: true,
	});

	$('#select-categoria').on('change', function() {
	  if (this.value == 1) {
	  	$('.form-group-link-pago').show();
	  	$('.form-group-lugar').show();
	  }
	  if (this.value == 2) {
	  	$('.form-group-link-pago').hide();
	  	$('.form-group-lugar').hide();
	  }
	});

	function readyFn( jQuery ) {
		CKEDITOR.replace('editor1');
		$("html").css({"overflow-y": "hidden"});

	    var categoria_id = $('#select-categoria').val();
	    if (categoria_id == 1) {
		  	$('.form-group-link-pago').show();
		  	$('.form-group-lugar').show();
	  	}
	  	if (categoria_id == 2) {
		  	$('.form-group-link-pago').hide();
		  	$('.form-group-lugar').hide();
	  	}
	}

	$( document ).ready(readyFn);
</script>
@stop