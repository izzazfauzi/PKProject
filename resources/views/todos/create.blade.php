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
            <input class="mx-1 mb-2 py-2 px-2 w-75 border" type="text" name="title" placeholder="Title"/>
            <textarea class="mx-1 mb-3 py-2 px-2 h-100 w-75 border" type="text" name="description" placeholder="Description"></textarea>
            <div class="flex justify-content-between pb-2">
                <h1 class="text-md mx-20 py-1 mr-2">Add step(s) if required</h1>
                <span class="fas fa-plus cursor-pointer text-secondary mx-20 pt-1 w-auto text-md"></span>
            </div>
            @livewire('counter')
            <input class="mx-1 mb-3 py-2 px-2 w-75 border" type="text" name="step" placeholder="Describe Step"/>
            <input class="mx-1 py-2 w-25 border rounded bg-white" type="submit" value="create"/>
        </div>
    </form>
@endsection

