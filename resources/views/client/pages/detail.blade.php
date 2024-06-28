@extends('client.master')
@section('content')
<!-- ======================= Titre de la Page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Détail du Travail</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Détail du Travail</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du Titre de la Page ===================== -->


<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="row">
                            <div class="col-md-4 text-center user_profile_img"> <img src="{{asset($contrat->image)}}" class="width-100" alt="" />
                                <h4 class="meg-0">{{$contrat->titre}}</h4>
                                <!-- <span>512 Big Tower, New Delhi</span>
                                <div class="text-center">
                                    <button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Postuler</button>
                                </div> -->
                            </div>
                            <div class="col-md-8 user_job_detail">
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-credit-card padd-r-10"></i>20K à 50K/Mois </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-mobile padd-r-10"></i>91 234 567 8765 </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-email padd-r-10"></i>mail@example.com </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-calendar padd-r-10"></i><span class="full-type">Temps Plein</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-user padd-r-10"></i><span class="cl-danger">7 Positions Ouvertes</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-shield padd-r-10"></i>3 Ans d'Expérience </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Description du Travail</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        {{ html_entity_decode(strip_tags($contrat->description)) }}
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Compétences Requises</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                            <li><strong>Domaine:</strong> {{$contrat->domaine == null ? '' : $contrat->domaine->libelle}}</li>
                            <li><strong>Catégorie:</strong> {{$contrat->categorie == null ? '' : $contrat->categorie->libelle}}</li>
                            <li><strong>Type de contrat:</strong> {{$contrat->typecontrat == null ? '' : $contrat->typecontrat->libelle}} </li>
                        </ul>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Localisation</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.0515265723353!2d1.1760269!3d6.1829752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102158e2d5eaa3b5%3A0xf1f254a2a3898edd!2sFr%C3%A8res%20Franciscains%20d'Adidogom%C3%A9!5e0!3m2!1sen!2stt!4v1647999163292!5m2!1sen!2stt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Exigences</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                            <li>Il existe de nombreuses variations de passages de Lorem Ipsum disponibles.</li>
                            <li>La majorité a subi une altération sous une forme légère.</li>
                            <li>Vous devez vous assurer qu'il n'y a rien d'embarrassant caché.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <!-- Start: Job Overview -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-location-pin padd-r-10"></i>Fiche d'Information</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <li>
                                        <i class="ti-credit-card padd-r-10"></i>
                                        <a href="{{ asset($contrat->fichier) }}" target="_blank">{{ $contrat->fichier }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-time padd-r-10"></i>Localisation</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

        <div class="row">
            <div class="col-md-12">
                <h4 class="mrg-bot-30">Offres Similaires</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($datas as $data)
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area">
                    <span class="job-type full-type">Temps Plein</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox" checked>
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80">
                            <a href="{{route('contrat-detail', $data->slug)}}">
                                <img class="img-responsive" src="{{ asset($data->image) }}" alt="">
                            </a>
                        </div>
                        <h5><a href="{{route('contrat-detail', $data->slug)}}">{{$data->titre}}</a></h5>
                        <p class="text-muted">{{$data->domaine == null ? '' : $data->domaine->libelle}}</p>
                    </div>
                    <div class="utf_apply_job_btn_item">
                        <a href="{{route('contrat-detail', $data->slug)}}" class="btn job-browse-btn btn-radius br-light">Voir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ====================== Start Job Detail 2 ================ -->

<section class="newsletter theme-bg" style="background-image:url('client/assets/img/bg-new.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading light">
                    <h2>Abonnez-vous à Notre Newsletter !</h2>
                    <p>Lorem Ipsum est simplement un texte fictif de l'industrie de l'impression et de la composition typographique. Lorem Ipsum est le texte fictif standard de l'industrie depuis le 1500.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <div class="newsletter-box text-center">
                    <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
                        <input type="text" class="form-control" placeholder="Entrez votre E-mail...">
                    </div>
                    <button type="button" class="btn theme-btn btn-radius btn-m">S'abonner</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
