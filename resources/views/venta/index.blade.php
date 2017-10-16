@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Ventas</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Numero de venta</td>
				<td>Usuario</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($venta as $venta)
			<tr>
				<td>{{ $venta->id}}</td>
				<td>{{ $venta->usuario_id}}</td>
				<td>
					<a href="{{url('/venta/'.$venta->id.'/edit')}}">Editar</a>

					@include('venta.delete',['venta'=>$venta])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/venta/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection