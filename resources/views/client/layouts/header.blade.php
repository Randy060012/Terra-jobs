<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="{{route('index')}}"> <img src="client/assets/img/logo-light.png" class="logo logo-display" alt=""> <img src="client/assets/img/logo.png" class="logo logo-scrolled" alt=""> </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown active"> <a href="{{route('index')}}">Accuiel</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opportunite</a>
                    <ul class="dropdown-menu animated fadeOutUp">
                        <li><a href="{{route('emlpoi')}}">Emlpois</a></li>
                        <li><a href="{{route('stage')}}">Stages</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <a href="contact.html">Nos-services</a> </li>
                <li class="dropdown"> <a href="{{route('contact')}}">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="sign-up"><a class="btn-signup red-btn" href="{{route('login')}}"><span class="ti-briefcase"></span>login</a></li>
                <li class="sign-up"><a class="btn-signup red-btn" href="{{route('register')}}"><span class="ti-briefcase"></span>Register</a></li>
            </ul>
        </div>
    </div>
</nav>
