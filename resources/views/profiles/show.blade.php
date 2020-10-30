<x-app>
    <header class="mb-6 relative">

        <div class="relative">
            <img 
                src="/img/bg.jpg" 
                alt=""
                class="rounded-3xl mb-2"
            >

            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="{{ auth()->user()->email }}"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left:50%"
                width="150px"
            />
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                {{-- @if(current_user()->is($user))
                    <form method="GET" action="{{ $user->path('edit') }}">
                        @csrf
                        <button type="submit" class="rounded-full border border-gray-500 py-2 px-4 text-xs text-blue-500">
                                Edit Profile
                            </button>
                    </form>
                @endif --}}

                @can('edit', $user)
                    <form method="GET" action="{{ $user->path('edit') }}">
                        @csrf
                        <button type="submit" class="rounded-full border border-gray-500 py-2 px-4 text-xs text-blue-500">
                                Edit Profile
                            </button>
                    </form>
                @endcan
               
                <x-follow-form :user="$user"></x-follow-form>
               
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio ipsam, aut sed impedit consequatur quibusdam, tempore dolorem aperiam enim, esse maiores sit consequuntur eum ipsum autem alias culpa! Sequi!
        </p>
        
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
