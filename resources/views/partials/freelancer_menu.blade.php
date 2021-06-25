<div class="styleslidbar w3-sidebar w3-bar-block w3-card w3-animate-left"id="mySidebar">
		<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        @if(isset($freelancer))
		<img src="{{asset('profilePhoto').'/'.$freelancer['profile_photo_name']}}" alt="profile photo" class="rounded-circle styleavatar text-center" >
		@endif
        <a href="{{ route('freelancer.desktab') }}" class="w3-bar-item w3-button style-a-slidbar">Home</a>
        <a href="{{ route('freelancer.edit') }}" class="w3-bar-item w3-button style-a-slidbar">Edit Profile</a>
		<a href="{{ route('freelancer.project_list') }}" class="w3-bar-item w3-button style-a-slidbar">Search Projects</a>
		<a onclick="freelancer_delete()" class="w3-bar-item w3-button style-a-slidbar">Delete Account</a>
		<a href="{{route('freelancer.logout')}}" class="w3-bar-item w3-button style-a-slidbar">Log Out</a>
</div>
<div id="main">
	<div class="w3-teal">
		<div style="background-color: #563d7c;" class="w3-container stylecontainer">
		    <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
               <h2 class="text-center">Freelancer Profile</h2>
		</div>
	</div>
</div>