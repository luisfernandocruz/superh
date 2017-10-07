@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Venta</h1>
		<!--formulario-->
		@include('venta.form', ['venta'=>$venta, 'url'=>'/venta/'.$venta->id, 'method' => 'PATCH'])
	</div>
@endsection