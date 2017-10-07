@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Factura</h1>
		<!--formulario-->
		@include('factura.form', ['factura'=>$factura, 'url'=>'/factura/'.$factura->id, 'method' => 'PATCH'])
	</div>
@endsection