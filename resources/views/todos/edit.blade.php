@extends('todos.layout')

@section('content')
    <div class="flex justify-content-between border-bottom pb-3">
        <h1 class="text-2xl px-4 py-1 mr-2">Update To-Do</h1>
        <a href="{{route('todo.index')}}" class="px-4 text-2xl">
            <span class="fas fa-arrow-left text-secondary"/>
        </a>
    </div>
    <x-alert/>
    <form class="pt-4 m-auto" action="{{route('todo.update', $todo->id)}}" method="post">
        @csrf
        @method('patch')
        <div>
            <input class="py-2 px-2 mx-1 w-50 border rounded" type="text" name="title" value="{{$todo->title}}"/>
            <input class="py-2 mx-1 w-25 border rounded-sm" type="submit" value="update"/>
        </div>
    </form>

@endsection
