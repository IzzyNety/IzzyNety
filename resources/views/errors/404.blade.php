@extends('layouts.layout', ['title' => "404 ошибка. Вы попали не туда"] )

@section('content')
    <div class="card">
        <h2>Ты зашел не в туда</h2>
        <img src="{{ asset('img/404.jpg') }}" alt="404">
    </div>

    <a href="/" class="btn btn-outline-primary">Постараться вернуться на главную</a>
@endsection
