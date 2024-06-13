@extends('client.master')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Create an Account</h2>
            <p><a href="{{route('index')}}" title="Home">Accueil</a> <i class="ti-angle-double-right"></i> SignUp</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="log-box">
            <form class="log-form" method="post" action="{{ route('register') }}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="mdp" class="form-control" placeholder="********" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Confirme</label>
                        <input type="password" name="re_password" class="form-control" placeholder="********" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-center mrg-top-15">
                        <button type="submit" class="btn theme-btn btn-m full-width">Soumettre</button>
                    </div>
                    <div class="form-group text-center mrg-top-15">
                    <a href="{{ route('index-login') }}" class="btn theme-btn full-width btn-m">Login</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>

        </div>
    </div>
</section>
<!-- ====================== End Signup Form ============= -->

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
