@extends('welcome')

@section('content')


    {!! Form::open(['action'=>'TodoController@store','method'=>'POST']) !!}
    <div class="form-group" style="margin-top: 20px">
        {!! Form::label('title','Create Todo') !!}
        {!! Form::text('todo',null,['class'=>'form-control input-lg','placeholder'=>'Enter Todo...'])!!}
    </div>
    {!! Form::submit('Create Todo',['class'=>'btn btn-dark']) !!}

    {!! Form::close() !!}
    <h3 class="title" style="margin-top: 20px">Todos</h3>
    <ol>
        @foreach($todos as $todo)
            <li>{{$todo->todo}}</li>

                {!! Form::model($todo,['method'=>'DELETE','action'=>['TodoController@destroy',$todo->id]]) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
                <a style="padding: " class="btn btn-info" href="{{route('todos.edit',$todo->id)}}">Edit</a>

            <hr>
        @endforeach
    </ol>
@endsection
