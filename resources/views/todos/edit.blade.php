@extends('todos.layout')

@section('content')
    <h1 class="text-2xl border-bottom pb-3">Update To-Do</h1>
    <x-alert/>
    <form class="pt-4 m-auto" action="{{route('todo.update', $todo->id)}}" method="post">
        @csrf
        @method('patch')
        <div>
            <input class="py-2 px-1 w-50 border rounded" type="text" name="title" value="{{$todo->title}}"/>
            <input class="py-2 px-1 w-25 border rounded-sm" type="submit" value="update"/>
        </div>
        <a href="/todos">
            <button type="button" class="py-1 px-2 mt-2 bg-secondary rounded-sm text-white">back</button>
        </a>
    </form>

@endsection
