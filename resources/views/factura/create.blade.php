@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Nueva Factura</h1>
		<!--formulario-->
		@include('factura.form', ['factura'=>$factura, 'url'=>'/factura', 'method' => 'POST']);
	</div>
@endsection