@extends('app')

@section('page-title')
    {{ $title }}
@endsection

@section('content')
    <h1>Про нас</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit possimus ducimus iste enim natus, placeat dolores
        perferendis voluptates! Saepe voluptatibus autem animi ex quisquam architecto repellat beatae odit quam vero!</p>

    @if (count($params) > 0)
        <ul class="list-group">
            @foreach ($params as $v)
                <li class="list-group-item"> {{ $v }} </li>
            @endforeach
        </ul>
    @endif
@endsection
