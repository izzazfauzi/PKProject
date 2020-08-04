@extends('todos.layout')

@section('content')
    <h1 class="text-2xl pb-1">Update To-Do</h1>
    <form class="py-3 w-25 m-auto border" action="{{route('todo.update', $todo->id)}}" method="post">
        @csrf
        @method('patch')
        <input class="py-1 px-1 border rounded" type="text" name="title" value="{{$todo->title}}"/>
        <input class="py-1 px-1 w-25 border rounded-sm" type="submit" value="update"/>
        <a href="/todos">
            <button type="button" class="py-1 px-1 mt-2 w-25 bg-secondary rounded-sm text-white">back</button>
        </a>
        <x-alert/>
    </form>

@endsection
