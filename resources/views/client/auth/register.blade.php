@extends('client.master')
@section('content')
<!-- ======================= Début du Titre de la Page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Créer un compte</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Inscription</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du Titre de la Page ===================== -->

<!-- ====================== Début du Formulaire d'Inscription ============= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="log-box">
            <form class="log-form row" method="post" action="{{ route('register') }}">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="********" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="re_password">Confirmer le mot de passe</label>
                        <input type="password" id="re_password" name="re_password" class="form-control" placeholder="********" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-center mrg-top-15">
                        <button type="submit" class="btn theme-btn btn-m full-width">S'inscrire</button>
                    </div>
                    <div class="form-group text-center mrg-top-15">
                        <a href="{{ route('index-login') }}" class="btn theme-btn full-width btn-m">Se connecter</a>
                    </div>
                </div>
            </form>
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
@push('script')
@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut: 5000,
        extendedTimeOut: 2000,
    });
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error("{{Session::get('error')}}", {
        positionClass: "toast-top-right",
        closeButton: true,
        progressBar: true,
        timeOut: 5000,
        extendedTimeOut: 2000,
    });
</script>
@endif
@endpush
