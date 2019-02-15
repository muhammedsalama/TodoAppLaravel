@extends('welcome')

@section('content')
    <h3 class="title">Todo {{$id}}</h3>
    <hr>
        <p>{{$todo->todo}}</p>
    <hr>
@endsection
