<div>
    <div class="flex justify-content-center">
        <div class="flex justify-content-between mb-2 w-75">
            <div class="flex justify-content-start">
                <h1 class="text-md mb-3 py-2 px-2 w-100">Add step(s) if required</h1>
            </div>
            <span wire:click="increments" class="fas fa-plus cursor-pointer text-success px-3 pt-2 w-auto text-md"></span>
        </div>
    </div>
    @foreach($steps as $step)
        <div class="flex justify-content-center" wire:key="{{$loop->index}}">
            <div class="flex justify-content-between w-75">
                <input class="mb-3 py-2 px-2 w-100 border" type="text" name="stepName[]" placeholder="Describe Step {{$loop->index + 1}}" value="{{$step['name']}}"/>
                <input type="hidden" name="stepId[]" value="{{$step['id']}}"/>
                <span wire:click="decrements({{$loop->index}})" class="fas fa-times cursor-pointer text-danger border-bottom border-right border-top rounded-right mb-3 px-3 py-3"></span>
            </div>
        </div>
    @endforeach
</div>
