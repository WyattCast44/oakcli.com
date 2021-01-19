@extends('layouts.marketing')

@section('content')
    
<div class="py-16">
    
    <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
        <div>
            <div
                    class="flex items-center justify-center w-12 h-12 text-white bg-green-800 rounded-md">
                <x-icon-lightning class="w-6 h-6" />
            </div>
            <div class="mt-5">
                <dt class="text-lg font-medium leading-6 text-green-900">
                    Zero External Dependencies
                </dt>
                <dd class="mt-2 text-base text-green-700">
                    The core library has zero external dependencies to keep things simple, 
                    fast and flexible.
                </dd>
            </div>
        </div>

        <div>
            <div
                    class="flex items-center justify-center w-12 h-12 text-white bg-green-800 rounded-md">
                <x-icon-plugin class="w-6 h-6" />
            </div>
            <div class="mt-5">
                <dt class="text-lg font-medium leading-6 text-green-900">
                    Robust Plugin Library
                </dt>
                <dd class="mt-2 text-base text-green-700">
                    Add official or community plugins to your app to supercharge the functionality.
                </dd>
            </div>
        </div>

        <div>
            <div
                    class="flex items-center justify-center w-12 h-12 text-white bg-green-800 rounded-md">
                <x-icon-academic class="w-6 h-6" />
            </div>
            <div class="mt-5">
                <dt class="text-lg font-medium leading-6 text-green-900">
                    Extensive Documentation
                </dt>
                <dd class="mt-2 text-base text-green-700">
                    Oak has extensive documentation and learning materials for both new and advanced
                    users.
                </dd>
            </div>
        </div>
    </dl>
    
</div>

@endsection