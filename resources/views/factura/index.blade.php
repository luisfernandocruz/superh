@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Facturas</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Numero de factura</td>
				<td>Numero de venta</td>
				<td>Total</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($factura as $factura)
			<tr>
				
				<td>{{ $factura->id}}</td>
				<td>{{ $factura->venta_id}}</td>
				<td>{{ $factura->total}}</td>
				<td>
					<a href="{{url('/factura/'.$factura->id.'/edit')}}">Editar</a>

					@include('factura.delete',['factura'=>$factura])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/factura/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection