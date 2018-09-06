@extends('layouts.app')

@section('content')	
<div class="container mt-5">
	<div class="row">
		<div class=col-lg-8>
			<h2>
				{{ $product->name }}
				<a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary float-right">Editar</a>
			</h2>

			<p>
				{{ $product->short }}
			</p>
				{!! $product->body !!}
		</div>
		<div class="col-sm-4">
				@include('products.fragment.aside')
		</div>
	</div>
</div>

@endsection
