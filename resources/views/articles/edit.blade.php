@extends('layouts.app')

@section('page-title')
    Обновление статьи
@endsection

@section('content')
    <h1> Обновление статьи
    </h1>

    {!! Form::open(['route' => ['article.update', $article->id], 'class' => 'form-group']) !!}


    @csrf
    <div class="mb-3">
        {{ Form::label('title', 'Название Статьи') }}
        {!! Form::text('title', $article->title, [
            'class' => 'form-control',
            'placeholder' => 'Введите заголовок',
        ]) !!}

    </div>

    <div class="mb-3">
        {{ Form::label('text', 'Статья') }}
        {!! Form::textarea('text', $article->text, ['id' => 'app-ckeditor', 'placeholder' => 'Введите статью']) !!}

    </div>
    {!! Form::select('visible', ['1' => 'Видно', '0' => 'Скрыть'], $article->visible, [
        'placeholder' => 'Выбери видиомость',
    ]) !!}
    {!! Form::hidden('_method', 'PUT') !!}
    <br>
    {!! Form::submit('Обновить', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection
