@extends('client.master')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Parcourir par catégories</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Parcourir par catégories</p>
        </div>
    </div>
</div>
<!-- ================= Catégorie début ========================= -->
<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($datas as $data)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('categories.show', ['categorie_id' => $data->slug]) }}" title="">
                        <div class="utf_category_box_area">
                            <div class="utf_category_desc">
                                <div class="utf_category_icon"> <i class="icon-briefcase" aria-hidden="true"></i> </div>
                                <div class="category-detail utf_category_desc_text">
                                    <h4>{{$data->libelle}}</h4>
                                    <p>120 Offres d'emploi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
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
