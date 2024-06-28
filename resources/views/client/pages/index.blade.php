@extends('client.master')
@section('content')
<!-- ======================= Début Bannière ===================== -->
<div class="utf_main_banner_area" style="background-image:url(client/assets/img/terra6.jpg);" data-overlay="8">
    <div class="container">
        <div class="col-md-8 col-sm-10">
            <div class="caption cl-white home_two_slid">
                <h2>Cherchez parmi plus de <span class="theme-cl">50,000</span> offres d'emploi ouvertes.</h2>
                <p>Mots-clés d'emplois tendance : <span class="trending_key"><a href="#">Designer Web</a></span> <span class="trending_key"><a href="#">Développeur Web</a></span> <span class="trending_key"><a href="#">Développeur IOS</a></span> <span class="trending_key"><a href="#">Développeur Android</a></span></p>
            </div>
            <form>
                <fieldset class="utf_home_form_one">
                    <div class="col-md-4 col-sm-4 padd-0">
                        <input type="text" class="form-control br-1" placeholder="Recherche par..." />
                    </div>
                    <div class="col-md-3 col-sm-3 padd-0">
                        <select id="domaine" onchange="filtreCat()" name="domaine_id" class="wide form-control">
                            <option data-display="Domaines">Tous les domaines</option>
                            @foreach ($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 padd-0">
                        <select id="categorie" onchange="filtreCat()" name="categorie_id" class="wide form-control">
                            <option data-display="Catégories">Toutes les catégories</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 padd-0 m-clear">
                        <button type="submit" class="btn theme-btn cl-white seub-btn">Rechercher</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- ======================= Fin Bannière ===================== -->

<!-- ================= Début Emplois ========================= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
            <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#recent" role="tab"> Derniers Emplois</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#" role="tab"> Emplois Récents</a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in show active" id="recent" role="tabpanel">
                <div class="row" id="recent-jobs">
                    <!-- Liste des emplois récents -->
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
                                <!-- <span class="voir-plus">
                                    <a href="{{ route('contrat-detail', $data->slug) }}" class="voir-plus-link">
                                        <i class="fa fa-eye"></i> Voir Plus
                                    </a>
                                </span> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade" id="featured" role="tabpanel">
                <div class="row" id="featured-jobs">
                    <!-- Liste des emplois en vedette -->
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
                                <!-- <span class="voir-plus">
                                    <a href="{{ route('contrat-detail', $data->slug) }}" class="voir-plus-link">
                                        <i class="fa fa-eye"></i> Voir Plus
                                    </a>
                                </span> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="col-md-12 mrg-top-20 text-center">
            <a href="{{route('index-contrat')}}" class="btn theme-btn btn-m">Voir Tous les Emplois</a>
        </div>
    </div>
</section>


<!-- ================= Début Catégories ========================= -->
<section class="utf_job_category_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>Catégories d'Emploi</h2>
                    <p>Découvrez nos catégories d'emploi variées, allant de l'informatique à l'ingénierie, en passant par le design et la gestion. Chaque domaine offre des opportunités uniques pour développer vos compétences et évoluer professionnellement.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach($categories as $categorie)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('categories.show', ['categorie_id' => $categorie->slug]) }}" title="">
                        <div class="utf_category_box_area">
                            <div class="utf_category_desc">
                                <div class="utf_category_icon"> <i class="icon-briefcase" aria-hidden="true"></i> </div>
                                <div class="category-detail utf_category_desc_text">
                                    <h4>{{$categorie->libelle}}</h4>
                                    <p>120 Emplois</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col-md-12 mrg-top-20 text-center">
                    <a href="{{route('index-categorie')}}" class="btn theme-btn btn-m">Voir Toutes les Catégories</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
