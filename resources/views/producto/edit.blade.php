@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Producto</h1>
		<!--formulario-->
		@include('producto.form', ['producto'=>$producto, 'url'=>'/producto/'.$producto->id, 'method' => 'PATCH'])
	</div>
@endsection