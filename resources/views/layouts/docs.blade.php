@extends('layouts.base')

@section('body')

    <div class="flex w-full h-screen">
        
        <div class="flex justify-end w-4/12 p-10 topo-bg bg-size-50">
            <nav class="w-72">

                <!-- Logo Header -->
                <div class="mb-10">
                    <a href="{{ route('welcome') }}" class="font-serif text-5xl font-semibold text-yellow-200 hover:text-yellow-200 hover:no-underline">
                        Oak
                    </a>
                </div>

                <ul>
                    <li class="inverted-links">
                        <a href="#">Introduction</a>
                    </li>
                </ul>

            </nav>
        </div>
        
        <div class="flex-1 flex-grow p-10">
            <div class="max-w-3xl mx-auto prose prose-lg">
                @yield('content')
            </div>
        </div>

    </div>   

@endsection