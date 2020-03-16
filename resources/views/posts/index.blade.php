@extends('layouts.layout')

@section('content')
                @if(isset($_GET['search']))
                    @if(count($posts)>0)
                        <h2>Результаты поиска по запросу: "<?=$_GET['search']?>"  Всего найдено {{ count($posts) }} постов </h2>
                        @else
                        <h2>По запросу "<?=$_GET['search']?>" ничего не найдено </h2>
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
                                <a href="#">Читать далее</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

                @if(!isset($_GET['search']))
                    {{ $posts->links() }}
                @endif

@endsection
