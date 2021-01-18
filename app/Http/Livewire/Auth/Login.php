<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login as EventsLogin;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = "";

    public $password = "";

    public function authenticate()
    {
        $this->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        $status = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ]);

        event(new Authenticated('web', User::where('email', $this->email)->first()));

        if ($status) {
            return redirect()->intended(route('dashboard'));
        }
    }

    public function render()
    {
        return view('auth.login')
            ->extends('layouts.auth')
            ->section('content');
    }
}
