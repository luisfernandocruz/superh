@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Nueva Categoria</h1>
		<!--formulario-->
		@include('categoria.form', ['categoria'=>$categoria, 'url'=>'/categoria', 'method' => 'POST']);
	</div>
@endsection