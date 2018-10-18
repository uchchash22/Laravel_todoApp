@extends('layout')

@section('content')
    <form action="/todos/create" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <input type="Text" id="todo" class="form-control col-lg-12" name="todo"  placeholder="Create your new todo">
        </div>
    </form>
    <br>
    <br>
    <br>
    <h2 style="background-color: #2ab27b"><b>Here is your TODO list</b></h2>
    <hr>
    @foreach($todo as $todos)
        {{$todos->todo}}
        <a href="{{route('todo.delete',['id'=>$todos->id])}}" class="btn btn-danger">X</a>
        <a href="{{route('todo.update',['id'=>$todos->id])}}" class="btn btn-primary">Update</a>
        @if($todos->completed)
            <label>Comepleted!!!</label>
        @else
            <a href="{{route('todo.complete',['id'=>$todos->id])}}" class="btn btn-success">Mark as completed</a>
        @endif

        <hr>
    @endforeach
@stop