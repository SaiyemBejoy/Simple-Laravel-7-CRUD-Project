@extends('product.layout')
@section('content')

	<br><br><br>
	<div class="row">
		<div class="col-lg-12 margint-tb">
			<div class="pull-left">
				<h2>Laravel Prouduct List</h2>
			</div>

			<div class="pull-right">
				<a href="{{route('product.create')}}" class="btn btn-success"> Create New Product</a>
			</div>
		</div>
	</div>

	@if($message = Session::get('successMsg'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="150px">Product Name</th>
				<th width="100px">Product Code</th>
				<th width="200px">Details</th>
				<th width="200px">Product Logo</th>
				<th width="280px">Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach($product as $prod)
			<tr>
				<td>{{ $prod->product_name }}</td>
				<td>{{ $prod->product_code }}</td>
				<td>
					{{ str_limit( $prod->details, $limit = 70) }}
				</td>
				<td><img src="{{ URL::to($prod->logo) }}" height="100px" width="90px"></td>
				<td>
					<a class="btn btn-info" href="{{ URL::to('show/product/'.$prod->id) }}">Show</a>
					<a class="btn btn-primary" href="{{ URL::to('edit/product/'.$prod->id) }}">Edit</a>
					<a class="btn btn-danger" href="{{ URL::to('delete/product/'.$prod->id) }}" onclick="return confirm('Are you sure?')">
						Delete
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	{!! $product->links() !!}


@endsection