@extends('todos.layout')

@section('content')
    <h1 class="text-2xl border-bottom pb-3">Create To-Do</h1>
    <x-alert/>
    <form class="pt-4 m-auto" action="{{route('todo.store')}}" method="post">
        @csrf
        <div>
            <input class="py-2 w-50 border" type="text" name="title"/>
            <input class="p-2 w-25 border rounded" type="submit" value="create"/>
        </div>
        <a href="{{route('todo.index')}}">
            <button type="button" class="py-1 px-2 mt-2 bg-secondary rounded-sm text-white">back</button>
        </a>
    </form>
@endsection

