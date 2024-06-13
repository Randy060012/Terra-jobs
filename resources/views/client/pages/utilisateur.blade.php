@extends('client.master')
@section('content')

<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Profile Settings</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="leftcol_item">
                    <div class="user_dashboard_pic"> <img alt="user photo" src="{{'client/assets/img/user-profile.png'}}"> <span class="user-photo-action">Alden Smith</span> </div>
                </div>
                <div class="dashboard_nav_item">
                    <ul>
                        <li><a href="dashboard.html"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
                        <li class="active"><a href="profile-settings.html"><i class="login-icon ti-user"></i> Edit Profile</a></li>
                        <li><a href="change-password.html"><i class="login-icon ti-key"></i> Change Password</a></li>
                        <li><a href="{{route('utilogout')}}"><i class="login-icon ti-power-off"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile_detail_block">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Slogan">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Slogan">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="mail@example.com">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="***********">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="123 214 13247">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="wide form-control">
                                <option data-display="Gender">Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Language</label>
                            <select class="wide form-control">
                                <option data-display="Language">Language</option>
                                <option value="1">English</option>
                                <option value="2">Hindi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="text" id="dob" data-lang="en" data-large-mode="true" data-min-year="2020" data-max-year="2020" data-disabled-days="08/17/2020,08/18/2020" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>User Profile</label>
                        <div class="custom-file-upload">
                            <input type="file" id="file" name="myfiles[]" multiple />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="https://facebook.com/">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="https://twitter.com/">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input type="text" class="form-control" placeholder="https://linkedin.com/">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Google+</label>
                            <input type="text" class="form-control" placeholder="https://gmail.com/">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Slogan</label>
                            <input type="text" class="form-control" placeholder="World Most Popular Software Development">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 padd-top-10 text-center"> <a href="#" class="btn btn-m theme-btn full-width">Update</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Profile Settings ======================= -->

<section class="newsletter theme-bg" style="background-image:url(assets/img/bg-new.png)">
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
