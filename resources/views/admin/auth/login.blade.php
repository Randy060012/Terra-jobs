<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from akademi.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 11:26:30 GMT -->
<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="social-image.png" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>CNO-TOGO : Login</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{URL::asset('admin/images/glog.jpg')}}" >
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="body  h-100">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="{{URL::asset('client/assets/img/banner/dt.png')}}" style="width : 250px ; height : 150px" alt="">
				</div>
				<h3 class="mb-2 text-white">content de te revoir
				</h3>
				<p class="mb-4"></p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
				<div class="authincation-content style-2">
					<div class="row no-gutters">
						<div class="col-xl-12 tab-content">
							<div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
								<form method="POST" action="{{ route('login-user') }}">*
									@csrf

									@if(Session::has('success'))
									<div class="alert alert-success">{{ Session::get('success') }}</div>
									@endif
									@if(Session::has('fail'))
									<div class="alert alert-danger">{{ Session::get('fail') }}</div>
									@endif
									
									<div class="text-center mb-4">
										<h3 class="text-center mb-2 text-black">Se Connecter</h3>
										<span></span>
									</div>
									
									
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Votre adresse email</label>
									  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="hello@example.com">
									  <font color="red">
										<p>@error('email') {{ $message }} @enderror</p>
									  </font>
									</div>
									<div class="mb-3">
										<label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Votre mot de passe</label>
									  <input type="password" class="form-control" name="password" id="exampleFormControlInput2" value="Password">
									  <font color="red">
										<p>@error('password') {{ $message }} @enderror</p>
									  </font>
									</div>
									<a href="javascript:void(0);" class="text-primary float-end mb-4">Mot de passe oublier ?</a>
									<button class="btn btn-block btn-primary">Se connecter</button>
									
								</form>
								<div class="new-account mt-3 text-center">
									{{-- <p class="font-w500">Already have an account? <a class="text-primary" href="#sign-in" data-toggle="tab">Sign in</a></p> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{URL::asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/custom.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/dlabnav-init.js')}}"></script>
	
</body>

<!-- Mirrored from akademi.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 11:26:32 GMT -->
</html>