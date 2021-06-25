@extends('layout.profile_layout')
@section('body')
<body class="bodyfreelancerprofile">
    @include('partials.freelancer_menu')
    <br><br>
	<div class=" col-md-6 col-sm-8 col-12 styleformlogin" >
        @if(isset($freelancer))
		<img style="margin-left: 0px;" src="{{asset('profilePhoto').'/'.$freelancer['profile_photo_name']}}" alt="profile photo" class="rounded-circle styleavatar text-center" >
		<br>
		<form action="" method="post">
			{{csrf_field()}}
			<input type="text" placeholder="firstname" class="styleinput" name="firstname" value="{{$freelancer['firstname']}}" required><br>
			<input type="text" placeholder="lastname" class="styleinput" name="lastname" value="{{$freelancer['lastname']}}" required><br>
			<input type="text" placeholder="username" class="styleinput" name="username" value="{{$freelancer['username']}}" required><br>
			<input type="number" placeholder="age" class="styleinput" name="age" value="{{$freelancer['age']}}" required><br> 
			<input type="number" placeholder="phone number" class="styleinput" name="phone_number" value="{{$freelancer['phone_number']}}" required><br> 
			<input type="email" placeholder="email" class="styleinput" name="email" value="{{$freelancer['email']}}" required><br>
			<input type="text" placeholder="language" class="styleinput" name="languages" value="{{$freelancer['languages']}}" required><br>
			<select name="gender">
				<option value="{{$freelancer['gender']}}" selected>{{$freelancer['gender']}}</option>
				<option value="male">male</option>
				<option value="female">female</option>
			</select>
			<select name="Marital_status">
				<option value="{{$freelancer['Marital_status']}}" selected>{{$freelancer['Marital_status']}}</option>
				<option value="single">Single</option>
				<option value="married">married</option>
			</select>
			<select name="education" >
				<option value="{{$freelancer['education']}}" selected>{{$freelancer['education']}}</option>
				<option value="diploma">diploma</option>
				<option value="associate">associate </option>
				<option value="bachelor">bachelor</option>
				<option value="master">master</option>
				<option value="doctoral">doctoral</option>
			</select><br><br>
			<input type="text" placeholder="abilitis" class="styleinput" name="abilitis" value="{{$freelancer['abilitis']}}" required><br>
			<textarea placeholder=" bio" class="bio" name = 'bio' rows="5" required>{{$freelancer['bio']}}</textarea><br>
			<input type="submit" value="UPDATE" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
		</form>
        @endif
	</div>
</body>
@endsection