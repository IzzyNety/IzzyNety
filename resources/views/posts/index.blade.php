<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>


    <ul class="col-6 menu__box">

        <form class="form-check-label my-0 my-lg-0" action="{{ route('post.index') }}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Найти пост..." aria-label="Search">
        </form>
        <li class="nav-item active">
            <a class="menu__item" href="/">Главная</a>
        </li>
        <li class="nav-item active">
            <a class="menu__item" href="/">Создать пост</a>
        </li>

    </ul>
</div>


    <div class="container">

        @if(isset($_GET['search']))
            @if(count($posts)>0)
                <h2>Результаты поиска по запросу <?=$_GET['search']?></h2>
                <p class="lead">Всего найдено {{ count($posts) }} постов</p>
            @else
                <h2>По запросу <?=$_GET['search']?> ничего не найдено</h2>
                <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>
            @endif
        @endif

        <div class="row">
            @foreach($posts as $post)
            <div class="col-6">
                <div class="card">
                    <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                    <div class="card-body">
                        <div class="card-author"> Автор : {{ $post->name }}</div>
                        <div class="card-body">{{ $post->descr }}</div>
                        <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(!isset($_GET['search']))
        {{ $posts->links() }}
        @endif
    </div>
</body>
</html>
