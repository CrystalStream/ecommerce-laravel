@extends('layouts.app')
@section('title','Productos')

@section('content')
	
	<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>#</td>
					<td>Titulo</td>
					<td>Descripcion</td>
					<td>Precio</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $product->title }}</td>
						<td>{{ $product->description }}</td>
						<td>${{ $product->price }}</td>
						<td> 	
							{!! Html::decode(link_to_route('products.edit', '<i class="material-icons">create</i>', array($product->id), ['class'=>'btn btn-warning br'])) !!}
							{!!Form::open(array('route'=>['products.destroy', $product->id],'method'=>'DELETE','class'=>'inline-block'))!!}
								<button class="btn btn-danger" type="submit">
									<i class="material-icons">delete</i>
								</button>							
							{!!Form::close()!!}					
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="floating">
		<a href="{!!URL::to('/products/create')!!}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>

@endsection