<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $email = '';

    public $emailSent = false;

    public function attempt()
    {
        $this->emailSent = false;

        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        $status = Password::sendResetLink([
            'email' => $this->email
        ]);

        if ($status === Password::RESET_LINK_SENT) {
            $this->emailSent = true;

            return;
        }

        $this->addError('email', trans($status));
    }
    public function render()
    {
        return view('auth.forgot-password')
            ->extends('layouts.auth')
            ->section('content');
    }
}
