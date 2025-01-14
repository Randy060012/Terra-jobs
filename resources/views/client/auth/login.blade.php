@extends('client.master')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Sign in</h2>
            <p><a href="{{route('index')}}" title="Home">Accueil</a> <i class="ti-angle-double-right"></i> SignUp</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="log-box">
            <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group"> <span class="custom-checkbox">
                            <input type="checkbox" id="4">
                            <label for="4"></label>
                            Remember Me </span> <a href="#" title="Forget" class="fl-right">Forgot Password?</a>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn theme-btn full-width btn-m">LogIn</button>
                    </div>
                </form>
                <div class="log-option"><span>OR</span></div>
                <div class="row">
                    <div class="col-md-6"> <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i> Facebook</a> </div>
                    <div class="col-md-6"> <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google"></i> Google</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====================== End Signup Form ============= -->

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
