@extends('layouts.master')


@section('title')
    Todos List
@endsection


@section('content')
    <ul>
        @foreach($todos as $todo)
            <li><a href="{{route('todo',['todo'=>$todo->id])}}">{{$todo->content}}</a></li>
        @endforeach

    </ul>
@endsection

