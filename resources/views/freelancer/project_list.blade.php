@extends('layout.profile_layout')
@section('body')
<body class="bodyfreelancerprofile">
    @include('partials.freelancer_menu')
    <br><br>
	@if(isset($projects))
	<div class="row">
		<div class="col-8 offset-2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Abilitis</th>
                        <th scope="col">Price</th>
                        <th scope="col">ّFile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr class="table-info">
                            <td>{{ $project['id']}}</td>
                            <td>{{ $project['title']}}</td>
                            <td>{{ $project['description']}}</td>
                            <td>{{ $project['abilitis']}}</td>
                            <td>{{ $project['price']}}$</td>
                            <td><a href="{{asset('project_file').'/'.$project['file_name']}}"><i class="fa fa-download"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
	<div style="position: fixed; bottom: 0;" class="footer">
		<h2>footer</h2>
	</div>
	@endif
</body>
@endsection