<div class="w-full border-4 border-gray-400 border-solid rounded-lg shadow-md">

    <div class="relative flex items-center px-3 py-1 leading-none bg-gray-300 border-b border-gray-400 border-solid rounded-t select-none">
        
        <span class="w-3 h-3 mr-1 bg-red-400 rounded-full shadow-inner"></span>
        <span class="w-3 h-3 mr-1 bg-yellow-300 rounded-full shadow-inner"></span>
        <span class="w-3 h-3 bg-green-300 rounded-full shadow-inner"></span>

        <div class="absolute inset-0 text-center">
            <p class="font-mono text-sm text-gray-600">{{ $title }}</p>
        </div>
    </div>

    <div class="p-6 mx-auto font-mono text-green-300 bg-gray-700 rounded-b">
        {{ $slot }}
    </div>
</div>