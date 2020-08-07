@extends('todos.layout')

@section('content')
    <div class="flex justify-center border-bottom pb-3">
        <h1 class="text-2xl pb-1 mr-2">To-Do List</h1>
        <a href="/todos/create">
            <button class="py-1 px-1 bg-primary rounded-sm text-white">New Todo</button>
        </a>
    </div>
    <ul class="my-3">
        <x-alert/>
        @foreach($todos as $todo)
            <li class="text-xl py-2 px-3 flex justify-content-md-between">
                @if($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>
                @else
                    <p>{{$todo->title}}</p>
                @endif
                <div>
                    <a href="{{'/todos/'.$todo->id.'/edit'}}" class="py-1 px-1 mx-2 cursor-pointer text-orange-400"><span class="fas fa-edit px-2"/>
                    </a>
                    @if($todo->completed)
                        <span class="fas fa-check py-2 px-2 text-green-500 cursor-pointer"/>
                    @else
                        <span onclick="event.preventDefault(); console.log('hello')" class="fas fa-check py-2 px-2 text-gray-400 cursor-pointer"/>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection
