@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Nueva Categoria</h1>
		<!--formulario-->
		@include('categoria.form', ['categoria'=>$categoria, 'url'=>'/categoria', 'method' => 'POST']);
	</div>
@endsection