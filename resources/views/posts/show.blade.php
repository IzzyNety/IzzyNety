@extends('layouts.layout')

@section('content')
         <div class="row">
                    <div class="col-12">
                        <div class="imgBox">
                            <img src={{ $post->img ?? asset('css/img/default.png')}}>
                        </div>
                        <div class="contentBox">
                            <div class="content2">
                                <h2>{{ $post->title }}</h2>
                                <p> Автор : {{ $post->name }}</p>
                                <p>{{ $post->descr }}</p>
                                <p> Пост создан : {{ $post->created_at->diffForHumans() }}</p>
                                <a href="{{ route('post.index') }}">На главную</a>
                            </div>
                        </div>
                    </div>
         </div>
@endsection
