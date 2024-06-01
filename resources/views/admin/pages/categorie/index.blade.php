@extends('admin.layouts.master')
@section('contenu')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap">
                            <div class="input-group search-area mb-md-0 mb-3">
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    + Nouveau
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-content" id="myTabContent" style="background-color: rgb(254, 254, 254)">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="example" class="display table" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Libelle</th>
                                                        <th>Description</th>
                                                        <th>Operation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($datas as $data)
                                                    <tr>
                                                        <th scope="row">{{ $loop->index +1 }}</th>
                                                        <td>{{ $data->libelle }}</td>
                                                        <td>{{ $data->description }}</td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                                <div class="d-flex">
                                                                    <a href="#" class="btn btn-primary shadow btn-xl sharp me-1 editbtn" data-bs-target="#modification" data-bs-toggle="modal" onclick="updateCategorie('{{ json_encode($data, JSON_HEX_APOS | JSON_HEX_QUOT) }}')">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <div class="remove">
                                                                        <button class="btn btn-sm btn-danger btn-xl sharp" onclick="confirmDelete('{{$data->id}}')">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        <form id="form-{{$data->id}}" action="{{route('delete-categorie', $data->id) }}" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Libelle</th>
                                                        <th>Description</th>
                                                        <th>Operation</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/column-->
                </div>
            </div>
        </div>
        <!--**********************************
                        Footer start
                    ***********************************-->
    </div>
</div>


<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajout Categorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="POST" action="{{ route('add-categorie') }}" id="addCategorie">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-primary">libelle<span class="required">*</span></label>
                        <input class="form-control" name="libelle" type="text" placeholder="">
                    </div>
                    <span class="text-danger error-text libelle_error"></span>
                    @error('libelle')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label text-primary">Description<span class="required">*</span></label>
                        <input class="form-control" name="description" type="text" placeholder="">
                    </div>
                    <span class="text-danger error-text libelle_error"></span>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Fermer</button>
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modification">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form method="POST" action="{{ route('update-categorie') }}" id="updateCategorie">
                @csrf
                @method('PUT')
                <input type="hidden" id="categorie_id" name="categorie_id" />
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-primary">Libelle<span class="required">*</span></label>
                        <input class="form-control" id="libelle_edit" name="libelle" type="text" placeholder="">
                    </div>
                    @error('libelle')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label text-primary">Description<span class="required">*</span></label>
                        <input class="form-control" id="description_edit" name="description" type="text" placeholder="">
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Fermer</button>
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    function updateCategorie(data) {
        let parsedData = JSON.parse(data)
        console.log('clik', parsedData)
        $('#libelle_edit').val(parsedData.libelle);
        $('#description_edit').val(parsedData.description);
        $('#categorie_id').val(parsedData.id);
    }
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            $('#modification').modal('show');
        });
    });

    function confirmDelete(categorieId) {
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
                document.getElementById('form-' + categorieId).submit();
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
