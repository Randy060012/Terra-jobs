@extends('client.master')
@section('content')

<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Browse by Categories</h2>
            <p><a href="{{route('index')}}" title="Home">Home</a> <i class="ti-angle-double-right"></i> Browse by Categories</p>
        </div>
    </div>
</div>
<!-- ================= Category start ========================= -->
<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3 col-sm-6">
                    <a href="browse-job.html" title="">
                        <div class="utf_category_box_area">
                            <div class="utf_category_desc">
                                <div class="utf_category_icon"> <i class="icon-bargraph" aria-hidden="true"></i> </div>
                                <div class="category-detail utf_category_desc_text">
                                    <h4>Web & Software Dev</h4>
                                    <p>122 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach($datas as $data)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ route('categories.show', ['categorie_id' => $data->slug]) }}" title="">
                        <div class="utf_category_box_area">
                            <div class="utf_category_desc">
                                <div class="utf_category_icon"> <i class="icon-briefcase" aria-hidden="true"></i> </div>
                                <div class="category-detail utf_category_desc_text">
                                    <h4>{{$data->libelle}}</h4>
                                    <p>120 Jobs</p>
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
