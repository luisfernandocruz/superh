{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('nombre', $categoria->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/categoria')}}">Regresar al listado de categorias</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}