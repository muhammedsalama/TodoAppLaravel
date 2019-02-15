@extends('welcome')

@section('content')
    <h1 class="title" style="margin-bottom:15px "> Edit Todo</h1>


    {!! Form::model($todo,['method'=>'PATCH','action'=>['TodoController@update',$todo->id]]) !!}
    <div class="form-group">
            {!! Form::text('todo',null,['class'=>'form-control input-lg','value'=>$todo->todo])!!}
        </div>
    {!! Form::submit('Edit',['class'=>'btn btn-info','style'=>'padding:6px 20px']) !!}
    {!! Form::close() !!}

@stop