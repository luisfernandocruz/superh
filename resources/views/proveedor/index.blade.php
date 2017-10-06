@extends('layouts.app')

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Proveedores</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Proveedor</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($proveedores as $proveedor)
			<tr>
				
				<td>{{ $proveedor->nombre}}</td>
				<td>
					<a href="{{url('/proveedor/'.$proveedor->id.'/edit')}}">Editar</a>

					@include('proveedor.delete',['proveedor'=>$proveedor])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/proveedor/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection