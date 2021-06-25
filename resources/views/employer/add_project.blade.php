@extends('layout.profile_layout')
@section('body')
<body class="bodyEmployer">
	@include('partials.employer_menu')
    <br><br>
	<div class=" col-md-6 col-sm-8 col-12 styleformlogin" >
	    <form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="text" placeholder="title" class="styleinput" name="title" required><br>
			<input type="number" placeholder="price" class="styleinput" name="price" required><br>
			<input type="text" placeholder="abilitis" class="styleinput" name="abilitis" required><br>
			<input type="file" placeholder="CV" class="styleinput" name="description_file" required><br> 
			<textarea placeholder="description" class="bio" name = 'description' rows="5" required></textarea><br>
			<input type="submit" value="Add" class="buttonfocus backgroundbutton hoverbutton stylebutton styleinput"><br>
		</form>
    </div>
	<div class="footer">
		<h2>footer</h2>
	</div>
</body>
@endsection