@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Detalle de venta</h1>
		<!--formulario-->
		@include('detalle.form', ['detalle'=>$detalleventa, 'url'=>'/detalle/'.$detalleventa->id, 'method' => 'PATCH'])
	</div>
@endsection