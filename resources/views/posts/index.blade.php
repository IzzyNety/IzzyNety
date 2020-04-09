@extends('layouts.layout', ['title' => 'Главная страница'])

@section('content')
                @if(isset($_GET['search']))
                    @if(count($posts)>0)
                        <h2>Результаты поиска по запросу: "<?=htmlspecialchars($_GET['search'])?>"  Всего найдено {{ count($posts) }} постов </h2>
                        @else
                        <h2>По запросу "<?=htmlspecialchars($_GET['search'])?>" ничего не найдено </h2>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>
                    @endif
                @endif

                <div class="row">
                    @foreach($posts as $post)

                    <div class="card">
                        <div class="imgBox">
                            <img src={{ $post->img ?? asset('img/default.png')}}>
                        </div>
                        <div class="contentBox">
                            <div class="content2">
                                <h2>{{ $post->short_title }}</h2>
                                <p> Автор : {{ $post->name }}</p>
                                <p>{{ $post->short_descr }}</p>
                                <a href="{{ route('post.show', ['id' => $post-> post_id]) }}">Читать далее</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

                @if(!isset($_GET['search']))
                    {{ $posts->links() }}
                @endif

@endsection
