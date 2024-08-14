<!DOCTYPE html>
<html class="" lang="zxx">

<!-- Mirrored from utouchdesign.com/themes/envato/escort/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 21:14:46 GMT -->

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Terra - Job ::</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{asset('client/assets/img/favicon.png')}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('client/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/plugins/bootstrap/css/bootstrap-select.min.css')}}">
    <link href="{{asset('client/assets/plugins/icons/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/plugins/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/plugins/bootstrap/css/bootsnav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client/assets/plugins/nice-select/css/nice-select.css')}}">
    <link href="{{asset('client/assets/plugins/aos-master/aos.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="utf_skin_area">
    <div class="page_preloader"></div>
    <!-- ======================= Start Navigation ===================== -->
    @include('client.layouts.header')
    <!-- ======================= End Navigation ===================== -->

    @yield('content')

    <!-- ================= footer start ========================= -->
    @include('client.layouts.footer')

    <!-- Signup Code -->
    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="myModalLabel1">
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                        <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"> <i class="ti-user"></i> Job Seeker</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#candidate" role="tab"> <i class="ti-user"></i> Job Provider</a> </li>
                    </ul>
                    <!-- Nav tabs -->
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- Employer Panel 1-->
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
                        <!--/.Panel 1-->

                        <!-- Candidate Panel 2-->
                        <div class="tab-pane fade" id="candidate" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group"> <span class="custom-checkbox">
                                        <input type="checkbox" id="44">
                                        <label for="44"></label>
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
                    <!-- Tab panels -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Signup -->
    <div><a href="#" class="scrollup">Scroll</a></div>

    <!-- Jquery js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('client/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('client/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/assets/plugins/bootstrap/js/bootsnav.js')}}"></script>
    <script src="{{asset('client/assets/js/viewportchecker.js')}}"></script>
    <script src="{{asset('client/assets/js/slick.js')}}"></script>
    <script src="{{asset('client/assets/plugins/bootstrap/js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('client/assets/plugins/bootstrap/js/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{asset('client/assets/plugins/aos-master/aos.js')}}"></script>
    <script src="{{asset('client/assets/plugins/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('client/assets/js/custom.js')}}"></script>
    <script>
        $(window).load(function() {
            $(".page_preloader").fadeOut("slow");;
        });
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
    @stack('script')
    <style>
        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .table-actions {
            display: flex;
            justify-content: flex-start;
        }

        .action-btn {
            margin: 5px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
        }

        .add {
            background-color: #334e6f;
            color: white;
            border: none;
        }

        .edit {
            background-color: #ffc107;
            color: white;
            border: none;
        }

        .delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .detail-wrapper-body {
            display: flex;
            flex-direction: column;
        }

        .detail-info {
            background: #f9f9f9;
            /* ou toute autre couleur de fond souhaitée */
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</body>

<!-- Mirrored from utouchdesign.com/themes/envato/escort/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2024 21:16:12 GMT -->

</html>
