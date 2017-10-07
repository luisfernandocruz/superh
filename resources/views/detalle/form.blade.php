{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('venta_id', $detalle->venta_id, ['class'=>'form-control', 'placeholder'=>'numero de venta...'])}}
		{{Form::text('factura_id', $detalle->factura_id, ['class'=>'form-control', 'placeholder'=>'numero de factura...'])}}
		{{Form::text('producto_id', $detalle->cantidad, ['class'=>'form-control', 'placeholder'=>'producto...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/detalle')}}">Regresar al listado de detalles de ventas</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}