
@extends('layout')

@section('page-title')

<h1>My Todos</h1>

@stop

@section('content')

<div class="row">
     <div class="col-lg-12 col-lg-offset-3">

 <form action="/create/todo" method="post">
 {{ csrf_field() }}
     <input type="text" class="form-control input-lg-12 mb-4" name="todo" placeholder="Create a new todo">

</form>
     </div>
    </div>

                @foreach($todos as $todo)
              
                {{ $todo->todo }}
                 <span class="float-right"><a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger ml-1">x</a></span>
                 <span class="float-right"><a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info ml-1">Update</a></span>
                
                 @if(!$todo->completed)
                 <span class="float-right"><a href="{{ route('todos.completed', ['id' => $todo->id ]) }}" class="btn btn-success ml-1">Mark as completed</a></span>

                 @else
                 <span class="text-success float-right ml-1">Completed!</span>

                 @endif
                 <hr>
                
                 @endforeach
                

@stop
