
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="padding-top: 2%">
		@if(session()->has('flag'))
			<div class="alert alert-info">
				<button " type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{session()->get('flag')}}
			</div>
		@endif
		<!-- <a href="{{asset('')}}products/create"><button class="btn btn-success">ADD</button></a> -->
		
		<!-- <table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach($productsx as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->created_at}}</td>
						<td>{{$product->updated_at}}</td>
						<td>1</td>
						<td>
							<a data-toggle="modal" href='#show-{{$product->id}}' class="btn btn-success">Show</a>
							<a href="" class="btn btn-info">Edit</a>
							<a href="" class="btn btn-danger">delete</a>
							<div class="modal fade" id="show-{{$product->id}}">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										<p>{{$product->id}}</p>
										<p>{{$product->name}}</p>
										<p>{{$product->price}}</p>
										<p>{{$product->created_at}}</p>
										<p>{{$product->updated_at}}</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						</td>
					</tr>
				@endforeach
				
				<tr>
				
			</tbody>
		</table> -->
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach($productsx as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->created_at}}</td>
						<td>{{$product->updated_at}}</td>
						<td>1</td>
						<td>
							<a href="{{asset('')}}products/{{$product->id}}"><button class="btn btn-sm btn-info">Show</button></a>
							
							<a data-id="{{$product->id}}" class="btn btn-success">Show</a>
							<a href="{{asset('')}}products/{{$product->id}}/edit" class="btn btn-info">Edit</a>
							
							<form style="display: inline-block;" method="post" action="{{asset('')}}products/{{$product->id}}">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="delete">
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
				
				<tr>
				
			</tbody>
		</table>
		{{$productsx->links()}}
	</div>
	
	<!-- <div class="modal fade" id="show">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p id="name"></p>
					<p id="price"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div> -->
	
	<script type="text/javascript" >
		var app_url= '{{asset("")}}';
	</script>
	
	<script type="text/javascript" src="{{asset('js/product.js')}}">
		
	</script>
</body>
</html>