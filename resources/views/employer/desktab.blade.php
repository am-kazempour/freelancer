@extends('layout.profile_layout')
@section('body')
<body class="bodyEmployer">
	@include('partials.employer_menu')
	@if(isset($employer))
	<div class="row">
		<div class="col-10 stylecolbio shadow p-3 mb-5  rounded margintop">
			<h2 class="styleh2">ID:{{$employer['id']}}</h2>
		</div>
		<div class="col-10 stylecolbio shadow p-3 mb-5  rounded">
			<h2 class="styleh2">Username:{{$employer['username']}}</h2>
		</div>
		<div class="col-10 stylecolbio shadow p-3 mb-5  rounded">
			<h2 class="styleh2">Firstname:{{$employer['firstname']}}</h2>
		</div>
		<div class="col-10 stylecolbio shadow p-3 mb-5  rounded">
			<h2 class="styleh2">Lastname:{{$employer['lastname']}}</h2>
		</div>
	</div>
	<div class="footer">
		<h2>footer</h2>
	</div>
	@endif
</body>
@endsection