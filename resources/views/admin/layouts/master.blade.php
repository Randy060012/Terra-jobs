<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 11:24:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management">
    <meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template">
    <meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title Here -->
    <title>Base</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('admin/images/favicon.png')}}">
    <link href="{{URL::asset('admin/vendor/wow-master/css/libs/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('admin/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/vendor/jquery-nice-select/css/nice-select.css')}}">
    <link href="{{URL::asset('admin/vendor/datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!--swiper-slider-->
    <link rel="stylesheet" href="{{URL::asset('admin/vendor/swiper/css/swiper-bundle.min.css')}}">
    <!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href=" {{asset('admin/sweetalerte2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href=" {{asset('admin/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <div class="dots">
                <div class="dot mainDot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>

        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

        @include('admin.layouts.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--****
		Wallet Sidebar
		****-->

        @yield('contenu')
        <!--**********************************
            Content body end
        ***********************************-->
        <!--**********************************
			Footer start
		***********************************-->
        @include('admin.layouts.footer')

    </div>


    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--***********************************-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recent Student title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label mb-2">Student Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="James">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label mb-2">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="hello@example.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-2">Gender</label>
                                <select class="default-select wide" aria-label="Default select example">
                                    <option selected>Select Option</option>
                                    <option value="1">Male</option>
                                    <option value="2">Women</option>
                                    <option value="3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label mb-2">Entery Year</label>
                                <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="EX: 2023">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput5" class="form-label mb-2">Student ID</label>
                                <input type="number" class="form-control" id="exampleFormControlInput5" placeholder="14EMHEE092">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput6" class="form-label mb-2">Phone Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput6" placeholder="+123456">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="{{URL::asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{URL::asset('admin/vendor/apexchart/apexchart.js')}}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{URL::asset('admin/vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <!--swiper-slider-->
    <script src="{{URL::asset('admin/vendor/swiper/js/swiper-bundle.min.js')}}"></script>


    <!-- Datatable -->
    <script src="{{URL::asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/plugins-init/datatables.init.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{URL::asset('admin/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/wow-master/dist/wow.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::asset('admin/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js')}}"></script>

    <script src="{{URL::asset('admin/js/dlabnav-init.js')}}"></script>
    <script src="{{URL::asset('admin/js/custom.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/demo.js')}}"></script>
    <script src="{{URL::asset('admin/js/styleSwitcher.js')}}"></script>
    <script src=" {{asset('admin/sweetalerte2/sweetalert2.min.js')}} "></script>
    <script src=" {{asset('admin/toastr/toastr.min.js')}} "></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
    @stack('script')


</body>

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 11:25:58 GMT -->

</html>
