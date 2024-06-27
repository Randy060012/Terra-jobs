<div class="col-md-3">
    <div id="leftcol_item">
        <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset($utilisateur->image)}}"> <span class="user-photo-action">{{$utilisateur->nom}}</span> </div>
    </div>
    <div class="dashboard_nav_item">
        <ul>
            <li class="active"><a href="{{route('index-dash')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('edit-uti') }}"><i class="login-icon ti-user"></i> Edit Profile</a></li>
            <li><a href="{{route('index-edu')}}"><i class="login-icon ti-key"></i>Education</a></li>
            <li><a href="{{route('index-exp')}}"><i class="login-icon ti-key"></i>Experience</a></li>
            <li><a href="{{route('index-profil')}}"><i class="login-icon ti-key"></i>Profil</a></li>
            <li><a href="{{route('utilogout')}}"><i class="login-icon ti-power-off"></i> Logout</a></li>
        </ul>
    </div>
</div>
