<!doctype html>
<html lang="ZXX">

<head>
	<title>Адвокат Анастасия Красавина</title>
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
	<link rel="stylesheet" href="css/responsive.css">
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class=" container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class=" col-6 navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active offset-3">
        <a class="nav-link" href="#">Создать пост <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('post.index') }}">
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Найти пост..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск </button>
    </form>
  </div>
</nav>


<div class="container">
  @if(isset($_GET['search']))
    @if(count($posts)>0)
      <h3>Результаты поиска по заппросу <?=$_GET['search']?></h3>
      <p class="lead">Всего найдено {{ count($posts) }} постов</p>
    @else
      <h3>По запросу <?=$_GET['search']?> ничего не найдено</h3>
      <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отоброзить все посты</a>
  @endif
@endif




  <div class="row">
    @foreach ($posts as $post)
    <div class="col-6">
      <div class="card">
        <div class="card-header"><h3>{{ $post->short_title }}</h3></div>
          <div class="card-body">
            <div class="card-img" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
            <div class="card-author">Автор: {{ $post->name }}</div>
            <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @if(!isset($_GET['search']))
    {{$posts->links()}}
    @endif
  </div>


</body>

</html>
