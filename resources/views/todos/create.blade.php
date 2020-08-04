@extends('todos.layout')

@section('content')
    <h5 class="text-2xl pb-1">Create To-Do</h5>
    <form class="py-5 w-25 m-auto border" action="/todos/create" method="post">
        @csrf
        <input class="py-2 border" type="text" name="title"/>
        <input class="p-2 border rounded" type="submit" value="create"/>
        <x-alert/>
    </form>
@endsection

