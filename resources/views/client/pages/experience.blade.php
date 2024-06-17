@extends('client.master')
@section('content')

<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="{{route('index')}}" title="Home">Home</a> <i class="ti-angle-double-right"></i> Profile Settings</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ================ Profile Settings ======================= -->
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
                                    <th>Nom</th>
                                    <th>Annee</th>
                                    <th>Poste</th>
                                    <th>Descriptions</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr>
                                    <th scope="row">{{ $loop->index +1 }}</th>
                                    <td>{{ $data->nom }}</td>
                                    <td>{{ $data->annee }}</td>
                                    <td>{{ $data->poste }}</td>
                                    <td>{!! substr($data->description, 0, 30)  !!} ...</td>
                                    <td>
                                        <button class="btn add" data-toggle="modal" data-target="#exampleModal">+</button>
                                        <button class="btn edit editbtn" onclick="updateExperience('{{ json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT) }}')">✎</button>
                                        <button class="btn delete" onclick="confirmDelete('{{ $data->id }}')">✗</button>
                                        <form id="form-{{ $data->id }}" action="{{route('delete-exp', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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
<!-- ================ End Profile Settings ======================= -->

<section class="newsletter theme-bg" style="background-image:url(client/assets/img/bg-new.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading light">
                    <h2>Subscribe Our Newsletter!</h2>
                    <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                <div class="newsletter-box text-center">
                    <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
                        <input type="text" class="form-control" placeholder="Enter your Email...">
                    </div>
                    <button type="button" class="btn theme-btn btn-radius btn-m">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->
<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enregistrement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('add-exp')}}">
                    @csrf
                    <div class="hidden">
                        <label for="input1">First Element</label>
                        @foreach ($utilisateurs as $utilisateur)
                        <input type="text" class="form-control" value="{{$utilisateur->id}}" name="utilisateur_id" id="input1" placeholder="Enter first element" hidden>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="" required>
                    </div>
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Annee</label>
                        <input type="text" class="form-control" name="annee" placeholder="" required>
                    </div>
                    @error('annee')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Poste</label>
                        <input type="text" class="form-control" name="poste" placeholder="" required>
                    </div>
                    @error('poste')
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

<!---Edit Modal------------>
<div class="modal fade" id="modification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mije a jour</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('update-exp')}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="experience_id" name="experience_id" />
                    <div class="hidden">
                        <label for="input1">First Element</label>
                        @foreach ($utilisateurs as $utilisateur)
                        <input type="text" class="form-control" value="{{$utilisateur->id}}" name="utilisateur_id" id="edit_uti" placeholder="Enter first element" hidden>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="" id="edit_nom" required>
                    </div>
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Annee</label>
                        <input type="text" class="form-control" name="annee" placeholder="" id="edit_ann" required>
                    </div>
                    @error('annee')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Poste</label>
                        <input type="text" class="form-control" name="poste" placeholder="" id="edit_poste" required>
                    </div>
                    @error('poste')
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
                        <button class="btn btn-primary" type="submit">Mije a jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@section('scripts')
<script>
    function updateExperience(data) {
        console.log(data);
        let parsedData = JSON.parse(data)
        console.log('clik', parsedData)
        $('#edit_uti').val(parsedData.utilisateur_id);
        $('#edit_nom').val(parsedData.nom);
        $('#edit_ann').val(parsedData.annee);
        $('#edit_poste').val(parsedData.poste);
        $('#edit_des').val(parsedData.description);
        $('#experience_id').val(parsedData.id);
    }
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            $('#modification').modal('show');
        });
    });

    function confirmDelete(experienceId) {
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
                document.getElementById('form-' + experienceId).submit();
            }
        });
    }
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
