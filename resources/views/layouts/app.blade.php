@extends('layouts.base')

@section('body')

    <div class="text-center py-2 border-b">
        <h1>App.blade.php</h1>
        <div class="flex items-center space-x-2 justify-center">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn-link">Logout</button>
            </form>    
        </div>
    </div>

    <div class="text-center py-2 mb-2 border-b">
        <h2>Auth: {{ auth()->user()->email }}</h2>
    </div>
    
    <div class="max-w-3xl mx-auto">
        @yield('content')
    </div>
    
@endsection