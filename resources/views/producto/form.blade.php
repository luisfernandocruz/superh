{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('nombre', $producto->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
		{{Form::text('precio', $producto->precio, ['class'=>'form-control', 'placeholder'=>'precio...'])}}
		{{Form::text('cantidad', $producto->cantidad, ['class'=>'form-control', 'placeholder'=>'cantidad...'])}}
		{{Form::text('tipo_cantidad', $producto->tipo_cantidad, ['class'=>'form-control', 'placeholder'=>'Tipo cantidad...'])}}
		{{Form::select('proveedor_id', $proveedores, null, ['class'=>'form-control', 'placeholder'=>'Proveedor...'] )}}
		{{Form::select('categoria_id', $categorias, null, ['class'=>'form-control', 'placeholder'=>'Categoria...'] )}}

	</div>
	<div class="form-group text-right">
		<a href="{{url('/producto')}}">Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}