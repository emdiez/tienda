@extends('layouts.app')

@section('title', $title)

@section('content')
	<div class="big-padding text-center blue-gray white-text">
		<h1>Productos</h1>
	</div>
	<div class="container">
		{{-- @if($products->isEmpty()) --}}
		@unless($products->isNotEmpty())
			<h2>No hay productos registrados.</h2>
		@else 
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Descripción</th>
						<th>Precio</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>						
							<td>{{ $product->id }}</td>
							<td>{{ $product->title }}</td>
							<td>{{ $product->description }}</td>
							<td>{{ $product->pricing }}</td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		{{-- @endif --}}
		@endunless
	</div>
@endsection