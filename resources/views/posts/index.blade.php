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

        <form class="form-check-label my-0 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Найти пост..." aria-label="Search">
        </form>
        <li>
            <a class="menu__item" href="/">Главная</a>
        </li>
        <li>
            <a class="menu__item" href="/">Создать пост</a>
        </li>

    </ul>
</div>


    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ $post->short_title }}</div>
                    <div class="card-body">{{ $post->descr }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
