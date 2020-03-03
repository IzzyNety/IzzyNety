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

        <li><a href="/"><i class="fa fa-heart fa-2x">
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

                    <div class="card">
                        <div class="imgBox">
                            <img src="css/img/default.png">
                        </div>
                        <div class="contentBox">
                            <div class="content2">
                                <h2>{{ $post->short_title }}</h2>
                                <p> Автор : {{ $post->name }}</p>
                                <p>{{ $post->descr }}</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>

                       {{-- <div class="col-6">
                            <div class="card">
                                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                                <div class="card-body">
                                    <div class="card-author"> Автор : {{ $post->name }}</div>
                                    <div class="card-body">{{ $post->descr }}</div>
                                    <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>
                                </div>
                            </div>
                        </div>--}}
                    @endforeach
                </div>

                @if(!isset($_GET['search']))
                    {{ $posts->links() }}
                @endif
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

</body>
</html>
