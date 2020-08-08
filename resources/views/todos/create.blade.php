@extends('todos.layout')

@section('content')
    <div class="flex justify-content-between border-bottom pb-3">
        <h1 class="text-2xl px-4 py-1 mr-2">Create To-Do</h1>
        <a href="{{route('todo.index')}}" class="px-4 text-2xl">
            <span class="fas fa-arrow-left text-secondary"/>
        </a>
    </div>
    <x-alert/>
    <form class="pt-4 m-auto" action="{{route('todo.store')}}" method="post">
        @csrf
        <div>
            <input class="mx-1 py-2 px-2 w-50 border" type="text" name="title"/>
            <input class="mx-1 py-2 w-25 border rounded" type="submit" value="create"/>
        </div>
    </form>
@endsection

