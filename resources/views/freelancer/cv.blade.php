<!DOCTYPE html>
<html>
<head>
	<title>Freelancer CV</title>
	<meta charset="utf-8">
  <link rel="stylesheet"href="{{ asset('css/index.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onclick="window.print()">
@if(isset($freelancer))
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 stylecolblue">
        <img src="{{asset('profilePhoto').'/'.$freelancer['profile_photo_name']}}" alt="Avatar" class="rounded-circle styleavatarblue text-center" >
        <h2 class="style-h2-blue">Contacts</h2>
        <p class="style-p margintop30"> <i class="fa fa-map-marker fontsize20"></i> Iran-Tabriz</p>
        <p class="style-p"> <i class="fa fa-phone fontsize20"></i> {{$freelancer['phone_number']}}</p>
        <p class="style-p"> <i class="fa fa-envelope fontsize20"></i> {{$freelancer['email']}}</p>
        <h2 class="style-h2-blue">Personal information </h2>
        <pre class="style-p margintop30">Age                      {{$freelancer['age']}}</pre>
        <pre class="style-p">Marital status        {{$freelancer['Marital_status']}}</pre>
         <pre class="style-p">Gender                  {{$freelancer['gender']}}</pre>
         <h2 class="style-h2-blue">Job Information</h2>
         <pre class="style-p margintop30">Employment         Employed</pre>
         <pre class="style-p">Desired job     Programming</pre>
         <pre class="style-p">Salary                1000$</pre>
         <h2 class="style-h2-blue">Cities Where I Can Work</h2>
         <div class="list">
          <ul class="list-group list-group-horizontal align-middle margintop30">
            <li class="list-group-item colorli">Tehran</li>
            <li class="list-group-item colorli">Tabriz</li>
            <li class="list-group-item colorli">Ardabil</li>
            <li class="list-group-item colorli">Gilan</li>
          </ul>
        </div>
        <h2 class="style-h2-blue">Social Networks</h2>
        <div class="margintop30">
          <ul class="social-network social-circle ">
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li><a href="#" class="icoInstagram" title="Insatagram"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>
        </div>
        <p class="style-p margintop70 text-center">Update in 4 May</p>
      </div>
      <div class="col-8">
        <h2>{{$freelancer['firstname'].' '.$freelancer['lastname']}}</h2>
        <P class="colorp margin40">Software Developer</P>
        <h4>About Me</h4>
        <hr class="style-hr">
        <p class="margin40">{{$freelancer['bio']}}</p>
        <h4>Education</h4>
        <hr class="style-hr">
          <p class="margin40"> <i class="fa fa-graduation-cap fontsize" aria-hidden="true"></i>   {{$freelancer['education']}} of Computer</p>
        <h4>Technical Skills</h4>
        <hr class="style-hr">
        @if(isset($abilitis))
        <div class="marginbot20">
          @foreach ($abilitis as $abiliti)
            <button type="button" class="btn btn-success">{{$abiliti}}</button>
          @endforeach
        </div>
        @endif
        <p>Other Okills</p>
        <hr class="style-hr">
        <div class="progress md-progress marginbottom10" style="height: 20px">
         <div class="progress-bar " role="progressbar" style="width: 75%; height: 20px" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Python</div>
         </div>
      <div class="progress md-progress marginbottom10" style="height: 20px">
       <div class="progress-bar " role="progressbar" style="width: 65%; height: 20px" aria-valuenow="65"  aria-valuemin="0" aria-valuemax="100">Java</div>
       </div>
        <div class="progress md-progress marginbottom10" style="height: 20px">
       <div class="progress-bar " role="progressbar" style="width: 50%; height: 20px" aria-valuenow="50"  aria-valuemin="0" aria-valuemax="100">Php</div>
       </div>
        <div class="progress md-progress marginbottom10 marginbot20" style="height: 20px">
       <div class="progress-bar " role="progressbar" style="width: 90%; height: 20px" aria-valuenow="90"  aria-valuemin="0" aria-valuemax="100">C++</div>
       </div>        
        <p>Languages</p>
        <hr class="style-hr">
        @if(isset($languages))
        <div class="marginbot20">
          @foreach ($languages as $language)
            <button type="button" class="btn btn-info">{{$language}}</button>
          @endforeach
        </div>
        @endif
       <table class="table table-borderless with50">
        <thead>
          <tr>
            <th>Soft Skills</th>
            <th>Point</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span class="heading">Sense Of Humor</span>
            </td>
            <td>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </td>
          </tr>
          <tr>
            <td>
              <span class="heading">Delivery Skills</span>
            </td>
            <td>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span></td>
            </tr>
            <tr>
              <td>
                <span class="heading">Public Speaking</span>
              </td>
              <td>  
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </td>
            </tr>
            <tr>
              <td>
                <span class="heading">Stress Management</span>
              </td>
              <td>  
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </td>
            </tr>
            <tr>
              <td>
                <span class="heading">Flexibility</span>
              </td> 
              <td>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>                 
              </td>
            </tr>
            <tr>
              <td>
                <span class="heading">User Rating</span>
              </td>
              <td>  
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  @endif
</body>
</html>




