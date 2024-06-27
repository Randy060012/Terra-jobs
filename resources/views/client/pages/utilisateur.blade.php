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
                <form action="{{route('update-uti',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile_detail_block">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Mail</label>
                                <input type="email" name="email" class="form-control" placeholder="mail@example.com" value="{{ $data->email }}">
                            </div>
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="mdp" class="form-control" placeholder="***********">
                            </div>
                        </div>
                        @error('mdp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Last Name" value="{{ $data->nom }}">
                            </div>
                        </div>
                        @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Prénoms</label>
                                <input type="text" name="prenom" class="form-control" placeholder="First Name" value="{{ $data->prenom }}">
                            </div>
                        </div>
                        @error('prenom')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="telephone" class="form-control" placeholder="123 214 13247" value="{{ $data->telephone }}">
                            </div>
                        </div>
                        @error('telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Photo profil</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Curriculum vitae</label>
                                <input type="file" name="cv" class="form-control" value="{{ asset('utili/' . $data->cv) }}">
                            </div>
                        </div>
                        @error('cv')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ $data->adresse }}">
                            </div>
                        </div>
                        @error('adresse')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Niveau-scolaire</label>
                                <input type="text" name="niveau" class="form-control" placeholder="Level" value="{{ $data->niveau }}">
                            </div>
                        </div>
                        @error('niveau')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Spécialité</label>
                                <input type="text" name="specialite" class="form-control" placeholder="Specialty" value="{{ $data->specialite }}">
                            </div>
                        </div>
                        @error('specialite')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="clearfix"></div>
                        <div class="col-md-12 padd-top-10 text-center">
                            <button type="submit" class="btn btn-m theme-btn full-width">Update</button>
                        </div>
                    </div>
                </form>

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
