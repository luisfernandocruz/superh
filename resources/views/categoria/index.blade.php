@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Categorias</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Categoria</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($categorias as $categoria)
			<tr>
				
				<td>{{ $categoria->nombre }}</td>
				<td>
					<a href="{{url('/categoria/'.$categoria->id.'/edit')}}">Editar</a>

					@include('categoria.delete',['categoria'=>$categoria])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/categoria/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection