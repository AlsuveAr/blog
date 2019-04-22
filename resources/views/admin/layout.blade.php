<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Compiled and minified JavaScript -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	
	<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen,projection">
</head>
<body>
	<div id="app">
		<header>
			<nav class="white">
				<div class="nav-wrapper">
					<ul class="left">
						<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					</ul>
					<ul class="right">
						<li><a href="{{ route('blog') }}" class="left">Blog</a></li>
						<li><a>{{ Auth::user()->name }}</a></li>
						<li>
							<a href='#' data-target='dropdown1' class="dropdown-trigger">
								<i class="material-icons">dashboard</i>
							</a>

							<ul id='dropdown1' class='dropdown-content'>
								<li><a href="#!">one</a></li>
								<li><a href="#!">two</a></li>
								<li class="divider" tabindex="-1"></li>
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
				                 		document.getElementById('logout-form').submit();">
				                 		<i class="large material-icons">exit_to_app</i>{{ __('Logout') }}
				                 	</a>

				                 	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                        @csrf
				                    </form>
				                 </li>
								<li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
								<li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>

		<div class="">
			<div class="row">
				<div class="col l3">
				<header>
					<!--Sidebar-->
					<ul id="slide-out" class="sidenav sidenav-fixed">
						<li>
							<div class="user-view">
								<div class="background">
									<img src="{{ asset('img/img-post-1.png') }}" height="300px">
								</div>
								<div class="row">
									<div class="col">
										
										<a href="#user"><img src="{{ asset('img/img-post-1.png') }}" class="circle"></a>
									</div>
									<div class="col">

										<a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
										<a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
										
									</div>
								</div>
							</div>
						</li>
						<li><a href="{{ route('posts.index') }}">Entradas</a></li>
						<li><a href="{{ route('categories.index') }}">Categorias</a></li>
						<li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
						<li><div class="divider"></div></li>
						<li><a class="subheader">Subheader</a></li>
						<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
					</ul>
				</header>
					
				</div>
				<div class="col s12 m12 l9">
					@if(session('info'))
						<script>
							 M.toast({html: '{{ session('info') }}', classes:'teal'});
						</script>
					@endif

					@if(count($errors))
						<ul>	
						@foreach($errors->all() as $error)
							<!--<li class="red">{{ $error }}</li>-->
							<script>
								M.toast({html: '{{ $error }}', classes:''});
							</script>
						@endforeach
						</ul>
					@endif

					@yield('content')
				</div>
			</div>
		
		</div>
	</div>
	<script type="text/javascript">
		$('.dropdown-trigger').dropdown();

		$(document).ready(function(){
			$('.sidenav').sidenav();
		});

		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems, options);
		});

		

		 function messages($msg) {
		 	 M.toast({html: $msg});
		 }
	</script>
	@yield('scripts')
</body>
</html>