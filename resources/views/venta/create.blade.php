@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Nueva Venta</h1>
		<!--formulario-->
		@include('venta.form', ['venta'=>$venta, 'url'=>'/venta', 'method' => 'POST']);
	</div>
@endsection