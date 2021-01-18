@extends('layouts.app')

@section('content')
    
    <p>You are logged in!</p>

    <div class="relative flex items-center justify-center max-w-2xl mx-auto select-none" style="top:50px">

        <x-ui.terminal title="app.py">

            <pre>from oak import Application

Application({
'name': 'Oak CLI App',
'version': '0.1.0',
}).run()</pre>

        </x-ui.terminal>

    </div>

@endsection