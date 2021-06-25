@extends('layout.profile_layout')
@section('body')
<body class="bodyfreelancerprofile">
    @include('partials.freelancer_menu')
	<div class="row">
	<div class="col-md-6">
		@if(isset($freelancer))
		<div class="col-11 stylecolbio shadow p-3 md-5 rounded ">
			<div class="row">
            <img src="{{asset('profilePhoto').'/'.$freelancer['profile_photo_name']}}" alt="profile photo" class="rounded-circle col-md-3 text-center" >
            <div class="styleh2 col-md-5 p-2">{{"@".$freelancer['username']}}</div>
            </div>
		</div>
		<div class="col-11 stylecolbio shadow p-3 mb-5 rounded">
		<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col" >Your CV</th>
						<th scope="col" >CV made by me</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="{{asset('cvFile').'/'.$freelancer['CV_name']}}"><i class="fa fa-download"></i></a></td>
						<td><a href="{{route('freelancer.cv')}}"><i class="fa fa-download"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-11 stylecolbio shadow p-3 mb-5 rounded">
			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">Email</th>
					<th scope="col">phone number</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>{{$freelancer['email']}}</td>
					<td>{{$freelancer['phone_number']}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-11 stylecolbio shadow p-3 mb-5 rounded">
			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">Age</th>
					<th scope="col">Gender</th>
					<th scope="col">Marital status</th>
					<th scope="col">Education</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>{{$freelancer['age']}}</td>
					<td>{{$freelancer['gender']}}</td>
					<td>{{$freelancer['Marital_status']}}</td>
					<td>{{$freelancer['education']}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	@endif
	</div>
	<div class="col-md-5">
		<br>
		<div style="width: 100%; height:100%;" class="chat">
			<div class="top">
			@if(isset($freelancer))
			<div class="row">
            	<img src="{{ asset('photo/logo.png')}}" alt="profile photo" class="rounded-circle chat-photo text-center" >
            <div class="styleh2 offset-1 col-md-5 p-2">{{$freelancer['firstname']." ".$freelancer['lastname']}}</div>
            </div>
			@endif
			</div>
			<div class="chat-body" id="chat">
			</div>
			<div class="message">
					{{ csrf_field() }}
					<input type="text" placeholder="     message" name="message" id="message" class="input-message p-3 col-9 ">
					<button id="submit" class="submit-message col-2"><i class="fa fa-paper-plane"></i></button>
				
			</div>
		</div>
	</div>
	</div>
	<div class="row">
	
	<div class="col-5 stylecolbio shadow p-3 mb-5 rounded">
		<h2 class="styleh2">Abillities:</h2>
		<div class="list">
		<ul class="list-group list-group-horizontal align-middle">
			@if(isset($abilitis))
				@foreach ($abilitis as $abiliti)
					<li class="list-group-item colorli">{{$abiliti}}</li>
				@endforeach
			@endif
		</ul>
		</div>
	</div>
	<div class="col-5 stylecolbio shadow p-3 mb-5 rounded">
		<h2 class="styleh2">Languages:</h2>
		<div class="list">
		<ul class="list-group list-group-horizontal align-middle">
			@if(isset($languages))
				@foreach ($languages as $language)
					<li class="list-group-item colorli">{{$language}}</li>
				@endforeach
			@endif
		</ul>
		</div>
	</div>
	<div class="col-10 stylecolbio shadow p-3 mb-5  rounded">
		<h2 class="styleh2">Bio:<br>
		@if(isset($freelancer))
			{{$freelancer['bio']}}
		@endif
		</h2>
	</div>
	</div>
	<div class="footer">
		<h2>footer</h2>
	</div>
</body>
<script src="{{ asset('js/chat.js')}}"></script>
@endsection