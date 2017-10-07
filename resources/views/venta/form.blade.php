{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('usuario', $venta->usuario_id, ['class'=>'form-control', 'placeholder'=>'usuario id...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/categoria')}}">Regresar al listado de categorias</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}