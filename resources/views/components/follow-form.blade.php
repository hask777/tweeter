{{-- @if(current_user()->isNot($user))
<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs ml-2">
        {{ auth()->user()->following($user) ? 'Unfollow me' : 'Follow me '}}
        </button>
</form>
@endif --}}

@unless (current_user()->is($user))
<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs ml-2">
        {{ auth()->user()->following($user) ? 'Unfollow me' : 'Follow me '}}
        </button>
</form>
@endunless