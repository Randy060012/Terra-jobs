@extends('client.master')
@section('content')
<!-- ======================= Début du Titre de la Page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Connexion</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Inscription</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du Titre de la Page ===================== -->

<!-- ====================== Début du Formulaire d'Inscription ============= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="log-box">
            <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                <form action="{{route('utilogin')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Adresse Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group"> <span class="custom-checkbox">
                            <input type="checkbox" id="4">
                            <label for="4"></label> Se souvenir de moi </span> <a href="#" title="Mot de passe oublié" class="fl-right">Mot de passe oublié</a>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn theme-btn full-width btn-m">Soumettre</button>
                        <a href="{{ route('index-register') }}" class="btn theme-btn full-width btn-m">Inscription</a>
                    </div>
                </form>
                <div class="log-option"><span>OU</span></div>
                <div class="row">
                    <div class="col-md-6"> <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i> Facebook</a> </div>
                    <div class="col-md-6"> <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google"></i> Google</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====================== Fin du Formulaire d'Inscription ============= -->

<section class="newsletter theme-bg" style="background-image:url(client/assets/img/bg-new.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading light">
                    <h2>Abonnez-vous à notre Newsletter !</h2>
                    <p>Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <div class="newsletter-box text-center">
                    <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
                        <input type="text" class="form-control" placeholder="Entrez votre email...">
                    </div>
                    <button type="button" class="btn theme-btn btn-radius btn-m">S'abonner</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
