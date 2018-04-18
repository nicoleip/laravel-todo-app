
@extends('layout')

@section('content')

<div class="row">
     <div class="col-lg-12 col-lg-offset-3">

 <form action="/create/todo" method="post">
 {{ csrf_field() }}
     <input type="text" class="form-control input-lg-12 " name="todo" placeholder="Create a new todo">

</form>
     </div>
    </div>

                @foreach($todos as $todo)
                {{ $todo->todo }}
                 <span class="float-right"><a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">x</a></span>
                 <span class="float-right"><a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info">Update</a></span>
                
                 @if(!$todo->completed)
                 <span class="float-right"><a href="{{ route('todos.completed', ['id' => $todo->id ]) }}" class="btn btn-success">Mark as completed</a></span>

                 @else
                 <span class="text-success float-right">Completed!</span>

                 @endif
                 <hr>
                 @endforeach


@stop
