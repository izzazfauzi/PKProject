@extends('todos.layout')

@section('content')
    <div class="flex justify-content-between border-bottom pb-3">
        <h1 class="text-2xl px-4 py-1 mr-2">{{$todo->title}}</h1>
        <a href="{{route('todo.index')}}" class="px-4 text-2xl">
            <span class="fas fa-arrow-left text-secondary"/>
        </a>
    </div>
    <x-alert/>
    <div class="flex justify-content-between p-4">
        <p>{{$todo->description}}</p>
    </div>

    @if($todo->steps->count() > 0)
        <div class="flex-row p-4">
            <h3 class="flex justify-content-start">Step(s) for this task</h3>

            @foreach($todo->steps as $step)
                <p class="flex justify-content-start">{{$step->name}}</p>
            @endforeach

        </div>
    @endif
@endsection
