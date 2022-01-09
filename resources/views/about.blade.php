@extends('layout')

@section('title')Страница про нас@endsection


@section('main_content')
    <div class="jumbotron bg-warning">
        <h1>Страница про нас</h1>
        <p class="lead"> Текст про нас </p>
        <a class="btn btn-lg btn-danger" href="/review" role="button"> Отзывы >> </a>
    </div>
@endsection