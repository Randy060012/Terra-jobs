<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{url('admin/dashboard')}}" aria-expanded="false">
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text">Tableau de bord</span>
                </a>
            </li>

            <li>
                <a class="has-arrow " aria-expanded="false" href="#" aria-expanded="false">
                    <i class="material-symbols-outlined">description</i>
                    <span class="nav-text">Contrat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('index-contrat')}}">Listes</a></li>
                    <li><a href="{{route('ajout-contrat')}}">Nouveau</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('index-domaine')}}" aria-expanded="false">
                    <i class="material-symbols-outlined">work</i>
                    <span class="nav-text">Domaines</span>
                </a>
            </li>

            <li>
                <a href="{{route('index-categorie')}}" aria-expanded="false">
                    <i class="material-symbols-outlined">list</i>
                    <span class="nav-text">Catégories</span>
                </a>
            </li>

            <li>
                <a href="{{route('index-type-contrat')}}" aria-expanded="false">
                    <i class="material-symbols-outlined">edit_document</i>
                    <span class="nav-text">Type de contrat</span>
                </a>
            </li>

        </ul>
        <div class="copyright">
            <p><strong>School Admission Dashboard</strong></p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div>
