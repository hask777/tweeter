<x-app>

    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf 

        @method('PATCH')

        <div class="mb-6">
            <label 
                for="name" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Name
            </label>

            <input 
                type="text" 
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                value="{{$user->name}}"
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- Username --}}
        <div class="mb-6">
            <label 
                for="username" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                username
            </label>

            <input 
                type="text" 
                class="border border-gray-400 p-2 w-full"
                name="username"
                id="username"
                value="{{$user->username}}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- Avatar --}}
        <div class="mb-6">

            <label 
                for="avatar" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                avatar
            </label>

            <div class="flex">

                <input 
                    type="file" 
                    class="border border-gray-400 p-2 w-full"
                    name="avatar"
                    id="avatar"
                    {{-- value="{{$user->avatar}}" --}}
                >

                <img src="{{ $user->avatar }}" alt="avatar" width="150px">

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror

            </div>
                     
        </div>

        {{-- Email --}}
        <div class="mb-6">
            <label 
                for="email" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                email
            </label>

            <input 
                type="email" 
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                value="{{$user->email}}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-6">
            <label 
                for="password" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                password
            </label>

            <input 
                type="password" 
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- Confirm Password --}}
        <div class="mb-6">
            <label 
                for="password_confirmation" 
                class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Confirm password
            </label>

            <input 
                type="password" 
                class="border border-gray-400 p-2 w-full"
                name="password_confirmation"
                id="password_confirmation"
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Edit
            </button>

            <a href="{{ $user->path() }}" class="ml-3 hover:underline">Cancel</a>
        </div>

    </form>

</x-app>