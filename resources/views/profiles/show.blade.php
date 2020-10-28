@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">
        <div class="rounded">
            <img 
                src="/img/bg.jpg" 
                alt=""
                class="rounded-3xl mb-2"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans()}}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-500 py-2 px-4 text-xs text-blue-500">
                    Edit Profile
                </a>

                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs ml-2">
                    Folow Me
                </a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio ipsam, aut sed impedit consequatur quibusdam, tempore dolorem aperiam enim, esse maiores sit consequuntur eum ipsum autem alias culpa! Sequi!
        </p>

            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="{{ auth()->user()->email }}"
                class="rounded-full mr-2 absolute profile_img"
                style="width:150px; left:calc(50% - 75px); top: 50%;"
            />

           

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])

@endsection