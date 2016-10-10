{!! Form::open(array('route'=>'shopping_cart.store','method'=>'POST', 'class'=>'inline-block')) !!}
	<input type="hidden" name="product_id" value="{{$product->id}}">
	<button type="submit" class="btn btn-info">
		Agregar al carrito <span class="glyphicon glyphicon-shopping-cart"></span>
	</button>	
{!! Form::close() !!}