@extends('layouts.app')
@section('title','Editar producto')

@section('content')
	<div class="container white">
		<h1>Editar producto </h1>
		<hr>
		<div class="text-right">
			<a href="{!!URL::to('/products')!!}" class="white-text">
				<button class="btn btn-success">
					<i class="material-icons">reply</i>
				</button>
			</a>								
		</div>
		{!! Form::model($product,array('route' => ['products.update',$product->id],'method' => 'PUT')) !!}
		@include('products.form')
		
		<div class="form-group text-right">			
			{!! Form::submit('Actualizar',array('class' => 'btn btn-primary')) !!}
		</div>
		{!! Form::close() !!}
	</div>

@endsection