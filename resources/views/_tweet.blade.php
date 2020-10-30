<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400'}}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path('profile') }}">
            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="{{ auth()->user()->email }}"
                class="rounded-full mr-2"
                style="width:40px; height:40px;"
            />
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">

            <a href="{{ $tweet->user->path() }}">{{$tweet->user->name}}</a>
            
        </h5>
        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>