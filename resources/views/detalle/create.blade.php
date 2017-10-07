@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Nuevo Detalle de venta</h1>
		<!--formulario-->
		@include('detalle.form', ['detalle'=>$detalle, 'url'=>'/detalle', 'method' => 'POST']);
	</div>
@endsection