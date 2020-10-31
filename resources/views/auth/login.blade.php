@component('components.master')
<div class="container  mx-auto flex justify-center">
    <div class="px-16 py-8 bg-gray-300 border-gray-400 rounded-lg">
        <div class="col-md-8">
            
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                                autocomplete="email"
                                value="{{old('email')}}"
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
                                autocomplete="current-password"
                            >

                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        {{-- remember --}}
                        <div class="mb-6">
                            
                
                            <input 
                                type="checkbox" 
                                class="mr-1"
                                name="remember"
                                id="remember" {{ old('remember') ? 'checked' : '' }}
                            >

                            <label 
                                for="remember" 
                                class="uppercase font-bold text-xs text-gray-700">
                                Remember
                            </label>
                
                            @error('remember')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                                Submit
                            </button>
                        </div>

                        <a href="{{ route('password.request')}}" class="text-xs text-gray-700">Forgot your password</a>
                    </form>
              
           
        </div>
    </div>
</div>
@endcomponent
