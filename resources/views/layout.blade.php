	<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen,projection">
	</head>
	<body>
		<header class="space-inter">
			<nav class="white" role="navigation">
				<div class="nav-wrapper container">
					<a id="logo-container" href="#" class="brand-logo logo">
						<figure><img src="{{ asset('img/logo.png') }}"></figure>
					</a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a href="{{ route('blog') }}">Home</a>
						</li>
						<li>
							<a href="{{ route('about') }}">Acerca de...</a>
						</li>
						<li>
							<a href="{{ route('archive') }}">Archivo</a>
						</li>
						<li>
							<a href="{{ route('contact') }}">Contactanos</a>
						</li>
					</ul>

					<ul id="nav-mobile" class="sidenav">
						<li><a href="#">Navbar Link</a></li>
					</ul>
					<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</header>

		<div class="container">
			@yield('content')
		</div>

		<footer class="page-footer teal">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<figure>
							<img src="{{ asset('img/logo.png') }}" class="logo">
						</figure>
						<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


					</div>
					<div class="col l3 s12">

					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Menu</h5>
						<ul >
							<li>
								<a href="{{ route('blog') }}" class="white-text">Home</a>
							</li>
							<li>
								<a href="{{ route('about') }}" class="white-text">Acerca de...</a>
							</li>
							<li>
								<a href="{{ route('archive') }}" class="white-text">Archivo</a>
							</li>
							<li>
								<a href="{{ route('contact') }}" class="white-text">Contactanos</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
				</div>
			</div>
		</footer>

		<!-- Compiled and minified JavaScript -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	</body>
	</html>