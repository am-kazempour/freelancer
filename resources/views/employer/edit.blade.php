@extends('layout.profile_layout')
@section('body')
<body class="bodylogin2">
    @include('partials.employer_menu')
	<br><br>
	<div class=" col-md-6 col-sm-8 col-12 styleformlogin" >
        <img src="{{ asset('photo/logo.png')}}" alt="logo" class="stylelogoo">
        @if(isset($employer))
		<form action="" method="POST">
			{{csrf_field()}}
			<h2 class="styleh2">Edit</h2>
			<input type="text" placeholder="firstname" class="styleinput" name="firstname" value="{{ $employer['firstname'] }}" required><br>
			<input type="text" placeholder="lastname" class="styleinput" name="lastname" value="{{ $employer['lastname'] }}" required><br>
			<input type="text" placeholder="username" class="styleinput" name="username" value="{{ $employer['username'] }}" required><br>
			<input type="submit" value="UPDATE" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
		</form>
        @endif
	</div>
</body>
@endsection