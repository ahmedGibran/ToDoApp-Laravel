@extends('layouts.master')


 @section('title')
     Single Todo
 @endsection


 @section('content')
  <p>{{$todo->content}}</p>
 @endsection
