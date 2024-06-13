@extends('client.master')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption text-center">
            <h2>Job In Grid</h2>
            <p><a href="{{route('index')}}" title="Home">Accueil</a> <i class="ti-angle-double-right"></i> Job Layout One</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ======================= Search Filter ===================== -->
<section class="padd-0 padd-top-20 jov_search_block_inner">
    <div class="row">
        <div class="container">
            <form>
                <fieldset class="search-form">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" placeholder="Job Title, Keywords or Company Name..." />
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="wide form-control">
                            <option data-display="Location">All Country</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="3">Algeria</option>
                            <option value="4">Brazil</option>
                            <option value="5">Burundi</option>
                            <option value="6">Bulgaria</option>
                            <option value="7">Germany</option>
                            <option value="8">Grenada</option>
                            <option value="9">Guatemala</option>
                            <option value="10" disabled>Iceland</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="wide form-control">
                            <option data-display="Category">Show All</option>
                            <option value="1">Software Developer</option>
                            <option value="2">Java Developer</option>
                            <option value="3">Software Engineer</option>
                            <option value="4">Web Developer</option>
                            <option value="5">PHP Developer</option>
                            <option value="6">Python Developer</option>
                            <option value="7">Front end Developer</option>
                            <option value="8">Associate Developer</option>
                            <option value="9">Back end Developer</option>
                            <option value="10">XML Developer</option>
                            <option value="11">.NET Developer</option>
                            <option value="12" disabled>Marketting Developer</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 m-clear">
                        <button type="submit" class="btn theme-btn full-width height-50 radius-0">Search</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<!-- ======================= Search Filter ===================== -->

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-20 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-12">
                <h4 class="job_vacancie">{{ $datas->total() }} Emplois & Vacances</h4>
            </div>
            <div class="col-md-7 col-sm-8 col-xs-12">
                <div class="fl-right short_by_filter_list">
                    <div class="search-wide short_by_til">
                        <h5>Short By</h5>
                    </div>
                    <div class="search-wide full">
                        <select class="wide form-control">
                            <option value="1">Most Recent</option>
                            <option value="2">Most Viewed</option>
                            <option value="4">Most Search</option>
                        </select>
                    </div>
                    <div class="search-wide full">
                        <select class="wide form-control">
                            <option>10 Per Page</option>
                            <option value="1">20 Per Page</option>
                            <option value="2">30 Per Page</option>
                            <option value="4">50 Per Page</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
        <div class="utf_flexbox_area padd-0">
            {{ $datas->links() }}
        </div>
    </div>
</section>
<!-- ====================== End Job Detail 2 ================ -->

<section class="newsletter theme-bg" style="background-image:url('client/assets/img/bg-new.png')">
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