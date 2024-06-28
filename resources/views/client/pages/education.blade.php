@extends('client.master')
@section('content')

<!-- ======================= Titre de la Page ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Paramètres du Profil</h2>
            <p><a href="{{route('index')}}" title="Accueil">Accueil</a> <i class="ti-angle-double-right"></i> Paramètres du Profil</p>
        </div>
    </div>
</div>
<!-- ======================= Fin du Titre de la Page ===================== -->

<!-- ================ Paramètres du Profil ======================= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="row">

            @include('client.layouts.liste')

            <div class="col-md-9">
                <div class="profile_detail_block">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Compteur</th>
                                    <th>Université</th>
                                    <th>Description</th>
                                    <th>Année</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session()->has('utilisateurId'))
                                @foreach ($datas as $data)
                                <tr>
                                    <th scope="row">{{ $loop->index +1 }}</th>
                                    <td>{{ $data->universite }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>{{ $data->annee }}</td>
                                    <td>
                                        <button class="btn add" data-toggle="modal" data-target="#exampleModal">+</button>
                                        <button class="btn edit editbtn" onclick="updateEducation('{{ json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT) }}')">✎</button>
                                        <button class="btn delete" onclick="confirmDelete('{{ $data->id }}')">✗</button>
                                        <form id="form-{{ $data->id }}" action="{{route('delete-edu', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padd-top-10 text-center" data-toggle="modal" data-target="#exampleModal"><a href="#" class="btn btn-m theme-btn full-width">Ajouter</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Fin des Paramètres du Profil ======================= -->

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

<!-- Bouton pour déclencher la modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Lancer la démo de la modal
</button> -->
<!-- Ajouter Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enregistrement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('add-edu')}}">
                    @csrf
                    <div class="hidden">
                        <label for="input1">Premier Élément</label>
                        <input type="hidden" class="form-control" name="utilisateur_id" id="utilisateur_id" placeholder="ID de l'utilisateur">
                    </div>
                    <div class="form-group">
                        <label>Université</label>
                        <input type="text" class="form-control" name="universite" placeholder="" required>
                    </div>
                    @error('universite')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Année</label>
                        <input type="text" class="form-control" name="annee" placeholder="" required>
                    </div>
                    @error('annee')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" placeholder="" required>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!---Modifier Modal------------>
<div class="modal fade" id="modification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mise à jour</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('update-edu')}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="education_id" name="education_id" />
                    <div class="hidden">
                        <label for="input1">Premier Élément</label>
                        <input type="hidden" class="form-control" name="utilisateur_id" id="utilisateur_id" placeholder="ID de l'utilisateur">
                    </div>
                    <div class="form-group">
                        <label>Université</label>
                        <input type="text" class="form-control" name="universite" placeholder="" id="edit_uni" required>
                    </div>
                    @error('universite')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Année</label>
                        <input type="text" class="form-control" name="annee" placeholder="" id="edit_ann" required>
                    </div>
                    @error('annee')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" placeholder="" id="edit_des" required>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button class="btn btn-primary" type="submit">Mise à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    function updateEducation(data) {
        console.log(data);
        let parsedData = JSON.parse(data)
        console.log('clik', parsedData)
        $('#edit_uti').val(parsedData.utilisateur_id);
        $('#edit_uni').val(parsedData.universite);
        $('#edit_ann').val(parsedData.annee);
        $('#edit_des').val(parsedData.description);
        $('#education_id').val(parsedData.id);
    }
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            $('#modification').modal('show');
        });
    });

    function confirmDelete(educationId) {
        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: 'Cette action est irréversible!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Oui, supprimer!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si l'utilisateur confirme, soumettre le formulaire de suppression
                document.getElementById('form-' + educationId).submit();
            }
        });
    }

    // Fonction pour récupérer l'ID de l'utilisateur connecté
    function getIdUtilisateur() {
        $.ajax({
            url: "{{ route('get-id-utilisateur') }}", // Remplacez par la route correcte
            type: 'GET',
            success: function(response) {
                if (response.id) {
                    // Met à jour la valeur du champ de formulaire avec l'ID de l'utilisateur
                    $('#utilisateur_id').val(response.id);
                } else {
                    console.log("Erreur: " + response.error);
                }
            },
            error: function(xhr, status, error) {
                console.log("Erreur AJAX: " + error);
            }
        });
    }

    // Appel de la fonction pour récupérer l'ID de l'utilisateur connecté
    $(document).ready(function() {
        getIdUtilisateur();
    });
</script>
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
