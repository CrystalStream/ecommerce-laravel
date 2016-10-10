@extends('layouts.app')
@section('title','Ver producto')

@section('content')
	<div class="container text-center">
		<div class="card product text-left">
			@if(Auth::check() && $product->user_id == Auth::user()->id)
				<div class="absolute actions text-right">
					{!! Html::decode(link_to_route('products.edit', '<i class="material-icons">create</i>', array($product->id), ['class'=>'btn btn-warning br'])) !!}
					{!!Form::open(array('route'=>['products.destroy', $product->id],'method'=>'DELETE','class'=>'inline-block'))!!}
						<button class="btn btn-danger" type="submit">
							<i class="material-icons">delete</i>
						</button>							
					{!!Form::close()!!}	
				</div>
			@endif
			<h1>{{ $product->title }}</h1>

			<div class="row">
				<div class="col-xs-12 col-sm-6"></div>
				<div class="col-xs-12 col-sm-6">
					<p>
						<strong>Descripcion</strong>
					</p>
					<p>
						{{ $product->description }}
					</p>
					<p>
						@include('in_shopping_carts.form',["product"=> $product])
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection