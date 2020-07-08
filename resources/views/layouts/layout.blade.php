<!doctype html>
<html lang="ru">

<head>
	<title>{{ $title }}</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name=description content="">
	<meta name=author content="Enventer">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">
	<!-- Meanmenu css -->
	<link rel="stylesheet" href="css/meanmenu.css">
	<!-- Magnific css -->
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Animation CSS -->
	<link href="css/aos.min.css" rel="stylesheet">
	<!-- Slick Carousel CSS -->
	<link href="css/slick.css" rel="stylesheet">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="{{ asset ('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset ('css/app.css') }}">
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class=" container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class=" col-6 navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Адвокат Анастасия Красавина <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active offset-3">
        <a class="nav-link" href="{{ route ('post.create')}}">Создать пост <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('post.index') }}">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Найти пост..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск </button>
    </form>
		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
						<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
						</li>
						@if (Route::has('register'))
								<li class="nav-item">
										<a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
								</li>
						@endif
				@else
						<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
											 onclick="event.preventDefault();
																		 document.getElementById('logout-form').submit();">
												{{ __('Выйти') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form>
								</div>
						</li>
				@endguest
		</ul>
  </div>
</nav>


<div class="container">
	@if($errors->any())
	   @foreach($errors->all() as $error)
		 <div class="alert alert-danger alert-dismissible fade show" role="alert">
	 		{{ $error }}
	   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	     <span aria-hidden="true">&times;</span>
	   </button>
		 </div>
		 @endforeach
	@endif
	@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  @endif
  @yield('content')

</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="js/app.js"></script>

</body>

</html>