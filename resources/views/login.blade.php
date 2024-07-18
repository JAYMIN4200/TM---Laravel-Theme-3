
<!DOCTYPE html>
<html lang="en">

@push('title')
<title>Login</title>
@endpush

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/dark/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 14:56:44 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- Favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('dashboard')}}">
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('assets/images/loading.png') }}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<i class="material-icons focus-input1001">person</i>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<i class="material-icons focus-input1001">lock</i>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Plugins Js -->

	<script src="{{ asset('assets/js/app.min.js') }}"></script>

	<!-- Extra page Js -->
	<script src="{{ asset('assets/js/pages/examples/pages.js') }}"></script>

</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/dark/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 14:56:44 GMT -->
</html>
