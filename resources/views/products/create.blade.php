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
	<div class="container">
		
		<form action="{{asset('')}}products" method="POST" role="form">
			{{csrf_field()}}
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name"  name="name" placeholder="{{old('name')}}">
				@if($errors->has('name'))
					<p>{{$errors->first('name')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" class="form-control" id="price" name="price" placeholder="{{old('price')}}">
				@if($errors->has('price'))
					<p>{{$errors->first('price')}}</p>
				@endif
			</div>
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>