@extends('layout.log_layout')
@section('body')
<body class="bodylogin2">
	<br><br>
	<div class=" col-md-6 col-sm-8 col-12 styleformlogin" >
        <img src="{{ asset('photo/logo.png')}}" alt="logo" class="stylelogoo">
		<form action="" method="POST">
			{{csrf_field()}}
			<h2 class="styleh2">Welcome</h2>
			<input type="text" placeholder="firstname" class="styleinput" name="firstname" required><br>
			<input type="text" placeholder="lastname" class="styleinput" name="lastname" required><br>
			<input type="text" placeholder="username" class="styleinput" name="username" required><br>
			<input type="password" placeholder="Password" class="styleinput" name="password" required><br>
			<input type="submit" value="Sing up" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
		</form>
		<a href="{{ route('employer.login') }}" class="style-a hover-a style-a">login</a>
	</div>
</body>
@endsection