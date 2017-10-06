@extends("layouts.app")

@section("content")
	<div class="container white">
		<h1>Editar Proveedor</h1>
		<!--formulario-->
		@include('proveedor.form', ['proveedor'=>$proveedor, 'url'=>'/proveedor/'.$proveedor->id, 'method' => 'PATCH'])
	</div>
@endsection