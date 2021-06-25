<div class="w3-sidebar w3-bar-block w3-card w3-animate-left styleslidbar"id="mySidebar">
	<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
	<img src="{{asset('photo/avatar.png')}}" alt="Avatar" class="styleavatar text-center" >
	<a href="{{ route('employer.desktab') }}" class="w3-bar-item w3-button style-a-slidbar">Home</a>
	<a href="{{ route('employer.edit') }}" class="w3-bar-item w3-button style-a-slidbar">Edit Profile</a>
	<a href="{{ route('employer.add_project') }}" class="w3-bar-item w3-button style-a-slidbar">Add Projects</a>
	<a href="{{ route('employer.project_list') }}" class="w3-bar-item w3-button style-a-slidbar">MY Project</a>
	<a onclick="employer_delete()" class="w3-bar-item w3-button style-a-slidbar">Delete Account</a>
	<a href="{{route('employer.logout')}}" class="w3-bar-item w3-button style-a-slidbar">Log Out</a>
</div>
<div id="main">
	<div class="w3-teal">
		<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
		<div class="w3-container stylecontainer">
			<h1 class="text-center">{{ isset($page_title)?$page_title:'Employer Profile' }}</h1>
		</div>
	</div>
</div>