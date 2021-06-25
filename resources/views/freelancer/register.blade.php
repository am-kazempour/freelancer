@extends('layout.log_layout')
@section('body')
<body class="bodylogin1">
	<br><br>
	<div class=" col-md-6 col-sm-8 col-12 styleformlogin" >
		<form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<h2 class="styleh2">Welcome</h2>
			<input type="file" placeholder="profile photo" class="styleinput" name="photo" required><br> 
			<input type="text" placeholder="firstname" class="styleinput" name="firstname" required><br>
			<input type="text" placeholder="lastname" class="styleinput" name="lastname" required><br>
			<input type="text" placeholder="username" class="styleinput" name="username" required><br> 
			<input type="text" placeholder="password" class="styleinput" name="password" required><br> 
			<input type="number" placeholder="age" class="styleinput" name="age" required><br> 
			<input type="number" placeholder="phone number" class="styleinput" name="phone_number" required><br> 
			<input type="email" placeholder="email" class="styleinput" name="email" required><br>
			<input type="text" placeholder="language" class="styleinput" name="languages" required><br>
			<select name="gender">
				<option value="male">male</option>
				<option value="female">female</option>
			</select>
			<select name="Marital_status">
				<option value="single">Single</option>
				<option value="married">married</option>
			</select>
			<select name="education">
				<option value="diploma">diploma</option>
				<option value="associate">associate </option>
				<option value="bachelor">bachelor</option>
				<option value="master">master</option>
				<option value="doctoral">doctoral</option>
			</select><br><br>
			<input type="text" placeholder="abilitis" class="styleinput" name="abilitis" required><br>
			<input type="file" placeholder="CV" class="styleinput" name="CV_name" required><br> 
			<textarea placeholder=" bio" class="bio" name = 'bio' rows="5" required></textarea><br>
			<input type="submit" value="Sing up" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
		</form>
		<a href="{{ route('freelancer.login') }}" class="style-a hover-a style-a">Login</a>
	</div>
</body>
@endsection	