@extends('todos.layout')

@section('content')
    <div class="flex justify-center border-bottom pb-3">
        <h1 class="text-2xl py-1 mr-2 w-2/3">To-Do List</h1>
        <a href="/todos/create" class="px-3 text-2xl"><span class="fas fa-plus-circle text-primary"/>
        </a>
    </div>
    <ul class="my-3">
        <x-alert/>
        @foreach($todos as $todo)
            <li class="text-xl py-2 px-3 flex justify-content-md-between">
                <div>
                    @include('todos.complete-button')
                </div>
                @if($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>
                @else
                    <p>{{$todo->title}}</p>
                @endif
                <div>
                    <a href="{{'/todos/'.$todo->id.'/edit'}}" class="py-1 px-1 mx-2 cursor-pointer text-orange-400"><span class="fas fa-edit px-2"/>
                    </a>
                    <span class="fas fa-trash text-red-500 cursor-pointer" onclick="event.preventDefault();
                        if (confirm('Delete this task?')) {
                        document.getElementById('form-delete-{{$todo->id}}').submit()
                        }"/>
                    <form style="display: none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.delete', $todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
