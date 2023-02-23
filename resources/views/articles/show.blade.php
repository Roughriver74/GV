@extends('app')

@section('page-title')
    Статья на сайте
@endsection

@section('content')
    <a href="/article" class="btn btn-warning">Назад</a> <br><br>

    <h1> {{ $article->title }} </h1>
    <div>
        <p> {!! $article->text !!}</p>
        <p>Дата Создания: {{ $article->created_at }} </p>
    </div>
    <hr>
    <a href="{{ $article->id }}/edit" class="btn btn-warning">Редактировать</a>
    {!! Form::open(['route' => ['article.destroy', $article->id], 'class' => 'form-group']) !!}
    {!! Form::hidden('_method', 'DELETE') !!}
    {!! Form::submit('Удалить запись', ['class' => 'btn btn-danger mt-3']) !!}
    {!! Form::close() !!}
@endsection
