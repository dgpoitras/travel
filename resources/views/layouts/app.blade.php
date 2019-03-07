<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title>Travel Experts | @yield('title')</title>
</head>
<body>
<header>
	<div class="row">
		<img id='logo' src='images/road-trip.jpg'>
		<h1 id="title">Travel Experts</h1>
	</div>
</header>

<nav>
	<ul>
		<li><a href='{{ url('/') }}'>Home</a></li>
		<li><a href='{{ url('/customers')}}'>Customers</a></li>
		<li><a href='{{ url('/customers/{id}/edit') }}'>Add Customers</a></li>
		<li><a href='{{ url('/agencies')}}'>Agencies</a></li>
	</ul>
</nav>

@yield('content')

<footer>
    <h3>&copy; 2019 - Derek Poitras</h3>
</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		// Place my unique js for this page here.
		
	</script>
</body>
</html>