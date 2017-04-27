@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card product text-left">
			<h1>{{$product->title}}</h1>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<p><strong>Categoria</strong></p>
					<p>{{$product->category}}</p>
				</div>
				<div class="col-sm-6 col-xs-12">
					<p><strong>Description</strong></p>
					<p>{{$product->description}}</p>
				</div>
				<div class="col-sm-6 col-xs-12"></div>
			</div>
		</div>
	</div>
@endsection