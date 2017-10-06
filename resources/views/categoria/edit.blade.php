@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Editar Categoria</h1>
		<!--formulario-->
		@include('categoria.form', ['categoria'=>$categoria, 'url'=>'/categoria/'.$categoria->id, 'method' => 'PATCH'])
	</div>
@endsection