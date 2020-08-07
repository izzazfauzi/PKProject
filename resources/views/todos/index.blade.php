@extends('todos.layout')

@section('content')
    <div class="flex justify-center border-bottom pb-3">
        <h1 class="text-2xl pb-1 mr-2">To-Do List</h1>
        <a href="/todos/create">
            <button class="py-1 px-1 bg-primary rounded-sm text-white">New Todo</button>
        </a>
    </div>
    <ul class="my-3">
        <x-alert/>
        @foreach($todos as $todo)
            <li class="py-2 flex justify-content-md-center">
                <p>{{$todo->title}}</p>
                <a href="{{'/todos/'.$todo->id.'/edit'}}">
                    <button class="py-1 px-1 mx-4 bg-success rounded-sm text-white">Edit</button>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
