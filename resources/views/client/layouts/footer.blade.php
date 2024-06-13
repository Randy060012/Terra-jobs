<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <a href="{{route('index')}}"><img class="footer-logo" src="{{asset('client/assets/img/logo.png')}}" alt=""></a>
                <p>Lorem Ipsum est simplement un texte fictif de l'industrie de l'impression et de la composition typographique. Lorem Ipsum est le texte fictif standard de l'industrie depuis le 1500.</p>
                <!-- Boîte Sociale -->
                <div class="f-social-box">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-google google-plus-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter twitter-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram instagram-cl"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Catégories d'Emploi</h4>
                        <ul>
                            @php
                            use App\Models\Categorie;
                            $categories = Categorie::take(4)->get();
                            @endphp
                            @foreach ($categories as $categorie)
                            <li id="{{ $categorie->id }}">
                                <a href="{{ route('categories.show', ['categorie_id' => $categorie->slug]) }}">
                                    <i class="fa fa-angle-double-right"></i> {{ $categorie->libelle }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Type d'Emploi</h4>
                        <ul>
                        @php
                            use App\Models\Domaine;
                            $domaines = Domaine::take(4)->get();
                            @endphp
                            @foreach ($domaines as $domaine)
                            <li id="{{ $domaine->id }}">
                                <a href="#">
                                    <i class="fa fa-angle-double-right"></i> {{ $domaine->libelle }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6">
                        <h4>Ressources</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Mon Compte</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Comment Ça Marche</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Souscription</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Employeurs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Liens Rapides</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Liste d'Emplois</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> À Propos de Nous</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Nous Contacter</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Politique de Confidentialité</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i> Termes & Conditions</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>Droit d'auteur © 2021 Tous les droits sont réservés.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
