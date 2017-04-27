{!! Form::open(['url' => $url, 'method' => $method]) !!}
		<div class="form-group">
			{{ Form::text('title', $product->title, ['class' => 'form-control', 'placeholder'=>'Titulo....']) }}
		</div>
		<div class="form-group">
			{{ Form::text('category', $product->category, ['class' => 'form-control', 'placeholder'=>'Categoria del producto....']) }}
		</div>
		<div class="form-group">
			{{ Form::number('pricing', $product->pricing, ['class' => 'form-control', 'placeholder'=>'Precio de tu producto....']) }}
		</div>
		<div class="form-group">
			{{ Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder'=>'Describe tu producto....']) }}
		</div>
		<div class="form-group text-right">
			<button onclick="window.location.href='{{url('/products')}}'" type="button" class="btn btn-primary">Regresar</button>
			<input type="submit" value="enviar" class="btn btn-success">
		</div>
{!! Form::close() !!}