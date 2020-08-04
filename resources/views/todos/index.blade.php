@extends('todos.layout')

@section('content')
    <h5 class="text-2xl pb-1">To-Do List</h5>
    <ul>
        @foreach($todos as $todo)
            <li>
                {{$todo->title}}
            </li>
        @endforeach
    </ul>
@endsection
