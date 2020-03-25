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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>
<div class="page">
        <span class="menu_toggle">
            <i class="menu_open fa fa-bars fa-lg"></i>
            <i class="menu_close fa fa-times fa-lg"></i>
        </span>

    <ul class="menu_items">
        <li><a href="/"><i class="fa fa-home fa-2x">
                </i>
                Главная
            </a>
        </li>

        <li><a href="{{ route('post.create') }}"><i class="fa fa-heart fa-2x">
                </i>
                Создать пост
            </a>
        </li>

        <li>
            <form class="fa fa-search fa-2x" aria-hidden="true" action="{{ route('post.index') }}">
                <input type="search" name="search" placeholder="Поиск..." class="search" aria-label="Search">
            </form>
        </li>
    </ul>

    <main class="content">
<div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @yield('content')
</div>
    </main>

    <script>
        $page = $('.page');
        $('.menu_toggle').on('click', function () {
            $page.toggleClass('real');
        });

        $('.content').on('click', function () {
            $page.removeClass('real');
        });
    </script>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
