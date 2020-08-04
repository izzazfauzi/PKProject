<div>
    @if(session()->has('message'))
        {{$slot}}
        <div class="py-2 px-2 mt-2 bg-success">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
        {{$slot}}
        <div class="py-2 px-2 mt-2 bg-danger">{{session()->get('error')}}</div>
    @endif
</div>
