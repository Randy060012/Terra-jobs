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
                <div id="dashboard_listing_blcok">
                    <div class="col-md-4 col-sm-4">
                        <div class="statusbox">
                            <h3>Balance Credit</h3>
                            <div class="statusbox-content">
                                <p class="ic_status_item ic_col_one"><i class="fa fa-balance-scale"></i></p>
                                <h2>$215,00</h2>
                                <span>Updated 02 Jan 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="statusbox">
                            <h3>View Progress</h3>
                            <div class="statusbox-content">
                                <p class="ic_status_item ic_col_two"><i class="fa fa-line-chart"></i></p>
                                <h2>$280,00</h2>
                                <span>Updated 02 Jan 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="statusbox">
                            <h3>View Payments</h3>
                            <div class="statusbox-content">
                                <p class="ic_status_item ic_col_three"><i class="fa fa-cc-paypal"></i></p>
                                <h2>$350,00</h2>
                                <span>Updated 02 Jan 2021</span>
                            </div>
                        </div>
                    </div>
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
