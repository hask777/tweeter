{{-- @extends('layouts.app')

@section('content')

    
    @include('_publish-tweet')

    @include('_timeline')

@endsection --}}

{{-- 
@component('components.app')
    <div>
        @include('_publish-tweet')

        @include('_timeline')
    </div>
@endcomponent --}}


<x-app>
    <div>
        @include('_publish-tweet')

        @include('_timeline')
    </div>
</x-app>
