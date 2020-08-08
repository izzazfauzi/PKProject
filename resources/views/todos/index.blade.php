@extends('todos.layout')

@section('content')
    <div class="flex justify-content-between border-bottom pb-3">
        <h1 class="text-2xl px-4 py-1 mr-2">To-Do List</h1>
        <a href="{{route('todo.create')}}" class="px-4 text-2xl"><span class="fas fa-plus-circle text-primary"/>
        </a>
    </div>
    <ul class="my-3">
        <x-alert/>
        @forelse($todos as $todo)
            <li class="text-xl py-2 px-3 flex justify-content-md-between">
                <div>
                    @include('todos.complete-button')
                </div>
                @if($todo->completed)
                    <a class="line-through w-2/3 cursor-pointer" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
                @else
                    <a class="w-2/3 cursor-pointer" href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
                @endif
                <div>
                    <a href="{{route('todo.edit', $todo->id)}}" class="py-1 px-1 mx-2 cursor-pointer text-orange-400"><span class="fas fa-edit px-2"/>
                    </a>
                    <span class="fas fa-trash text-red-500 cursor-pointer" onclick="event.preventDefault();
                        if (confirm('Delete this task?')) {
                        document.getElementById('form-delete-{{$todo->id}}').submit()
                        }"/>
                    <form style="display: none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.destroy', $todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @empty
            <p>No task available, create one.</p>
        @endforelse
    </ul>
@endsection
