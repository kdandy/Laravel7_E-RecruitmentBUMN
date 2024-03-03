<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Scrooge I Login</title>
	<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Custom CSS -->
	<link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

		<!-- Main Content -->
		<div class="hk-pg-wrapper hk-auth-wrapper">
			<header class="d-flex justify-content-end align-items-center">
				<div class="btn-group btn-group-sm">
					<a href="/" class="btn btn-outline-secondary">Halaman Depan</a>
				</div>
			</header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 pa-0">
						<div class="auth-form-wrap pt-xl-0 pt-70">
							<div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
								<form method="POST" action="{{ route('login') }}">
									<div class="text-center">
										<a class="navbar-brand" href="#"><img
												src="{{asset('depan/assets/img/logo.png')}}" alt="image"
												width="50%"></a>
									</div>
									<br>
									<h1 class="display-5 text-center mb-10">Halaman Login</h1>
									<p class="text-center mb-30">Aplikasi E-recruitment Telkom Akses</p>
									@csrf
									<fieldset class="form-label-group form-group position-relative has-icon-left">
										<input id="username" type="text"
											class="form-control @error('username') is-invalid @enderror" name="username"
											value="{{ old('username') }}" required autocomplete="username" autofocus>
										@error('username')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror

										<label for="user-name">Username</label>
									</fieldset>

									<fieldset class="form-label-group position-relative has-icon-left">
										<input id="password" type="password"
											class="form-control @error('password') is-invalid @enderror" name="password"
											required autocomplete="current-password">
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
										<label for="user-password">Password</label>
									</fieldset>
									<br>
									<button class="btn btn-danger btn-block" type="submit">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Content -->

	</div>
	@include('sweetalert::alert')
	<!-- jQuery -->
	<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
	<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

	<!-- Owl JavaScript -->
	<script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

	<!-- FeatherIcons JavaScript -->
	<script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

	<!-- Init JavaScript -->
	<script src="{{asset('admin/dist/js/init.js')}}"></script>
	<script src="{{asset('admin/dist/js/login-data.js')}}"></script>
</body>

</html>