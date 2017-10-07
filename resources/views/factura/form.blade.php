{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::select('venta_id', $ventas, null, ['class'=>'form-control', 'placeholder'=>'numero de venta...'])}}
		{{Form::text('total', $factura->total, ['class'=>'form-control', 'placeholder'=>'total...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/factura')}}">Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}