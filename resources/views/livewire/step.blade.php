<div>
    <div class="flex justify-content-center">
        <div class="flex justify-content-between mb-2 w-75">
            <div class="flex justify-content-start">
                <h1 class="text-md mb-3 py-2 px-2 w-100">Add step(s) if required</h1>
            </div>
            <span wire:click="increments" class="fas fa-plus cursor-pointer text-success px-3 pt-2 w-auto text-md"></span>
        </div>
    </div>
    @for($i = 0; $i < $steps; $i++)
        <div class="flex justify-content-center">
            <div class="flex justify-content-between w-75">
                <input class="mb-3 py-2 px-2 w-100 border" type="text" name="step{{$i + 1}}" placeholder="Describe Step {{$i + 1}}"/>
                <span wire:click="decrements" class="fas fa-times cursor-pointer text-danger border-bottom border-right border-top rounded-right mb-3 px-3 py-3"></span>
            </div>
        </div>
    @endfor
</div>
