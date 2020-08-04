@extends('todos.layout')

@section('content')
    <h1 class="text-2xl pb-1">Create To-Do</h1>
    <form class="py-3 w-25 m-auto border" action="/todos/create" method="post">
        @csrf
        <input class="py-2 border" type="text" name="title"/>
        <input class="p-2 border rounded" type="submit" value="create"/>
        <a href="/todos">
            <button type="button" class="py-1 px-1 mt-2 w-25 bg-secondary rounded-sm text-white">back</button>
        </a>
        <x-alert/>
    </form>
@endsection

