@extends('client.master')
@section('content')
<!-- ======================= Titre de la page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Nous Contacter</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Contact</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du titre de la page ===================== -->

<!-- ================ Formulaire de contact ======================= -->
<section class="padd-top-80 padd-bot-70">
    <div class="container">
        <div class="col-md-6 col-sm-6">
            <div class="row">
                <form class="mrg-bot-40">
                    <div class="col-md-6 col-sm-6">
                        <label>Nom :</label>
                        <input type="text" class="form-control" placeholder="Nom" />
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label>Email :</label>
                        <input type="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Sujet :</label>
                        <input type="text" class="form-control" placeholder="Sujet" />
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Message :</label>
                        <textarea class="form-control height-120" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button class="btn theme-btn" name="submit">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.0515265723353!2d1.1760269!3d6.1829752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102158e2d5eaa3b5%3A0xf1f254a2a3898edd!2sFr%C3%A8res%20Franciscains%20d'Adidogom%C3%A9!5e0!3m2!1sen!2stt!4v1647999163292!5m2!1sen!2stt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- ================ Fin du formulaire de contact ======================= -->

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
