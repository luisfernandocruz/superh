{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('nombre', $producto->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
		{{Form::text('precio', $producto->precio, ['class'=>'form-control', 'placeholder'=>'precio...'])}}
		{{Form::text('cantidad', $producto->cantidad, ['class'=>'form-control', 'placeholder'=>'cantidad...'])}}
		{{Form::text('proveedor_id', $producto->proveedor_id, ['class'=>'form-control', 'placeholder'=>'proveedor_id...'])}}
		{{Form::text('categoria_id', $producto->categoria_id, ['class'=>'form-control', 'placeholder'=>'categoria_id...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/producto')}}">Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}