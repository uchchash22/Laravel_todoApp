@extends('layout')

@section('content')
    <form action="{{route('todo.saveupdate',['id'=>$todo->id])}}" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <input type="Text" id="todo" class="form-control col-lg-12" name="todo" value="{{$todo->todo}}">
        </div>
    </form>
    <br>
    <br>
    <br>

@stop