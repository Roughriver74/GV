@extends('layouts.app')

@section('page-title')
    Создание новой статьи
@endsection

@section('content')
    <h1> Создание новой статьи
    </h1>

    {!! Form::open(['url' => 'article', 'class' => 'form-group']) !!}


    @csrf
    <div class="mb-3">
        {{ Form::label('title', 'Название Статьи') }}
        {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Введите заголовок']) !!}

    </div>

    <div class="mb-3">
        {{ Form::label('text', 'Статья') }}
        {!! Form::textarea('text', '', ['id' => 'app-ckeditor', 'placeholder' => 'Введите статью']) !!}

    </div>

    {!! Form::select('visible', ['1' => 'Видно', '0' => 'Скрыть'], null, ['placeholder' => 'Выбери видимость']) !!}
    {!! Form::submit('Добавить', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection
