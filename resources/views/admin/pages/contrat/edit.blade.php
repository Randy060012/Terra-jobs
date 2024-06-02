@extends('admin.layouts.master')

@section('contenu')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Modification</h5>
                    </div>
                    <form method="POST" action="{{route('update-contrat',$data->id)}}" id="updateContrat" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="hidden">
                                    @foreach ($users as $user)
                                    <input type="text" name="user_id" class="form-control" value="{{$user->id}}" id="exampleFormControlInput1" placeholder="" hidden />
                                    @endforeach
                                </div>
                                <div class="col-xl-6 col-sm-6">

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-primary">
                                            Titre
                                            <span class="required">*</span></label>
                                        <input type="text" name="titre" class="form-control" value="{{$data->titre}}" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    @error('titre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label text-primary">Domaine<span class="required">*</span></label>
                                        <select class="form-control " name="domaine_id">
                                            <option value="" disabled selected>Selectionnez un domai...</option>
                                            @foreach ($domaines as $domaine)
                                            @if ($domaine->id == $data->domaine_id)
                                            <option value="{{ $domaine->id }}" selected>{{ $domaine->libelle }} </option>
                                            @else($domaine->id === 1)
                                            <option value="{{ $domaine->id }}">{{ $domaine->libelle }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('domaine_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label text-primary">Type de contrat<span class="required">*</span></label>
                                        <select class="form-control " name="type_de_contrat_id">
                                            <option value="" disabled selected>Selectionnez un domai...</option>
                                            @foreach ($types as $type)
                                            @if ($type->id == $data->type_de_contrat_id)
                                            <option value="{{ $type->id }}" selected>{{ $type->libelle }}</option>
                                            @else($type->id === 1)
                                            <option value="{{ $type->id }}">{{ $type->libelle }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('type_de_contrat_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <div class="" id="myParent">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput3" class="form-label text-primary">Categorie<span class="required">*</span></label>
                                        <select class="form-control " name="categorie_id">
                                            <option value="" disabled selected>Selectionnez un domai...</option>
                                            @foreach ($categories as $categorie)
                                            @if ($categorie->id == $data->categorie_id)
                                            <option value="{{ $categorie->id }}" selected>{{ $categorie->libelle }}</option>
                                            @else($categorie->id === 1)
                                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }} </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('categorie_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <label class="form-label text-primary">Descriptions<span class="required">*</span></label>
                                        <textarea name="description" class="form-control" value="{{$data->description}}" id="description" rows="6">{!!$data->description!!}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-primary">
                                            Date
                                            <span class="required">*</span></label>
                                        <input type="date" name="date_limite" class="form-control" value="{{$data->date_limite}}" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    @error('date_limite')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="mb-3">
                                        <!-- <img id="preview" width="50px" height="80px" /> -->
                                        <div class="form-group row mb-3">
                                            <div class="col-md-6">
                                                <label for="imageUpload" class="form-label text-primary">Image de Couverture<span class="required">*</span></label>
                                                <div class="avatar-upload">
                                                    <div class="change-btn mt-1">
                                                        <input  value="{{ asset('produitImage/' . $data->image) }}" name="image" type='file' class="form-control d-none" id="imageUpload" accept=".png, .jpg, .jpeg" onchange="previewImage(event)">
                                                        <label for="imageUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
                                                        <a href="javascript:void(0);" class="btn btn-danger light remove-img ms-2 btn-sm" onclick="removeImage()">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="pdfUpload" class="form-label text-primary">Fichier PDF<span class="required">*</span></label>
                                                <div class="avatar-upload">
                                                    <div class="change-btn mt-1">
                                                        <input value="{{ asset('produitImage/' . $data->fichier) }}" name="fichier" type='file' class="form-control d-none" id="pdfUpload" accept=".pdf">
                                                        <label for="pdfUpload" class="dlab-upload mb-0 btn btn-primary btn-sm">Choose File</label>
                                                        <a href="javascript:void(0);" class="btn btn-danger light remove-pdf ms-2 btn-sm" onclick="removePDF()">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="float-end">

                                    <button class="btn btn-primary me-3">Modifier</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
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
