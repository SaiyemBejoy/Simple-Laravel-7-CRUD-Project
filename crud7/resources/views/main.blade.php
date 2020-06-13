<!DOCTYPE html>
<html>
<head>
	<title>Laravel 7 Home Page</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Product House</h1>
			<a href="{{route('product.index')}}" class="btn btn-info">Show Products</a>
		</div>
	</div>
</body>
</html>