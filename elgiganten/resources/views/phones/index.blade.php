<!DOCTYPE html>
<html>
<head>
	<title>All Phone Listings</title>
</head>
<body>
<h1>All Phone Listings</h1>
<ul>
	@foreach ($phones as $phone)

	<li>
		<a href="/phones/{{$phone->id}}">{{$phone->product}} </a><br>
		<br>
		{{$phone->price}}
	</li>
	@endforeach

</ul>
	
</body>
</html>