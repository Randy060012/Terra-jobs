@extends('client.master')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Job Detail</h2>
            <p><a href="{{route('index')}}" title="Home">Accueil</a> <i class="ti-angle-double-right"></i> Job Detail</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-60">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="detail-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="row">
                            <div class="col-md-4 text-center user_profile_img"> <img src="{{asset($contrat->image)}}" class="width-100" alt="" />
                                <h4 class="meg-0">{{$contrat->titre}}</h4>
                                <span>512 Big Tower, New Delhi</span>
                                <div class="text-center">
                                    <button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Apply Now</button>
                                </div>
                            </div>
                            <div class="col-md-8 user_job_detail">
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-credit-card padd-r-10"></i>20K To 50K/Month </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-mobile padd-r-10"></i>91 234 567 8765 </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-email padd-r-10"></i>mail@example.com </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-calendar padd-r-10"></i><span class="full-type">Full Time</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-user padd-r-10"></i><span class="cl-danger">7 Open Position</span> </div>
                                <div class="col-sm-12 mrg-bot-10"> <i class="ti-shield padd-r-10"></i>3 Year Exp. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Description</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Job Skill</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                            <li><strong>Domaine:</strong> {{$contrat->domaine == null ? '' : $contrat->domaine->libelle}}</li>
                            <li><strong>Catégorie:</strong> {{$contrat->categorie == null ? '' : $contrat->categorie->libelle}}</li>
                            <li><strong>Type de contrat:</strong> {{$contrat->typecontrat == null ? '' : $contrat->typecontrat->libelle}} </li>
                        </ul>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Location</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.0515265723353!2d1.1760269!3d6.1829752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102158e2d5eaa3b5%3A0xf1f254a2a3898edd!2sFr%C3%A8res%20Franciscains%20d'Adidogom%C3%A9!5e0!3m2!1sen!2stt!4v1647999163292!5m2!1sen!2stt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="detail-wrapper">
                    <div class="detail-wrapper-header">
                        <h4>Requirements</h4>
                    </div>
                    <div class="detail-wrapper-body">
                        <ul class="detail-list">
                            <li>There are many variations of passages of Lorem Ipsum available</li>
                            <li>the majority have suffered alteration in some form slightly</li>
                            <li>you need to be sure there isn't anything embarrassing hidden</li>
                            <li>generators on the Internet tend to repeat predefined chunks as necessary</li>
                            <li>making this the first true generator on the Internet It uses a dictionary</li>
                            <li>Ability to solve problems creatively and effectively</li>
                            <li>combined with a handful of model sentence structures</li>
                            <li>standard chunk of Lorem Ipsum used since the 1500s is reproduced</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <!-- Start: Job Overview -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-location-pin padd-r-10"></i>Fiche d'information</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul>
                                    <li>
                                        <i class="ti-credit-card padd-r-10"></i>
                                        <a href="{{ asset($contrat->fichier) }}" target="_blank">{{ $contrat->fichier }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End: Job Overview -->

                    <!-- Start: Opening hour -->
                    <!-- <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-time padd-r-10"></i>Opening Hours</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list">
                                <ul>
                                    <li>Monday <span>9 AM - 5 PM</span></li>
                                    <li>Tuesday <span>9 AM - 5 PM</span></li>
                                    <li>Wednesday <span>9 AM - 5 PM</span></li>
                                    <li>Thursday <span>9 AM - 5 PM</span></li>
                                    <li>Friday <span>9 AM - 5 PM</span></li>
                                    <li>Saturday <span>9 AM - 3 PM</span></li>
                                    <li>Sunday <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->

                    <!-- Start: Location -->
                    <div class="widget-boxed">
                        <div class="widget-boxed-header">
                            <h4><i class="ti-time padd-r-10"></i>Location</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

        <div class="row">
            <div class="col-md-12">
                <h4 class="mrg-bot-30">Similar Jobs</h4>
            </div>
        </div>
        <div class="row">
            <!-- Single Job -->
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox" checked>
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('client/assets/img/company_logo_1.png')}}" alt=""> </a> </div>
                        <h5><a href="employer-detail.html">Product Redesign</a></h5>
                        <p class="text-muted">2708 Scenic Way, IL 62373</p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="#" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
                </div>
            </div>

            <!-- Single Job -->
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox">
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('client/assets/img/company_logo_2.png')}}" alt=""> </a> </div>
                        <h5><a href="employer-detail.html">New Product Mockup</a></h5>
                        <p class="text-muted">2708 Scenic Way, IL 62373</p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="#" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
                </div>
            </div>

            <!-- Single Job -->
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Full Time</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox" checked>
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('client/assets/img/company_logo_3.png')}}" alt=""> </a> </div>
                        <h5><a href="employer-detail.html">Custom Php Developer</a></h5>
                        <p class="text-muted">3765 C Street, Worcester</p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="#" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
                </div>
            </div>

            <!-- Single Job -->
            <div class="col-md-3 col-sm-6">
                <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
                    <div class="utf_job_like">
                        <label class="toggler toggler-danger">
                            <input type="checkbox">
                            <i class="fa fa-heart"></i>
                        </label>
                    </div>
                    <div class="u-content">
                        <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('client/assets/img/company_logo_4.png')}}" alt=""> </a> </div>
                        <h5><a href="employer-detail.html">Wordpress Developer</a></h5>
                        <p class="text-muted">2719 Duff Avenue, Winooski</p>
                    </div>
                    <div class="utf_apply_job_btn_item"> <a href="#" class="btn job-browse-btn btn-radius br-light">Apply Now </a> </div>
                </div>
            </div>
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
