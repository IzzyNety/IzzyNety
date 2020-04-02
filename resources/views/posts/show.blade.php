@extends('layouts.layout', ['title' => "Пост № $post->post_id. $post->title"])

@section('content')
         <div class="row">
                    <div class="col-12">
                        <div class="imgBox">
                            <h2>{{ $post->title }}</h2>
                            <img src={{ $post->img ?? asset('css/img/default.png')}}>
                        </div>
                        <div class="contentBox">
                            <div class="content2">

                                <p>Описание: {{ $post->descr }}</p>
                                <p> Автор : {{ $post->name }}</p>
                                <p> Пост создан : {{ $post->created_at->diffForHumans() }}</p>
                                <div class="card-btn">
                                    <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                                    <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Редактировать</a>
                                    <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post" onsubmit="if (confirm('Точно удалить пост?')) { return true } else { return false }">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-outline-danger" value="Удалить">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
         </div>
@endsection
