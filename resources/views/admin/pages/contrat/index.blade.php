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
                                <a type="button" class="btn btn-primary" href="{{route('ajout-contrat')}}">
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
                                                        <th>Image</th>
                                                        <th>Titre</th>
                                                        <th>Domaine</th>
                                                        <th>Categorie</th>
                                                        <td>Operations</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($datas as $data)
                                                    <tr>
                                                        <th scope="row">{{ $loop->index +1 }}</th>
                                                        <td class="logo text-center">
                                                            <img src="{{asset($data->image)}}" class="rounded-circle img-rounded" width="40" height="40" alt="">
                                                        </td>
                                                        <td>{{$data->titre}}</td>
                                                        <td>{{$data->domaine == null ? '' : $data->domaine->libelle}}</td>
                                                        <td>{{$data->categorie == null ? '' : $data->categorie->libelle}}</td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                                <div class="d-flex">
                                                                    <a href="{{route('edit-contrat', $data->id)}}" class="btn btn-primary shadow btn-xl sharp me-1 ">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <div class="remove">
                                                                        <button class="btn btn-sm btn-danger btn-xl sharp" onclick="confirmDelete('{{ $data->id }}')">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                        <form id="form-{{ $data->id }}" action="{{route('delete-contrat', $data->id) }}" method="post">
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
                                                        <th>Image</th>
                                                        <th>Titre</th>
                                                        <th>Domaine</th>
                                                        <th>Categorie</th>
                                                        <td>Operations</td>
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





@endsection
@section('scripts')
<script>
    function confirmDelete(contratId) {
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
                document.getElementById('form-' + contratId).submit();
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
