<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="post" action="{{ route('home') }}">
        @csrf
        <textarea 
            type="text"
            name="body" 
            id="" 
            class="w-full"
            placeholder="What`s up doc!"
            required
        >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img 
                src="{{ auth()->user()->avatar}}" 
                alt="{{ auth()->user()->email }}"
                class="rounded-full mr-2"
                style="width:40px; height:40px;"
            />
            <button  type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
                Tweet a roo!
            </button>
        </footer>

        
    </form>

    @error('body')
        <p class="text-red-500  text-sm mt-2">{{ $message }}</p>
    @enderror
</div>