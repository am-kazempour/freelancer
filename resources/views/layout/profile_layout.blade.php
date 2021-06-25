<!DOCTYPE html>
<html>
<head>
	<title>{{ isset($page_title)?$page_title:'freelancer' }}</title>
	<link href="{{ asset('photo/logo.png')}}" rel="shortcut icon" type="image/png">
	<meta charset="utf-8">
	<link rel="stylesheet"href="{{ asset('css/index.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="{{ asset('js/index.js')}}"></script>
</head>
@yield('body')
</html>