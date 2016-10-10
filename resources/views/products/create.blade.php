@extends('layouts.app')
@section('title','Agregar producto')

@section('content')
	<div class="container white">
		<h1>Nuevo Producto</h1>
		<hr>
		<div class="text-right">
			<a href="{!!URL::to('/products')!!}" class="white-text">
				<button class="btn btn-success">
					<i class="material-icons">reply</i>
				</button>
			</a>								
		</div>
		{!! Form::open(array('route' => 'products.store','method' => 'POST')) !!}
		@include('products.form')
		<div class="form-group text-right">			
			{!! Form::submit('Agregar',array('class' => 'btn btn-success')) !!}
		</div>
		{!! Form::close() !!}
	</div>

@endsection