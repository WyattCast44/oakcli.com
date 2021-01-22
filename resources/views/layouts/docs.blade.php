@extends('layouts.base')

@section('body')

    <div class="py-2 text-center border-b">
        <h1>docs.blade.php</h1>
    </div>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>
    
@endsection