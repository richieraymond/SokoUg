<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>{{ config('app.name', 'PMonitor') }} Login</title>
     <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ asset('images/logos/sokologo.jpg') }}" height="85">
					</div>
					<div class="card fat">
						<div class="card-body">
							@yield('content')
						</div>
					</div>
					<div class="footer">
                    Copyright {{ config('app.name', 'PMonitor') }} &copy;  2017
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/my-login.js') }}"></script>
</body>
</html>