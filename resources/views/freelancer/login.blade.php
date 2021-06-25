<!DOCTYPE html>
<html>
<head>
	<title>freelancer login</title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="{{ asset('css/index.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bodylogin1">
	<div class="container " >
		<form action="" method="post" class="col-md-6 col-sm-8 col-12 styleformlogin">
            {{csrf_field()}}
			<img src="{{ asset('photo/logo.png')}}" alt="logo" class="stylelogoo">
			<h2 class="styleh2">Login</h2>
			<input type="text" placeholder="username" class="styleinput" name="username" required><br> 
			<input type="password" placeholder="Password" class="styleinput" name="password" required><br>
			<input type="submit" value="Sing in" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
            <a href="{{route('freelancer.register')}}" class="style-a hover-a style-a">Register</a>
		</form>
	</div>
</body>
</html>