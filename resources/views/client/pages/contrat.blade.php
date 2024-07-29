@extends('client.master')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption text-center">
            <h2>Emploi en Grille</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Mise en Page des Emplois</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ======================= Filtre de Recherche ===================== -->
<section class="padd-0 padd-top-20 jov_search_block_inner">
    <div class="row">
        <div class="container">
            <form>
                <fieldset class="search-form">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" placeholder="Titre du poste, Mots-clés..." />
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="wide form-control">
                            <option data-display="Localisation">Tous les Pays</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albanie</option>
                            <option value="3">Algérie</option>
                            <option value="4">Brésil</option>
                            <option value="5">Burundi</option>
                            <option value="6">Bulgarie</option>
                            <option value="7">Allemagne</option>
                            <option value="8">Grenade</option>
                            <option value="9">Guatemala</option>
                            <option value="10" disabled>Islande</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="wide form-control">
                            <option data-display="Catégorie">Afficher Tout</option>
                            <option value="1">Développeur de Logiciels</option>
                            <option value="2">Développeur Java</option>
                            <option value="3">Ingénieur Logiciel</option>
                            <option value="4">Développeur Web</option>
                            <option value="5">Développeur PHP</option>
                            <option value="6">Développeur Python</option>
                            <option value="7">Développeur Front-End</option>
                            <option value="8">Développeur Associé</option>
                            <option value="9">Développeur Back-End</option>
                            <option value="10">Développeur XML</option>
                            <option value="11">Développeur .NET</option>
                            <option value="12" disabled>Développeur Marketing</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 m-clear">
                        <button type="submit" class="btn theme-btn full-width height-50 radius-0">Rechercher</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<!-- ======================= Filtre de Recherche ===================== -->

<!-- ====================== Début Détail de l'Emploi 2 ================ -->
<section class="padd-top-20 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-12">
                <h4 class="job_vacancie">{{ $datas->total() }} Offres d'Emploi & Vacances</h4>
            </div>
            <!-- <div class="col-md-7 col-sm-8 col-xs-12">
                <div class="fl-right short_by_filter_list">
                    <div class="search-wide short_by_til">
                        <h5>Trier Par</h5>
                    </div>
                    <div class="search-wide full">
                        <select class="wide form-control">
                            <option value="1">Plus Récentes</option>
                            <option value="2">Plus Consultées</option>
                            <option value="4">Plus Recherchées</option>
                        </select>
                    </div>
                    <div class="search-wide full">
                        <select class="wide form-control">
                            <option>10 Par Page</option>
                            <option value="1">20 Par Page</option>
                            <option value="2">30 Par Page</option>
                            <option value="4">50 Par Page</option>
                        </select>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row">
            @foreach($datas as $data)
            <div class="col-md-3 col-sm-6 job-item">
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
                            <a href="{{ route('contrat-detail', $data->slug) }}">
                                <img class="img-responsive" src="{{ asset($data->image) }}" alt="">
                            </a>
                        </div>
                        <h5><a href="{{ route('contrat-detail', $data->slug) }}">{{ $data->titre }}</a></h5>
                        <p class="text-muted">{{ $data->domaine == null ? '' : $data->domaine->libelle }}</p>
                    </div>
                    <div class="utf_apply_job_btn_item">
                        <a href="{{ route('contrat-detail', $data->slug) }}" class="btn job-browse-btn btn-radius br-light">Voir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
        <div class="utf_flexbox_area padd-0">
            {{ $datas->links() }}
        </div>
    </div>
</section>
<!-- ====================== Fin Détail de l'Emploi 2 ================ -->

<section class="newsletter theme-bg" style="background-image:url('client/assets/img/bg-new.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading light">
                    <h2>Abonnez-vous à notre Newsletter !</h2>
                    <p>Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression, Lorem Ipsum a été le faux texte standard de l'industrie depuis les années 1500.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <div class="newsletter-box text-center">
                    <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
                        <input type="text" class="form-control" placeholder="Entrez votre Email...">
                    </div>
                    <button type="button" class="btn theme-btn btn-radius btn-m">S'abonner</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
