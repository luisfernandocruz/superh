{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::select('venta_id', $ventas, null, ['class'=>'form-control', 'placeholder'=>'numero de venta...'])}}
		{{Form::select('factura_id', $facturas, null, ['class'=>'form-control', 'placeholder'=>'numero de factura...'])}}
		{{Form::Select('producto_id', $productos, null, ['class'=>'form-control', 'placeholder'=>'producto...'])}}
	<div class="form-group text-right">
		<a href="{{url('/detalle')}}">Regresar al listado de detalles de ventas</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!} 