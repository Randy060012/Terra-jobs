@extends('client.master')
@section('content')

<!-- ======================= Début du Titre de la Page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Port Folio</h2>
            <p><a href="#" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Port Folio</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du Titre de la Page ===================== -->

<!-- ====================== Port Folio ================ -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="row">
                            <div class="col-md-4 text-center user_profile_img mrg-bot-30"> <img src="{{asset($data->image)}}" class="img-circle width-100" alt="" />
                                <h4 class="meg-0">{{$data->nom}}</h4>
                                <span>Designer Front-End</span>
                            </div>
                            <div class="col-md-8 user_job_detail">
                                <div class="col-md-12 mrg-bot-10"> <i class="ti-location-pin padd-r-10"></i>{{$data->adresse}}</div>
                                <div class="col-md-12 mrg-bot-10"> <i class="ti-email padd-r-10"></i>{{$data->email}}</div>
                                <div class="col-md-12 mrg-bot-10"> <i class="ti-mobile padd-r-10"></i>{{$data->telephone}}</div>
                                <!-- <div class="col-md-12 mrg-bot-10"> <i class="ti-credit-card padd-r-10"></i>$12/Hour </div>
                                <div class="col-md-12 mrg-bot-10"> <i class="ti-shield padd-r-10"></i>3 Year Exp. </div> -->
                                <div class="col-md-12 mrg-bot-10"> <span class="skill-tag">{{$data->specialite}}</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Parcours Professionnel</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <p>{{html_entity_decode(strip_tags($data->carriere))}}</p>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Éducation</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        @foreach($data->education as $education)
                        <div class="edu-history info">
                            <i></i>
                            <div class="detail-info">
                                <h3>{{ $education->universite }}</h3>
                                <i>{{ $education->annee }}</i>
                                <p>{{ $education->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Expérience Professionnelle</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        @foreach($data->experience as $experience)
                        <div class="edu-history info"> <i></i>
                            <div class="detail-info">
                                <h3>{{ $experience->nom }}</h3>
                                <i>{{ $experience->annee }}</i>
                                <i>{{ $experience->poste }}</i>
                                <p>{{ $experience->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <div class="widget-boxed">
                        <div class="text-center">
                            <a href="{{ asset($data->cv) }}" class="btn btn-m btn-success" download>Télécharger le CV</a>
                        </div>
                    </div>
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-location-pin padd-r-10"></i>Localisation</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <!-- <li><i class="ti-credit-card padd-r-10"></i>Forfait: 20K à 50K/Mois</li>
                                    <li><i class="ti-world padd-r-10"></i>https://www.example.com</li> -->
                                    <li><i class="ti-mobile padd-r-10"></i>{{$data->telephone}}</li>
                                    <li><i class="ti-email padd-r-10"></i>{{$data->email}}</li>
                                    <li><i class="ti-pencil-alt padd-r-10"></i>{{$data->niveau}}</li>
                                    <!-- <li><i class="ti-shield padd-r-10"></i>3 ans d'expérience</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Fin: Aperçu du travail -->

                    <!-- Début: Heures d'ouverture -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-headphone padd-r-10"></i>Contactez Maintenant</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <form>
                                <input type="text" class="form-control" placeholder="Nom *">
                                <input type="text" class="form-control" placeholder="Email *">
                                <input type="text" class="form-control" placeholder="Téléphone">
                                <textarea class="form-control height-140" placeholder="Message..."></textarea>
                                <button class="btn theme-btn full-width mrg-bot-20">Envoyer un Email</button>
                            </form>
                        </div>
                    </div>
                    <!-- Fin: Heures d'ouverture -->
                </div>
            </div>
            <!-- Fin Sidebar -->
        </div>
        <!-- Fin Row -->
    </div>
</section>
<!-- ====================== Fin du Port Folio ================ -->

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
