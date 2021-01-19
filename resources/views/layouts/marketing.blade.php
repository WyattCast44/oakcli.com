@extends('layouts.base')

@section('body')

    <header class="pt-5 bg-green-800 topo-bg">

        <div class="flex flex-col items-center justify-between max-w-4xl mx-auto md:flex-row">
            
            <a href="/" class="flex items-center pr-2 font-serif text-4xl font-semibold text-yellow-200 rounded outline-none stroke-0 hover:text-yellow-200 hover:no-underline focus:ring-yellow-100 focus:ring-1">
                <x-icon-tree class="w-16 h-16 stroke-current" /> 
                <div class="flex flex-col">
                    <p>Oak</p>
                    <p class="text-sm">python cli framework</p>
                </div>
            </a>

            <nav class="flex items-center mt-5 space-x-3 font-serif text-xl font-semibold">

                <a href="{{ route('docs.index') }}" class="px-5 py-3 text-yellow-200 rounded outline-none hover:no-underline hover:text-yellow-200 hover:bg-green-700 focus:ring-yellow-100 focus:ring-1 focus:bg-green-700 hover:bg-opacity-75">
                    Docs
                </a>
                
                <a href="#" class="px-5 py-3 text-yellow-200 rounded outline-none hover:no-underline hover:text-yellow-200 hover:bg-green-700 focus:ring-yellow-100 focus:ring-1 focus:bg-green-700 hover:bg-opacity-75">
                    Cookbook
                </a>
                
            </nav>

        </div>

        <h3 class="max-w-4xl mx-4 my-8 font-serif text-3xl tracking-tight text-yellow-200 md:my-16 md:mx-auto md:text-5xl">
            Much like the tree, Oak is durable, beautiful and elegant. It is the perfect tool to build your next CLI app.
        </h3>

        <div class="max-w-4xl pb-12 mx-auto">
            
            <div class="flex items-center justify-center space-x-3">
                
                <a href="{{ config('social.github') }}" class="px-5 py-3 text-yellow-200 border border-yellow-100 rounded outline-none hover:no-underline hover:text-yellow-200 hover:bg-green-700 focus:ring-yellow-100 focus:ring-1 focus:bg-green-700 hover:bg-opacity-75">
                    Get Started <x-icon-arrow-right class="w-5 h-5 ml-1" />
                </a>

                <a href="{{ config('social.github') }}" class="px-5 py-3 text-yellow-200 border border-yellow-100 rounded outline-none hover:no-underline hover:text-yellow-200 hover:bg-green-700 focus:ring-yellow-100 focus:ring-1 focus:bg-green-700 hover:bg-opacity-75">
                    View Source <x-icon-github class="w-5 h-5 ml-1" />
                </a>

            </div>

        </div>

    </header>
        
    <div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-6xl lg:px-8">
        @yield('content')
    </div>

    <footer class="bg-green-700 topo-bg">
        <div
             class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
    
                <a href="#"
                   class="text-yellow-200 hover:text-yellow-300">
                    <span class="sr-only">GitHub</span>
                    <x-icon-github class="w-5 h-5" />
                </a>
    
                <a href="#"
                   class="text-yellow-200 hover:text-yellow-300">
                    <span class="sr-only">Twitter</span>
                    <x-icon-twitter class="w-5 h-5" />
                </a>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-base text-center text-yellow-200">
                    &copy; 2021 Python Oak CLI, All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    
@endsection