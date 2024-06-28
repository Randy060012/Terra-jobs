<div class="col-md-3">
    <div id="leftcol_item">
        <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset($utilisateur->image)}}"> <span class="user-photo-action">{{$utilisateur->nom}}</span> </div>
    </div>
    <div class="dashboard_nav_item">
        <ul>
            <li class="active"><a href="{{route('index-dash')}}"><i class="login-icon ti-dashboard"></i> Tableau de bord</a></li>
            <li><a href="{{ route('edit-uti') }}"><i class="login-icon ti-pencil"></i> Éditer Profil</a></li>
            <li><a href="{{route('index-edu')}}"><i class="login-icon ti-book"></i> Éducation</a></li>
            <li><a href="{{route('index-exp')}}"><i class="login-icon ti-briefcase"></i> Expérience</a></li>
            <li><a href="{{route('portfolio',$utilisateur->email)}}"><i class="login-icon ti-gallery"></i> Portfolio</a></li>
            <li><a href="{{route('utilogout')}}"><i class="login-icon ti-power-off"></i> Déconnexion</a></li>
        </ul>
    </div>
</div>
