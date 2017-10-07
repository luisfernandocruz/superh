@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Detalle de ventas</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Numero de venta</td>
				<td>Numero de factura</td>
				<td>Producto</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($detalle as $detalleventa)
			<tr>
				
				<td>{{ $detalleventa->venta_id}}</td>
				<td>{{ $detalleventa->factura_id}}</td>
				<td>{{ $detalleventa->producto_id}}</td>
				<td>
					<a href="{{url('/detalle/'.$detalleventa->id.'/edit')}}">Editar</a>

					@include('detalle.delete',['detalle'=>$detalleventa])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/detalle/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection