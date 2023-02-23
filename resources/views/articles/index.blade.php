@extends('layouts.app')

@section('page-title')
    Все стартьи на сайте
@endsection

@section('content')
    <h1>Все статьи на сайте</h1>
    @if (count($articles) > 0)
        @foreach ($articles as $v)
            <div class="well">
                <a href="/article/{{ $v->id }}">
                    <h3> {{ $v->title }} </h3>
                </a>
                <p>Последнее обновление: {{ $v->updated_at }} </p>
            </div>
        @endforeach
        <div class="nav">

            {{ $articles->links() }}
        </div>
    @else
        <p>На данный момент статей нет</p>
    @endif
@endsection
