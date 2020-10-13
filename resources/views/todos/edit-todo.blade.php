@extends('layouts.master')

@section('title')
    Create Todo
@endsection


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{route("todos")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label> Todo</label>
                        <input type="text " name="todo" >
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary" type="submit" > Create </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
